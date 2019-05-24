<?php 
include_once 'views/layouts/header.php';
?>

<div  id="page-wrapper">
	<h2 class="title text-center">Thông tin sản phẩm</h2>
	<form action="?mod=products&act=store" method="POST" role="form" enctype="multipart/form-data">
		<legend>Nhập thông tin</legend>
	
		<input type="hidden" class="form-control" name="id" placeholder="Mã">

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Tên">
		</div>
		<div class="form-group">
			<label for="amount">Amount</label>
			<?php if(isset($_COOKIE['msg_sl'])){ ?>
				<span class="checkSdt" style="color: red"><?= $_COOKIE['msg_sl'] ?></span>
			<?php } ?>
			<input type="text" class="form-control" name="amount" placeholder="Số lượng">
		</div>
		<div class="form-group">
			<label for="price">Price</label>
			<input type="text" class="form-control" name="price" placeholder="Giá tiền">
		</div>
		<div class="form-group">
			<label for="image">Image</label>
			<input type="file" class="form-control" name="image" placeholder="Ảnh">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary">Lưu Thông tin</button>
		<a class="btn btn-primary" href="?mod=products&act=list">Danh sách</a>
	</form>
</div>

<?php 
include_once 'views/layouts/footer.php';
?>