<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Thông tin chi tiết</h2>
	<p><b>Mã nhân viên: </b><?= $salesman['id'] ?></p>
	<p><b>Tên nhân viên: </b><?= $salesman['name'] ?></p>
	<p><b>Số điện thoại: </b><?= $salesman['phone'] ?></p>
	<p><b>Email: </b><?= $salesman['email'] ?></p>
	<p><b>Địa chỉ: </b><?= $salesman['address'] ?></p>

	<a class="btn btn-primary" href="?mod=salesmans&act=edit&id=<?= $salesman['id'] ?>">Sửa </a>
	<a href="?mod=salesmans" class="btn btn-primary">Danh sách nhân viên</a>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>