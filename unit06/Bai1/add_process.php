<?php 

session_start();
/*session_destroy();*/

/*if(isset($_POST['submit'])){
	if (isset($_POST['GioiTinh'])) {
		$gt = $_POST['GioiTinh'];
	}

	$info = array(
		'id' => $_POST['MaSv'],
		'name' =>  $_POST['TenSv'],
		'number' => $_POST['PhoneNumber'],
		'email' => $_POST['email'],
		'sex' => $gt,
		'adress' => $_POST['DiaChi']
	);

	$_SESSION[$_POST['MaSv']] = $info;

}*/
print_r($_SESSION);
/*header('location: list.php');*/
echo "<a href='add.php'>quay lại</a>"
?>