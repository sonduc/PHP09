<?php 

$ThongTin = array(

	"HoTen" => "Ngô Đức Sơn",
	"Lop" => "PHP-09",
	"Truong" => "uneti",
	"GioiTinh" => "Nam",
	"NgaySinh" => "28",
	"QueQuan" => "Hà Nội",

);

echo "<h1> THÔNG TIN SINH VIÊN</h1>";
echo "<br><b>Họ và tên: </b>". $ThongTin['HoTen'];
echo "<br><br><b>Lớp: </b>". $ThongTin['Lop'];
echo "<br><br><b>Trường: </b>". $ThongTin['Truong'];
echo "<br><br><b>Giới Tính: </b>". $ThongTin['GioiTinh'];
echo "<br><br><b>Ngày Sinh: </b>". $ThongTin['NgaySinh'];
echo "<br><br><b>Quê Quán: </b>". $ThongTin['QueQuan'];


?>