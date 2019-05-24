<?php 
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

if (isset($_GET['id'])){
	$code = $_GET['id'];
	echo "<br> &nbsp&nbsp&nbsp<b>Mã sản phẩm: </b>".$code ;
	echo "<br> &nbsp&nbsp&nbsp<b>Tên sản phẩm: </b>".$products[$code]['name'];
	echo "<br> &nbsp&nbsp&nbsp<b>Màu sắc: </b>".$products[$code]['color'];
	echo "<br> &nbsp&nbsp&nbsp<b>Giá tiền: </b>".$products[$code]['price'];
	echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<a href="cart.php" class="btn btn-primary">Xem giỏ hàng</a>	
	<a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
</body>
</html>