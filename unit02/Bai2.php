<?php 

$numbers = array(1,6,3,8,9,3);

$dem =0;
$arrlength = count($numbers);
echo "Dãy số: ";
for($x = 0; $x < $arrlength; $x++) {
	if ($numbers[$x] == "3") {
		$dem++;
	}
	echo $numbers[$x]." , ";
}

echo "<br><br> Số 3 xuất hiện ".$dem." lần";


?>