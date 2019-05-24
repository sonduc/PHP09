<?php 
include_once 'connection.php';
// Cau lenh truy van co so du lieu
$query = "SELECT * FROM `products`";

// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);
?>
<div id="page-wrapper">
    <h1>Danh sách sản phẩm</h1>

	<div class="container">
		<?php if(isset($_COOKIE['add'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['add'];?>
		</div>
		<?php } ?>
		
		<?php if(isset($_COOKIE['delete'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['delete'];?>
		</div>
		<?php } ?>

		<?php if(isset($_COOKIE['update'])) { ?>
		<div class="alert alert-success">
			<strong>Success!</strong> <?php echo $_COOKIE['update'];?>
		</div> 
		<?php } ?>

		<a href="addSp.php" class="btn btn-primary">Thêm mới sản phẩm</a>	
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Màu</th>
					<th>Giá tiền</th>			
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row = $result->fetch_assoc()) { ?>
				<tr>
					<td><?= $row['id'] ?></td>
					<td><?= $row['name'] ?></td>
					<td><?= $row['color'] ?></td>
					<td><?= number_format($row['price']) ?></td>
					<td>
						<a class='btn btn-info' href="detailSp.php?id=<?= $row['id'] ?>">Xem </a>	
						<a class='btn btn-warning' href="update.php?id=<?= $row['id'] ?>">Sửa </a>	
						<a class='btn btn-danger delete' href="deleteSp.php?id=<?= $row['id'] ?>">Xóa </a>	
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
    
</div>
