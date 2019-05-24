<?php 
$id = $_GET['id'];

$servername = "localhost";//255.123.45.21	
$username = "root"; // ten dang nhap
$password = ""; // mat khau rong
$dbname = "php09";	// db ,uon ket noi


// Tao ra ket noi den CSDL connection
$conn = new mysqli($servername,$username,$password,$dbname);

$conn->set_charset("utf8"); // set utf-8 de doc du lieu tieng viet

// check connection
if ($conn->connect_errno){
	die("Connection failed: ".$conn->connect_errno);
}

/*echo "Connection done !";*/

// Cau lenh truy van co so du lieu
$query = "SELECT * FROM `users` WHERE id = ".$id;

// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);

$row = $result->fetch_assoc();
/*echo "<pre>";
print_r($row);
echo "</pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Thong tin chi tiet</h1>
	<p>ID: <?= $row['id'] ?></p>
	<p>Name: <?= $row['name'] ?></p>
</body>
</html>