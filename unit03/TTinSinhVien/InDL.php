<?php 
echo "<h1>Thông tin sinh viên</h1>";
if (isset($_POST['HThanh'])) {
	$MaSv = $_POST['MaSv'];
	$TenSv = $_POST['TenSv'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$email = $_POST['email'];
	$DiaChi = $_POST['DiaChi'];

	if (isset($_POST['GioiTinh'])) {
		$GioiTinh = $_POST['GioiTinh'];
	}

	echo "<b>Mã sinh viên: </b>". $MaSv;
	echo "<br><b>Tên sinh viên: </b>". $TenSv;
	echo "<br><b>Số điện thoại: </b>". $PhoneNumber;
	echo "<br><b>Email: </b>". $email;
	echo "<br><b>Giới tính: </b>". $GioiTinh;
	echo "<br><b>Địa chỉ: </b>". $DiaChi;
}

?>