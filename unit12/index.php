<?php 
$mod = 'index';
$act = "list";
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
}

switch ($mod) {
	case 'index':
	// echo "Đây là trang chủ";
	// echo "<br>Quản lý users: <a href='?mod=users'>User</a>";
	include_once("views/home.php");
	break;

	case 'products':{
		include_once 'controllers/ProductController.php';
		$controller = new ProductController();
		switch ($act) {
			case 'list':
			$controller->list();
			break;

			case 'add':
			$controller->add();
			break;

			case 'edit':
			$controller->edit();
			break;

			case 'update':
			$controller->update();
			break;

			case 'delete':
			$controller->delete();
			break;

			case 'detail':
			$controller->detail();
			break;

			case 'store':
			$controller->store();
			break;

			default:
			$controller->error();
			break;

		}
		break;
	}
	
	case 'staff':{
		echo "Đây là trang nhân viên";
		switch ($act) {
			case 'list':
			echo "<br>Xem danh sách nhân viên";
			break;

			case 'add':
			echo "<br>Thêm mới nhân viên";
			break;

			case 'edit':
			echo "<br>Thông tin nhân viên";
			break;

			case 'delete':
			echo "<br>Xóa thông tin nhân viên";
			break;

			default:
			echo "404";
			break;

		}
		break;
	}
	default:
	echo "404";

}

?>