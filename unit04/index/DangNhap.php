<?php 
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
	header('location: Main.php');
}

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$mk = $_POST['mk'];

	if($email == 'ndson1998@gmail.com' && $mk =='132'){
		$_SESSION['login'] = true;
		header('location: Main.php');
	}else{
		$_SESSION['login'] = false;
		echo "Sai thông tin";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<form action="" method="POST" role="form">
		<legend>Form title</legend>

		<div class="form-group">
			<label for="">Email</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="email">
		</div>

		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="mk">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
</body>
</html>