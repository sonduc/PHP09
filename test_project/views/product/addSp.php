<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Thông tin sản phẩm</h2>
	<form action="?mod=products&act=store" method="POST" role="form" enctype="multipart/form-data">
		<legend>Nhập thông tin</legend>
	
		<div class="form-group">
			<label for="id">ID</label>
			<input type="text" class="form-control" name="id" placeholder="Mã">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Tên">
		</div>
		<div class="form-group">
			<label for="amount">Amount</label>
			<input type="text" class="form-control" name="amount" placeholder="Số lượng">
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" class="form-control" name="price" placeholder="Giá tiền">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" name="image" placeholder="Ảnh">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a class="btn btn-primary" href="?mod=products">Danh sách</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>