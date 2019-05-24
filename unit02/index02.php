<?php 

$infos = array(
	"id" => "0123456789",
	"name" => "Ngo Duc Son",
	"gender" => "Nam",
	"date_of_birth" => "28/09/1998",
	"country" => "VietNam",
	"email" => "ndson1998@gmail.com",
	"mobile" => "0123456789",

);

$info0 = array (
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




 $info = array(); 

    $info[] = array(
        'ID'   =>  '20092670',
        'NAME'   =>  'Vu Van Thuong',
        'PHONE'   =>  '0966629190',
        'EMAIL'   =>  'thuongvv.hut@gmail.com',

    );

    $info[] = array(
        'ID'   =>  '20092671',
        'NAME'   =>  'Dinh Hoai Nam',
        'PHONE'   =>  '012346567899',
        'EMAIL'   =>  'namdinhhoai@gmail.com',

    );

    
   // Đọc thông tin của mảng

   foreach($info as $key => $student){
       echo "<br> Thông tin sinh viên thứ " . ($key+1);
       echo "<br> - Mã sinh viên: " . $student['ID'];
       echo "<br> - Họ tên sinh viên: " . $student['NAME'];
       echo "<br> - Số điện thoại: " . $student['PHONE'];
       echo "<br> - Email: " . $student['EMAIL'];
   }
?>