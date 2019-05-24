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
	<h1>Thong tin chi tiet</h1>
	<p><b>Mã sản phẩm: </b><?= $row['id'] ?></p>
	<p><b>Tên sản phẩm: </b><?= $row['name'] ?></p>
	<p><b>Màu sắc: </b><?= $row['color'] ?></p>
	<p><b>Giá bán: </b><?= number_format($row['price'])."&nbspVNĐ" ?></p>
	<a class='btn btn-warning' href="update.php?id=<?= $row['id'] ?>">Sửa </a>
	<a href="index.php" class="btn btn-primary">Danh sách sản phẩm</a>
</div>
<?php 
include_once 'footer.php';
?>