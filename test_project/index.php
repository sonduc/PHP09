<?php 
$mod = 'products';
$act = 'list';
if (isset($_GET['mod'])) {
	$mod = $_GET['mod'];
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
}

switch ($mod) {
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
	
	case 'salesmans':{
		include_once 'controllers/SalesmanController.php';
		$controller = new SalesmanController();
		switch ($act) {
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