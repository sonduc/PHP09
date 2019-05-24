<?php session_start(); 
if($_POST['frmSignin_txtUserName'])
{
	$email=$_POST['frmSignin_txtUserName'];
	$password=$_POST['frmSignin_txtPassword'];
	include_once 'lib/tbl_customers.php';
	$customerclass=new Customers();
	$customer=$customerclass->GetCustomersbyEmail($email);	
//	print_r($customer);exit();
	$password=md5(md5($password));
	if($password==$customer[4])
	{
		$_SESSION['customer']=$customer;
		$p=$kw->GetParamater($uri,1);			
		if($p=='10') 
			$kw->Redirect(pathtoweb."check-info-09.htm");
		else
			$kw->Redirect(pathtoweb);
	}
}
?>
<div class="breadcrumb" >
    <ul class="brech">
                   <li  >
                       <a  href="<?php echo pathtoweb?>" title="Mua sắm">
                        <span itemprop="title">Trang chủ</span>
                        <i></i>
                        </a>
                  </li>
                  <li  >
                       <a  >
                        <span itemprop="title">Đăng nhập</span>
                        <i></i>
                        </a></li>
            
      
    </ul>
     
</div>
<style type="text/css">
.normaltext{
color: #585858;
}
</style>
<div id="content_group" >
				<div id="onlineform" align="left">
					<form method="post" name="frmMemberSignin" >
						<table width="600px" border="0" cellpadding="10" cellspacing="10">					
							
							<tr>
								<td align="right"><a class="normaltext">Email đăng ký:</a></td>
								<td align="left"><input type="text"  name="frmSignin_txtUserName" class="textbox" /></td>
							</tr>
							<tr>
								<td align="right"><a class="normaltext">Mật khẩu:</a></td>		
								<td align="left"><input type="password" name="frmSignin_txtPassword" type="password" class="textbox" /></td>
							</tr>
							<tr>
								<td width="200px" align="right"></td>		
								<td width="400px" align="left">
								<input type="image"  style="border:0" src="<?php echo pathtoweb?>images/button_dangnhap.jpg" border="0" /></a>
								</td>
							</tr>	
						</table>
					</form>
					 
				</div>
				<div id="space_content"></div>							
</div>