<?php 

$tich =1;
for ($i=1; $i <9 ; $i++) { 
	$tich *= $i;
}
$tong =1;
for ($j=1; $j <9 ; $j++) { 
	$tong += $j/$tich;
}
echo "tổng S = 1 /1! + 2 /2! + ....+ 9 / 9! là: " .$tong;


 ?>