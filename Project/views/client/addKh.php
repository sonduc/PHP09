<?php 
include_once 'views/layouts/header.php';
?>
<div  id="page-wrapper">
	<h2 class="title text-center">Thông tin khách hàng</h2>
	<form action="?mod=clients&act=store" method="POST" role="form">
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
			<input type="number" class="form-control" name="phone" id="phone-num" placeholder="Số điện thoại">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<?php if(isset($_COOKIE['msg_email'])){ ?>
			<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_email'] ?></span>
			<?php } ?>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" name="address" placeholder="Địa chỉ">
		</div>
		
		
		
		<button type="submit" class="btn btn-primary" id="submit-add">Lưu Thông tin</button>
		<a class="btn btn-primary" href="?mod=clients&act=list">Danh sách</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';

?>