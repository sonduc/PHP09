<?php 

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if($email == 'ndson1998@gmail.com' && $password =='123456'){
		echo "Đăng nhập thành công";
	}else{
		echo "<br> Đăng nhập thất bại";
	}
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	input{
	
	}
</style>
</head>
<body>
	<form action="index03.php" method="post">
		<label>Email</label>
		<br>
		<input type="text" name="email" placeholder="email">
		
		<br>
		<br>
		<label>password</label>
		<br>
		<input type="password" name="password" placeholder="password">

	    <br>
	    <br>
		<input type="submit" name="submit" value="Login">
	 

		<label></label>
		<input type="submit" name="submit" value="Candel">
	</form>
</body>
</html>