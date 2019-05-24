<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Thông tin chi tiết</h2>
	<p><b>Mã sản phẩm: </b><?= $product['id'] ?></p>
	<p><b>Tên sản phẩm: </b><?= $product['name'] ?></p>
	<p><b>Số lượng: </b><?= $product['amount'] ?></p>
	<p><b>Giá tiền: </b><?= $product['price'] ?></p>
	<p><b>Ảnh: </b><?= "<img src='upload/products/".$product['image']."'>" ?></p>

	<a class="btn btn-primary" href="?mod=products&act=edit&id=<?= $product['id'] ?>">Sửa </a>
	<a href="?mod=products" class="btn btn-primary">Danh sách </a>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>