<?php 
session_start();
$code = $_GET['id'];
function send_email($email_recive,$name,$contents,$subject ){
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

$name ="Ngô Đức Sơn";
$msg = "
<h2> Xin chào ". $name."!</h2>
<p>Email này được gửi cho bạn từ <font color=\"red\" >Zent Group </p>

<br><h1>Thông tin sinh viên</h1>
<br><b>Mã sinh viên: </b>". $_SESSION[$code]['id']."
<br><b>Tên sinh viên: </b>". $_SESSION[$code]['name']."
<br><b>Số điện thoại: </b>". $_SESSION[$code]['number']."
<br><b>Email: </b>". $_SESSION[$code]['email']."
<br><b>Giới tính: </b>". $_SESSION[$code]['sex']."
<br><b>Địa chỉ: </b>". $_SESSION[$code]['adress']."
<br>

";

send_email("ndson1998@gmail.com",$name,$msg,"PHP 09");
header('location:list.php');
?>
