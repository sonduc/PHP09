<?php
$act=$kw->GetParamater($uri,1);
switch ($act){
case '15':
	include_once 'lib/tbl_product_category.php';
	$productcategoryclass=new ProductCategory();
	$idcategory=$kw->GetParamater($uri,2);
	$productcategory=$productcategoryclass->GetCategory("categories_id=".$idcategory);
	?>
	<title><?php echo $productcategory[0][1]?> | Babyshops.com.vn </title>
	<?php 
	break;
case '05':
$contentid=$kw->GetParamater($uri,2);
include_once 'lib/tbl_content.php';
$contentclass=new Content();
$content=$contentclass->GetContent("contents_id='".$contentid."'");
	?>
	<title><?php echo $content[0][1]?>| Babyshops.com.vn </title>
	<?php 
	break;
case '04':

	?>
	<title>Tin thời trang | Babyshops.com.vn </title>
		<meta name="description" content="babyshop.com.vn Chuyên bán quần áo trẻ em, thời trang cho em bé yêu của bạn. Quần áo cho bé trai, quần áo trẻ em gái, thời trang trẻ em cực nhiều mẫu mã..." />
	<?php 
	break;
case '03':
$idproduct=$kw->GetParamater($uri,2);
include_once 'lib/tbl_product.php';
$productclass=new Product();
$product=$productclass->GetProduct("products_id='".$idproduct."'");
	?>
	<title><?php echo $product[0][2]?>| Babyshops.com.vn </title>



	<?php 
	break;
case '01':
	include_once 'lib/tbl_product_category.php';
	$productcategoryclass=new ProductCategory();
	$idcategory=$kw->GetParamater($uri,2);
	$productcategory=$productcategoryclass->GetCategory("categories_id=".$idcategory);
	?>
	<title><?php echo $productcategory[0][1]?> | Babyshops.com.vn </title>
	<?php 
	break;
default:
	?>
	<title>Babyshops.com.vn | Quần áo trẻ em cao cấp | Áo thun cao cấp giá rẻ</title>
	<?php 
}
?>