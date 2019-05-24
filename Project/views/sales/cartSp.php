<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h1>DANH SÁCH GIỎ HÀNG</h1>
	<a href="?mod=sales&act=ShowSp" class="btn btn-primary">Tiếp tục mua hàng</a>
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
		<thead>

			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			if(isset($_SESSION['cart'])){
				$tongtien =0;
				foreach ($_SESSION['cart'] as $key => $product) {
					$tongtien = $tongtien + ($product['price']* $product['amount']); ?>

					<tr>
						<td><?php echo $key; ?></td>
						<td><?php echo $product['name'] ?></td>
						<td><p id="Gia"><?php echo "$".number_format($product['price']) ?></p></td>
						<td>
							<a class="btn btn-success" href="?mod=sales&act=add_to_cart&id=<?php  echo $key ?>">+</a>
							<?php echo $product['amount'] ?>
							<a class="btn btn-success" href="?mod=sales&act=deleteCart&id=<?php echo $key ?>">-</a>
						</td>
						<td><?= "$".$product['price']* $product['amount'] ?></td>
						<td>						
							<a class="btn btn-info" href="?mod=sales&act=detail&id=<?php echo $key ?>">Thông tin</a>
							<a class="btn btn-danger delete" href="?mod=sales&act=deleteCart&id=<?php  echo $key ?>&delete=true">Xóa</a>		
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<h1><?php echo "Tổng: ".number_format($tongtien)."$" ?></h1>
			
			<a class="btn btn-success" href="?mod=sales&act=fromCheck">Mua hàng</a>
			<?php } ?>
		</div>

		<?php 
		include_once 'views/layouts/footer.php';
		?>