<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">

	<form action="?mod=sales&act=checkClient" method="POST" role="form">
		<legend>Khách hàng mua</legend>
		
		<?php if(isset($_COOKIE['msg_fromCheck'])){ ?>
		<span class="" style="color: red"><?= $_COOKIE['msg_fromCheck'] ?></span>
		<?php } ?>
		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Nhập Email">
		</div>

		<!-- <div class="form-group">
			<label for="">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Nhập Password">
		</div> -->
		<button type="submit" name="submit" class="btn btn-primary">Tiếp tục</button>
		<a class="btn btn-primary" href="?mod=sales&act=cartSp">Giỏ hàng</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>