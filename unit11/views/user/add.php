<?php include_once 'views/layouts/header.php'; ?>

<div  id="page-wrapper">
	<h3>Thêm mới user</h3>
	<form action="?mod=users&act=store" method="post">
		<label>Name: </label>
		<input type="text" name="name">
		<br>
		<br>
		<label>Email: </label>
		<input type="text" name="email">

		<br>
		<br>
		<label>Moblie: </label>
		<input type="text" name="moblie">

		<br>
		<br>
		<label>Password: </label>
		<input type="password" name="password">

		<br>
		<br>
		<input type="submit" name="submit">
	</form>
	
</div>

<?php include_once 'views/layouts/footer.php'; ?>