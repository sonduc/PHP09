<?php 
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

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0
		padding-right: 20px;
		padding-left: 20px;
	}
	#Gia{
		width: 36%;
		text-align: right;
		padding-left: 0;
	}
</style>
</head>
<body>
	<h1>DANH SÁCH SẢN PHẨM</h1>
	<a href="cartSP.php" class="btn btn-primary">Giỏ hàng</a>
	<table class="table table-hover">
		<thead>

			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<?php 
		foreach ($products as $key => $product) {

			?>
			<tbody>
				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $product['name'] ?></td>
					<td><p id="Gia"><?php echo number_format($product['price']) ?></p></td>
					<td>
						<a class="btn btn-primary" href="addSP.php?id=<?php  echo $key ?>&add=true">Thêm</a>
						<a class="btn btn-info" href="info.php?id=<?php echo $key ?>">Thông tin</a>		
					</td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</body>
	</html>