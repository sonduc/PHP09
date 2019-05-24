<?php 

$names = array();

$names [] = "son";
$names [] = "trung";
$names [] = "hieu";
$names [] = "duc";
$names [] = "tung";

echo "<pre>";
print_r($names);
echo "</pre>";


foreach ($names as $name) {
	echo "<br> Xin Chao ". $name ;
}

// Mảng không tuần tự - mảng kết hợp
$infos = array(
	"id" => "0123456789",
	"name" => "Ngo Duc Son",
	"gender" => "Nam",
	"date_of_birth" => "28/09/1998",
	"country" => "VietNam",
	"email" => "ndson1998@gmail.com",
	"mobile" => "0123456789",

);

echo "<pre>";
print_r($infos);
echo "</pre>";

echo "<br><br> <b> STUDENT INFORMATION </b>";
echo "<br> <b> Code: </b>". $infos['id'];
echo "<br> <b> name: </b>". $infos['name'];
echo "<br> <b> gender: </b>". $infos['gender'];
echo "<br> <b> date_of_birth: </b>". $infos['date_of_birth'];
echo "<br> <b> country: </b>". $infos['country'];
echo "<br> <b> email: </b>". $infos['email'];
echo "<br> <b> mobile: </b>". $infos['mobile'];

$info0 =array (
	"id" => "112233",
	"name" => "Son",
	"gender" => "Nam",
	"date_of_birth" => "28/09/1998",
	"country" => "VietNam",
	"email" => "ndson1998@gmail.com",
	"mobile" => "0123456789",
	"subject" => array(
		"java",
		"PHP",
		"Front-End"
	)
);

echo "<br> ". $info0['name'];
echo "<br>". $info0['subject'][0];
?>