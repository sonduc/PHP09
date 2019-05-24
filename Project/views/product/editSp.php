<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Thông tin sản phẩm</h2>
	<form action="?mod=products&act=update" method="POST" role="form" enctype="multipart/form-data">
		<legend>Sửa thông tin</legend>

		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id" placeholder="Mã" value="<?= $data['id'] ?>">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Tên" value="<?= $data['name'] ?>">
		</div>
		<div class="form-group">
			<label for="amount">Amount</label>
			<?php if(isset($_COOKIE['msg_sl'])){ ?>
			<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_sl'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="amount" placeholder="Số lượng"  value="<?= $data['amount'] ?>">
		</div>
		<div class="form-group">
			<label for="price">Price($)</label>
			<input type="text" class="form-control" name="price" placeholder="Price" value="<?= $data['price'] ?>">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" class="form-control" name="image" placeholder="Ảnh"  value="<?= $data['image'] ?>">
		</div>
		<input type="hidden" class="form-control" name="image" value="<?= "$".$data['image'] ?>">
		

		<button type="submit" name="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a href="?mod=products&act=list" class="btn btn-primary">Danh sách </a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>