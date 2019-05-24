<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h1>DANH SÁCH GIỎ HÀNG</h1>
	<a href="?mod=products&act=ShowSp" class="btn btn-primary">Tiếp tục mua hàng</a>
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
		$tongtien =0;
		foreach ($_SESSION['cart'] as $key => $product) {
			$tongtien = $tongtien + ($product['price']* $product['amount'])
			?>
			<tbody>
				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $product['name'] ?></td>
					<td><p id="Gia"><?php echo "$".number_format($product['price']) ?></p></td>
					<td>
						<a class="btn btn-success" href="?mod=products&act=add_to_cart&id=<?php  echo $key ?>">+</a>
						<?php echo $product['amount'] ?>
						<a class="btn btn-success" href="?mod=products&act=deleteCart&id=<?php echo $key ?>">-</a>
					</td>
					<td>						
						<a class="btn btn-info" href="?mod=products&act=detail&id=<?php echo $key ?>">Thông tin</a>
						<a class="btn btn-danger" href="?mod=products&act=deleteCart&id=<?php  echo $key ?>&delete=true">Xóa</a>		
					</td>
				</tr>
			</tbody>
			<?php } ?>

		</table>
		<h1><?php echo "Tổng: ".number_format($tongtien)."$" ?></h1>
	</div>

	<?php 
	include_once 'views/layouts/footer.php';
	?>