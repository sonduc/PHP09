<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h1>Danh sách sản phẩm</h1>

	<div class="container" style="width: 100%">
		<?php if(isset($_COOKIE['add'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['add'];?>
		</div>
		<?php } ?>
		
		<?php if(isset($_COOKIE['delete'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['delete'];?>
		</div>
		<?php } ?>

		<?php if(isset($_COOKIE['update'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['update'];?>
		</div> 
		<?php } ?>

		<a href="?mod=products&act=add" class="btn btn-primary">Thêm mới sản phẩm</a>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Slug</th>
					<th>created_id</th>			
					<th>update_id</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach($data as $product) { ?>
				<tr>
					<td><?= $product['id'] ?></td>
					<td><?= $product['name'] ?></td>
					<td><?= $product['slug'] ?></td>
					<td><?= $product['category_id'] ?></td>
					<td><?= $product['update_id'] ?></td>
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
</div>

<?php include_once 'views/layouts/footer.php'; ?>