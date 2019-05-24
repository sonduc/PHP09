<?php session_start();  	
if (!isset($_SESSION['customer']))
	$kw->Redirect(pathtoweb."login-10.htm");
	include_once 'lib/tbl_cart.php';
	$cartclass=new Cart();	
	include_once 'lib/tbl_oder.php';
 	$cuss=$_SESSION['customer'];
 	 $kw=new KW_Hook();
 	 //echo $_POST['txtsubmit'];
 	if( isset($_POST['tbsubmit']))
 	{  
				
			$_SESSION['method']=$_POST['method'];
			$_SESSION['pttt']=$_POST['pttt'];
			$oderclass=new Oder();	 
			 $b_fullname= $kw->killInjection($cuss[7]);
			 $b_address= $kw->killInjection($cuss[5]);
			 $b_phone= $cuss[6];
			// $c_name1= $kw->kiemtraloikhinhap($c_name);	
			  $tongtien= $_POST['txttongtien'];
			  $note="";
		     $oder=$oderclass->AddOder($b_fullname,$b_address,$persional_email,$note,$b_phone,$c_name,$c_phone,$c_address,$taxnumber,$payment,$method,$s_address,$s_email,$s_fullname,$s_phone,$tongtien,$cuss[0]);
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
		      $kw->Redirect(pathtoweb."payment-13.htm");
		} 
		$productincart=$cartclass->GetProductFromCart();
	 	 //component analysis
	 	 
	 	 
?>
<style type="text/css">
#table_cart1 {
width: 725px;
display: block;
float: left;
border: #D9D9D9 1px solid;
margin: 20px 19px 0px 19px;
}
#td1 {
width: 50px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td2 {
width: 125px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td3 {
width: 150px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td4 {
width: 150px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td5 {
width: 100px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td6 {
width: 150px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
#td7 {
width: 725px;
height: 25px;
background-color: #D9D9D9;
text-align: center;
}
.boldtext {
font-family: Tahoma;
font-size: 8pt;
color: #373D42;
font-weight: bold;
text-decoration: none;
}
.boldtext:hover {
font-family: Tahoma;
font-size: 8pt;
color: #373D42;
font-weight: bold;
text-decoration: underline;
}
.normaltext {
font-weight: normal;
font-size: 9pt;
color: #373D42;
}
#table_cart1 {
width: 725px;
display: block;
float: left;
border: #D9D9D9 1px solid;
margin: 20px 19px 0px 19px;
}
</style>
 <div id="content_group"><!--Noi dung thay doi-->				
				<h1 style="text-decoration: underline">XÁC NHẬN ĐƠN HÀNG</h1>
				<div id="onlineform" align="left" >
					<table border="0" cellpadding="10" cellspacing="10" style="margin-left: 30px">
						<tr>
							<td><b>Họ và tên:</b> </td>
							<td><?php echo $cuss[7]?></td>
						</tr>
						<tr>
							<td><b>Địa chỉ:</b> </td>
							<td><?php echo $cuss[5]?></td>
						</tr>
						<tr>
							<td><b>Điện thoại:</b> </td>
							<td><?php echo $cuss[6]?></td>
						</tr>
						<tr>
							<td><b>Email:</b> </td>
							<td><?php echo $cuss[1]?></td>
						</tr>
					</table>
					<table border="0" cellpadding="10" cellspacing="10" width="950px" >
						<tr>
							<td width="260" align="left" colspan="3">
								<div id="table_cart1" style="width:900px;border: none;">
								<form action="" method="post" >
         		 	<table align="center" width="95%" border="1" bordercolor="#FFFFFF" cellpadding="2" cellspacing="2">					
						<tr>							
							<td id="td2" align="center"><a class="boldtext">Hình ảnh</a></td>
							<td id="td3" align="center"><a class="boldtext">Tên sản phẩm</a></td>
							<td id="td4" align="center"><a class="boldtext">Đơn giá</a></td>
							<td id="td5" align="center"><a class="boldtext">Số IMEI</a></td>
							<td id="td6" align="center"><a class="boldtext">Thành tiền</a></td>
						</tr>						
						<?php 
						$tongtien=0;
						for ($i=0;$i<count($productincart);$i++){
						$thanhtien=$productincart[$i][3]*$productincart[$i][4];
						$tongtien+=$thanhtien;
							?>				
						<tr bgcolor="#eeeeee">
							
							<td align="center">
							<img src="<?php echo pathtoweb."product/".$productincart[$i][2]?>" width="90"   onerror="this.src='<?php echo pathtomediacontentforweb?>noimage_pro.jpeg'"  /></td>
							<td align="center"><a class="normaltext"> <?php echo $productincart[$i][1]?></a></td>
							<td align="center"><a class="normaltext"> <?php echo $productincart[$i][4]?> VND</a></td>
							<td align="center"><?php echo $productincart[$i][5]?><input name="cart_id[]" type="hidden" value="<?php echo $productincart[$i][0]?>"  class="no_product"  /></td>
							<td align="center"><a class="normaltext"><?php echo $thanhtien;?> VND</a></td>
						</tr>
						<?php } $_SESSION['tongtien']=$tongtien; ?>
						<tr>
							<td colspan="5" style="padding-top: 20px">
								
								<input type="submit" name="tbsubmit" value=" Thanh Toán"/>
								<a href="<?php echo pathtoweb?>my-cart-11.htm">Quay lại bước trước</a>
							</td>
						</tr>
						<input type="hidden" value="<?php echo $tongtien;?>" name="txttongtien"/>
           			</table>
           			</form>
				</div> 
							</td>
						</tr>		
					</table>
 