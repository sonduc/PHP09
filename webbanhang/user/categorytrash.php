<?php include_once pathtodir.'lib/tbl_product_category.php';
//server code
$cate=new ProductCategory();
$kw=new KW_Hook();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$cate->DeleteCategory($_GET['id']);
		if($result)
		{
			$success="Delete success";
		}
	}
}
else 
{
	if($_POST['txtsubmit']==1)
	{
		if(isset($_POST['chk'])){
			foreach ($_POST['chk'] as $id){
				$cate->DeleteCategoryAdmin($id);
			}
		}
	}
	elseif($_POST['txtsubmit']==2)
	{
		if(isset($_POST['chk'])){
			foreach ($_POST['chk'] as $id){
				$cate->RestoreCategory($id);
			}
		}
	} 
	
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$partnerlist=$cate->GetCategory('status=0 limit '.$sta.",20");
$tongdong=$cate->CountCategory("status=0");
$tongtrang=ceil($tongdong/20);
?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=product"><span><?php echo productelements?></span></a></li>
                      <li><a href="?page=editproduct"><span><?php echo productediting?></span></a></li>
                      <li><a href="?page=newproduct"><span><?php echo productnew?></span></a></li>
                      <li><a href="?page=trashproduct"><span><?php echo producttrash?></span></a></li>   
                      <li><a href="?page=category"><span><?php echo categoryelements?></span></a></li>
                      <li><a href="#"><span><?php echo categoryediting?></span></a></li>
                      <li><a href="?page=categorynew"><span><?php echo categorynew?></span></a></li>
                      <li><a href="?page=categorytrash" class="current"><span><?php echo categorytrash?></span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Danh mục đã xóa</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
			<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col">Category name</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Date Add</th>
                <th width="250" scope="col">Category content</th>
                <th width="50" scope="col">Category images</th>
                <th width="123" scope="col">Category parent</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($partnerlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="chk[]" id="checkbox" value="<?php echo $partnerlist[$i][0]?>">
                </label></td>
                <td><?php echo $partnerlist[$i][1]?></td>
                <td><?php echo $partnerlist[$i][10]?></td>
                <td><?php echo date('d/m/Y',$partnerlist[$i][7])?></td>
                <td><?php echo strip_tags($partnerlist[$i][9])?></td>
                <td><?php if(trim($partnerlist[$i][2])!="") echo "...";?></td>
                <td><?php echo $partnerlist[$i][13]?></td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="?page=editpartner&id=<?php echo $partnerlist[$i][0]?>" class="edit_icon" title="Edit"></a> <a href="?page=partners&act=del&id=<?php echo $partnerlist[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>  
              <?php } ?>            
              <tr class="footer">
                <td colspan="4"><a href="javascript:submitfrom(1)" class="delete_inline">Delete all</a><a href="#" class="approve_inline">Approve all</a><a href="javascript:submitfrom(2)" class="reject_inline">ReStore all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
	                    <?php  echo $kw->createPage($tongdong,"?page=category&p=",20,$p-1);?>
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
 <script type="text/javascript" >
	function submitfrom(int) {
		document.getElementById('txtsubmit').value=int;
		document.forms["edit"].submit();	
	}
</script> 