<?php 
include_once 'header.php';
include_once 'connection.php';
$id = $_GET['id'];



// Cau lenh truy van co so du lieu
$query = "SELECT * FROM `products` WHERE id = ".$id;

// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);

$row = $result->fetch_assoc();

?>
<div id="page-wrapper">
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
		
		<a href="index.php" class="btn btn-primary">Danh sách sản phẩm</a>
	</form>
</div>
<?php 
include_once 'footer.php';
?>