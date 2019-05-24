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

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	<h1>DANH SÁCH GIỎ HÀNG</h1>
	<a href="listSP.php" class="btn btn-primary">Tiếp tục mua hàng</a>
	<table class="table table-hover">
		<thead>

			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Số lượng</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<?php 
		if (isset($_SESSION['cart'])) {
			# code...

			$tongtien =0;
			foreach ($_SESSION['cart'] as $key => $product) {
				$tongtien = $tongtien + ($product['price']* $product['quantily'])
				?>
				<tbody>
					<tr>
						<td><?php echo $key; ?></td>
						<td><?php echo $product['name'] ?></td>
						<td><p id="Gia"><?php echo number_format($product['price']) ?></p></td>
						<td>
							<a class="btn btn-success" href="addSP.php?id=<?php  echo $key ?>">+</a>
							<?php echo $product['quantily'] ?>
							<a class="btn btn-success" href="deleteSP.php?id=<?php echo $key ?>">-</a>
						</td>
						<td>						
							<a class="btn btn-info" href="info.php?id=<?php echo $key ?>">Thông tin</a>
							<a class="btn btn-danger" href="deleteSP.php?id=<?php  echo $key ?>&act=true">Xóa</a>		
						</td>
					</tr>
				</tbody>
				<?php } 
			}
			?>
		</table>
		<h1><?php echo "Tổng: ".number_format($tongtien)." VNĐ" ?></h1>
	</body>
	</html>