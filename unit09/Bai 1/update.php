<?php 
$id = $_GET['id'];

include_once 'connection.php';

// Cau lenh truy van co so du lieu
$query = "SELECT * FROM `products` WHERE id = ".$id;

// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);

$row = $result->fetch_assoc();

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
	<h1>Sửa thông tin sản phẩm</h1>
	<p></p>
	<br>
	<form action="update_process.php" method="post">
		<input type="hidden" name="id" value="<?= $row['id'] ?>">

		<div class="form-group">
			<label for="name">Tên sản phẩm:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập tên sản phẩm" name="name" value="<?= $row['name'] ?>">
		</div>

		<div class="form-group">
			<label for="color">Màu sắc:</label>
			<input type="text" class="form-control" id="text" placeholder="Nhập màu" name="color" value="<?= $row['color'] ?>">
		</div>

		<div class="form-group">
			<label for="price">Giá bán:</label>
			<input type="numbre" class="form-control" id="text" placeholder="Nhập giá bán" name="price" value="<?= $row['price'] ?>">
		</div>

		<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
		
		<a href="listSp.php" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>

</body>
</html>