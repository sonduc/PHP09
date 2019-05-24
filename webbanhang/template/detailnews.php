<?php 
$contentid=$kw->GetParamater($uri,2);
include_once 'lib/tbl_content.php';
$contentclass=new Content();
$content=$contentclass->GetContent("contents_id='".$contentid."'");
$contentlist=$contentclass->GetContent("doc_categories_parentid='".$content[0][3]."'");
include_once 'lib/tbl_product.php';
$productclass=new Product();
$productlist=$productclass->GetProduct('1=1 order by rand() limit 0,4');

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
    <div style="margin-top: 10px;" class="part_4">
    <div class="part_4_left">
            
<div class="desc_short" style="color: #666; width: 100%">

    <div style="float: left; margin-left: 15px; width: 100%" class="show-news-text">
        <h2 style="float: left; width: 100%" class="title_news">
            <?php echo $content[0][1] ?>
        </h2>
        <p style="float: left; width: 95%" class="date_shortnews">
            <?php echo date('d/m/Y', $content[0][6]) ?>
        </p>
		<!--
        <p style="float: left; width: 95%"  class="sort">
            <?php echo $content[0][4] ?>
        </p>  
-->		
    </div>
    <div class="infonews" align="justify">
        <?php echo $content[0][5] ?>
    </div>
</div>
<div class="show-news-sort">                 
    
            <div class="older-posts">
                <h2 class="red">
                   Bài viết cùng loại:
                </h2>
                <ul class="arrow-1">
        <?php 
        for($i=0;$i<count($contentlist);$i++)
        {
        ?>
            <li><a href="<?php echo pathtoweb.$kw->buildlink($contentlist[$i][1])."-".$contentlist[$i][0]."-05.htm"?>">
                <?php echo $contentlist[$i][1]?>
                <em>(<?php echo date('d/m/Y',$contentlist[$i][10])?>)</em></a>
            </li>
        <?php } ?>
            
        
            </ul> </div>
        
</div>




        </div>
        <div class="part_4_right">
            
<div class="pd_new_lasted">
    <h2>
        
        Sản phẩm ngẩu nhiên</h2>
    <div id="slideSpMoinhat" class="spmnhat">
        
                <div class="pre_pd">
                </div>
                <div class="spNeww" style="visibility: visible; overflow-x: hidden; overflow-y: hidden; position: relative; z-index: 2; left: 0px;  ">
                    <ul class="spNew" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px; position: relative; list-style-type: none; z-index: 1;  top: 0px; ">
                <?php 
                for($i=0;$i<count($productlist);$i++)
                {
                ?>   
                <li style="overflow-x: hidden; overflow-y: hidden; float: none; width: 170px; height: 280px; ">
                <a class="figure2" alt="<?php echo $productlist[$i][2]?>" title="<?php echo $productlist[$i][2]?>" href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>" title="<?php echo $productlist[$i][2]?>">
                    <div class="sp_img">
                    	<a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>" title="<?php echo $productlist[$i][2]?>"><img width="168" height="187" rel="default" style="display:" src="<?php echo pathtoweb?>product/<?php echo $productlist[$i][3]?>" class="search_pro_img" border="0"></a>
                        <span class="bgnew"></span>
                    </div>
                    </a>
                    <div class="infoPd">
                        <h2 class="namepd"><a href="<?php echo pathtoweb.$kw->buildlink($productlist[$i][2])."-".$productlist[$i][0]."-03.htm"?>" title="<?php echo $productlist[$i][2]?>">
                            <?php echo $productlist[$i][2]?></a>
                        </h2>
                        
                        <div class="grPrice">
                            <span class="price_new">
                                <?php echo number_format($productlist[$i][5])?>đ</span>
                        </div>                        
                    </div>
                </li>
            <?php } ?>
            
                    </ul>
                </div>
                <div class="next_pd">
                </div>
            
    </div>
</div>    
</div>
    </div>    
		    <?php 

    include_once 'template/footer-info.php';

    ?>
        

        
        