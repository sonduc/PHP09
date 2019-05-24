<?php 
session_start();

/*print_r($_SESSION);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 style="text-align: center;">DANH SÁCH SINH VIÊN</h1>
	<form>
		<div class="container">
			<?php echo "<a href='add.php' class='btn btn-primary' >Thêm mới</a>"; ?>

			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã sinh viên</th>
						<th>TÊN</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					$i= 0;
					foreach ($_SESSION as $key => $value ) { 
						$i++;
						?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td>
								<?php  
								echo "<a class='btn btn-info'href='detail.php?id=".$value['id']."'>Thông tin</a>";
								?>
								<?php  
								echo "<a class='btn btn-danger' href='delete.php?id=".$value['id']."'>Xóa</a>";
								?>	
								<?php
								echo "<a class='btn btn-success'href='email_function.php?id=".$value['id']."'>Gửi email</a>";
								?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</form>


	</body>
	</html>
