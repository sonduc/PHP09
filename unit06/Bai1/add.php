<?php 
session_start();
// session_destroy();
//cấu hình thông tin do google cung cấp
$api_url     = 'https://www.google.com/recaptcha/api/siteverify';
$site_key    = '6Le5iEAUAAAAAJ1C9C8ayHdn-ZE4-DWaTJA5x4XF';
$secret_key  = '6Le5iEAUAAAAAKmN28QpPro1gfFdpyEDYbIG7YB4';

//kiem tra submit form
if(isset($_POST['submit']))
{
    //lấy dữ liệu được post lên
	$site_key_post    = $_POST['g-recaptcha-response'];

    //lấy IP của khach
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$remoteip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$remoteip = $_SERVER['REMOTE_ADDR'];
	}

    //tạo link kết nối
	$api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;
    //lấy kết quả trả về từ google
	$response = file_get_contents($api_url);
    //dữ liệu trả về dạng json
	$response = json_decode($response);
	if(!isset($response->success))
	{
		echo 'Captcha khong dung 1';
	}
	if($response->success == true)
	{
		echo 'Captcha dung';

		if (isset($_POST['GioiTinh'])) {
			$gt = $_POST['GioiTinh'];
		}

		$info = array(
			'id' => $_POST['MaSv'],
			'name' =>  $_POST['TenSv'],
			'number' => $_POST['PhoneNumber'],
			'email' => $_POST['email'],
			'sex' => $gt,
			'adress' => $_POST['DiaChi']
		);

		// var_dump($_POST['MaSv']);
		// die;
		$_SESSION[$_POST['MaSv']] = $info;

		// echo "<pre>";
		// print_r($_SESSION);
		// echo "</pre>";
		// die;
		header('location:list.php');
	}else{
		echo 'Captcha khong dung 2';
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<style type="text/css">
</style>
</head>
<body>
	<h1>Thông tin sinh viên</h1>
	<p></p>
	<br>
	<form action="" method="post">
		<div class="form-group">
			<label for="MaSv">Mã sinh viên:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập mã" name="MaSv">
		</div>

		<div class="form-group">
			<label for="TenSv">Họ và tên:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập họ tên" name="TenSv">
		</div>

		<div class="form-group">
			<label for="PhoneNumber">Số điện thoại:</label>
			<input type="number" class="form-control" id="text" placeholder="Nhập số điện thoại" name="PhoneNumber">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
		</div>

		<div class="form-check form-check-inline">
			<label class="form-check-label" for="Nam">
				<input class="form-check-input" type="radio" name="GioiTinh" id="inlineRadio1" value="Nam"> Nam
			</label>
			<label class="form-check-label" for="Nu">
				<input class="form-check-input" type="radio" name="GioiTinh" id="inlineRadio2" value="Nữ"> Nữ
			</label>
			
		</div>
		<br>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập địa chỉ" name="DiaChi">
		</div>

		<div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>

		<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
	</form>

</body>
</html>