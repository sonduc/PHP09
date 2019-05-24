<?php 
session_start();

$mod = 'index';
$act = '';

if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
}

if(!isset($_SESSION['loginNv'])){
	$mod = 'salesmans';
	$act = 'login';
}
/*if(isset($_SESSION['loginNv'])){
	$mod = 'products';
	$act = 'list';
}else{
	header("?mod=salesmans&act=login");	
}*/
switch ($mod) {	
	case 'index':{
		include_once("views/home.php");
	}
	case 'clients':{
		include_once 'controllers/ClientController.php';
		$ClientController = new ClientController();
		switch ($act) {
			case 'list':{
				$ClientController->list();
				break;
			}
			case 'detail':{
				$ClientController->detail();
				break;
			}
			case 'search':{
				$ClientController->search();
				break;
			}
			case 'add':{
				$ClientController->add();
				break;
			}
			case 'store':{
				$ClientController->store();
				break;
			}
			case 'edit':{
				$ClientController->edit();
				break;
			}
			case 'update':{
				$ClientController->update();
				break;
			}
			case 'delete':{
				$ClientController->delete();
				break;
			}	
			default:
				# code...
			break;
		}
		break;
	}
	
	case 'sales':{
		include_once 'controllers/SalesController.php';
		$controller = new SalesController();
		switch ($act) {
			case 'ShowSp':{
				$controller->ShowSp();
				break;
			}
			case 'add_to_cart':{
				$controller->add_to_cart();
				break;
			}
			case 'add_to_cart_ajax':{
				$id = $_GET['id'];
				$controller->add_to_cart_ajax($id);
				break;
			}
			case 'cartSp':{
				$controller->cartSp();
				break;
			}
			case 'deleteCart':{
				$controller->deleteCart();
				break;
			}
			case 'fromCheck':{
				$controller->fromCheck();
				break;
			}
			case 'checkClient':{
				$controller->checkClient();
				break;
			}
			case 'bill':{
				$id_client = $_GET['id'];
				$controller->bill($id_client);
				break;
			}
			case 'manageBill':{
				$controller->manageBill();
				break;
			}
			
			default:
				# code...
				break;
		}
	}
	case 'salesmans':{
		include_once 'controllers/SalesmanController.php';
		$controller = new SalesmanController();
		switch ($act) {
			case 'login':{
				$controller->login();
				break;
			}
			case 'Logout':{
				$controller->Logout();
				break;
			}
			case 'list':{
				$controller->list();
				break;
			}
			case 'detail':{
				$controller->detail();
				break;
			}
			case 'search':{
				$controller->search();
				break;
			}
			case 'add':{
				$controller->add();
				break;
			}
			case 'store':{
				$controller->store();
				break;
			}
			case 'edit':{
				$controller->edit();
				break;
			}
			case 'update':{
				$controller->update();
				break;
			}
			case 'delete':{
				$controller->delete();
				break;
			}	
			default:
				# code...
			break;
		}
		break;
	}

	case 'products':{
		include_once 'controllers/ProductController.php';
		$controller = new ProductController();
		switch ($act) {
			case 'list':{
				$controller->list();
				break;
			}
			case 'ShowSp':{
				$controller->ShowSp();
				break;
			}
			case 'add_to_cart':{
				$controller->add_to_cart();
				break;
			}
			case 'cartSp':{
				$controller->cartSp();
				break;
			}
			case 'deleteCart':{
				$controller->deleteCart();
				break;
			}
			case 'detail':{
				$controller->detail();
				break;
			}
			case 'search':{
				$controller->search();
				break;
			}
			case 'add':{
				$controller->add();
				break;
			}
			case 'store':{
				$controller->store();
				break;
			}
			case 'edit':{
				$controller->edit();
				break;
			}
			case 'update':{
				$controller->update();
				break;
			}
			case 'delete':{
				$controller->delete();
				break;
			}	
			default:
				# code...
			break;
		}
		break;
	}
}
?>