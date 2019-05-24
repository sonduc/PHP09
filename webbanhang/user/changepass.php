<?php include_once pathtodir.'lib/tbl_user.php';
$user=new User();
if(isset($_POST['txtsubmit']))
{
	if($_POST['txtsubmit']==1)
	{
		$kw=new KW_Hook();
		$txtmatkhaucu=$_POST['txtname'];
		$txtpassword=$_POST['txtpassword'];
		$txtrepassword=$_POST['txtrepassword'];
		//echo md5(md5($txtpassword));	
		$result=$user->ChangePass($txtmatkhaucu,$txtpassword,$txtrepassword,$_SESSION['username']);
		echo "<div align='center'><b style='font-size: 12px;color: white;'>".$result[0][1]."</b></div>";
	}
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
    <div class="grid_9"><b style="font-size: 12px;color: white;"></b>
    <h1 class="content_edit">Đổi mật khẩu</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">  
    <?php if(isset($result)){echo "<h2></h2>"; }?>  
    <p>Vui lòng nhập tất cả các trường trong mẫu sau.</p>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">    	
    	<label>Mật khẩu hiện tại</label>
        <input type="password" class="smallInput" name="txtname" name="txtname">
        <label>Mật khẩu mới</label>
        <input type="password" class="smallInput" name="txtpassword">
        <label>Xác nhận mật khẩu</label>
        <input type="password" class="smallInput" name="txtrepassword">  
        <br/>          
        <a class="button"  onclick="javascript:submitfrom()"><span>Lưu thông tin</span></a>              
    </form> 
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>