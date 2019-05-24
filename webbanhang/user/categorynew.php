<?php session_start(); include_once pathtodir.'lib/tbl_product_category.php';
//server code
$cate=new ProductCategory();
if($_POST['txtsubmit']==1)
	{
		$name=strip_tags($_POST['txtname']);
		$sort=strip_tags($_POST['txtcode']);
		$image=$_FILES['txtimages'];
		$info=$_POST['txtcontent'];
		$category=$_POST['txtcategory'];
        if(isset($_POST['txtcheck']))
        {
            $tieubieu=1;
        }
        else
        {
            $tieubieu=0;
        }
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Category name is short";
		}
		if(count($err)==0)
		{			
			$result=$cate->InsertCategory($name,$info,$category,$image,$sort,$_SESSION['usermane'],$tieubieu);
			if($result)
			{
				$success='A new category was added';
				$kw->Redirect("?page=category");
			}
			else
			{
				$err[]="Error run time";
			}
		}
	}
$arrcate=$cate->getArrayCategory();
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Thêm danh mục</h1>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=category"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
<div class="grid_16" id="content">
    <div class="grid_15" id="textcontent">    
<form id="edit" name="edit" enctype="multipart/form-data" action="" method="post" >
<input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
<input type="hidden" id="txtmess" name="txtmess">
    	<label>Tên danh mục</label>
    	<input type="text" class="smallInput wide" name="txtname">
    	<label>Sắp xếp</label>
        <input type="text" class="smallInput" name="txtcode">
        <label>Hình đại diện</label>
        <input type="file" name="txtimages">
        <label>Tiêu biểu</label>
        <input type="checkbox" name="txtcheck">
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtoadmindir.'fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoadminweb."fckeditor/";
        	$fck->Create();
        	?>
        </div>
        <label>Danh mục trên</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcate,'smallInput',0,1);
        echo $out;
        ?>             <br />      
    </form><br>
   
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>