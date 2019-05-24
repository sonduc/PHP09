<div id="content_group" ><!--Noi dung thay doi-->
				<div id="title_tab6">
				</div>
				<!--freetext: noi dung thay doi tuy y-->
				@{if $RS_PRODUCTS neq null}@
				<div id="freetextbox">
				<p><a class="normaltext"> Quý khách vui lòng </a><a class="textlink" href="@{$smarty.const.URL}@@{$GLOBALS.AppUI->cfg.defaultScript}@?module=member&a=signin">Đăng nhập</a><a class="normaltext"> để mua hàng.<br />
				Nếu chưa có tài khoản, vui lòng click vào để </a><a class="textlink" href="@{$smarty.const.URL}@@{$GLOBALS.AppUI->cfg.defaultScript}@?module=member&a=register">Đăng ký tài khoản mới</a></p>
				</div>
				<div id="table_cart1">
         		 	<table align="center" width="725" border="0" bordercolor="#FFFFFF" cellpadding="2" cellspacing="2">
					<form method="post" name="frmShopCart">
<input name="security_code" type="hidden" value="@{$smarty.session.securitycode}@">
						<tr>
							<td id="td1" align="center"><a class="boldtext">Xóa</a></td>
							<td id="td2" align="center"><a class="boldtext">Hình ảnh</a></td>
							<td id="td3" align="center"><a class="boldtext">Tên sản phẩm</a></td>
							<td id="td4" align="center"><a class="boldtext">Đơn giá</a></td>
							<td id="td5" align="center"><a class="boldtext">Số lượng</a></td>
							<td id="td6" align="center"><a class="boldtext">Thành tiền</a></td>
						</tr>
						
						
						@{foreach name=PRODUCTS item=PRODUCT from=$RS_PRODUCTS}@
	<input name="item_ids[]" type="hidden" value="@{$PRODUCT.Product_id}@" />
	<input name="item_colorids[]" type="hidden" value="@{$PRODUCT.Color_id}@" />
	
						<tr>
							<td align="center"><a onClick="return confirm('B&#7841;n mu&#7889;n b&#7887; s&#7843;n ph&#7849;m này ra kh&#7887;i gi&#7887; hàng?');" href="@{$smarty.const.URL}@@{$GLOBALS.AppUI->cfg.defaultScript}@?module=shop&type=mycart&a=removeitem&productid=@{$PRODUCT.Product_id}@&colorid=@{$PRODUCT.Color_id}@"><img src="@{$smarty.const.URL}@themes/default_vn/images/delete.png" border="0" /></a></td>
							<td align="center">
							<img src="@{$smarty.const.URL}@@{$smarty.const.PATH_IMG_PRODUCT_SMALL}@@{$PRODUCT.Product_picturesmall}@" width="90"   /></td>
							<td align="center"><a class="normaltext"> @{$PRODUCT.Product_code}@<br />@{$PRODUCT.Product_name_vn}@</a></td>
							<td align="center"><a class="normaltext">@{if $PRODUCT.Promotion_id neq null}@
				@{$PRODUCT.PP_price}@
			@{else}@
				@{$PRODUCT.Product_price}@
			@{/if}@ VND</a></td>
							<td align="center"><input name="cart_qty[]" id="cart_qty_@{$PRODUCT.Product_id}@" type="text" value="@{$PRODUCT.qty}@"  class="no_product"  /></td>
							<td align="center"><a class="normaltext">@{$PRODUCT.Product_ammount}@ VND</a></td>
						</tr>
						@{/foreach}@
						</form>
           			</table>
				</div>
				<div id="button_cart">
						<table width="280" border="0" cellpadding="10" cellspacing="0">
							<tr>
								<td><input type="image" onclick="shop_updatecart_total(document.forms['frmShopCart']);" style="border:0"  src="@{$smarty.const.URL}@themes/default_vn/images/button_capnhat.jpg" border="0" /></td>
								<td><input type="image" style="border:0" onClick="location.href='@{$smarty.const.URL}@@{$GLOBALS.AppUI->cfg.defaultScript}@?module=home'; return false;" src="@{$smarty.const.URL}@themes/default_vn/images/button_muatiep.jpg" border="0" /></td>
								<td><input type="image" style="border:0" onclick="shop_mycart_checkout(document.forms['frmShopCart']); "  src="@{$smarty.const.URL}@themes/default_vn/images/button_thanhtoan.jpg" border="0" /></td>
							</tr>
						</table>

				</div>
				<div id="table_cart2">
					<table width="725" border="0" bordercolor="#FFFFFF"cellpadding="2" cellspacing="2">
						<tr>
							<td id="td7"><a class="boldtext">Hóa đơn thanh toán bao gồm</a></td>
						</tr>
						<tr>
							<td>
								<div id="noidungthanhtoan">
								<a class="normaltext">
								Tổng số sản phẩm: @{$TOTALQTY}@ sản phẩm<br />
								Số tiền: @{$TOTALPRICE}@ VND<br />								
								
								
								</div>
							</td>
						</tr>
					</table>
					
			</div>
			
			@{else}@
				<div style="height: 30px;"></div>
				<div align="center" style="padding-top:30px">
					Gi&#7887; hàng c&#7911;a b&#7841;n ch&#432;a có s&#7843;n ph&#7849;m nào.
				</div>
				
			@{/if}@
<!--
		<div id="freetextbox">
		<p><a class="tab_content">Nội dung hướng dẫn mua hàng, cách thanh tóan qua thẻ tính dụng do Admin tự biên soạn....<br/><br/></a></p>
		</div>
		-->
		<div id="space_content"></div>			
			</div>