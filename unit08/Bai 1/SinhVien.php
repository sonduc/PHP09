<?php 
include ('Nguoi.php');

class SinhVien extends Nguoi
{
	var $msv;
	var $lop;
	var $std;
	var $email;
	function inThongTin()
	{
		parent::inThongTin();
		echo "<br><b>Mã sinh viên: </b>".$this->msv;
		echo "<br><b>Lớp: </b>".$this->lop;
		echo "<br><b>Số điện thoại: </b>".$this->std;
		echo "<br><b>Email: </b>".$this->email;
		
	}
}
?>