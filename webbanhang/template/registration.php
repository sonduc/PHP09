<?php session_start();
include_once 'lib/tbl_customers.php';
$customerclass=new Customers();
if(isset($_POST['Member_fullname']))
{
	if($_SESSION['random_number']==$_POST['Member_characters'])
	{
		if(isset($_POST['Member_agree']))
		{
			$hovaten=$kw->kiemtraloikhinhap($_POST['Member_fullname']);
			$diachi= $kw->kiemtraloikhinhap($_POST['Member_address_housenumber']);
			$dienthoai=$_POST['Member_tel'];
			$email=$_POST['Member_email'];
			$tinh=$_POST['Member_city'];
			$password=$_POST['Member_pass'];
			$repasswords=$_POST['Member_repass'];
			//cong ty
			$congty=$kw->kiemtraloikhinhap($_POST['company_name']) ;
			$diachict=$kw->kiemtraloikhinhap($_POST['company_address_housenumber']);
			$mst=$_POST['Member_taxcode'];
			$dienthoaict=$_POST['company_tel'];
			$fax=$_POST['company_fax'];
			$tinhct=$_POST['company_city'];	
			$err=$customerclass->Res($hovaten,$email,$password,$repasswords,$diachi,$dienthoai,$tinh,$congty,$diachict,$tinhct,$dienthoaict,$fax,$mst);			
		}
		else 
		{
			$err=array();
			$err[]=array(0, "Vui long xem quy định , bạn chỉ có thể đăng ký khi đồng ý các qui định này");
		}
	}
	else 
	{
		$err=array();
		$err[]=array(0, "Mã bão mật không đúng");
	}
} 
?>
<script>
$(document).ready(function() { 
 // refresh captcha
 $('img#captcha-refresh').click(function() {  
		change_captcha();
 });
 function change_captcha()
 {
	document.getElementById('captcha').src="/chon/reCaptcha/get_captcha.php?rnd=" + Math.random();
 }
});
function validationFormOnSubmit(theForm){
	var reason ="";
	reason += validatePhone(theForm.Member_tel);
	reason += validateUsername(theForm.Member_fullname);
	reason += validateEmail(theForm.Member_email);
	reason += validateAddress(theForm.company_address_housenumber);
	reason += validatePhone_company_tel(theForm.company_tel);
	reason += validateCo(theForm.company_name);
	reason += validatePhone_company_fax(theForm.company_fax);
	reason += validate_Member_pass(theForm.Member_pass);
	if(reason != "")
	{
		alert("Một số lỗi bạn cần nhập lại: \n" + reason);
	}
	else
	{
		document.getElementById('txtsubmit').value=1;
		document.forms["frmMemberRegistration"].submit();
	}
	return false;
}
function validatePhone(fld) { 
	var error = ""; 
	var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');   
	if (fld.value == "") {
		 
	} else if (isNaN(parseInt(stripped))) {
		if(fld== document.frmMemberRegistration.Member_tel)
	    {
			error = "Số điện thoại thông tin khách hàng \n chứa ký tự đặc biệt hoặc chữ.\n";
			 fld.style.background = 'Yellow';
		}
		 
	} else if ((stripped.length >11) || (stripped.length <10) ) {
		if(fld== document.frmMemberRegistration.Member_tel)
	    {
			 error = "Số điện thoại thông tin khách hàng \n không nằm trong khoảng hợp lệ.\n";		 
			 fld.style.background = 'Yellow'; 
	    } 
	}
	else
	{
		fld.style.background = 'White';
	}
return error;
}
function validatePhone_company_tel(fld) { 
	var error = ""; 
	var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');   
	if (fld.value == "") {
		 
	} else if (isNaN(parseInt(stripped))) {
		if(fld== document.frmMemberRegistration.company_tel)
	    {
			error = "Số điện thoại thông tin khách hàng \n chứa ký tự đặc biệt hoặc chữ.\n";
			 fld.style.background = 'Yellow';
		}
		 
	} else if ((stripped.length >11) || (stripped.length <10) ) {
		if(fld== document.frmMemberRegistration.company_tel)
	    {
			 error = "Số điện thoại thông tin khách hàng \n không nằm trong khoảng hợp lệ.\n";		 
			 fld.style.background = 'Yellow'; 
	    }
	   
	}
	else
	{
		fld.style.background = 'White';
	}
return error;
}
function validatePhone_company_fax(fld) { 
	var error = ""; 
	var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');   
	if (fld.value == "") { 
	} else if (isNaN(parseInt(stripped))) {
		if(fld== document.frmMemberRegistration.company_fax)
	    {
			error = "Số điện thoại thông tin khách hàng \n chứa ký tự đặc biệt hoặc chữ.\n";
			 fld.style.background = 'Yellow';
		}
		 
	} else if ((stripped.length >11) || (stripped.length <10) ) {
		if(fld== document.frmMemberRegistration.company_fax)
	    {
			 error = "Số điện thoại thông tin khách hàng \n không nằm trong khoảng hợp lệ.\n";		 
			 fld.style.background = 'Yellow'; 
	    }
	}
	else
	{
		fld.style.background = 'White';
	}
return error;
}
function validateUsername(fld) {
    var error = "";
    var illegalChars = /\w/; // allow letters, numbers, and underscores
   // alert(theForm.persionalname); 
    if (fld.value == "") 
    { 	
        if(fld== document.frmMemberRegistration.Member_fullname)
	    {
        	fld.style.background = 'Yellow'; 
        	error = "Bạn chưa nhập tên\n";
	    }
    } else if ((fld.value.length < 5) ) {
    	if(fld== document.frmMemberRegistration.Member_fullname)
	    {
        	fld.style.background = 'Yellow'; 
        	error = "Tên người liên hệ có chiều dài không hợp lệ.\n";
	    } 
    }   else {
        fld.style.background = 'White';
    }
    return error;
}
function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}
function validateEmail(fld) {
    var error="";  
    var tfld = trim(fld.value);  
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;       
    if (fld.value == "") {
    	if(fld== document.frmMemberRegistration.Member_email)
		{
    		fld.style.background = 'Yellow';
            error = "Bạn chưa nhập địa chỉ email thông tin khách hàng.\n";
		} 
    } else if (!emailFilter.test(tfld)) {  
    	if(fld== document.frmMemberRegistration.Member_email)
		{
    		fld.style.background = 'Yellow';
            error = "Bạn nhập địa chỉ email thông tin khách hàng không đúng định dạng.\n";
		} 
    } else if (fld.value.match(illegalChars)) {
    	if(fld== document.frmMemberRegistration.Member_email)
		{
    		fld.style.background = 'Yellow';
            error = "Địa chỉ email thông tin khách hàng chứa ký tự không hợp lệ.\n";
		}
     } else {
        fld.style.background = 'White';
    }
    return error;
} 
function validateAddress(fld) {
    var error = "";
    var illegalChars = /\w/; // allow letters, numbers, and underscores
     if ((fld.value.length > 1) && (fld.value.length < 5)) {
    	if(fld== document.frmMemberRegistration.company_address_housenumber)
	    {
        	fld.style.background = 'Yellow'; 
        	error = "Địa chỉ thông tin công ty chiều dài không hợp lệ.\n";
	    } 
    }   else {
        fld.style.background = 'White';
    }
    return error;
}
function validateCo(fld) { 
    var error = "";
    var illegalChars = /\w/; // allow letters, numbers, and underscores
     if ((fld.value.length > 1) && (fld.value.length < 5) ) {
    	if(fld== document.frmMemberRegistration.company_name)
	    {
        	fld.style.background = 'Yellow'; 
        	error = "Địa chỉ thông tin công ty chiều dài không hợp lệ.\n";
	    } 
    }   else {
        fld.style.background = 'White';
    }
    return error;
}
function validate_Member_pass(fld){
	 
    var error = "";
    var illegalChars = /\w/; // allow letters, numbers, and underscores
     if (fld.value.length == 0 ) {
    	if(fld== document.frmMemberRegistration.Member_pass)
	    {
        	fld.style.background = 'Yellow'; 
        	error = "Bạn chưa nhập mật khẩu.\n";
	    } 
    }   else {
        fld.style.background = 'White';
    }
    return error;
}
</script>	
<link href="<?php echo pathtoweb?>style.css" rel="stylesheet" type="text/css">
<style type="text/css"> 
#captcha-wrap{
	border:solid #870500 1px;
	width:270px;
	-webkit-border-radius: 10px;
	float:left;
	-moz-border-radius: 10px;
	border-radius: 10px;
	background:#870500;
	text-align:left;
	padding:3px;
	margin-top:3px;
	height:100px;
}
#captcha-wrap .captcha-box{
	-webkit-border-radius: 7px;
	background:#fff;
	-moz-border-radius: 7px;
	border-radius: 7px;
	text-align:center;
	border:solid #fff 1px;
}
#captcha-wrap .text-box{
	-webkit-border-radius: 7px;
	background:#ffdc73;
	-moz-border-radius: 7px;
	width:140px;
	height:43px;
	float:left;
	margin:4px;
	border-radius: 7px;
	text-align:center;
	border:solid #ffdc73 1px;
}

#captcha-wrap .text-box input{ width:120px;}
#captcha-wrap .text-box label{
	 color:#000000;
	 font-family: helvetica,sans-serif;
	 font-size:12px;	
	 width:150px;
	 padding-top:3px; 
	 padding-bottom:3px; 
}
#captcha-wrap .captcha-action{
	float:right; width:117px; 
	background:url(logos.jpg) top right no-repeat; 
	height:44px; margin-top:3px;
}
#captcha-wrap  img#captcha-refresh{
	margin-top:9px;
	border:solid #333333 1px;
	margin-right:6px;
	cursor:pointer;
}
.normaltext{
color: #585858;
}
#content_group {
width: 480px;
display: block;
margin-top: 2px;
margin-left: 10px;
float: left;
}
#box_right_300 { width: 300px; float: right; margin-top: 20px; }
.box_300_top { background: url(images/bg_content_300x5.gif) no-repeat left top; }
.box_300_top, .box_300_bottom { width: 300px; height: 5px;  line-height: 0px; font-size: 0px; }
#box_right_300 .box_300_content { width: 291px; padding: 5px 0 5px 9px;  background: url(images/bg_content_300x5.gif) no-repeat right bottom; }
#box_right_300 .box_300_content ul li { width: 275px;  background: url(images/icon_check_12x11.gif) no-repeat left top; padding: 0 0 0 15px; margin: 10px 0 0 0; display: inline;  font: 400 11px arial; color: #585858; list-style-type: none;}
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
                        <span itemprop="title">Đăng ký thành viên</span>
                        <i></i>
                        </a></li>
            
      
    </ul>
     
</div>
<div id="content_group" ><!--Noi dung thay doi-->
	<form method="post" name="frmMemberRegistration" onsubmit="return validationFormOnSubmit(this)">				
				<?php if($err[0][0]!=1){?>
				<div class="container" style="width: 100%">
					<div class="watch-product-related"><h2>&nbsp;&nbsp;&nbsp;&raquo; THÔNG TIN NGƯỜI ĐĂNG KÝ</h2></div>
				</div>				
				<div id="onlineform1">
					<table width="440px" border="0" cellpadding="10" cellspacing="10" style="float: left;">
						<tr>
							<td width="260" align="right" colspan="3"><a class="start"><?php if(count($err)>0){ for($i=0;$i<count($err);$i++){ echo $err[$i][1]."<br/>"; }}?></a></td>
						</tr>
						<tr>
							<td width="260" align="right"><a class="start">*</a><a class="normaltext" > Họ tên: </a></td>		
							<td width="260" align="left"><input type="text" class="textbox"  name="Member_fullname"  value="<?php echo $_REQUEST['Member_fullname']?>" /></td>
							<td width="20" align="left"><img src="<?php echo pathtoweb."images/" ?>question_icon.jpg" title="Nhập họ và tên người giao dịch trực tiếp với chúng tôi" /></td>
						</tr>
						<tr>
							<td align="right"><a class="start">*</a><a class="normaltext" > Email: </a></td>		
							<td align="left"><input type="text" class="textbox" name="Member_email"  value="<?php echo $_REQUEST['Member_email']?>"/></td>
							<td align="left"><img src="<?php echo pathtoweb."images/" ;?>question_icon.jpg" title="Nhập địa chỉ email để giao dịch cùng chúng tôi" /></td>
						</tr>						
						<tr>
							<td align="right"><a class="normaltext"> Địa chỉ: </a></td>
							<td align="left"><input type="text" class="textbox" name="Member_address_housenumber" value="<?php echo $_REQUEST['Member_address_housenumber']?>"/></td>
							<td align="left"><img src="<?php echo pathtoweb."images/" ;?>question_icon.jpg" title="Nhập chính xác số địa chỉ nhà của Cty bạn" /></td>
						</tr>
						<tr>
							<td align="right"><a class="normaltext" > Điện thoại: </a></td>		
							<td align="left"><input type="text" class="textbox" name="Member_tel"  value="<?php echo $_REQUEST['Member_tel']?>"   /></td>
							<td align="left"><img src="<?php echo pathtoweb."images/" ;?>question_icon.jpg" title="Nhập số điện thoại giao dịch cuả Cty bạn (số điện thoại phải ít nhất 6 ký số)" /></td>
						</tr>	
						<tr>
							<td align="right"><a class="start">*</a><a class="normaltext"> Mật mã: </a></td>
							<td align="left"><input type="password" class="textbox" name="Member_pass"/></td>
							<td align="left"><img src="<?php echo pathtoweb."images/" ;?>question_icon.jpg" title="Nhập mật mã để đăng nhập website" /></td>
						</tr>
						<tr>
							<td align="right"><a class="start">*</a><a class="normaltext" > Nhập lại mật mã: </a></td>		
							<td align="left"><input type="password" class="textbox" name="Member_repass"  /></td>
							<td align="left"><img src="<?php echo pathtoweb."images/" ;?>question_icon.jpg" title="Nhập lại mật mã để đăng nhập website" /></td>
						</tr>					
					</table>					
				</div>				
				<div id="onlineform3" align="left">
						<table width="540px" border="0" cellpadding="10" cellspacing="10" style="">
						<tr>							
							<td width="260" align="left" colspan="2" >
								<div id="captcha-wrap" style="float: left;">
									<div class="captcha-box">
										<img src="<?php echo pathtoweb?>/reCaptcha/get_captcha.php" alt="" id="captcha" />
									</div>
									<div class="text-box">
										<label>Gõ hai từ:</label>
										<input name="Member_characters" type="text" id="Member_characters">
									</div>
									<div class="captcha-action">
										<img src="refresh.jpg"  alt="" id="captcha-refresh" />
									</div>
								</div>
							</td>
							<td width="20" align="left"></td>
						</tr>
						<tr>
							<td align="right"></td>
							<td align="left"><a class="start" style="color: red">*</a> <a class="normaltext"> thông tin bắt buộc</a></td>
							<td align="left"></td>
						</tr>
						<tr>
							<td height="30" align="right"></td>
							<td align="left"><input type="checkbox" name="Member_agree"  value="1"/> <a class="normaltext" href="#"> Tôi đồng ý với các quy định </a></td>
							<td align="left"></td>
						</tr>
						<tr>
							<td align="right"></td>
							<td align="left"><input type="image" style="border:0" src="<?php echo pathtoweb."images/" ;?>button_gui.jpg" border="0" /> <input type="image" style="border:0"  src="<?php echo pathtoweb."images/" ;?>button_soanlai.jpg" border="0" /></td>
							<td align="left"></td>
						</tr>
					</table>
				</div>
				<?php }else { 
						$kw->Redirect(pathtoweb);
				} ?>
				<div id="space_content"></div>
				</form>
			</div>
			<div id="content_group" >
				<div class="container" style="width: 100%">
					<div class="watch-product-related"><h2>&nbsp;&nbsp;&nbsp;&raquo; Quyền lợi thành viên</h2></div>
				</div>	
				<div class="container" style="width: 100%">
					<ul style="list-style-type: circle;margin-left: 40px">
						<li>Chúng tôi sẻ gửi email cho bạn khi có chính sách ưu đãi</li>
						<li>Mua hàng trực tuyến: Nhanh chóng, tiện lợi</li>
						<li>...</li>
					</ul>
					<img src="<?php echo pathtoweb?>images/dangky.jpg">
				</div>
			</div>