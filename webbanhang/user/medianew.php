<?php session_start();
include_once pathtodir.'lib/tbl_mediacategory.php';
$cate=new MediaCategory();
$arrcate=$cate->getArrayCategory("=",0);
include_once pathtodir.'lib/tbl_media.php';
$c=new Media();
if($_POST['txtsubmit']==1)
{
	$name=strip_tags($_POST['txtname']);
	$sort=strip_tags($_POST['txtsort']);
	$txtshortcontent=strip_tags($_POST['txtshortcontent']);
	$image=$_FILES['txtimage'];
	$category=$_POST['txtcategory'];
	$height=$_POST['txtheight'];
	$width=$_POST['txtwidth'];
	$loaifile=$_POST['cbloaifile'];
	$result=$c->InsertContent($name,$txtshortcontent,$category,$image,$sort,$_SESSION['username'],$height,$width,$loaifile);
	if($result)
	{
		$kw->Redirect('?page=newmedia');;
	}
	else 
	{
		$err[]="Lổi";
	}
}
?>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Thêm nội dung</h1>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=media"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
  <div class="grid_16" id="content">
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">    
<form id="edit" name="edit" enctype="multipart/form-data" action="" method="post" >
<input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
<input type="hidden" id="txtmess" name="txtmess">
    	<label><?php echo title?></label>
        <input type="text" class="smallInput wide" name="txtname">
        <label>Chiều cao (height)</label>
        <input type="text" class="smallInput" name="txtheight">
        <label>Chiều rộng (width)</label>
        <input type="text" class="smallInput" name="txtwidth">
        <label>Chọn file</label>
        <input type="file" class="smallInput" name="txtimage">
        <label>Chọn loại file</label>
        <select name="cbloaifile">
        	<option value="1">File hình ảnh</option>
        	<option value="2">File flash</option>
        </select>
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label><?php echo shortcontent?></label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"></textarea>
        </div>       
        <label>Vui lòng chọn <?php echo category?></label>
         <?php 
        $out=$cate->comboCategory('txtcategory',$arrcate,'smallInput',$category[0][2],1);
        echo $out;
        ?>  
        <label><?php echo sort?></label>
        <input type="text" class="smallInput" name="txtsort">     
       
    </form><br>

      
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
  <script type="text/javascript" >
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
	</script> 
  