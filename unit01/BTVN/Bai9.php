<?php 

for ($i = 5; $i >= 1; $i--) {
	echo "<br>";
	for ($j = 1; $j <= 5; $j++) {
		if ($j >= $i) {
			echo " # ";
		} else {
			echo "&nbsp&nbsp&nbsp";
		}
	}
	echo "<br>";
}

?>