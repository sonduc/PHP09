<?php include_once pathtodir.'lib/tbl_user.php';
$user=new User();
if($_POST['txtsubmit']==1)
{
	$kw=new KW_Hook();
	$txtname=$_POST['txtname'];
	$txtusermane=$_POST['txtusermane'];
	$txtpassword=$_POST['txtpassword'];
	$txtrepassword=$_POST['txtrepassword'];
	$cbstatus=$_POST['cbquantri'];
	$text=$_POST['txtcontent'];  
	//$uid,$pwd,$txtrepassword,$status,$userinfo,$fullname 
	$result=$user->CreateAccount_1($txtusermane,$txtpassword,$txtrepassword,$cbstatus,$text,$txtname);
	 echo "<div align='center' width= 100px style='background-color: white;'><b style='fonf-size:14px; color white;'>".$result[0]."</b></div>";	
}
?>

<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script>
 
  <div class="grid_16" id="content" > 
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">Thêm quản trị viên</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">
    <h2>Hướng dẩn  quản trị viên</h2>    
    <p>Vui lòng nhập tất cả các trường trong mẫu sau. Tên đăng nhập ít nhất 3 ký tự.</p>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">    	
    	<label>Tên đầy đủ</label>
        <input type="text" class="smallInput" name="txtname">
    	<label>tên đăng nhập</label>
        <input type="text" class="smallInput" name="txtusermane">
        <label>Mật mã</label>
        <input type="password" class="smallInput" name="txtpassword">
        <label>Xác nhận mật mã</label>
        <input type="password" class="smallInput" name="txtrepassword">         
        <label>Cấp quản trị</label>
        <select name="cbquantri">
        	<option value="1">Quản trị viên</option>
        	<option value="2">Quản trị cao cấp</option>
        	<option value="3">Bán hàng</option>
        </select>        
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtcontent" rows="5" cols="109"></textarea>
        </div>       
        <a class="button"  onclick="javascript:submitfrom()"><span>Lưu thông tin</span></a>              
    </form>
        
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>