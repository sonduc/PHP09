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
	<script type="text/javascript">
		$(function(){
			setTimeout(function(){
				$('.alert-success').hide();
			},3000);
		})
	</script>
</head>
<body>
	<h1>Danh sách sản phẩm</h1>

	<div class="container">
		<?php if(isset($_COOKIE['oke'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['oke'];?>
		</div>
		<?php } ?>
		<a href="cart.php" class="btn btn-primary">Xem giỏ hàng</a>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Màu</th>
					<th>Giá tiền</th>
					<th>Số lượng</th>				
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($products as $code => $product) { ?>
				<tr>
					<td><?php echo $code ?></td>
					<td><?php echo $product['name'] ?></td>
					<td><?php echo $product['color'] ?></td>
					<td><?php echo number_format($product['price']); ?></td>
					<td><?php echo $product['quantily'] ?></td>
					<td>
						<?php 
						echo "<a class='btn btn-success' href='product.php?id=".$code."'>Xem </a>";
						echo "<a class='btn btn-primary' href='add_to_cart.php
						?id=".$code."'>Thêm </a>";
						?>

					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	
</body>
</html>


