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
    <div class="buttontop">        <span class="prev">Prev</span><span class="next">Next</span>    </div>   
    
</div>  
<?php 
include_once 'lib/tbl_product_category.php';
$productcategoryclass=new ProductCategory();
$idcategory=$kw->GetParamater($uri,2);
$productcategory=$productcategoryclass->GetCategory("parent=".$idcategory);
if(count($productcategory)==0)	
	$productcategory=$productcategoryclass->GetCategory("categories_id=".$idcategory);
include_once 'lib/tbl_product.php';
$productclass=new Product();
for($j=0;$j<count($productcategory);$j++)
{
 			$str=$productcategoryclass->getStringIDcategory($productcategory[$j][0]);
			$productlist=$productclass->GetProduct("categories_id in (".$str.") order by products_id desc limit 0,10");           
if(count($productlist)>0){
?>   
<div class="span-26" style="float: left;">      
            
<div>
	<div  class="span-26"  >   
	    <ul class=" anchors" style="border-top: solid 2px #ffffff;">
        	<li><a id="IsFeatured" href="#t1" class="active"><?php echo $productcategory[$j][1]?> </a><span class="icon-luxury">&nbsp;</span></li>
        	<div style="float: right;padding: 10px 10px 0px 0px"><a href="<?php echo pathtoweb.$kw->buildlink($productcategory[$j][1])."-".$productcategory[$j][0]?>-01.htm" title="xem hết <?php echo $productcategory[$j][1]?>">Xem hết</a></div>
    	</ul>    	
    </div>
    <div id="t1" class="tabContent">
        <div class="product-home">
	
            <ul>             
            <?php 
           
            for($i=0;$i<count($productlist);$i++)
            {
            ?>
            			<li>                             
                            <div class="boxgrid caption">
                               <a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>">
                                	<img style="max-width: 194px;max-height: 195px;" alt="<?php echo $productlist[$i][2]?>" src="<?php echo pathtoweb?>product/<?php echo $productlist[$i][3]?>">
                               </a>
                                <div class="cover boxcaption">
                                	<span class="nameproduct">[<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>"><?php echo $productlist[$i][2]?></a>]-  <?php echo number_format( $productlist[$i][5])?>đ</span>
                                    <div class="rice" style="display: none">                                       
                                        <div class="offers"><?php echo $productlist[$i][10]?></div>
                                    </div>
                                    	<div class="buy_info "  outlet="1">
			                                  <a outlet="1" class="buy_btn" href='<?php echo pathtoweb?>cart-<?php echo $productlist[$i][0]?>-11.htm'>
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
     
</div>


        </div>
        <?php } ?>
<?php } ?>
				    <?php 

    include_once 'template/footer-info.php';

    ?>