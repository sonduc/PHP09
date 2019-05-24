<?php 
include 'connection.php';

/*while($row = $result->fetch_assoc()) {
	echo "<pre>";
	print_r($row);
	echo "</pre>";
}*/
// Cau lenh truy van co so du lieu
$query = "SELECT * FROM `users`";

// Thuc thi cau lenh truy van co so du lieu
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="user_add.php">Them moi</a>
	<table border="1px">
		<tr>
			<td align="center">ID</td>
			<td align="center">Name</td>
			<td align="center">Email</td>
			<td align="center">Moblie</td>
			<td align="center">Created at</td>
			<td align="center">Status</td>
			<td align="center">Action</td>
		</tr>
		<?php  while($row = $result->fetch_assoc()) { ?>
		<tr>
			<td align="center"><?= $row['id'] ?></td>
			<td align="center"><?= $row['name'] ?></td>
			<td align="center"><?= $row['email'] ?></td>
			<td align="center"><?= $row['moblie'] ?></td>
			<td align="center"><?= $row['created_at'] ?> </td>
			<td align="center"><?= $row['status'] ?></td>
			<td align="center"><a href="user_detail.php?id=<?= $row['id'] ?>">Detail</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>