<?php
$act = $_GET ['page'];
switch ($act) {
	case 'editmanufacture' :
		include_once 'editmanufacturer.php';
		break;
	case 'addmanufacture' :
		include_once 'newmanufacturer.php';
		break;
	case 'manufacture' :
		include_once 'manufacturer.php';
		break;
	case 'email' :
		include_once 'email.php';
		break;
	case 'viewproductkh' :
		include_once 'viewproductkh.php';
		break;
	case 'addproductkh' :
		include_once 'productkethop.php';
		break;
	case 'viewproductevent' :
		include_once 'viewproductevent.php';
		break;
	case 'addproduct' :
		include_once 'addproducttoevent.php';
		break;
	case 'oder' :
		$act = $_GET ['act'];
		if ($act == 'view')
			include_once 'oderview.php';
		else
			include_once 'order.php';
		break;
	case 'comment' :
		include_once 'comment.php';
		break;
	case 'customer' :		
		$act = $_GET ['act'];
		if ($act == 'add')
			include_once 'new_customers.php';
		else
			include_once 'customer.php'; 
		break;
	case 'contact' :
		include_once 'contact.php';
		break;
	case 'editevent' :
		include_once 'editevent.php';
		break;
	case 'eventnew' :
		include_once 'eventnew.php';
		break;
	case 'event' :
		include_once 'event.php';
		break;
	case 'contentcomment' :
		include_once 'content_comment.php';
		break;
	case 'logout' :
		include_once 'logout.php';
		break;
	case 'changepass' :
		include_once 'changepass.php';
		break;
	case 'edituser' :
		include_once 'useredit.php';
		break;
	case 'newuser' :
		include_once 'usernew.php';
		break;
	case 'user' :
		include_once 'user.php';
		break;
	case 'productcolor' :
		include_once 'productcolor.php';
		break;
	case 'mediacategorynew' :
		include_once 'mediacategorynew.php';
		break;
	case 'mediacategory' :
		include_once 'mediacategory.php';
		break;
	case 'newmedia' :
		include_once 'medianew.php';
		break;
	case 'media' :
		$act = $_GET ['act'];
		if ($act == "add")
			include_once 'medianew.php';
		elseif ($act == "edit")
			include_once 'contentedit.php';
		else
			include_once 'media.php';
		break;
	case 'categorytrash' :
		include_once 'categorytrash.php';
		break;
	case 'trashpartner' :
		include_once 'partnertrash.php';
		break;
	case 'editcontentcategory' :
		include_once 'contentcategoryedit.php';
		break;
	case 'contentcategorynew' :
		include_once 'contentcategorynew.php';
		break;
	case 'contentcategory' :
		$act = $_GET ['act'];
		if ($act == "add")
			include_once 'contentcategorynew.php';
		elseif ($act == "edit")
			include_once 'contentcategoryedit.php';
		else
			include_once 'contentcategory.php';
		break;
	case 'category' :
		$act = $_GET ['act'];
		if ($act == "add")
			include_once 'categorynew.php';
		elseif ($act == "edit")
			include_once 'categoryedit.php';
		else
			include_once 'category.php';
		break;
	case 'editcategory' :
		include_once 'categoryedit.php';
		break;
	case 'editpartner' :
		include_once 'partneredit.php';
		break;
	case 'newpartner' :
		include_once 'partnernew.php';
		break;
	case 'partners' :
		include_once 'partners.php';
		break;
	case 'trashproduct' :
		include_once 'producttrash.php';
		break;
	case 'editproduct' :
		include_once 'productedit.php';
		break;
	case 'product' :
		$act = $_GET ['act'];
		if ($act == "add")
			include_once 'productnew.php';
		elseif ($act == "edit")
			include_once 'productedit.php';
		elseif ($act == "image")
			include_once 'productimage.php';
		elseif ($act == "editimage")
			include_once 'productimagesedit.php';
		else
			include_once 'product.php';
		break;
	case 'trashcontent' :
		include_once 'contenttrash.php';
		break;
	case 'content' :
		$act = $_GET ['act'];
		if ($act == "add")
			include_once 'contentnew.php';
		elseif ($act == "edit")
			include_once 'contentedit.php';
		else
			include_once 'content.php';
		break;
	default :
		include_once 'companyinfor.php';
		break;
}
?>