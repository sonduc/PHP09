<?php 
echo "hello php 09";
echo "<h2>olalala</h2>";
echo "<h1>HIHIHI</h1>";

$name = "zent";
$old = 20;

echo "Xin chao " . $name . "Ban nam nay" . $old . " tuoi";

// Khai bao hang

define('PI',3.14);

echo "<br> pi = ".PI;

var_dump("<br>" .$name);
if ($old > 18){
	echo "<h2> Ban da thanh nien</h2>";
} else {
	echo "<h2> Em chua 18</h2>";
}

$thu =2;

switch ($thu) {
	case 2:
	echo "<h3>Hom nay la thu 2</h3>";
	break;

	case 3:
	echo "<h3>Hom nay la thu 3</h3>";
	break;

	case 4:
	echo "<h3>Hom nay la thu 4</h3>";
	break;

	case 5:
	echo "<h3>Hom nay la thu 5</h3>";
	break;

	case 6:
	echo "<h3>Hom nay la thu 6</h3>";
	break;

	case 7:
	echo "<h3>Hom nay la thu 7</h3>";
	break;

	default:
	echo "<h3>Hom nay la chu nhat</h3>";
	break;
}

for ($i=0; $i < 10 ; $i++)
	echo "<h3> a = $i</h3>";

$a=0;
while ($a <= 10) {
	echo "<h3> a = $a</h3>";
	$a++;
}
$a=0;
do {
	echo "<h3> a = $a</h3>";
	$a++;
} while ($a <= 10);

$a=10;
$b=20;
echo ($a>$b)?'a lon hon b':'b lon hon a';

$arr = array('Son','Nguyen','Tung');
foreach ($arr as $key => $value) {
	echo "<h1> $key</h1>";
	echo "<h1> $value</h1>";
}

foreach ($arr as $ten) {
	echo "<h1> $ten</h1>";

}

?>
