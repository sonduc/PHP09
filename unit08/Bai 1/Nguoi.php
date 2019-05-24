<?php 
class Nguoi{
	var $ten;
	var $Nsinh;
	var $QueQuan;
	var $Gtinh;

	function inThongTin(){
		echo "<br><b>Tên: </b>".$this->ten;
		echo "<br><b>Năm sinh: </b>".$this->Nsinh;
		echo "<br><b>Quê quán: </b>".$this->QueQuan;
		echo "<br><b>Giới tính: </b>".$this->Gtinh;
	}
}

?>