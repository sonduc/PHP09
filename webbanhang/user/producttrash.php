<?php include_once pathtodir.'lib/tbl_product.php';
//server code
$product=new Product();
$kw=new KW_Hook();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$product->DeleteProductByAdmin($_GET['id']);
		if($result)
		{
			$success="Delete success";
		}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$productlist=$product->GetProduct('products_status=0 limit '.$sta.",20");
$tongdong=$product-> countProduct("products_status=0");
$tongtrang=ceil($tongdong/20);
?><div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=product"><span><?php echo productelements?></span></a></li>
                      <li><a href="?page=editproduct"><span><?php echo productediting?></span></a></li>
                      <li><a href="?page=newproduct"><span><?php echo productnew?></span></a></li>
                      <li><a href="?page=trashproduct" class="current"><span><?php echo producttrash?></span></a></li>   
                      <li><a href="?page=category"><span><?php echo categoryelements?></span></a></li>
                      <li><a href="#"><span><?php echo categoryediting?></span></a></li>
                      <li><a href="?page=categorynew"><span><?php echo categorynew?></span></a></li>
                      <li><a href="?page=categorytrash"><span><?php echo categorytrash?></span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Sản phẩm đã xóa</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col">Product name</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Date</th>
                <th width="250" scope="col">Product content</th>
                <th width="50" scope="col">images</th>
                <th width="123" scope="col">Category</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" id="checkbox">
                </label></td>
                <td><?php echo  $productlist[$i][2]?></td>
                <td><?php echo $productlist[$i][15]?></td>
                <td><?php echo date('d/m/Y',$productlist[$i][7])?></td>
                <td><?php  echo $productlist[$i][10] ?></td>
                <td><?php  echo $productlist[$i][3]?></td>
                <td><?php  echo $productlist[$i][12]?></td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="?page=editproduct&id=<?php echo $productlist[$i][0]?>" class="edit_icon" title="Edit"></a> <a href="?page=product&act=del&id=<?php echo $productlist[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>
              <?php }?>
              <tr class="footer">
                <td colspan="4"><a href="#" class="delete_inline">Delete all</a><a href="#" class="approve_inline">Approve all</a><a href="#" class="reject_inline">Reject all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">  
                    <?php echo $kw->createPage($tongdong,"?page=trashproduct&p=",10,$p);?>         
                    
                    
                    </div>  
                <!--  PAGINATION END  -->       
                </td>
              </tr>
            </tbody>
          </table>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>