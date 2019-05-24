<?php session_start();
include_once pathtodir.'lib/tbl_content_category.php';
$cate=new ContentCategory();
$arrcate=$cate->getArrayCategory("=",0);
include_once pathtodir.'lib/tbl_content.php';
$c=new Content();
$idcontent=$_GET['id'];
$idcate=$_GET['idcate'];
if($_POST['txtsubmit']==1)
{
	$name = strip_tags ( $_POST ['txtname'] );
	$sort = strip_tags ( $_POST ['txtsort'] );
	$txtshortcontent = strip_tags ( $_POST ['txtshortcontent'] );
	$content = $_POST ['txtcontent'];
	$image = $_FILES ['txtimage'];
	$category = $_POST ['txtcategory'];
	$tagedit = $_POST ['txttagedit'];
	$keytag = $kw->ReplaceUnicode( $tagedit );
	$result = $c->UpdateContent ( $name, $content, $txtshortcontent, $category, $image, $sort, $tagedit, $keytag, $_SESSION ['username'], $idcontent );
	if($result)
	{
		//$success
		//$kw->Redirect("?page=content&idcate=".$idcate);
		echo "<script>confirm('Bài viết đã thay đổi thành công !');</script>";  
		//$err[]="Bài viết đã thay đổi thành công !";
	}
	else 
	{
		$err[]="Erorr";
	}
}
$contentedit=$c->GetContent("contents_id='{$idcontent}' and status=1");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
	$(".group1").colorbox({rel:'group1'});				
	});
</script>
<style type="text/css">
	#content select {
	width: 150px !important;
	}
</style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		 <h1 class="content_edit">Sửa bài viết</h1>
	</div>
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=content&idcate=<?php echo $_GET['idcate']?>"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
  <div class="grid_16" id="content"> 
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">   
    <?php if($contentedit[0][6]!=""){?> 
    	<a class="group1" href="<?php echo pathtoweb."content/".$contentedit[0][6]?>"><img src="<?php echo pathtoweb."content/".$contentedit[0][6]?>" style="max-height: 40px" title="Click để xem anh đầy đủ"></a>
    <?php }?>
<form id="edit" name="edit" enctype="multipart/form-data" action=""
	method="post"><input type="hidden" id="txtsubmit" name="txtsubmit"
	value="0"> <input type="hidden" id="txtmess" name="txtmess"> <label>Tiêu
đề</label> <input type="text" class="smallInput wide" name="txtname"
	value="<?php
	echo $contentedit [0] [1]?>"> <label>Hình ảnh</label> <input
	type="file" class="smallInput wide" name="txtimage"> <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
<label>Nội dung ngắn</label>
<div style="width: 896px;" class="wysiwyg"><textarea
	name="txtshortcontent" rows="5" cols="109"> <?php
	echo $contentedit [0] [4]?></textarea>
</div>
<label>Nội dung</label>
<div style="width: 896px;" class="wysiwyg">
        	<?php
			include_once pathtodir . 'user/fckeditor/fckeditor_php5.php';
			$fck = new FCKeditor ( "txtcontent" );
			$fck->Value = $contentedit [0] [5];
			$fck->Height = 600;
			$fck->BasePath = pathtoweb . "user/fckeditor/";
			$fck->Create ();
			?>
        </div>
<label>Chọn danh mục</label>
         <?php
			 $out = $cate->comboCategory ( 'txtcategory', $arrcate, 'smallInput', $contentedit [0] [3], 1 );
			  echo $out;
			 ?>  
        <label>Thứ tự</label> <input type="text" class="smallInput wide"
	style="width: 150px" name="txtsort"> <label><?php
	echo tagedit?></label>
<input type="text" class="smallInput wide" name="txttagedit"
	value="<?php
	echo $contentedit [0] [13];
	?>"> <!-- BUTTONS --> 
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
</script> 
  