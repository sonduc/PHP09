<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Danh sách khách hàng</h2>
	<h3><a href="?mod=clients&act=add" class="btn btn-primary">Thêm mới</a></h3>
	<?php if(isset($_COOKIE['msg_addClient'])){ ?>
	<button style="float: right; margin-top:-45px;height: 39px;" class="alert alert-success"><?= $_COOKIE['msg_addClient'] ?></button>
	<?php } ?>	

	<?php if(isset($_COOKIE['msg_updateClient'])){ ?>
	<button style="float: right; margin-top:-45px;height: 39px;" class="alert alert-success"><?= $_COOKIE['msg_updateClient'] ?></button>
	<?php } ?>

	<?php if(isset($_COOKIE['msg_deleteClient'])){ ?>
	<button style="float: right; margin-top:-45px;height: 39px;" class="alert alert-success"><?= $_COOKIE['msg_deleteClient'] ?></button>
	<?php } ?>	
	
	<table class="table table-hover table-striped table-bordered" id="dataTables-example">
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
		<tbody>
			<?php foreach ($data as $client) { ?>
			
			<tr>
				<td><?= $client['id']?></td>
				<td><?= $client['name']?></td>
				<td><?= $client['phone']?></td>
				<td><?= $client['email']?></td>
				<td><?= $client['address']?></td>
				<td>
					<a class="btn btn-info" href="?mod=clients&act=detail&id=<?= $client['id'] ?>">Xem</a>
					<a class="btn btn-warning" href="?mod=clients&act=edit&id=<?= $client['id'] ?>">Sửa</a>
					<a class="btn btn-danger delete" href="?mod=clients&act=delete&id=<?= $client['id'] ?>">Xóa</a>
				</td>
			</tr>
			
			<?php } ?>
		</tbody>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>