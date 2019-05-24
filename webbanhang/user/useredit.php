<?php include_once pathtodir.'lib/tbl_user.php';
$user=new User();
$userid=$_GET['id'];
if($_POST['txtsubmit']==1)
{
	$err=array();
	$kw=new KW_Hook();
	$txtname=$_POST['txtname'];
	$txtusermane=$_POST['txtusermane'];
	$txtpassword=$_POST['txtpassword'];
	$txtrepassword=$_POST['txtrepassword'];
	$cbstatus=$_POST['cbquantri'];
	$text=$_POST['txtcontent'];	
	if($txtpassword!="" || $txtrepassword!="")
	{
		if($txtrepassword!=$txtpassword)
		{ 
				$err[]="<div align='center' style='background-color: white;'><b>Hai mật khẩu không giống nhau</b></div>";
				
				echo $err[0];
			 
				
		} 
		else 
		{
			$a=$user->UpdateAccount($txtname,$txtusermane,$txtpassword,$txtrepassword,$text,$cbstatus,$userid);
			if($a) { 
				
			}	
			else {
				echo $err[0]; 
			} 
		}
	}
	else 
	{
	 
		
		$err[]="<div align='center' style='background-color: white;'><b>Bạn chưa nhập mật khẩu</b></div>";
		echo $err[0];
		 
	}
}
//requiremention
$userlist=$user->GetUserLitmit("Id='{$userid}'"); ?>
<script type="text/javascript" language="javascript">

function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script> 
  <div class="grid_16" id="content">
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">Sửa quản trị viên</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START -->
    <div class="grid_15" id="textcontent">
    <h2>Hướng dẩn  quản trị viên</h2>    
    <p>Vui lòng nhập tất cả các trường trong mẫu sau. Tên đăng nhập ít nhất 3 ký tự.</p>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data" onsubmit="return validationFormOnSubmit(this)">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">    	
    	<label >Tên đầy đủ</label>
        <input type="text" class="smallInput" name="txtname" value="<?php echo $userlist[0][6]?>">
    	<label>tên đăng nhập</label>
        <input type="text" class="smallInput" name="txtusermane" name="txtname" value="<?php echo $userlist[0][1]?>">
        <label>Mật mã</label>
        <input type="password" class="smallInput" name="txtpassword">
        <label>Xác nhận mật mã</label>
        <input type="password" class="smallInput" name="txtrepassword">         
        <label>Cấp quản trị	 </label>
        <select name="cbquantri">
        	<option value="1" <?php if ($userlist[0][5]==1){?> selected="selected" <?php }?>>Quản trị viên</option>
        	<option value="2" <?php if ($userlist[0][5]==2){?> selected="selected" <?php }?>>Quản trị cao cấp</option>
        </select> 
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
         	<textarea name="txtcontent" rows="5" cols="109"><?php echo $userlist[0][7]?></textarea>
        </div>       
        <a class="button" onclick="javascript:submitfrom()"><span>Lưu thông tin</span></a> 
        </form>
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>