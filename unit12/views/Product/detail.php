<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Thong tin chi tiet</h1>
	<p><b>Mã sản phẩm: </b><?= $product['id'] ?></p>
	<p><b>Tên sản phẩm: </b><?= $product['name'] ?></p>
	<p><b>Màu sắc: </b><?= $product['color'] ?></p>
	<p><b>Giá bán: </b><?= number_format($product['price'])."&nbspVNĐ" ?></p>
	<a class='btn btn-warning' href="?mod=products&act=edit&id=<?= $product['id'] ?>">Sửa </a>
	<a href="?mod=products" class="btn btn-primary">Danh sách sản phẩm</a>
</body>
</html>