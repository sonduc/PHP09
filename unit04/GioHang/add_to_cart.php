<?php 

session_start();

$products = array(

	'SP01' => array(
		'name' => "Iphone 4",
		'color' => 'black',
		'price' =>'2000000',
		'quantily' => '1',
	),
	'SP02' => array(
		'name' => "Iphone 5",
		'color' => 'black',
		'price' =>'4000000',
		'quantily' => '1',
	),
	'SP03' => array(
		'name' => "Iphone 6",
		'color' => 'black',
		'price' =>'7000000',
		'quantily' => '1',
	),
	'SP04' => array(
		'name' => "Iphone 7",
		'color' => '10000000',
		'price' =>'15000000',
		'quantily' => '1',
	),
	

);

if (isset($_GET['id'])) {
	$code = $_GET['id'];

	if (isset($_SESSION['cart'][$code])) {
		// cong them 1 neu da co trong gio hang
		$_SESSION['cart'][$code]['quantily'] = $_SESSION['cart'][$code]['quantily'] +1;
	}else{
		// them moi san pham neu chua co
		$_SESSION['cart'][$code] = $products[$code];
		$_SESSION['cart'][$code]['quantily'] = 1;
	}
}
setcookie('oke', "Them gio hang thanh cong!", time()+3);
// chuyen huong ve trang index sau khi them gio hang
header('location:index.php');
?>