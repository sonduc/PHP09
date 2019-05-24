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

	case 'categories':{
		include_once 'controllers/CategoryController.php';
		$categoryController = new CategoryController();
		switch ($act) {
			case 'list':
			$categoryController->list();
			break;

			case 'detail':
			$categoryController->detail();
			break;

			case 'add':
			$categoryController->add();
			break;

			default:
				# code...
				break;
		}
		break;
	}

	case 'users':{
		include_once 'controllers/UserController.php';
		$controller = new UserController();
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
	case 'products':{
		include_once 'controllers/ProductController.php';
		$controllerPro = new ProductController();
		switch ($act) {
			case 'list':
			$controllerPro->list();
			break;

			case 'add':
			$controllerPro->add();
			break;

			case 'edit':
			$controllerPro->edit();
			break;

			case 'update':
			$controllerPro->update();
			break;

			case 'delete':
			$controllerPro->delete();
			break;

			case 'detail':
			$controllerPro->detail();
			break;

			case 'store':
			$controllerPro->store();
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