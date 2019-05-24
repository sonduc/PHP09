<?php 
session_start();
if (isset($_GET['id'])) {
	$code = $_GET['id'];

	var_dump($_SESSION[$code]);

	if (isset($_SESSION[$_GET['id']])) {
		unset($_SESSION[$code]);
	}
}
header('location:list.php')
?>
