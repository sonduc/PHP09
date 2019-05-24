<?php 
session_start();
if(isset($_GET['id'])){
	$code = $_GET['id'];
	if (isset($_SESSION['cart'][$code])) {

		if ($_SESSION['cart'][$code]['quantily'] >1) {
			// khi san pham ton tai trong gio hang voi so luong > 1 don vi
			// // thuc hien tru di 1 don vi cua san pham
			$_SESSION['cart'][$code]['quantily']--;
		}else{
			unset($_SESSION['cart'][$code]);
		}
	}
	if(isset($_GET['act']) && $_GET['act'] == true){
		unset($_SESSION['cart'][$code]);
	}
}

header('location: cartSP.php');
?>
