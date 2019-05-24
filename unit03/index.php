<?php 

/*echo "<pre>";
print_r($_GET);
echo "</pre>";

if(isset($_GET['name'])){
	echo "<br> Xin chào ". $_GET['name'];
}*/

$mod =' ';
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
}

switch ($mod) {
	case 'user':
	echo "<br> Chức năng quản lí người dùng";
	break;

	case 'curstom':
	echo "<br> Chức năng quản lí khách hàng";
	break;

	case 'product':
	echo "<br> Chức năng quản lí sản phẩm";
	break;
	default:
		# code...
	break;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ul>
		<li><a href="?mod=user">Chức năng quản lí người dùng</a></li>
		<li><a href="?mod=curstom">Chức năng quản lí khách hàng</a></li>
		<li><a href="?mod=product">Chức năng quản lí sản phẩm</a></li>
		
	</ul>
</body>
</html>