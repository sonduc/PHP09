<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Thông tin nhân viên</h2>
	<form action="?mod=salesmans&act=update" method="POST" role="form">
		<legend>Sửa thông tin</legend>
	
		<div class="form-group">
			<input type="hidden" class="form-control" name="id" placeholder="Mã" value="<?= $data['id'] ?>">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<?php if(isset($_COOKIE['msg_name'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_name'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="name" placeholder="Tên" value="<?= $data['name'] ?>">
		</div>
		<div class="form-group">
			<label for="phone">Mobile</label>
			<?php if(isset($_COOKIE['msg_sdt'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_sdt'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="phone" placeholder="Số điện thoại"  value="<?= $data['phone'] ?>">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<?php if(isset($_COOKIE['msg_email'])){ ?>
			<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_email'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="email" placeholder="Email" value="<?= $data['email'] ?>">
		</div>
		<!-- <div class="form-group">
			<label for="password">Password</label>
			<input type="text" class="form-control" name="password" placeholder="password">
		</div> -->
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" placeholder="Địa chỉ"  value="<?= $data['address'] ?>">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a href="?mod=salesmans&act=list" class="btn btn-primary">Danh sách khách hàng</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>