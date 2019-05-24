<?php 
include_once 'lib/tbl_product_category.php';
$productcategoryclass=new ProductCategory();
$idcategory=$kw->GetParamater($uri,2);
$p=$kw->GetParamater($uri,3);
if(!is_numeric($p))
	$p=0;
$sta=$p*25;
$productcategory=$productcategoryclass->GetCategory("categories_id=".$idcategory);
$str= $productcategoryclass->getStringIDcategory($idcategory);
include_once 'lib/tbl_product.php';
$productclass=new Product();
$productlist=$productclass->GetProduct("categories_id in (".$str.") limit $sta,25 ");
$countproduct=$productclass->countProduct("categories_id in (".$str.")");
$countpage=ceil($countproduct/25);
$brekc=$productcategoryclass->GetBreadcrumb($idcategory);
?>
<div class="breadcrumb" >
    <ul class="brech">
                   <li itemscope="" >
                       <a itemprop="url" property="v:title" href="<?php echo pathtoweb?>" title="Mua sắm">
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
            
      
    </ul>
     
</div>
<div class="span-26" >            
            
<div>
	
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
                                <img style="max-width: 194px;max-height: 219px;" alt="" src="<?php echo pathtoweb?>product/<?php echo $productlist[$i][3]?>"></a>
                                <div class="cover boxcaption">
                                	<span class="nameproduct">[<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>"><?php echo $productlist[$i][2]?></a>]-  <?php echo number_format( $productlist[$i][5])?>đ</span>
                                    <div class="rice" style="display: none">                                       
                                        <div class="offers"><?php echo $productlist[$i][10]?></div>
                                    </div>
                                    	<div class="buy_info "  outlet="1">
			                                  <a outlet="1" class="buy_btn" href="<?php echo pathtoweb?>cart-<?php echo $productlist[$i][0]?>-11.htm">
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
<div class="pagging ">
      <ul class="pagging_nav">
         <span id="ctl00_ctl00_ctl00_cphContent_cphContent_V3SearchResultManager1_V3SearchResultList1_pager2">
         	<li> <a href="<?php echo pathtoweb.$kw->buildlink($productcategory[0][1])."-0-".$productcategory[0][0]."-01.htm" ?>" title="Trang đầu">&nbsp;«&nbsp;</a></li>&nbsp;
         	<?php 
         	if($p>0)
         	{
         	?>
         	<li> <a href="<?php echo pathtoweb.$kw->buildlink($productcategory[0][1])."-".($p-1)."-".$productcategory[0][0]."-01.htm" ?>" title="Trang trước" > &nbsp;‹&nbsp;</a></li>&nbsp;
         	
         	<?php } 
         	for($i=0;$i<$countpage;$i++){
         		$vt=$i+1;
         		if($p==$i){
         	?>
         	<li class="active"> <a href="#" ><?php echo $vt?></a></li>&nbsp;
         	<?php } else{?>
         	<li> <a href="<?php echo pathtoweb.$kw->buildlink($productcategory[0][1])."-".$i."-".$productcategory[0][0]."-01.htm" ?>"><?php echo $vt?></a></li>&nbsp;         	
         	<?php } } if($p<($tongtrang-1))
         	{
         	?>         	
         	<li> <a href="<?php echo pathtoweb.$kw->buildlink($productcategory[0][1])."-".($p+1)."-".$productcategory[0][0]."-01.htm" ?>" title="Trang tiếp">&nbsp;›&nbsp;</a></li>&nbsp;
         	<?php } ?>
         	<li> <a href="<?php echo pathtoweb.$kw->buildlink($productcategory[0][1])."-".($tongtrang-1)."-".$productcategory[0][0]."-01.htm" ?>">&nbsp;»&nbsp;</a></li>&nbsp;
         </span>
       </ul>
</div>

        </div>
		    <?php 

    include_once 'template/footer-info.php';

    ?>