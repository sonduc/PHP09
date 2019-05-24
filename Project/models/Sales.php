<?php 
include_once 'Model.php';
class Sales extends Model{
	public $table ='bill';
	public $primary_key ='id';

	public function findProduct($id){
		$query = "SELECT * FROM products WHERE ".$this->primary_key."=".$id;

		$result = $this->conn->query($query);

		
		return $result->fetch_assoc(); 
	}
	public function checkLogin($email){
		$query = "SELECT * FROM clients WHERE email ='".$email."'" ;


		$result = $this->conn->query($query);

		
		return $result; 
	}
	public function getAll(){
		$data = array();

		$query = "SELECT * FROM products ";

		$result = $this->conn->query($query);
		while ($row = $result->fetch_assoc()) {

			$data[] = $row;
		}
		return $data;
	}
	public function insertDetail_bill($data){

		$field ="";
		$values ="";
		foreach ($data as $key => $value) {
			$field .= $key.',';
			$values .= "'".$value."',";	
			//echo "<br> $query";			
		}
		$field = trim($field,',');
		$values = trim($values,',');
		$query = "INSERT INTO detail_bill (".$field.") VALUES (". $values ." )";

		return $this->conn->query($query);
	}
	public function insertBill($data2){
		$field ="";
		$values ="";
		foreach ($data2 as $key => $value) {
			$field .= $key.',';
			$values .= "'".$value."',";	
			//echo "<br> $query";			
		}
		$field = trim($field,',');
		$values = trim($values,',');
		$query = "INSERT INTO bill (".$field.") VALUES (". $values ." )";

		/*var_dump($query);
		die;*/
		return $this->conn->query($query);
	}
	public function getBill(){
		if(isset($_SESSION['client'])){

			$data = array();

			$query = "SELECT * FROM bill WHERE id_client = ".$_SESSION['client']['id'];

			$result = $this->conn->query($query);
			while ($row = $result->fetch_assoc()) {

				$data[] = $row;
			}
			return $data;		
		}else{
			return $data = null;
		}
	}
	public function send_email($email_recive,$name,$contents,$subject ){
//https://www.google.com/settings/security/lesssecureapps
// Khai báo thư viên phpmailer
		require "phpmailer/PHPMailerAutoload.php";
		require "phpmailer/class.phpmailer.php";
// Khai báo tạo PHPMailer
		$mail = new PHPMailer();
//Khai báo gửi mail bằng SMTP
		$mail->IsSMTP();
//Tắt mở kiểm tra lỗi trả về, chấp nhận các giá trị 0 1 2
// 0 = off không thông báo bất kì gì, tốt nhất nên dùng khi đã hoàn thành.
// 1 = Thông báo lỗi ở client
// 2 = Thông báo lỗi cả client và lỗi ở server
// To load the French version
		$mail->setLanguage('vi', '/optional/path/to/language/directory/');
		$mail->SMTPDebug  = 1;
		$mail->CharSet="UTF-8";
$mail->Debugoutput = "html"; // Lỗi trả về hiển thị với cấu trúc HTML
$mail->Host       = "smtp.gmail.com"; //host smtp để gửi mail
$mail->Port       = 587; // cổng để gửi mail
$mail->SMTPSecure = "tls"; //Phương thức mã hóa thư - ssl hoặc tls
$mail->SMTPAuth   = true; //Xác thực SMTP
$mail->Username   = "auto.zentgroup@gmail.com"; // Tên đăng nhập tài khoản Gmail
$mail->Password   = "1@3$5^7*"; //Mật khẩu của gmail
$mail->SetFrom("zentgroup@gmail.com", "Zent Group"); // Thông tin người gửi
$mail->AddReplyTo("zentgroup@gmail.com","Zent Group");// Ấn định email sẽ nhận khi người dùng reply lại.
$mail->AddAddress($email_recive, $name);//Email của người nhận
$mail->Subject = $subject; //Tiêu đề của thư
$mail->MsgHTML($contents); //Nội dung của bức thư.
// $mail->MsgHTML(file_get_contents("email-template.html"), dirname(__FILE__));
// Gửi thư với tập tin html
$mail->AltBody = "Nội dung thư";//Nội dung rút gọn hiển thị bên ngoài thư mục thư.
//$mail->AddAttachment("images/attact-tui.gif");//Tập tin cần attach

//Tiến hành gửi email và kiểm tra lỗi
if(!$mail->Send()) {
// echo "Có lỗi khi gửi mail: " . $mail->ErrorInfo;
	return false;
} else {
	return true;
//echo "Đã gửi thư thành công!";
}
}
}
?>