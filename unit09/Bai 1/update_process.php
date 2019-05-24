<?php 
include_once 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$color = $_POST['color'];
$price = $_POST['price'];
$update_at = date('Y-m-d H:i:s');

$query ="UPDATE products SET name ='".$name."', color ='".$color."',
price ='".$price."', update_at ='".$update_at."'
WHERE id = $id ";

$result = $conn->query($query);

setcookie('update', "Cập nhật thành công!", time()+3);
header('location:listSp.php')
?>