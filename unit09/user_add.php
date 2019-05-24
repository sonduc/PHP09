<?php 
$servername = "localhost";//255.123.45.21	
$username = "root"; // ten dang nhap
$password = ""; // mat khau rong
$dbname = "php09";	// db ,uon ket noi


// Tao ra ket noi den CSDL connection
$conn = new mysqli($servername,$username,$password,$dbname);

$conn->set_charset("utf8"); // set utf-8 de doc du lieu tieng viet

// check connection
/*if ($conn->connect_errno){
	die("Connection failed: ".$conn->connect_errno);
}*/
if (isset($_POST['submit'])){
	// Buoc 1: lay toan bo du lieu nguoi dung gui len 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$moblie = $_POST['moblie'];
	$created_at = date('Y-m-d H:i:s');
	$password = md5($_POST['password']);

	// buoc 2: chuan bi cau lenh insert
	$query = "INSERT INTO users (name,email,moblie,password,created_at,status) 
	values('$name','$email','$moblie','$password','$created_at',1)  ";

	echo $query;

	// Buoc 3: Thuc thi cau lenh
	$result = $conn->query($query);



	header('location:users.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Thêm mới user</h3>
	<form action="" method="post">
		<label>Name: </label>
		<input type="text" name="name">
		<br>
		<br>
		<label>Email: </label>
		<input type="text" name="email">

		<br>
		<br>
		<label>Moblie: </label>
		<input type="text" name="moblie">

		<br>
		<br>
		<label>Password: </label>
		<input type="password" name="password">

		<br>
		<br>
		<input type="submit" name="submit">
	</form>
	
	
</body>
</html>
