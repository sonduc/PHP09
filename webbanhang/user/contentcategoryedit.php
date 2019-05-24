<?php session_start(); include_once pathtodir.'lib/tbl_content_category.php';
//server code
$cate=new ContentCategory();
if($_POST['txtsubmit']==1)
	{
		$name=strip_tags($_POST['txtname']);
		$sort=strip_tags($_POST['txtsort']);
		$code=strip_tags($_POST['txtcode']);
		$image=$_FILES['txtimages'];
		$info=$_POST['txtcontent'];
		$category=$_POST['txtcategory'];
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Category name is short";
		}
		if(count($err)==0)
		{			
			$result=$cate->UpdateCategory($name,$info,$category,$image,$sort,$_GET['id'],$_SESSION['usermane'],$code);
			if($result)
			{
				$kw->Redirect("?page=contentcategory");
			}
			else
			{
				$err[]="Error run time";
			}
		}
	}
$category=$cate->GetCategory("categories_id=".$_GET['id']);
$arrcate=$cate->getArrayCategory("=",0);
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Sửa sản phẩm</h1>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=contentcategory"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
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
    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $category[0][0]?>">
    	<label>Mã danh mục</label>
        <input type="text" class="smallInput" name="txtcode"  value="<?php echo $category[0][9]?>">
        <label>Thứ tự</label>
        <input type="text" class="smallInput" name="txtsort"  value="<?php echo $category[0][7]?>">
        <label>Hình đại diện</label>
        <input type="file" name="txtimages">
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
				<textarea rows="10" cols="10" name='txtcontent'><?php echo $category[0][3] ?></textarea>
        	
        </div>
        <label>Chọn danh mục cấp trên</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcate,'smallInput',$category[0][2],1);
        echo $out;
        ?>
    </form><br>

    <div class="clear"></div><br>
    
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>