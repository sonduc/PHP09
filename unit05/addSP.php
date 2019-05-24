<?php 
session_start();
/*session_destroy();*/
$products = array(
	'SP01' => array(
		'name' => 'SamSungS5',
		'price' => '2000000',
		'quantily' => '10'
	),
	'SP02' => array(
		'name' => 'SamSungS6',
		'price' => '5000000',
		'quantily' => '20'
	),
	'SP03' => array(
		'name' => 'SamSungS7',
		'price' => '8000000',
		'quantily' => '30'
	),
	'SP04' => array(
		'name' => 'SamSungS8',
		'price' => '12000000',
		'quantily' => '40'
	),
);
$code = $_GET['id'];
if (isset($_SESSION['cart'][$code])) {
	$_SESSION['cart'][$code]['quantily']++;
	/*$_SESSION['cart'][$code]['price'] += $_SESSION['cart'][$code]['price'];*/
}else{
	$_SESSION['cart'][$code]= $products[$code];
	$_SESSION['cart'][$code]['quantily']= 1;
}

if(isset($_GET['add']) && $_GET['add'] == true){
	header('location: listSP.php');
}else{
	header('location: cartSP.php');
}

?>