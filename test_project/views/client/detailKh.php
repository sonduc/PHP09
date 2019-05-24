<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Thông tin chi tiết</h2>
	<p><b>Mã khách hàng </b><?= $client['id'] ?></p>
	<p><b>Tên khách hàng: </b><?= $client['name'] ?></p>
	<p><b>Số điện thoại: </b><?= $client['phone'] ?></p>
	<p><b>Email: </b><?= $client['email'] ?></p>
	<p><b>Địa chỉ: </b><?= $client['address'] ?></p>

	<a class="btn btn-primary" href="?mod=clients&act=edit&id=<?= $client['id'] ?>">Sửa </a>
	<a href="?mod=clients" class="btn btn-primary">Danh sách khách hàng</a>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>