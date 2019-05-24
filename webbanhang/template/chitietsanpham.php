<?php 
$idproduct=$kw->GetParamater($uri,2);
include_once 'lib/tbl_product.php';
$productclass=new Product();
$product=$productclass->GetProduct("products_id='".$idproduct."'");
include_once 'lib/tbl_product_category.php';
$productcategoryclass=new ProductCategory();
$productcategory=$productcategoryclass->GetCategory("categories_id='".$product[0][19]."'");
$str=$productcategoryclass->getStringIDcategory($product[0][19]);
$productlist=$productclass->GetProduct("categories_id in (".$str.") limit 0,15");
include_once 'lib/tbl_product_image.php';
$productimagesclass=new ProductImage();
$productimages=$productimagesclass->GetProductimage("idproduct='".$idproduct."'");
$brekc=$productcategoryclass->GetBreadcrumb($product[0][19]);
?>

<div class="breadcrumb" >
        <ul class="brech">
               <li >
                   <a  href="<?php echo pathtoweb?>" title="Trang chủ">
                    <span itemprop="title">Trang chủ</span>
                    <i></i>
                    </a>
              	</li>     
				<?php $y=count($brekc)-1; for(;$y>=0;$y--){   ?>
              <li >
                   <a href="<?php echo pathtoweb.$kw->buildlink($brekc[$y][1])."-".$brekc[$y][0]."-01.htm"?>" title="<?php echo $brekc[$y][1]?>">
                    <span itemprop="title"><?php echo $brekc[$y][1]?></span>
                    <i></i>
                    </a>
              </li>    
<?php } ?>    
              <li >
                   <a title="<?php echo $product[0][2]?>">
                    <span itemprop="title"><?php echo $product[0][2]?></span>
                    <i></i>
                    </a></li>  
          
        </ul>             
</div>
<div class="span-26 fleft">
<div class="span-26 " style="float: left;">   
	<div class="detail-thumbs-images">
		<div class="zoom-small-image" style="top:0px;z-index:9;position:relative;float:left;height:314px;padding:2px">    
			<a   href="<?php echo pathtoweb?>product/<?php echo $product[0][4]?>"  class="MagicZoomPlus" rel="selectors-effect-speed: 600; zoom-fade: true; thumb-change: mouseover; opacity-reverse: true; image-size: original; background-opacity: 50; zoom-distance: 10; zoom-width: 640;">
				<img  src="<?php echo pathtoweb?>product/<?php echo $product[0][3]?>" alt="<?php echo $product[0][2]?>"  align="left" title="Optional title display" style="display: block; width: 314px">
			</a>
		</div>  
		<div style="width: 100%; float: left">
			<?php if(count($productimages)>0){?>
			<?php for($m=0;$m<count($productimages);$m++){?>
					<img class="imgcolorproduct" src="<?php echo pathtoweb."product/color/".$productimages[$m][2]?>" style="width: 60px;height: 60px;float: left;cursor: pointer;" /><?php }?>
					<img class="imgcolorproduct" src="<?php echo pathtoweb?>product/<?php echo $product[0][3]?>" alt="<?php echo $product[0][2]?>"  align="left" title="Optional title display" style="width: 60px;height: 60px;float: left;cursor: pointer;">
			<?php } ?>
		</div>		
		<div style="padding: 5px; margin: 10px;float:left">
			<a class="sku" ><img src="<?php echo pathtoweb ?>images/btn2_viewenlargeimage.gif" height="20" style="vertical-align: middle" border="0">Rê chuột vào hình để xem ảnh lớn</a><br>
			<a class="sku" href="JavaScript:addBookmark();" onclick="addBookmark();"><img src="<?php echo pathtoweb ?>images/btn2_addtowishlist.gif" border="0" style="vertical-align: middle">Thêm vào danh sách ưa thích</a><br>
			<a class="sku" href="javascript:window.print()"><img src="<?php echo pathtoweb ?>images/btn-share-print.png" style="vertical-align: middle" border="0">In sản phẩm này</a><br>
		</div>
	</div>
<div class="leftt detail-content2 watch-product-related" style="width: 297px">

					<ul>
						<li><span class="prices" style="text-transform: uppercase"><?php echo $product[0][2]?> </span> </li>						
						<li  style="color:#999"><span class="code-product ts sku">Mã hàng:</span> <span class="prices" itemprop="identifier"> MS<?php echo $product[0][0]?></span></li>
						
						<li id="price" class="sku" style="color:#999"><span class="ts price-new">Có các Size: </span><span class="plistc">:</span><span class="prices"><?php echo $product[0][25]?></span></li>
						
						<li id="price" class="sku" style="color:#999"><span class="ts price-new">Chất liệu: </span><span class="plistc">:</span><span class="prices"><?php echo $product[0][22]?></span></li>
					
						
						<li id="price" class="sku" style="color:#999"><span class="ts price-new">Giá bán </span><span class="plistc">:</span><span class="prices"><?php echo number_format($product[0][5])?>đ</span></li>
							
						<li><a href='<?php echo pathtoweb?>cart-<?php echo $product[0][0]?>-11.htm'>
						
						<p class="addtocart">đặt mua </p>
						</a>
				
						</li>
						<li>
						
						<div class="fb-like" data-href="http://babyshops.com.vn" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false"></div>
						<div class="pdtname2" style="border-bottom:1px #ddd solid; width: 420px; margin: 10px 0 0 0">Chi tiết sản phẩm:</div>
						</li>
						<li class='sku' style='color:#CB0000'> <?php echo $product[0][10]?></li>
						<li id="cashback"></li>						
						
					</ul>
</div> 
<div class="detail-contener" style="float: left;">  
	<div  class="rating-product">               
		<div style="display: block; ">        	            
			<div class="detail-content2" style="width: 313px;margin-left:2px">            	                
				<div class="rightt">
							
						<div style="margin-top: 0px; height: 180px" class="content">
							<div class="deliver">
								<span class="sku" style="color:#999">(Khi bạn muốn nhận hàng sớm hơn)</span><br>
								<span class="pdtname2" style="margin-left: 0px; color:#999">HÃY GỌI CHO CHÚNG TÔI</span><br>
								<div class="slogan">C. Nga: 0902 455 005 
								<br />Online: <a href="ymsgr:SendIM?blueskydn"><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=blueskydn&amp;m=g&amp;t=1"></a> 
								<br>A. Tấn: 0909 933 533
								<br />Online: <a href="ymsgr:SendIM?nvtan78"><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=nvtan78&amp;m=g&amp;t=1"></a> </div>
								<span class="sku" style="color:#999">Giao hàng miễn phí các Quận: 1, 3, 10, 11, Tân Bình, Phú Nhuận <br><br></span>
								
							</div>
						</div>
						<div style="margin-top: 10px" class="content" align='center'>
			<a target="_blank" href=#">
<img class="img" height="29px" src="images/btn_safety_payment_1.png" alt="Thanh toán an toàn với Bảo Kim !" border="0" title="Thanh toán trực tuyến an toàn dùng tài khoản Ngân hàng (VietcomBank, TechcomBank, Đông Á, VietinBank, Quân Đội, VIB, SHB,... và thẻ Quốc tế (Visa, Master Card...) qua Cổng thanh toán trực tuyến BảoKim.vn">

 </a>
 <a target="_blank" title="Thanh toán trực tuyến AN TOÀN và ĐƯỢC BẢO VỆ, sử dụng thẻ ngân hàng trong và ngoài nước hoặc nhiều hình thức tiện lợi khác.
Được bảo hộ &amp; cấp phép bởi NGÂN HÀNG NHÀ NƯỚC, ví điện tử duy nhất được cộng đồng ƯA THÍCH NHẤT 2 năm liên tiếp, Bộ Thông tin Truyền thông trao giải thưởng Sao Khuê." href="#">
<img height="29px" src="images/btn-paynow-121.png" border="0"></a>
				<br>
                    <a target="_blank" href="http://help.nganluong.vn/dichvunoel.com.html">
					Hướng dẫn mua hàng ngân lượng</a>
					<br>
              
                Hướng dẫn mua hàng Bảo kim
			</div>
							
				</div>                                            
			</div>                     
		</div>		           
	</div>
</div>


</div>
<div class="detail-contener" style="width: 100%;float: left;">
	<div   class="rating-product" style="width: 100%">       
	<div class="headtab">          
	<ul class="tabs">            	
<li><a href="#tab1" class="active">Sản phẩm cùng loại</a></li>                
<li><a href="#tab2" >Thông tin sản phẩm</a></li>                                				            </ul>       </div>     		
        <div id="tab1" style="display: block; ">       
		<div class="product-home">            
		<ul> <?php for($i=0;$i<count($productlist);$i++) { ?> <li>
		<div class="boxgrid caption"> 
		<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>">
		<img style="max-width: 194px;max-height: 219px;" alt="<?php echo $productlist[$i][2]?>" src="<?php echo pathtoweb?>product/<?php echo $productlist[$i][3]?>"></a>
		<div class="cover boxcaption">
		<span class="nameproduct">[<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>"><?php echo $productlist[$i][2]?></a>]-  <?php echo number_format( $productlist[$i][5])?>đ</span>
		<div class="rice" style="display: none">
		<div class="offers"><?php echo $productlist[$i][10]?></div>
		</div>
		<div class="buy_info "  outlet="1"><a outlet="1" class="buy_btn" href="<?php echo pathtoweb?>cart-<?php echo $productlist[$i][0]?>-11.htm">
		                                    	<span >Mua hàng </span>
		                                  </a>	
		</div>
		</div>
		</div>
		</li>
		<?php }?>
		</ul>
		</div>
		</div>
		<div id="tab2" style="display: none; color: #000; margin: 10px"><?php echo $product[0][11]?>
		</div>
		</div>
		</div>
  </div>
  		    <?php 

    include_once 'template/footer-info.php';

    ?>