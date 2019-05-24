<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h1>Thêm mới user</h1>
	<form action="?mod=users&act=store" method="POST" role="form" enctype="multipart/form-data">

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên người dùng" name="name">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập email" name="email">
		</div>

		<div class="form-group">
			<label for="moblie">Moblie:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập số điện thoại" name="moblie">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="text" placeholder="Nhập password" name="password">
		</div>

		<div class="form-group">
			<label for="avatar">Avatar:</label>
			<input type="file" class="form-control" name="avatar">
		</div>
		
		<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
		<a href="?mod=users" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>
	
</div>

<?php include_once 'views/layouts/footer.php'; ?>