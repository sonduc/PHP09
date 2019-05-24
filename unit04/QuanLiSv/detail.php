<?php 
session_start();

$code = $_GET['id'];

echo "<br>&nbsp<h1>Thông tin sinh viên</h1>";
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Mã sinh viên: </b>". $_SESSION[$code]['id'];
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Tên sinh viên: </b>". $_SESSION[$code]['name'];
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Số điện thoại: </b>". $_SESSION[$code]['number'];
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Email: </b>". $_SESSION[$code]['email'];
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Giới tính: </b>". $_SESSION[$code]['sex'];
echo "<br>&nbsp&nbsp&nbsp&nbsp<b>Địa chỉ: </b>". $_SESSION[$code]['adress'];
echo "<br>";


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
	&nbsp&nbsp&nbsp&nbsp
	<a href='add.php' class='btn btn-primary' >Thêm mới</a>
	<a href='list.php' class='btn btn-primary' >Danh sách</a>
</body>
</html>