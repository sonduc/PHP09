<?php 
include_once 'lib/tbl_media.php';
$mediaclass=new Media();
$centermedia=$mediaclass->GetContentByCode('center-flash');
?>
<div class="block-slideshow" >   
    <div id="slide-panel" class="span-26">
        <div id="slide" >    
              <?php 
              for($i=0;$i<count($centermedia);$i++)
              {
              ?>                
               <div >
                     <div class="bannerr<?php echo $i?>">
		             	<div id="slide-detail">
		                   <div id="pmap">
							<img src="<?php echo pathtoweb?>media/<?php echo $centermedia[$i][3]?>" alt="banner<?php echo $i?>" width="980" height="400" border="0" usemap="#Map<?php echo $i?>">										
		                   </div>
		               </div>	
          			</div>
               </div>
           <?php } ?>
        </div>
    </div>
    <div class="buttontop">
        <span class="prev">Prev</span><span class="next">Next</span>
    </div>    
</div>       
<div class="span-26" >            
            
<div>
	<div  class="span-15"  style="width: 980px">   
	    <ul class="tabs anchors" style="border-top: solid 2px #ffffff;">
        	<li><a id="IsFeatured" href="#t1" class="active">SẢN PHẨM NỔI BẬT </a><span class="icon-luxury">&nbsp;</span></li>
        	<li><a id="Diamond" class="merchant_type" href="#t2">SẢN PHẨM KHUYẾN MÃI </a><span class="icon-premium">&nbsp;</span></li>
        	<li><a id="All" class="merchant_type" href="#t3">SẢN PHẨM XEM NHIỀU NHẤT </a></li>
    	</ul>
    </div>
    <div id="t1" class="tabContent">
        <div class="product-home2">
            <ul>             
            <?php 
            include_once 'lib/tbl_product.php';
			$productclass=new Product();
			$productlist=$productclass->GetProduct("1=1 order by products_id desc limit 0,9");           
            for($i=0;$i<count($productlist);$i++)
            {
            ?>
            			<li>                             
                            <div class="boxgrid caption">
                               <a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>">
                                	<img style="max-width: 194px;max-height: 195px;" alt="<?php echo $productlist[$i][2]?>" src="<?php echo pathtoweb?>product/<?php echo $productlist[$i][3]?>">
                               </a>
                                <div class="cover boxcaption">
                                	<span class="nameproduct">[<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>"><?php echo $productlist[$i][2]?></a>]</span>
                                    <div class="rice" style="display: none">                                       
                                        <div class="offers">Mã số: MS<?php echo $productlist[$i][0]." - "; if(is_numeric($productlist[$i][5])&&$productlist[$i][5]>0){ echo "Giá: ".number_format( $productlist[$i][5])."VND"; }else{ echo "Giá: Liên hệ";}?></div>
                                    </div>
                                   	<div class="buy_info "  outlet="1">
		                                  <a outlet="1" class="buy_btn" href="<?php echo pathtoweb?>cart-<?php echo $productlist[$i][0]?>-11.htm">
		                                    	<span style="margin-left: 5px" >Mua hàng </span>
		                                  </a>			                                 
		                             </div>
                                </div>                                
                            </div>
                        </li> 
                        <?php }?>                   
                                 
                        
                    
            </ul>
        </div>
		<div class="product-home1">

    <div class="cs-conntent1">
        <ul style="width: 170px; float: left" class="fhotline">
            <li>
                <h3>Hotline:</h3>
            </li>
            <li><span class="buy">Hotline:</span>0902 455 005</li>
            <li><span class="custom">Kinh Doanh:</span>0938 917 947</li>
            <li><span class="custom">Kỹ thuật:</span>0989 59 49 39</li>
			<li><span class="custom">Email:</span><a href="mailto:nvtan78@gmail.com">nvtan@live.com</a></li>
        </ul>
        <ul style="width: 170px; float: left" class="fhotline">
            <li>
                <h3>
                    Thời gian làm việc:</h3>
            </li>
            <li>8:00 đến 21:00 (Thứ 2 đến CN)</li>
            <li>HCM: Giao hàng trong ngày</li>
            <li>Tỉnh: Giao hàng trong 3 ngày</li>
			<li>Online: <a href="ymsgr:SendIM?nvtan78"><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=nvtan78&amp;m=g&amp;t=1"></a></li>
        </ul>
       

    </div>
		<div class="cpayment1">
                            <?php 
                            include_once 'lib/tbl_content.php';
                            $contentclass=new Content();
                            $content=$contentclass->GetContent("doc_categories_parentid=1 order by contents_id desc limit 0,3") ;                            
                            ?>
                              <div class="arrow-1">
                                <?php 
                                for($i=0;$i<count($content);$i++){
                                ?>
                                <div class="post1" style="vertical-align: top;margin:5px">
	                                <div class="news_box">
	                                	<a href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>">
	                                		<img  src="<?php echo pathtoweb?>content/<?php echo $content[$i][6] ?>">
	                                	</a>
										<div  style="width: 255px;float: left; padding: 5px ">
	                               		<a style="font-size: 11px" href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>"><?php echo $content[$i][1]?></a><br />
										<span style='font-size:10px;color:#333'><i><?php echo date('d/m/Y', $content[$i][9])?></i></span><br/>
										<span style='font-size:8pt;color:#333'><?php echo $kw->SubString($content[$i][4],9);?></span>
	                               </div>
	                               </div>
	                               
                                </div>
                                <?php } ?>
                            </div>
                        </div>    
	
    </div>
<div class="fb-like-box" data-href="https://www.facebook.com/pages/Baby-Shop/374897962592034?sk=likes" data-width="380" data-height="270" data-show-faces="true" data-border-color="#FFB5CF" data-stream="false" data-header="false"></div>        
     </div>
     <div id="t3" count="0" class="tabContent" style="display: none; ">
     
     </div>
</div>


        </div>
        
        

        

        <div class="span-26 subfooter">
            <div  style='float:left;width:600px'>                
                

<!--

<div class="support">
    <h2>
        <a>Hỗ trợ khách hàng</a></h2>
    <div class="cs-conntent">
        <ul class="fhotline">
            <li>
                <h3>Hotline:</h3>
            </li>
            <li><span class="buy">Hotline:</span>0902 455 005</li>
            <li><span class="custom">Kinh Doanh:</span>0938 917 947</li>
            <li><span class="custom">Kỹ thuật:</span>0989 59 49 39</li>
			<li><span class="custom">Email:</span><a href="mailto:nvtan78@gmail.com">nvtan@live.com</a></li>
        </ul>
        <ul class="fhotline">
            <li>
                <h3>
                    Thời gian làm việc:</h3>
            </li>
            <li>8:00 đến 21:00 (Thứ 2 đến CN)</li>
            <li>HCM: Giao hàng trong ngày</li>
            <li>Tỉnh: Giao hàng trong 3 ngày</li>
			<li>Online: <a href="ymsgr:SendIM?nvtan78"><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=nvtan78&amp;m=g&amp;t=1"></a></li>
        </ul>
        <ul class="fhotline">
		<!--
            <li>
                <h3>
                    Email:</h3>
            </li>
            
            			

			<li><a href="skype:nvtan78?chat"><img border="0" src="http://mystatus.skype.com/smallclassic/nvtan78" style="border: none;height: 22px" alt="My status"></a></li>
        <->
		
		</ul>
       <div style="margin-top: -40px" class="fb-like-box" data-href="https://www.facebook.com/pages/Baby-Shop/374897962592034?sk=likes" data-width="182" data-height="170" data-show-faces="true" data-border-color="#EFEFEF" data-stream="false" data-header="false"></div>
        
    </div>
</div>



            </div>
           
            <div class="span-7" style="margin-left: 1px ">
                <div class="payment">
                    <h2><a href="#">Tin tức thời trang</a></h2>
                    <div class="cpayment">
                        <div class="cpayment1">
                            <?php 
                            include_once 'lib/tbl_content.php';
                            $contentclass=new Content();
                            $content=$contentclass->GetContent("doc_categories_parentid=1 order by contents_id desc limit 0,3") ;                            
                            ?>
                              <div class="arrow-1">
                                <?php 
                                for($i=0;$i<count($content);$i++){
                                ?>
                                <div class="post1" style="vertical-align: top;margin:5px 0">
	                                <div class="news_box">
	                                	<a href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>">
	                                		<img  src="<?php echo pathtoweb?>content/<?php echo $content[$i][6] ?>">
	                                	</a>
										<div  style="width: 255px;float: left; padding: 5px ">
	                               		<a href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>"><?php echo $content[$i][1]?></a>
										<span style='font-size:10px;color:#333'><i><?php echo date('d/m/Y', $content[$i][9])?></i></span><br/>
										<span style='font-size:8pt;color:#333'><?php echo $kw->SubString($content[$i][4],9);?></span>
	                               </div>
	                               </div>
	                               
                                </div>
                                <?php } ?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
			-->
        </div>
        