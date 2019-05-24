<?php  $kw=new KW_Hook();
$company=$kw->GetCompanyInfor();
$s=1;
$mess=array();
if(isset($_POST['Contact_email']))
{	
	$s=0;
	$tendoanhnghiep=$_POST['Contact_firstname'];
	$email=$_POST['Contact_email'];
	$diachi=$_POST['Contact_address'];
	$dienthoai=$_POST['Contact_telephone'];
	$vanphong=$_POST['office'];
	$noidung=$_POST['Contact_comment'];
	if($kw->checkemail($email))
	{
		if(strlen(trim($dienthoai))>0)
		{
			if(strlen(trim($noidung))>0)
			{
				include_once 'lib/tbl_contact.php';
				$contactclass=new Contact();
				$result=$contactclass->insertContact($tendoanhnghiep,$email,$noidung."<br/> P/s:".$diachi,$dienthoai,$vanphong);
				if($result)
				{
					$mess=array(1,"Chúng tôi đã nhận thông tin của bạn. Cám ơn bạn đã liên hệ với chúng tôi.");
				}
				else 
					$mess=array(0, "Gửi email không thành công");
			}else 
			{
				$mess=array(0, "Nội dung liên hệ quá ngắn"); 
			}	
		}else 
		{
			$mess=array(0,  "Điện thoại quá ngắn");
		}
	}
	else 
		$mess=array(0,  "Email không hợp hệ");
}
?>
<style type="text/css">
.normaltext{color: #000;}
</style>
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
                        <span itemprop="title">Liên hệ</span>
                        <i></i>
                        </a></li>
            
      
    </ul>
     
</div>
<div id="content_group" ><!--Noi dung thay doi-->
<form method="post" name="frmContact">
				<input name="security_code" type="hidden" value="#">				
				<div style="margin-left:10px;float:left;width: 450px">
					
					<div ><h2>WWW.Khoweb.Net</h2><br style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">
					Địa chỉ: Số 19-21 lô B, Trường Sơn , P.15, Q.10, TP.Hồ Chí Minh<br style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">
					Điện thoại: +84-8-3-8683537<br style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">
					Fax: +84-8-3-8683539</div>		
					<div style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(55, 61, 66); font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size: 13px; ">MST : 1801166792<br style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">
					Email:&nbsp;<span style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; " class="maillink"><a style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; text-decoration: none; " rel="nofollow" target="_blank" href="mailto:tanlucmta@flexoffice.com.vn">buitandat@khoweb.net</a></span></div>
					<p>&nbsp;</p>
					<img src="<?php echo pathtoweb?>images/contact-ico.jpg"/> 
					</div>
				<div id="form_contact" style="border-left: solid 2px #dcdcdc;width: 450px;margin-left: 460px;height: 550px" align="left">
				<?php 
				if($mess[0]!=1) {
				?>
				 <table width="400px" border="0" cellpadding="10" cellspacing="10">
						<tr>
							<td width="150" align="right" nowrap><a class="start">*</a> <a class="normaltext">Công ty/ Họ và tên: </a></td>
							<td width="250px" align="left"><input type="text" name="Contact_firstname" class="textbox" /></td>
						</tr>
						<tr>
							<td align="right"><a class="start">*</a> <a class="normaltext">Email: </a></td>		
							<td align="left"><input type="text" name="Contact_email" class="textbox" /></td>
						</tr>
						<tr>
							<td align="right"><a class="start">*</a> <a class="normaltext">Điện thoại: </a></td>
							<td align="left"><input name="Contact_telephone" type="text" class="textbox" /></td>
						</tr>							
						<tr>
							<td align="right"><a class="normaltext">Địa chỉ: </a></td>		
							<td align="left"><input type="text" name="Contact_address" class="textbox" /></td>
						</tr>
						<tr>
							<td valign="top" align="right"><a class="start">*</a> <a class="normaltext">Nội dung liên hệ:</a></td>			
							<td valign="top" align="left"><textarea  name="Contact_comment" class="contentformbox" cols="40" rows="10"></textarea></td>
						</tr>
						<tr>
							<td  align="right"></td>		
							<td height="30" align="left" valign="top"><a class="start" style="color: red;" >*</a><a class="normaltext"> thông tin bắt buộc </a></td>
						</tr>
						<tr>
							<td  align="right"></td>		
							<td align="left">
							<input type="image" src="<?php echo pathtoweb?>images/button_gui.jpg" border="0" />&nbsp;
											<input onClick="this.form.reset(); return false;" type="image" src="<?php echo pathtoweb?>images/button_soanlai.jpg" border="0" />
							</td>
						</tr>
					</table> <?php }else{ 
						?>
					<p>Chúng tôi đã nhận email của bạn, chúng tôi sẻ liên phúc đáp trong thời gian sớm nhất.</p>	
						<?php				
					}
					?>
				</div>
			<div id="space_content"></div>
</form>	
							
			</div>