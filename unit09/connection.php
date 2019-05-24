<?php 
// Thong so ket noi CSDL
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


?>