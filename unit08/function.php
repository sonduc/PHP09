<?php 

function Intt($name,$old,$address){
	echo "<br>Hello: ".$name;
	echo "<br>Old: ".$old;
	echo "<br>Address: ".$address;
}
Intt("Zent",3,"Hanoi");

function tinhTong($a,$b){
	return ($a+$b);
}
echo "<br>Tổng a+b: ".tinhTong(4,5);
?>