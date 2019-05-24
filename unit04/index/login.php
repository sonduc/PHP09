<?php 
	session_start();
	if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
		header('location: admin.php');
	}

	if (isset($_POST['HThanh'])) {

		$email = $_POST['email'];
		$password = $_POST['password'];
		
		if ($email == 'ndson1998@gmail.com' && $password =='123') {
			$_SESSION['login'] = true;

			header('location: admin.php');
		}else{
			$_SESSION['login'] = false;
			echo "<br> Đăng nhập thất bại";
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
	<style type="text/css">
	*{
		padding-left: 30px;
		padding-right: 30px;
	}

</style>
</head>
<body>
	<h1>Thông tin sinh viên</h1>
	<br>
	<form action="" method="post">
		<div class="form-group">
			<label for="MaSv">Email:</label>
			<input type="email" class="form-control" id="text" placeholder="Nhập email" name="email">
		</div>

		<br>
		<div class="form-group">
			<label for="Password">Password:</label>
			<input type="password" class="form-control" id="text" placeholder="Nhập mật khẩu" name="password">
		</div>

		<button type="submit" class="btn btn-primary" name="HThanh">Submit</button>
	</form>

</body>
</html>