<?php session_start(); unset($_SESSION['cart']);unset($_SESSION['vat']);unset($_SESSION['phivanchuyen']); include_once 'lib/tbl_cart.php'; ?>

<link media="screen, projection" type="text/css" href="<?php echo pathtoweb?>template/style.css" rel="stylesheet">
       <div style="float: left; width: 925px; margin-top: 10px">
	  <div class="slogan">
	  Cảm ơn quý khách đã đặt hàng tại Website của chúng tôi, quý khách hãy chọn các phương thức thanh toán bên dưới
	  </div>
	
			<span class ="slogan" style="margin-left: 10px">THÔNG TIN THANH TOÁN:</span>
            <div class="sku" style="margin: 0 auto; width: 900px; padding: 10px">
               <table style="border-collapse:collapse" border="0px" width="900px" align="center">
                  <tbody>
				  <tr valign="top">
                    <td class="sku" style="width: 50%">Thanh toán chuyển khoản 
					theo cái số tài khoản dưới đây</td>
                    <td></td>
                    <td>
					<span class="slogan">
					Thanh toán an toàn qua:</span></td>

                  </tr>
				
				  
				  <tr valign="top">
                    <td class="sku" style="width: 50%">a. Ngân Hàng <strong>
					SACOMBANK</strong><br>
					&nbsp;Tên chủ tài khoản: ông Nguyễn Viết Tấn<br>
					&nbsp;Số tài khoản: <strong>060-004-271-990</strong><br>
					&nbsp;Ngân hàng Sài gòn thương tín, CN Tân Bình, TP.HCM<br>
					<br>
					b. Ngân Hàng <strong>VIETCOMBANK </strong>(Quý khách cũng có 
					thể chuyển tiền từ máy ATM của hệ thống Vietcombank)<br>
					&nbsp;Tên chủ tài khoản: ông Nguyễn Viết Tấn<br>
					&nbsp;Số tài khoản: <strong>044.100.3875795</strong><br>
					&nbsp;Ngân hàng thương mại cổ phần Ngoại thương (VIETCOMBANK) Tân 
					Bình, TP.HCM <br>
					<br>
					c. Ngân Hàng <strong>AGRIBANK </strong>(Quý khách cũng có 
					thể chuyển tiền từ máy ATM của hệ thống AGRIBANK)<br>
					&nbsp;Tên chủ tài khoản: ông Nguyễn Viết Tấn<br>
					&nbsp;Số tài khoản: <strong>190.220.6214813</strong><br>
					&nbsp;Ngân hàng Nông nghiệp &amp; PTNT VIỆT NAM (AGRIBANK) CN 4, 
					TP.HCM <br>
					<br>
					c. Ngân Hàng <strong>VIETINBANK</strong><br>
					&nbsp;Tên chủ tài khoản: ông Nguyễn Viết Tấn<br>
					&nbsp;Số tài khoản: <strong>711A 45796494</strong><br>
					&nbsp;Ngân hàng Thương Mại cổ phần Công Thương, CN Tân Bình, 
					TP.HCM</td>
                    <td></td>
                    <td><a target="_blank"  href="https://www.baokim.vn/payment/customize_payment/product?business=nvtan@live.com&product_name=Thanh toán hàng tại dịch vụ noel&product_price=<?php echo $_SESSION['tongtien']?>&product_quantity=1&total_amount=<?php echo $_SESSION['tongtien']?>&product_description=Bạn đang thanh toán tại website http://dichvunoel.com">
				<img style="margin: 0px 10px 0 10px" src="images/btn_safety_payment_1.png" border="0" title="" onmouseover="this.src='../images/btn_safety_payment_ro.png';" onmouseout="this.src='../images/btn_safety_payment_1.png';" onclick="return checkCartForm();">
				<!--</a><br/><a href="https://www.baokim.vn/payment_guide/dichvunoelcom.html" target="_blank" style="text-decoration:none;font-size:12px">[ Hướng dẫn thanh toán]</a> -->
				 <a target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=nvtan@live.com&product_name=Thanh toán hàng tại dịch vụ noel&price=<?php echo $_SESSION['tongtien']?>&return_url=http://dichvunoel.com&order_description=Bạn đang thanh toán tại website http://dichvunoel.com">
				<img src="images/btn-paynow-121.png" border="0" onmouseover="this.src='../images/btn-paynow-ro.png';" onmouseout="this.src='../images/btn-paynow-121.png';" onclick="return checkCartForm();"></a>
				<br />
                    <a class="sku" target="_blank" href="http://help.nganluong.vn/dichvunoel.com.html">
					Hướng dẫn mua hàng ngân lượng</a>
</td>

                  </tr>
                  
				  
                </tbody></table>
                    
                
            </div>
        </div>
 
  

</td>
          </tr>
          
        </tbody></table>