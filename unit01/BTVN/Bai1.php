<?php 

echo "<h1>IN BẢNG MÃ ASCII DÙNG FOR<br></h1>";
echo "Hệ thập phân" . "&nbsp&nbsp" . "ASCII"."<br>";
for ($i=32; $i < 127; $i++) { 
	echo "$i " . "&nbsp&nbsp&nbsp&nbsp" . chr($i) ." <br>";
}


echo "<h1>IN BẢNG MÃ ASCII DÙNG WHILE<br></h1>";
echo "Hệ thập phân" . "&nbsp&nbsp" . "ASCII"."<br>";
$k =32;
while ($k < 127) {
	echo "$k" ."&nbsp&nbsp&nbsp&nbsp" . chr($k) ."<br>";
	$k++;
}

echo "<h1>IN BẢNG MÃ ASCII DÙNG DO...WHILE<br></h1>";
echo "Hệ thập phân" . "&nbsp&nbsp" . "ASCII"."<br>";
$m =32;
do {
	echo "$m" ."&nbsp&nbsp&nbsp&nbsp" . chr($m) ."<br>";
	$m++;
} while ($m < 127);

?>

