<?php 
class Oto{
	var $name;
	var $branch;
	var $color;

	function inTT(){
		echo "<br>Car information<br>";
		echo "<br> Name: ".$this->name;
		echo "<br> Branch: ".$this->branch;
		echo "<br> Color: ".$this->color;
	}
}

$bmw = new Oto();
$bmw->name = "BMW X6";
$bmw->branch = "BMW";
$bmw->color = "White";

$bmw->inTT();

?>
