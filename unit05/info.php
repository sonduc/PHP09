<?php 
session_start();
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
echo "<br> &nbsp&nbsp&nbsp<b>Mã sản phẩm: </b>".$code ;
echo "<br> &nbsp&nbsp&nbsp<b>Tên sản phẩm: </b>".$products[$code]['name'];
echo "<br> &nbsp&nbsp&nbsp<b>Giá tiền: </b>".$products[$code]['price'];
echo "<br> &nbsp&nbsp&nbsp<b>Số lượng: </b>".$products[$code]['quantily'];
echo "<br>";

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
	<a href="cartSP.php" class="btn btn-primary">Xem giỏ hàng</a>	
	<a href="listSP.php" class="btn btn-primary">Tiếp tục mua hàng</a>
</body>
</html>