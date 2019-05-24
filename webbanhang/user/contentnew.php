<?php session_start();
include_once pathtodir.'lib/tbl_content_category.php';
$cate=new ContentCategory();
$arrcate=$cate->getArrayCategory("=",0);
include_once pathtodir.'lib/tbl_content.php';
$c=new Content();
if($_POST['txtsubmit']==1)
{
	$name=strip_tags($_POST['txtname']);
	$sort=strip_tags($_POST['txtsort']);
	$txtshortcontent=strip_tags($_POST['txtshortcontent']);
	$content=$_POST['txtcontent'];
	if(uploaddeny==0)
		$image=$_FILES['txtimage'];
	else 
		$image=$_FILES['txtimage'];
	$category=$_POST['txtcategory'];
	$result=$c->InsertContent($name,$content,$txtshortcontent,$category,$image,$imagename,$sort,$_SESSION['username']);
	if($result)
	{
		$kw->Redirect('?page=content');
	}
	else 
	{
		$err[]="Erorr";
	}
}
$images=$kw->GetFileNaneFromDir(pathtodir."content/");
?>
<div class="grid_16" id="content">
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
<form id="edit" name="edit" enctype="multipart/form-data" action="" method="post" >
		<input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
		<input type="hidden" id="txtmess" name="txtmess">
    	<label><?php echo title?></label>
        <input type="text" class="smallInput wide" name="txtname">
        <?php 
        if(uploaddeny==0)
        {
        ?>
        <label><?php echo images?></label>
        <input type="file" class="smallInput" name="txtimage">
        <?php }else{ ?>
        <label>Tên hình đại diện</label><input type="text" id="hinhdaidienselect">
        <input value="Chọn hình đại diện" type="button" id="hinhdaidien"><br>
        <div class="grid_8" style="display: none;" id="hinhdaidiencontent">
        	<?php include_once 'filefromdir.php';?>
        </div>
        <?php } ?>
        <br/>
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label style="width: 100%;float: left;"><?php echo shortcontent?></label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"></textarea>
        </div>
        <label><?php echo content?></label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtoadmindir.'fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoadminweb."fckeditor/";
        	$fck->Height=600;
        	$fck->Create();
        	?>
        </div>
        <label>Vui lòng chọn <?php echo category?></label>
         <?php 
        $out=$cate->comboCategory('txtcategory',$arrcate,'smallInput',$category[0][2],1);
        echo $out;
        ?>  
        <label><?php echo sort?></label>
        <input type="text" class="smallInput" name="txtsort"> 
    </form><br>
    <div class="clear"></div><br>
    <!--NOTIFICATION MESSAGES-->
        <?php if(count($err)>0){ for($e=0;$e<count($err);$e++) {?>
        <p class="info" id="error"><span class="info_inner"><?php echo $err[$e]?></span></p>
        <?php } } if(trim($success)!=""){ ?>
        <p class="info" id="success"><span class="info_inner"><?php echo $success;?></span></p>
        <?php } ?>     
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
  <script type="text/javascript" >
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
	$(document).ready(function(){
		$("#hinhdaidien").click(function(){
			if($("#hinhdaidiencontent").is(":visible"))
			{
				$("#hinhdaidiencontent").hide();
				$("#hinhdaidien").val("Hiện hình đại diện");
			}
			else
			{
				$("#hinhdaidiencontent").show();
				$("#hinhdaidien").val("Ẩn hình đại diện");
			}
			});
	});
	</script> 
  