<?php include_once 'lib/tbl_cart.php';
$idproduct=$kw->GetParamater($uri,2);
$cartclss=new Cart();
if(is_numeric($idproduct))
{
	$cartclss->addProductToCart($idproduct,1);
	$kw->Redirect(pathtoweb."cart-11.htm");
}
if($_POST['txtsubmit']==1)
{
	$cartclss->UpdateCart($_POST['txtid'],$_POST['txtsoluong']);
}
if($_POST['txtsubmit']==2)
{
	$cartclss->DeleteProductFromCart($_POST['txtid']);
	$kw->Redirect(pathtoweb."cart-11.htm");
}
if($_POST['txtsubmit']==3)
{
	$_SESSION['phivanchuyen']=$_POST['txtid'];
}
if (!isset($_SESSION['vat']))
	$_SESSION['vat']=0.1;
if($_POST['txtsubmit']==4)
{
	if(isset($_POST['vat']))
		$_SESSION['vat']=0.1;
	else 
		$_SESSION['vat']=0;
}
if($_POST['txtsubmit']==5)
{
	$vanchuyen=$_POST['SelectCity'];
	$danhxung=$_POST['Selectdanhxung'];
	$hovaten=$_POST['name'];
	$b_fullname=$danhxung." ".$hovaten;
	$diachidathang=$_POST['address'];
	$diachidathangquan=$_POST['addressdathangquan'];
	$addressdathangthanhpho=$_POST['addressdathangthanhpho'];
	$b_address=$diachidathang." - ".$diachidathangquan." - ".$addressdathangthanhpho;
	$b_phone=$_POST['dienthoai'];
	$persional_email=$_POST['email'];
	$note=$_POST['TextArea1'];
	$giaohang=$_POST['diachigiaohang'];
	if(strlen(trim($giaohang))>2)
		$note=$note."<br/>Giao hàng tại: ".$giaohang;
	$_SESSION['tongtien']=$_POST['tongtien'];
	$errMsg="";
	//echo strlen(trim($hovaten))."==".strlen(trim($b_phone))."==".strlen(trim($persional_email)); exit();
	if(strlen(trim($hovaten))>3&&strlen(trim($b_phone))>3&&strlen(trim($persional_email))>3)
	{
		include_once pathtodir.'lib/tbl_oder.php';
		$oderclass=new Oder();
		$oder=$oderclass->AddOder($b_fullname,$b_address,$persional_email,$note,$b_phone,$c_name,$c_phone,$c_address,$taxnumber,$payment,$method,$s_address,$s_email,$s_fullname,$s_phone,$_SESSION['tongtien'],$cuss[0]);
		     if(is_numeric($oder)){
				 $cart=$_SESSION['giohang'];
				 $_SESSION['orderid']=$oder;
				 for($i=0;$i<count($cart);$i++)
				 {
			    		$oderclass->AddOderDetail($cart[$i][0],$oder,$cart[$i][2],1);
			    		
			 	 }
			 	 $thanhtoan=array($tongtien,$oder);
			 	 $_SESSION['thanhtoan']		=$thanhtoan; 
			 	 unset($_SESSION['giohang']);
		     }
		     $kw->Redirect(pathtoweb."check-out-13.htm");
	}else 
	{
		$errMsg="Vui lòng nhập đầy đủ những dòng có đánh dấu *";
	}
	
}
if(!isset($_SESSION['giohang']))
	$kw->Redirect(pathtoweb);
else
	$product=$cartclss->GetProductFromCart();
	
?>
<script type="text/javascript" >
function ModifyQty(int) {
	
	var soluong =document.getElementById("QtyList"+int).value;	
	document.getElementById("txtsoluong").value=soluong;
	document.getElementById("txtid").value=int;
	document.getElementById("txtsubmit").value=1;
	document.forms["edit"].submit();
}
function DeleteRecipient(int) {
	
	document.getElementById("txtid").value=int;
	document.getElementById("txtsubmit").value=2;
	document.forms["edit"].submit();
}
function phivanchuyen(int) {
	document.getElementById("txtid").value=int;
	document.getElementById("txtsubmit").value=3;
	document.forms["edit"].submit();
}
function changevat() {
	document.getElementById("txtsubmit").value=4;
	document.forms["edit"].submit();
}
function checkCartForm() {
	document.getElementById("txtsubmit").value=5;
	document.forms["edit"].submit();
}
$(document).ready(function(){
	var err=$("#txterr").val();	
	if(err.length>0)
	{
		alert(err);
	}
});
</script>
<link media="screen, projection" type="text/css" href="<?php echo pathtoweb?>template/style.css" rel="stylesheet"> 
<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tbody><tr>            
            <td bgcolor="#FFFFFF" valign="top">
<form action="" name="edit" id="edit" method="POST">
<input type="hidden" value="0" id="txtsoluong" name="txtsoluong">
<input type="hidden" value="0" id="txtid" name="txtid">
<input type="hidden" value="0" id="txtsubmit" name="txtsubmit">
<input type="hidden" value="<?php echo $errMsg?>" id="txterr">
<div class="shopping-cart-wrapper">
    <img src="<?php echo pathtoweb?>images/header-shopping-cart.jpg">
    <div class="shopping-cart-table-header-wrapper">
        <div style="float:left; width:10px; height:30px; background:url(images/shopping-cart-table-header-left.jpg) no-repeat">&nbsp;</div>
        <div style="float:left; width:910px; height:30px; background:url(images/shopping-cart-table-header-bg.jpg) repeat-x">
        	<div class="sku" style="float:left; width:100px; margin-top: 6px"><b>Số thứ tự</b></div>
          	<div class="sku" style="float:left; width:280px; margin-top: 6px"><b>Thông tin sản phẩm</b></div>
            <div class="sku" style="float:left; text-align: center; width:90px; margin-top: 6px"><b>Số lượng</b></div>
            <div class="sku" style="float:left; width:110px; padding-left:20px; margin-top: 6px"><b>Đơn giá </b> (đ)</div>
            <div class="sku" style="float:left; width:230px; padding-left:30px; margin-top: 6px"><b>Tạm tính</b> (đ)</div>
            <div class="sku" style="float:left; width:50p; padding-left:0px; margin-top: 6px"><b>Xóa</b></div>
        </div>
        <div style="float:left; width:10px; height:30px; background:url(images/shopping-cart-table-header-right.jpg) no-repeat">&nbsp;</div>
        <div class="clear"></div>
    </div>
    <!-- shopping cart product data -->
    <?php $tongtien=0;
    	for ($i=0;$i<count($product);$i++){
    		$thanhtien=$product[$i][4]*$product[$i][3];
    		$tongtien+=$thanhtien;
    	?>
    <div class="shopping-cart-data-wrapper">
    	<!-- item -->
    	
    	<div class="shopping-cart-data-item-wrapper">
        	<div class="shopping-cart-data-item-pic-wrapper"><img class="img" src="<?php echo pathtoweb."product/".$product[$i][2]; ?>" border="0" style="width: 50px;height: 50px"></div>
            <div class="shopping-cart-data-item-content-wrapper">
            	<span class="sku">MS<?php echo $product[$i][0]?></span><br>
                <span class="sku"><?php echo $product[$i][1]?></span><br>
                <div class="product-details-promo2"></div>               
            </div>
            <div class="clear"></div>
        </div>        
        <div class="shopping-cart-data-qty-wrapper">
					<select class="price" style="font-size: 10pt; padding: 2px; border: solid 1px #C5C5C5" id="QtyList<?php echo $product[$i][0]?>" name="QtyList<?php echo $product[$i][0]?>" onchange="javascript:ModifyQty(<?php echo $product[$i][0]?>)">
					<?php 
					for($j=1;$j<100;$j++)
					{
					?>
					<option <?php if($j==$product[$i][3]){?> selected="selected" <?php }?> value="<?php echo $j?>" ><?php echo $j?></option>
					<?php }?>
					</select>					
        </div>
        <!-- qty end -->
        <!-- total -->
        <div class="shopping-cart-data-total-wrapper">
        	<span  class="price" style="font-size:12px;"><strong><?php echo number_format($product[$i][4])?> <span class="sku"> đ </span></strong></span>
        </div>
        <!-- total end -->
        <!-- recipient -->
        <div class="shopping-cart-data-recipient-wrapper" style="width: 250px">
				<div  class="price" style="font-size:12px; float:left; width:240px; padding-right:22px"><?php echo number_format($thanhtien); ?> <span class="sku"> đ </span></div>
				
				
        	  <!-- new -->
        	  
            <!-- new end -->
        </div>
        <div class="shopping-cart-data-recipient-wrapper"  style="width: 30px">
        	<div style="float:left; padding-top:3px"><span class="btn-remove"><a href="javascript:DeleteRecipient(<?php echo $product[$i][0]?>)">remove</a></span></div>
        </div>
        <!-- recipient end -->
    	<div class="clear"></div>
    </div>
    <?php } ?>
</div>
<!-- shopping cart end -->
<br>

<!-- total -->
<div class="shopping-cart-total-wrapper">

	<!-- left -->
	<div class="shopping-cart-total-left-wrapper">
	
    	<div style="background:url(images/shopping-cart-total-left-bg-top.jpg) no-repeat left; width:444px; height:5px;"></div>
        <div class="shopping-cart-total-left">
        	<font  class="sku">Vui lòng chọn thêm Phí vận chuyển Phát chuyển nhanh nếu Quý khách hàng ở các tỉnh ngoài TP.HCM</font><br>
        	<div class="sku" style="margin-top: 5px; float:left; text-align: left; width:298px; padding-right:10px">Phí vận chuyển:
					<select class="price" style="font-size: 10pt" name="SelectCity" onchange="javascript:phivanchuyen(this.value)">
					<option <?php if ($_SESSION['phivanchuyen']==0){?> selected="selected" <?php }?> value="0" >TP. Hồ Chí Minh</option>
					<option <?php if ($_SESSION['phivanchuyen']==50000){?> selected="selected" <?php }?> value="50000" >Đồng Nai</option>
					<option <?php if ($_SESSION['phivanchuyen']==50000){?> selected="selected" <?php }?> value="50000" >Bình Dương</option>
					<option <?php if ($_SESSION['phivanchuyen']==50000){?> selected="selected" <?php }?> value="50000" >Tây Ninh</option>
					<option <?php if ($_SESSION['phivanchuyen']==80000){?> selected="selected" <?php }?> value="80000" >Lâm Đồng</option>
					<option <?php if ($_SESSION['phivanchuyen']==80000){?> selected="selected" <?php }?> value="80000" >Bình Thuận</option>
					<option <?php if ($_SESSION['phivanchuyen']==100000){?> selected="selected" <?php }?> value="100000" >Ninh Thuận</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Khánh Hòa</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Phú Yên</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Bình Định</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Gia Lai</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Đắk Lắk</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Quảng Ngãi</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Quảng Nam</option>
					<option <?php if ($_SESSION['phivanchuyen']==150000){?> selected="selected" <?php }?> value="150000" >Đà Nẵng</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Huế</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Quảng Trị</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Quảng Bình</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Nghệ Anh</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Thanh Hóa</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Thái Bình</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Thái Nguyên</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Tuyên Quang</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Vĩnh Phúc</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Yên Bái</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hưng Yên</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hà Tĩnh</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hà Nam</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hà Giang</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hải Dương</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Điện Biên</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="180000" >Hà Nội</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="50000" >Long An</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="50000" >Tiền Giang</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="80000" >Vĩnh Long</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="80000" >Cần Thơ</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="80000" >Đồng Tháp</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="100000" >An Giang</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="100000" >Kiên Giang</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="150000" >Cà Mau</option>
					<option <?php if ($_SESSION['phivanchuyen']==180000){?> selected="selected" <?php }?> value="80000" >Bến Tre</option>
			</select></div>
			     <div class="clear"></div>
			
        </div>
		<!-- Thông tin khách hàng -->
       <div style="float: left; width: 925px; margin-top: 10px">
            <!-- <img src="images/shopping-cart-header-returning-cust.jpg"> -->
			<span class ="slogan">THÔNG TIN KHÁCH HÀNG</span>
            <div class="customer-logins-registered" style="margin: 0 auto; width: 900px; padding: 10px">
               <table style="border-collapse:collapse" border="0px" width="900px" align="center">
                  <tbody>
				  <tr valign="top">
                    <td class="sku"><b>Tiêu đề </b></td>
                    <td></td>
                    <td>
					<select class="sku"  name="Selectdanhxung">
					<option value="Ông">Ông</option>
					<option value="Bà">Bà</option>
					<option value="Cô">Cô</option>
					</select>
					</td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                    <td class="sku"> * <b>Số điện thoại</b></td>
                    <td>
					<div class="textfield-left">&nbsp;</div><input value="<?php echo $_POST['dienthoai']?>" name="dienthoai" id="dienthoai" type="text" maxlength="15" style="width:120px" class="textfield"><div class="textfield-right">&nbsp;</div></td>
                  </tr>
				
				  
				  <tr valign="top">
                    <td class="sku"> * <b>Họ tên khách hàng: </b></td>
                    <td></td>
                    <td><div class="textfield-left">&nbsp;</div><input  value="<?php echo $_POST['name']?>"  name="name" id="name" type="text" style="width:120px" class="textfield"><div class="textfield-right">&nbsp;</div></td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                    <td class="sku"> * <b>Địa chỉ email</b></td>
                    <td><div class="textfield-left">&nbsp;</div><input  value="<?php echo $_POST['email']?>" name="email" id="address" type="text" style="width:220px" class="textfield"><div class="textfield-right">&nbsp;</div></td>
                  </tr>
				  <tr valign="top">
                    <td class="sku"><b>Địa chỉ:</b></td>
                    <td></td>
                    <td><div class="textfield-left">&nbsp;</div><input value="<?php echo $_POST['address']?>" name="address" id="address" type="text" style="width:220px" class="textfield"><div class="textfield-right">&nbsp;</div></td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                    <td class="sku"><b>Địa chỉ nơi giao hàng:</b></td>
                    <td><div class="textfield-left">&nbsp;</div><input value="<?php echo $_POST['addressgiaohang']?>" name="addressgiaohang" id="address" type="text" style="width:220px" class="textfield"><div class="textfield-right">&nbsp;</div></td>
                  </tr>
				  <tr valign="top">
                    <td class="sku"></td>
                    <td></td>
                    <td></td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                    <td class="sku" rowspan="4"><b>Thông tin thêm:</b></td>
                    <td rowspan="4">
					<textarea name="TextArea1" style="width: 265px; height: 99px"><?php echo $_POST['TextArea1']?></textarea></td>
                  </tr>
				 
				  
                  <tr valign="top">
                    <td class="sku"><b>Quận/Huyện</b></td>
                    <td></td>
                    <td><div class="textfield-left">&nbsp;</div><input value="<?php echo $_POST['addressdathangquan']?>" name="addressdathangquan" id="addressdathangquan" type="text" maxlength="15" style="width:120px" class="textfield"><div class="textfield-right">&nbsp;</div></td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                  </tr>
				   <tr valign="top">
                    <td class="sku"><b>Thành phố</b></td>
                    <td></td>
                    <td><div class="textfield-left">&nbsp;</div><input value="<?php echo $_POST['addressdathangthanhpho']?>" name="addressdathangthanhpho" id="addressdathangthanhpho" type="text" maxlength="15" style="width:120px" class="textfield"><div class="textfield-right">&nbsp;</div></td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                  </tr>
                  
				   <tr valign="top">
                    <td class="sku">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                    <td class="sku" style=" margin: 10px; width: 10px; border-left:1px #CCCCCC solid">
					&nbsp;</td>
                  </tr>
                  
				  
                </tbody></table>
                    
                
            </div>
        </div>
 
<!-- Kết thúc Thông tin khách hàng -->
<!-- Kết thúc gửi đơn hàng -->
<div style="float: left; width: 925px; margin-bottom: 10px">
 <div style="background:url(images/shopping-cart-total-right-bg-btm.jpg) no-repeat left; width:9px; height:5px;"></div>
        <div style="margin:0px 0 0 25px">
            <div style="float:left; margin-right:10px;">
									<a href="<?php echo pathtoweb?>"><img src="images/btn-continue-shopping2.png" type="image" onmouseover="this.src='images/btn-continue-shopping2_ro.png';" onmouseout="this.src='images/btn-continue-shopping2.png';" onclick="return checkCartForm();">
									</a>
			</div>
            <div style="float:left"><input name="checkout" src="images/btn-checkout-now_new.jpg" type="image" onmouseover="this.src='images/btn-checkout-now_new_ro.jpg';" onmouseout="this.src='images/btn-checkout-now_new.jpg';" onclick="return checkCartForm();"></div>
           
    	</div>
		
</div>
<!-- Kết thúc gửi đơn hàng -->
        <div style="background:url(images/shopping-cart-total-left-bg-btm.jpg) no-repeat left; width:444px; height:5px;"></div>
        <br>
        <span style="padding: 10px; margin: 10px"  class="sku"><i>* Xin lưu ý rằng các mục mà bạn đã đặt mua chỉ giao hàng ở Việt Nam.</i></span>
    </div>
    <!-- left end -->
    <!-- right -->
    <div class="shopping-cart-total-right-wrapper">
      
    	<div style="background:url(images/shopping-cart-total-right-bg-top.jpg) no-repeat left; width:475px; height:5px;"></div>
        <div class="shopping-cart-total-right">
        	<div>
            	<div class="sku" style="float:left; width:190px; height:23px;">Phí giao nhận (nếu có)</div>
				<div  style="float:left;  width:2px; font-size:14px;">:</div>
                <div class="price" style="font-size:14px;">&nbsp; <?php echo number_format($_SESSION['phivanchuyen']);?> đ </div>
                <div class="clear"></div>
            </div>
            
            <div>
            	<div class="sku" style="float:left; width:190px; height:23px;">Tộng cộng chưa gồm thuế</div>
				<div  style="float:left;  width:2px; font-size:14px;">:</div>
                <div class="price" style="font-size:14px;">&nbsp; <?php echo number_format($tongtien);?> <span class="sku"> đ </span></div>
				
                <div class="clear"></div>
            </div>
            
            <div>
            	<div class="sku" style="float:left; width:190px; height:23px;">Hóa đơn đỏ (+ Thuế VAT 10% 
				<input onchange="javascript:changevat()" name="vat" type="checkbox" <?php if($_SESSION['vat']==0.1){?> checked="checked" <?php } ?>/>)
				</div>
                <div  style="float:left;  width:2px; font-size:14px;">:</div>
					
				<div class="price" style="font-size:14px;">&nbsp; <?php $vat=($tongtien*$_SESSION['vat']); echo number_format($vat)?> <span class="sku"> đ </span></div>
				
                <div class="clear"></div>
            </div>
            <div>
            	<div class="sku" style="float:left; width:190px; height:23px;"><b>Số tiền cần thanh toán</b></div>
				<div  style="float:left;  width:2px; font-size:14px;">:</div>
                <div class="price" style="font-size:14px;"><strong>&nbsp; <?php $t=$tongtien+$vat+$_SESSION['phivanchuyen']; echo number_format($t);?> <input type="hidden" value="<?php echo $t?>" name="tongtien"><span class="sku"> đ </span></strong></div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
       
    </div>
    <!-- right end -->
    <div class="clear"></div>
</div>
<!-- total end -->
</form> 
</td>
          </tr>
          
        </tbody></table>