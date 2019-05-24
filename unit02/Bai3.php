<?php 

$names = "Ngô Đức Sơn";

$arr = explode(" ", $names);

$arrlength = count($arr);

echo "<b> Chuỗi tên: </b>". $names;

echo "<br> Gồm :";
echo "<br>";

echo "<br>&nbsp&nbsp&nbsp&nbsp <b>Họ: </b>". $arr[0];

echo "<br>&nbsp&nbsp&nbsp&nbsp <b>Đệm: </b>";
for ($i=1; $i <$arrlength-1 ; $i++) { 
	echo $arr[$i];
}

echo "<br>&nbsp&nbsp&nbsp&nbsp <b>Tên: </b>". $arr[$arrlength-1];

?>