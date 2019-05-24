<?php 

session_start();
if ($_SESSION['login'] == true) {
	echo "Admin";
	echo "<a href='logout.php'> <br> logout </a> ";
}else{
	header('location: login.php');
}

 ?>