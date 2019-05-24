<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h1>Thêm mới sản phẩm</h1>
	<p></p>
	<br>
	<form action="?mod=products&act=store" method="post">
		<!-- <div class="form-group">
			<label for="id">Mã sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập mã" name="id">
		</div> -->

		<div class="form-group">
			<label for="name">Tên sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên sản phẩm" name="name">
		</div>

		<div class="form-group">
			<label for="color">Màu sắc:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập màu" name="color">
		</div>

		<div class="form-group">
			<label for="price">Giá bán:</label>
			<input type="numbre" class="form-control" id="text" placeholder="Nhập giá bán" name="price">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
		
		<a href="?mod=products" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>
	
</div>

<?php include_once 'views/layouts/footer.php'; ?>