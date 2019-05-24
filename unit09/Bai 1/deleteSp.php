<?php 
include_once 'connection.php';

$id = $_GET['id'];
$name = $_POST['name'];
$color = $_POST['color'];
$price = $_POST['price'];
$created_at = date('Y-m-d H:i:s');

$query ="DELETE FROM products WHERE id = ".$id;

$result = $conn->query($query);
if($result){
	setcookie('delete', "Xóa thành công !", time()+3);
}else{
	setcookie('delete', "Xóa không thành công !", time()+3);
}

header('location:listSp.php')
?>