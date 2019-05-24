<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h3>Cập nhật User</h3>
	<form action="?mod=users&act=update" method="post">
		<input type="hidden" name="id" value="<?= $data['id'] ?>">

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên" name="name" value="<?= $data['name'] ?>">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập email" name="email" value="<?= $data['email'] ?>">
		</div>

		<div class="form-group">
			<label for="moblie">Moblie:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập moblie" name="moblie" value="<?= $data['moblie'] ?>">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>

		<a class="btn btn-primary" href="?mod=users&act=list">Danh sách</a>
	</form>
</div>

<?php include_once 'views/layouts/footer.php'; ?>
