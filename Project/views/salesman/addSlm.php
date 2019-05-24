<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Thông tin nhân viên</h2>
	<form action="?mod=salesmans&act=store" method="POST" role="form">
		<legend>Nhập thông tin</legend>
	
		<div class="form-group">
			<label for="id">ID</label>
			<?php if(isset($_COOKIE['msg_id'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_id'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="id" placeholder="Mã">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<?php if(isset($_COOKIE['msg_name'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_name'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="name" placeholder="Tên">
		</div>
		<div class="form-group">
			<label for="phone">Mobile</label>
			<?php if(isset($_COOKIE['msg_sdt'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_sdt'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<?php if(isset($_COOKIE['msg_email'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_email'] ?></span>
			<?php } ?>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" placeholder="Địa chỉ">
		</div>
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a class="btn btn-primary" href="?mod=salesmans&act=list">Danh sách</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>