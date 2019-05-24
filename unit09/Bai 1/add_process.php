<?php 
include_once 'connection.php';

$name = $_POST['name'];
$color = $_POST['color'];
$price = $_POST['price'];
$created_at = date('Y-m-d H:i:s');

$query ="INSERT INTO products (name,color,price,created_at) 
VALUES('".$name."','".$color."','".$price."','".$created_at."')";

$result = $conn->query($query);

setcookie('add', "Thêm thành công!", time()+3);
header('location:listSp.php')
?>