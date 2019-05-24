<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
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
			<input type="text" class="form-control" name="phone" placeholder="Số lượng"  value="<?= $data['amount'] ?>">
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" class="form-control" name="price" placeholder="Price" value="<?= $data['email'] ?>">
		</div>
		<div class="form-group">
			<label for="address">Image</label>
			<input type="file" class="form-control" name="address" placeholder="Ảnh"  value="<?= $data['address'] ?>">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a href="?mod=products" class="btn btn-primary">Danh sách </a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>