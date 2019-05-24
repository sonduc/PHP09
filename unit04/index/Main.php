<?php 
session_start();
if ($_SESSION['login'] == true) {
	echo "Dang nhap thanh cong";
	echo "<a href='Thoat.php' >Đăng xuất</a>";
}else{
	header('location: DangNhap.php');
}


 ?>