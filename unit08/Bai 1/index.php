<?php 
include ('SinhVien.php');

$sv = new SinhVien();

$sv->ten = "Sơn";
$sv->Nsinh = "1998";
$sv->QueQuan = "Hà Nội";
$sv->Gtinh = "Nam";
$sv->msv = "001";
$sv->lop = "10a2";
$sv->std = "0123465789";
$sv->email = "ndson98@email.com";


$sv->inThongTin();
?>