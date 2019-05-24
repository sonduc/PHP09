<?php 
class DongVat{
	var $ten;
	var $can_nang;
	var $mau;

	function an(){
		echo "<br>Dong vat an !";
	}

	function ngu(){
		echo "<br>Dong vat ngu ngon!";
	}
}


class Ca extends DongVat
{
	var $loai;

	function boi(){
		echo "<br> Ca boi rat nhanh !";
	}
}
$cathu = new Ca();
$cathu->ngu();
$cathu->boi();
?>