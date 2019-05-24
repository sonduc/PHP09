<?php session_start(); include_once '../config.php';
$kw=new KW_Hook();
include_once pathtodir.'/lib/tbl_user.php';
$user=new User();
if($_POST['txtsubmit']==1)
{
	$pass=md5(md5($_POST['textpasswords']));
	$username=$_POST['textusername'];
	$userlogin=$user->GetUserbyEmail($username);
	//echo "quan tri".$_POST['cbquantri'];
	//print_r($userlogin);exit();
	if($userlogin[2]==$pass&&$userlogin[5]==$_POST['cbquantri'])
	{
		
		$_SESSION['username']=$username;
		if($_POST['cbquantri']==3)
		{
			header("location:muahang.php");
		}else{		
			//echo "ttrsdkf";exit();			
			$kw->Redirect("/user/index.php");
		}
				
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phần mềm quản trị kho - Đăng nhập</title>
<link href="css/960.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/text.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
	function LoginFunction()
	{
		var username=document.getElementById('textusername').value;
		var passwords=document.getElementById('textpasswords').value;
		if(passwords.length>3&&username.length>3)
		{
			document.getElementById('txtsubmit').value=1;
			document.form1.submit();
		}
		else
		{
			document.getElementById('error').style.display='block';
			document.getElementById('error').innerHTML="Vui lòng nhập lại tên đăng nhập và mật khẩu!";
		}
	}
	function EnterLoginfunction(e){

		if(e){
		e = e ;
		} else {
		e = window.event;
		} 

		if(e.which){ 
		var keycode = e.which;
		} else {
		var keycode = e.keyCode; 
		}

		if(keycode == 13) {
			var username=document.getElementById('textusername').value;
			var passwords=document.getElementById('textpasswords').value;
			if(passwords.length>3&&username.length>3)
			{
				document.getElementById('txtsubmit').value=1;
				document.form1.submit();
			}
			else
			{
				document.getElementById('error').style.display='block';
				document.getElementById('error').innerHTML="Vui lòng nhập lại tên đăng nhập và mật khẩu!";
			}
		}
		}
	
	function init() {
		var err=document.getElementById('err').value;
			if(err.length>1)
			{
				document.getElementById('error').style.display='block';
				document.getElementById('error').innerHTML=err;
			}
		}
	window.onload=init;
</script>
</head>
<body>
<input id="err" value="<?php echo $err?>" type="hidden"/>
<div class="container_16">
  <div class="grid_6 prefix_5 suffix_5">
   	  <h1>Quản trị nội dung - Đăng nhập</h1>
    	<div id="login">
    	  	<p class="tip">Nhập đúng 'Tên đăng nhập' và 'Mật khẩu'</p>    	 
   			<p id="error" class="error" style="display: none;"></p>
    	  	<form id="form1" name="form1" method="post" action="">
    	    	<p>
    	      		<label><strong>Bộ phận</strong>
						<select name="cbquantri" class="inputText">
							<option value="1">Quản trị website</option>
							<option value="2">Quản trị nội dung</option>
							<option value="3">Bán hàng</option>
						</select>
    	      		</label>
  	      		</p>
    	    	<p>
    	      		<label><strong>Tên đăng nhập</strong>
						<input type="text" name="textusername" class="inputText" id="textusername" />
    	      		</label>
  	      		</p>  	      		
    	    	<p>
    	      		<label><strong>Mật khẩu</strong>
  						<input type="password" name="textpasswords" class="inputText" id="textpasswords" onkeydown="javascript:EnterLoginfunction(event)"/>
  	        		</label>
    	    	</p>
    	    	<input name="txtsubmit" id="txtsubmit" type="hidden" value="0"/>
    			<a class="black_button" href="javascript:LoginFunction()"><span>&nbsp;&nbsp;&nbsp; Đăng &nbsp;nhập&nbsp;&nbsp;&nbsp;</span></a>                       
    	  	</form>
		  	<br clear="all" />
    	</div>
        <div id="forgot">
        	<a href="#" class="forgotlink"><span>Liên hệ quản trị nếu quên mật khẩu</span></a>
        </div>
  </div>
</div>
<br clear="all" />
</body>
</html>