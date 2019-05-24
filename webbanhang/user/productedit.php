<?php include_once pathtodir.'lib/tbl_partner.php';
		include_once pathtodir.'lib/tbl_product_category.php';
		include_once pathtodir.'lib/tbl_manufacturer.php';
		include_once pathtodir.'lib/tbl_product.php';
		$cate=new ProductCategory();
		$manufacturerclass=new Manufacturer();
		$arrmanufer=$manufacturerclass->getArrayCategory("=");
		$arrcategory=$cate->getArrayCategory("=");
//server code
$pro=new Product();
$kw=new KW_Hook();
if($_POST['txtsubmit']==1)
{
		if(isset($_POST['txtnew']))
			$products_new=1;
		else 
			$products_new=0;	 
		$name=strip_tags($_POST['txtname']);
		$code=strip_tags($_POST['txtcode']);
		$sort=strip_tags($_POST['txtsort']);
		$price=strip_tags($_POST['txtprice']);
		$txtshortcontent=strip_tags($_POST['txtshortcontent']);
		$txtcontent=$_POST['txtcontent'];		
		$txtvanhanh=$_POST['txtvanhanh'];
		$txtcongnghe=$_POST['txtcongnghe'];
		$txttinhnang=$_POST['txttinhnang'];
		$txtthongso=$_POST['txtthongso'];
		$txttieuchuan=$_POST['txttieuchuan'];
		$txtcategory=strip_tags($_POST['txtcategory']);
		$txtmanuafer=strip_tags($_POST['txtmanuafer']);
		$txtsupplier=strip_tags($_POST['txtsupplier']);
		$image2=$_FILES['txtfile']; 
		$err=array(); 
		if(strlen(trim($name))<2)
		{
		    $err[]="Product name is short";
		}
	    if(count($err)==0)
	    {   
	    	$err=$pro ->EditProduct1($_GET['idproduct'],$code,$name,$image2,$price,$sort,$txtshortcontent,$txtcontent,$txtcategory,$txtmanuafer,$txtsupplier,$_SESSION['username'],$txtvanhanh,$txtcongnghe,$txttieuchuan,$products_new,$txttinhnang);    	
	    	if(count($err)==0)
	    	{
	    		//$kw->Redirect("?page=product&idcate=".$_GET['idcate']);
	    	}
	    }
}elseif($_POST['txtsubmit']==2)
{
		if(isset($_POST['txtnew']))
			$products_new=1;
		else 
			$products_new=0;	 
		$name=strip_tags($_POST['txtname']);
		$code=strip_tags($_POST['txtcode']);
		$sort=strip_tags($_POST['txtsort']);
		$price=strip_tags($_POST['txtprice']);
		$txtshortcontent=strip_tags($_POST['txtshortcontent']);
		$txtcontent=$_POST['txtcontent'];		
		$txtvanhanh=$_POST['txtvanhanh'];
		$txtcongnghe=$_POST['txtcongnghe'];
		$txttinhnang=$_POST['txttinhnang'];
		$txtthongso=$_POST['txtthongso'];
		$txttieuchuan=$_POST['txttieuchuan'];
		$txtcategory=strip_tags($_POST['txtcategory']);
		$txtmanuafer=strip_tags($_POST['txtmanuafer']);
		$txtsupplier=strip_tags($_POST['txtsupplier']);
		$image2=$_FILES['txtfile']; 
		$err=array(); 
		if(strlen(trim($name))<2)
		{
		    $err[]="Product name is short";
		}
	    if(count($err)==0)
	    {   
	    	$result=$pro ->InsertProduct2($code,$name,$image2,$price,$sort,$txtshortcontent,$txtcontent,$txtcategory,$txtmanuafer,$txtsupplier,$_SESSION['username'],$txtvanhanh,$txtcongnghe,$txttieuchuan,$products_new);
	    	
	    }
}
$product=$pro->GetProduct("products_id=".$_GET['idproduct']);	
?>
<style type="text/css">
	#content select {
	width: 250px !important;
	}
</style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Sửa sản phẩm</h1>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=product"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom2()"><img style="float: left;" title="Thêm nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
  <div class="grid_16" id="content">
    <div class="grid_15" id="textcontent">      
<form id="edit" action="" method="post"  enctype="multipart/form-data">
		<input name="txtsubmit" id="txtsubmit" value="0" type="hidden"/>
    	<label>Tên sản phẩm</label>
    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $product[0][2]; ?>"/>
    	<label>Mã số sản phẩm</label>
        <input type="text" class="smallInput" name="txtcode" value="<?php echo $product[0][1]; ?>"/>
        <label>Sắp sếp</label>
        <input type="text" class="smallInput" name="txtsort" value="<?php echo $product[0][9]; ?>"/>
        <label>Giá bán</label>
        <input type="text" class="smallInput" name="txtprice" value="<?php echo $product[0][5]; ?>"/>
        <label>Màu sắc</label>
        <input type="text" class="smallInput" name="txtvanhanh" value="<?php echo $product[0][20]; ?>"/>
        <label>Kích thước</label>
        <input type="text" class="smallInput" name="txttinhnang" value="<?php echo $product[0][25]; ?>"/>
        <label>Chất liệu</label>
        <input type="text" class="smallInput" name="txttieuchuan" value="<?php echo $product[0][22]; ?>"/>      
        <label>Đơn vị tính</label>
        <input type="text" class="smallInput" name="txtcongnghe" value="<?php echo $product[0][21]; ?>"/>
        <label>Sản phẩm mới </label>
        <input type="checkbox" class="smallInput" name="txtnew" <?php if($product[0][24]==1){?> checked="checked" <?php }?>/>   
        <label>Hình lớn</label>
        <input type="file" name="txtfile">
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label>Mô tả ngắn</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"><?php echo $product[0][10]; ?></textarea>
        </div>
        <label>Giới thiệu sản phẩm</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtoadmindir.'fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->Value=$product[0][11]; 
        	$fck->BasePath=pathtoadminweb."fckeditor/";
        	$fck->Height=600;
        	$fck->Create();
        	?>
        </div>     
        <label>Chọn danh mục</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcategory,'smallInput',$product[0][19],1);
        echo $out;
        ?>  <br /> 
        
    </form><br>
    <div class="clear"></div><br>    
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
	<script type="text/javascript" >
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
	function submitfrom2() {
		document.getElementById('txtsubmit').value=2;
		document.forms["edit"].submit();	
	}
	</script> 