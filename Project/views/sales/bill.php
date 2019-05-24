<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h1 style="color: #31348f;text-align: center;">Thông tin hóa đơn</h1>
	<ul>
		<li>
			<h4><b>Khách hàng mua: </b><?= $client['name'] ?></h4>
		</li>
		<li>
			<h4><b>Mã khách hàng: </b><?= $client['id'] ?></h4>
		</li>
		<li>
			<h4><b>Số điện thoại: </b><?= $client['phone'] ?></h4>
		</li>
	</ul>
	
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
		<thead>

			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$tongtien =0;
			foreach ($_SESSION['cart'] as $key => $product) {
				$tongtien = $tongtien + ($product['price']* $product['amount']);
				?>
				<tr>
					<td><?php echo $key; ?></td>
					<td><?php echo $product['name'] ?></td>
					<td><p id="Gia"><?php echo "$".number_format($product['price']) ?></p></td>
					<td>
						<?php echo $product['amount'] ?>
					</td>
					<td><?= "$".$product['price']* $product['amount'] ?></td>
				</tr>

				<?php } ?>
				
			</tbody>
			
		</table>
		<h1><?php echo "Tổng: ".number_format($tongtien)."$" ?></h1>
		<a class="btn btn-success" href="?mod=sales&act=bill&id=<?php echo $client['id']; ?>">Thanh toán</a>
	</div>

	<?php 
	include_once 'views/layouts/footer.php';
	?>