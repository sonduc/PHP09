<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h1>Danh sách sản phẩm</h1>
	<a href="?mod=products&act=add" class="btn btn-primary">Thêm mới sản phẩm</a>
	<?php if(isset($_COOKIE['msg_addProduct'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_addProduct'] ?></button>
	<?php } ?>	

	<?php if(isset($_COOKIE['msg_updateProduct'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_updateProduct'] ?></button>
	<?php } ?>	

	<?php if(isset($_COOKIE['msg_deleteProduct'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_deleteProduct'] ?></button>
	<?php } ?>
	
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Amount</th>
				<th>Price</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($data as $product) { ?>
			<tr>
				<td><?= $product['id'] ?></td>
				<td><?= $product['name'] ?></td>
				<td><?= $product['amount'] ?></td>
				<td><?= "$".$product['price'] ?></td>
				<td>
					<a class='btn btn-info' href="?mod=products&act=detail&id=<?= $product['id'] ?>">Xem </a>	
					<a class='btn btn-warning' href="?mod=products&act=edit&id=<?= $product['id'] ?>">Sửa </a>	
					<a class='btn btn-danger delete' href="?mod=products&act=delete&id=<?= $product['id'] ?>">Xóa </a>	
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>

<?php include_once 'views/layouts/footer.php'; ?>