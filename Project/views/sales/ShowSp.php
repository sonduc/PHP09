<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h1>DANH SÁCH SẢN PHẨM</h1>
	<a href="?mod=sales&act=cartSp" class="btn btn-primary">Giỏ hàng</a>
	<?php if(isset($_COOKIE['msg_addSql'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_addSql'] ?></button>
	<?php } ?>	
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
		<thead>

			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Giá tiền</th>
				<th>Hành động</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach ($data as $product) { ?>
			
			<tr>
				<td><?php echo $product['id'] ?></td>
				<td><?php echo $product['name'] ?></td>
				<td><?php echo "$".number_format($product['price']) ?></td>
				<td>
					<a class="btn btn-primary" href="?mod=sales&act=add_to_cart&id=<?= $product['id'] ?>&add=true">Thêm</a>

					<button type="button" class="btn btn-primary btnAdd" data-id="<?= $product['id'] ?>">Thêm Ajax</button>

					<a class="btn btn-info" href="?mod=products&act=detail&id=<?php echo $product['id'] ?>">Thông tin</a>		
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>