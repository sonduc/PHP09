<?php 
session_start();
if(isset($_GET['id'])){
	$code = $_GET['id'];

	var_dump($_SESSION['cart']);
	/*die;*/
	if (isset($_SESSION['cart'][$code])) {

		unset($_SESSION['cart'][$code]);
	}
}


setcookie('delete',"Xóa sản phẩm khỏi giỏ hàng thành công!", time() +3);
header("location: cart.php");
 ?>