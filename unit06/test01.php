<?php 
/*date_default_timezone_set('Asia/Ho_Chi_Minh');
$timezone = DateTimeZone::listIdentifiers();
foreach($timezone as $item){
	echo $item .'<br>';
}
*/
echo time();

echo "<br>" . date('D/M/y');
echo "<br>" . date('h:i:s D/M/y');
$time_created = date('Y-m-d H:i:s');
echo "<br>MySQL datetime: ".$time_created;
echo "<br>Convert datetime to time (int): ". strtotime(date('Y-m-d H:i:s'));

$next = mktime(0,0,0,01+3,13+10,2018);
echo "<br>". date('d/m/Y', $next)
?>
