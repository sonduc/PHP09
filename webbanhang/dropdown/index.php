    <link rel="stylesheet" type="text/css" href="dropdown/menu.css" />
  
    <script type="text/javascript" charset="utf-8" src="dropdown/js/dropdown.js"></script>
	

<?php 
$idcategory=$kw->GetParamater($uri,2);
$pagecode=$kw->GetParamater($uri,1);
include_once 'lib/tbl_product_category.php';
$categoryclass=new ProductCategory();
$category=$categoryclass->GetCategory('parent=0 order by sort');
$t=-1;
?>
    <div id="wrapper">
        <ul class=" sf-menu sf-navbar" style="z-index: 998">
			 <div class="home"><a style="background:none" href="<?php echo pathtoweb?>"></a></div>
        <?php 
        for($i=0;$i<count($category);$i++){
        	$categorychild=$categoryclass->GetCategory("parent='".$category[$i][0]."' order by sort");
        	if($category[$i][0]==$idcategory){
        		
        		$t=$i;
        	}
        ?>
           <li   style="z-index: 999"><a id="menu<?php echo $i ?>" href="<?php echo pathtoweb.$kw->buildlink($category[$i][1])."-".$category[$i][0]."-15.htm" ?>"><?php echo $category[$i][1]?> &darr;</a>
                <?php 
                if(count($categorychild)>0){
                ?>
                <ul  style="z-index: 999">
                <?php 
		        for($j=0;$j<count($categorychild);$j++){
		        	$categorychild2=$categoryclass->GetCategory("parent='".$categorychild[$j][0]."' order by sort");
		        if($categorychild[$j][0]==$idcategory&&$t==-1){
        		
	        		$t=$i;
	        	}
		        ?>
                   <li><a href="<?php echo pathtoweb.$kw->buildlink($categorychild[$j][1])."-".$categorychild[$j][0]."-15.htm" ?>"><?php echo $categorychild[$j][1]?></a>
                        <?php 
                        if(count($categorychild2)>0){
                        ?>
                        <ul  style="z-index: 999">
                        <?php 
                        for($m=0;$m<count($categorychild2);$m++){
                        if($categorychild2[$m][0]==$idcategory&&$t==-1){        		
			        		$t=$i;
			        	}
                        ?>
                           <li><a href="<?php echo pathtoweb.$kw->buildlink($categorychild2[$m][1])."-".$categorychild2[$m][0]."-01.htm" ?>"><?php echo $categorychild2[$m][1]?></a></li>
                       <?php
                        } 
                       
                       ?>
					   
                        </ul>                   
                        <?php } ?>
                   </li>
				   
                   <?php } ?>
                </ul>      
                <?php } ?>     
           </li>   
           <?php } ?>       
		   <li>
			<a <?php if($pagecode=='04'||$pagecode=='05'){ ?>class='curent'<?php } ?> href="<?php echo pathtoweb ?>tin-thoi-trang-04.htm">TIN THỜI TRANG</a> 
			</li>
        </ul>
        <input value="menu<?php echo $t;?>" id="menuselect" type="hidden">
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
			var idmenuselect=$("#menuselect").val();
			$("#"+idmenuselect).addClass('curent');
        });
    </script>
