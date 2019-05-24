<?php 
include_once 'views/layouts/header.php';
?>

<div class="container">
	<h2 class="title text-center">Thông tin khách hàng</h2>
	<form action="?mod=clients&act=update" method="POST" role="form">
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
			<label for="phone">Mobile</label>
			<input type="text" class="form-control" name="phone" placeholder="Số điện thoại"  value="<?= $data['phone'] ?>">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" placeholder="Email" value="<?= $data['email'] ?>">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" placeholder="Địa chỉ"  value="<?= $data['address'] ?>">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a href="?mod=clients" class="btn btn-primary">Danh sách khách hàng</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>