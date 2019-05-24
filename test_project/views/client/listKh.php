<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Danh sách khách hàng</h2>
	<h3><a href="?mod=clients&act=add" class="btn btn-primary">Thêm mới</a></h3>	
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Address</th>	
				<th>Action</th>	
			</tr>
		</thead>
		<?php foreach ($data as $client) { ?>
		<tbody>
			<tr>
				<td><?= $client['id']?></td>
				<td><?= $client['name']?></td>
				<td><?= $client['phone']?></td>
				<td><?= $client['email']?></td>
				<td><?= $client['address']?></td>
				<td>
					<a class="btn btn-primary" href="?mod=clients&act=detail&id=<?= $client['id'] ?>">Xem</a>
					<a class="btn btn-primary" href="?mod=clients&act=edit&id=<?= $client['id'] ?>">Sửa</a>
					<a class="btn btn-primary" href="?mod=clients&act=delete&id=<?= $client['id'] ?>">Xóa</a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>