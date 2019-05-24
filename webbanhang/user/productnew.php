<?php   include_once pathtodir.'lib/tbl_partner.php';
		include_once pathtodir.'lib/tbl_product_category.php';
		include_once pathtodir.'lib/tbl_product.php';        
		$cate=new ProductCategory();
		$arrcategory=$cate->getArrayCategory("=");
		include_once pathtodir.'lib/tbl_manufacturer.php';
		$manufacturerclass=new Manufacturer();
		$arrmanufer=$manufacturerclass->getArrayCategory("=");
//server code
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
			$imagel=$_FILES['txtfile'];
			$err=array();	
			if(strlen(trim($name))<2)
			{
				$err[]="Product name is short";
			}
			if(count($err)==0)
			{
				$pro=new Product();
				$result=$pro ->InsertProduct2($code,$name,$imagel,$price,$sort,$txtshortcontent,$txtcontent,$txtcategory,$txtmanuafer,$txtsupplier,$_SESSION['username'],$txtvanhanh,$txtcongnghe,$txttieuchuan,$products_new,$txttinhnang);
				if($result)
				{
					$kw->Redirect("?page=product");
				}
				else
				{
					$err[]="Error run time";
				}
			}
	}
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script>  
<style type="text/css">
	#content select {
	width: 250px !important;
	}
</style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Thêm sản phẩm</h1>
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
	</div>	
</div>
  <div class="grid_16" id="content">   
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15">
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
    	<label><?php echo productname?></label>
    	<input type="text" class="smallInput wide" name="txtname">
    	<label>Mã số sản phẩm</label>
        <input type="text" class="smallInput" name="txtcode">
        <label>Giá bán</label>
        <input type="text" class="smallInput" name="txtprice">
        <label>Màu sắc</label>
        <input type="text" class="smallInput" name="txtvanhanh" value=""/>
        <label>Kích thước</label>
        <input type="text" class="smallInput" name="txttinhnang" value=""/>
        <label>Chất liệu</label>
        <input type="text" class="smallInput" name="txttieuchuan" value=""/>  
        <label>Đơn vị tính</label>
        <input type="text" class="smallInput" name="txtcongnghe">  
        <label>Sản phẩm mới</label>
        <input type="checkbox" class="smallInput" name="txtnew" />
        <label>Hình đầy đủ</label>
        <input type="file" name="txtfile">        
        <label>Mô tả ngắn</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"></textarea>
        </div>
        <label>Giới thiệu sản phẩm</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtoadmindir .'fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoadminweb."fckeditor/";
        	$fck->Height=600;
        	$fck->Create();
        	?>
        </div>       
            
      	<br />
        <label>Chọn danh mục</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcategory,'smallInput',0,1);
        echo $out;       
        ?>     <br/>       
      
       </form><br>
    </div>
<!-- END CONTENT-->    
  </div>