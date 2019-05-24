<?php 

class nguoi{

	var $ten;
	var $tuoi;
	var $gioitinh;
	function __construct(){
		echo "ddf fdfdf doi tuong dc tao";
	}
	function ngu(){
		echo "ngumuon";
	}
} 

class hocsinh extends nguoi{
	var $ma;
	var $lop;

	function __construct($code, $cl){
		$this->ma = $code;
		$this->lop = $cl;
	}

	function hienthiTT($a){
		echo $a;
		echo "Ma: ".$this->ma."<br>"."lop: ".$this->lop;
	}

	public static function hs(){
		echo "day la ham hoc sinh static";
	}
}

/*$s = new hocsinh("123", "12");
$s->hienthiTT("ddfdf");*/

hocsinh::hs();


?>
