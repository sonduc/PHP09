<?php 


$tong =0;
for ($i = 1; $i < 10; $i++) {
	if( !($i%2) ){
		$tong = $i + $tong;
	}
}
echo "Tổng của 10 số đầu tiên là: " .$tong;
?>