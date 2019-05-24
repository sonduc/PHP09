<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Danh sách nhân viên</h2>
	<h3><a href="?mod=salesmans&act=add" class="btn btn-primary">Thêm mới </a></h3>

	
	<?php if(isset($_COOKIE['msg_addSalesman'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_addSalesman'] ?></button>
	<?php } ?>	

	<?php if(isset($_COOKIE['msg_updateSalesman'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_updateSalesman'] ?></button>
	<?php } ?>	

	<?php if(isset($_COOKIE['msg_deleteSalesman'])){ ?>
	<button style="float: right; margin-top:-45px;" class="alert alert-success"><?= $_COOKIE['msg_deleteSalesman'] ?></button>
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
			<?php foreach ($data as $salesman) { ?>
			
			<tr>
				<td><?= $salesman['id']?></td>
				<td><?= $salesman['name']?></td>
				<td><?= $salesman['phone']?></td>
				<td><?= $salesman['email']?></td>
				<td><?= $salesman['address']?></td>
				<td>
					<a class="btn btn-info" href="?mod=salesmans&act=detail&id=<?= $salesman['id'] ?>">Xem</a>
					<a class="btn btn-warning" href="?mod=salesmans&act=edit&id=<?= $salesman['id'] ?>">Sửa</a>
					<a class="btn btn-danger delete" href="?mod=salesmans&act=delete&id=<?= $salesman['id'] ?>">Xóa</a>
				</td>
			</tr>
			
			<?php } ?>
		</tbody>
	</table>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>