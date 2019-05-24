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
	<h1>Thêm mới sản phẩm</h1>
	<p></p>
	<br>
	<form action="add_process.php" method="post">
		<div class="form-group">
			<label for="id">Mã sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập mã" name="id">
		</div>

		<div class="form-group">
			<label for="name">Tên sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên sản phẩm" name="name">
		</div>

		<div class="form-group">
			<label for="color">Màu sắc:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập màu" name="color">
		</div>

		<div class="form-group">
			<label for="price">Giá bán:</label>
			<input type="numbre" class="form-control" id="text" placeholder="Nhập giá bán" name="price">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Lưu thông tin</button>
		
		<a href="listSp.php" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>

</body>
</html>