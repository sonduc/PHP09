<?php 
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		*{
			padding-left: 30px;
			padding-right: 30px;
		}
	</style>
</head>
<body>
	<h1>Thông tin sinh viên</h1>
	<p></p>
	<br>
	<form action="add_process.php" method="post">
		<div class="form-group">
			<label for="MaSv">Mã sinh viên:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập mã" name="MaSv">
		</div>

		<div class="form-group">
			<label for="TenSv">Họ và tên:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập họ tên" name="TenSv">
		</div>

		<div class="form-group">
			<label for="PhoneNumber">Số điện thoại:</label>
			<input type="number" class="form-control" id="text" placeholder="Nhập số điện thoại" name="PhoneNumber">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
		</div>

		<div class="form-check form-check-inline">
			<label class="form-check-label" for="Nam">
				<input class="form-check-input" type="radio" name="GioiTinh" id="inlineRadio1" value="Nam"> Nam
			</label>
			<label class="form-check-label" for="Nu">
				<input class="form-check-input" type="radio" name="GioiTinh" id="inlineRadio2" value="Nữ"> Nữ
			</label>
			
		</div>
        <br>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập địa chỉ" name="DiaChi">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
	</form>

</body>
</html>