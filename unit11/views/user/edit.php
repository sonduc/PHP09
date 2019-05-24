<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h3>Thêm mới user</h3>
	<form action="?mod=users&act=update" method="post">
		<input type="hidden" name="id" value="<?= $data['id'] ?>">
		<label>Name: </label>
		<input type="text" name="name" value="<?= $data['name'] ?>">
		<br>
		<br>
		<label>Email: </label>
		<input type="text" name="email" value="<?= $data['email'] ?>">

		<br>
		<br>
		<label>Moblie: </label>
		<input type="text" name="moblie" value="<?= $data['moblie'] ?>">

		<br>
		<br>
		<input type="submit" name="submit">
	</form>
</div>

<?php include_once 'views/layouts/footer.php'; ?>