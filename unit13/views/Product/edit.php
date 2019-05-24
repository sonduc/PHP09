<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h1>Sửa thông tin sản phẩm</h1>
	<p></p>
	<br>
	<form action="?mod=products&act=update" method="post">
		<input type="hidden" name="id" value="<?= $data['id'] ?>">

		<div class="form-group">
			<label for="name">Tên sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên sản phẩm" name="name" value="<?= $data['name'] ?>">
		</div>

		<div class="form-group">
			<label for="slug">Slug:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập slug:" name="slug" value="<?= $data['slug'] ?>">
		</div>

		<div class="form-group">
			<label for="category_id">Category_id:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập category_id:" name="category_id" value="<?= $data['category_id'] ?>">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
		
		<a href="?mod=products" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>
	
</div>

<?php include_once 'views/layouts/footer.php'; ?>