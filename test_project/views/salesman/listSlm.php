<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Danh sách nhân viên</h2>
	<h3><a href="?mod=salesmans&act=add" class="btn btn-primary">Thêm mới </a></h3>	
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
		<?php foreach ($data as $salesman) { ?>
		<tbody>
			<tr>
				<td><?= $salesman['id']?></td>
				<td><?= $salesman['name']?></td>
				<td><?= $salesman['phone']?></td>
				<td><?= $salesman['email']?></td>
				<td><?= $salesman['address']?></td>
				<td>
					<a class="btn btn-primary" href="?mod=salesmans&act=detail&id=<?= $salesman['id'] ?>">Xem</a>
					<a class="btn btn-primary" href="?mod=salesmans&act=edit&id=<?= $salesman['id'] ?>">Sửa</a>
					<a class="btn btn-primary" href="?mod=salesmans&act=delete&id=<?= $salesman['id'] ?>">Xóa</a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>