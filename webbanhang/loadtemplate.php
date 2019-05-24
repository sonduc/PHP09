<?php session_start();
$page=$kw->GetParamater($uri,1);
switch ($page)
{
	case '15':		
		include_once 'template/category.php';
		break;
	case '14':		
		include_once 'template/contact.php';
		break;
	case '13':		
		include_once 'template/complete.php';
		break;
	case '12':		
			if(isset($_SESSION['giohang']))
				unset($_SESSION['giohang']);
			if(isset($_SESSION['customer']))
				unset($_SESSION['customer']);
		$kw->Redirect(pathtoweb);
		break;
	case '11':		
		include_once 'template/cart.php';
		break;
	case '10':		
		include_once 'template/signin.php';
		break;
	case '09':		
		include_once 'template/check_customer_infor.php';
		break;	
	case '07':		
		include_once 'template/signin.php';
		break;
	case '06':		
		include_once 'template/registration.php';
		break;
	case '05':		
		include_once 'template/detailnews.php';
		break;
	case '04':
		include_once 'template/news.php';
		break;
	case '03':
		include_once 'template/chitietsanpham.php';
		break;
	case '02':
		include_once 'template/product.php';
		break;
	case '01':
		include_once 'template/productcategory.php';
		break;
	default:
		include_once 'template/home.php';
		break;
}
?>