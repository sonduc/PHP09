<?php 


Class Connection{
	public $conn;
	public function __construct(){
			// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21	
	$username = "root"; // ten dang nhap
	$password = ""; // mat khau rong
	$dbname = "project";	// db ,uon ket noi


	// Tao ra ket noi den CSDL connection
	$this->conn = new mysqli($servername,$username,$password,$dbname);

	$this->conn->set_charset("utf8"); // set utf-8 de doc du lieu tieng viet

	// check connection
	if ($this->conn->connect_errno){
		die("Connection failed: ".$this->conn->connect_errno);
		}

	}

}
?>