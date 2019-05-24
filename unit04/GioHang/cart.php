<?php 
session_start();

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
	<h1>Danh sách giỏ hàng</h1>
	<div class="container">
		<?php if(isset($_COOKIE['delete'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['delete'];?>
		</div>
		<?php } ?>
		<a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>	
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
				if(isset($_SESSION['cart'])){
					foreach ($_SESSION['cart'] as $code => $product) {
						?>
						<tr>
							<td><?php echo $code ?></td>
							<td><?php echo $product['name'] ?></td>
							<td><?php echo $product['color'] ?></td>
							<td><?php echo number_format($product['price']); ?></td>
							<td><?php echo $product['quantily'] ?></td>
							<td>
								<?php 
								echo "<a class='btn btn-success' href='product.php?id=".$code."'>Xem </a>";
								echo "<a class='btn btn-primary' href='delete.php
								?id=".$code."'> Xoa </a>";
								?>

							</td>
						</tr>
						<?php 
					}
				}else{
					?>
					<div class="alert alert-danger">
						<strong>Không có sản phẩm!</strong> 
					</div>
					<?php } ?>
				</tbody>
			</table>
		</div>


	</body>
	</html>


