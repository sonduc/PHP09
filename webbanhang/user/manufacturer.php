<?php  include_once pathtodir.'lib/tbl_manufacturer.php';
//server code
$manufacturerclass=new Manufacturer();
$idcategory=$_GET['id'];
$combocategory=$manufacturerclass->comboCategory('cbcategory',$manufacturerclass->getArrayCategory("=="),'',$idcategory,1);
$kw=new KW_Hook();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$manufacturerclass->DeleteCategoryAdmin($_GET['id']);
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
				$manufacturerclass->DeleteCategoryAdmin($id);
			}
		}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
if(!is_numeric($idcategory))
{
	$partnerlist=$manufacturerclass->GetCategory('status=1 limit '.$sta.",20");
	$tongdong=$manufacturerclass->CountCategory("status=1");
}else 
{
	$strid=$manufacturerclass->getStringIDcategory($idcategory);
	$partnerlist=$manufacturerclass->GetCategory('categories_id in ('.$strid.')limit '.$sta.",20");
	$tongdong=$manufacturerclass->CountCategory('categories_id in ('.$strid.')');
}
$tongtrang=ceil($tongdong/20);
?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
             <ul>
                      <li><a href="?page=product"><span><?php echo productelements?></span></a></li>
                      <li><a href="#"><span><?php echo productediting?></span></a></li>
                      <li><a href="?page=newproduct"><span><?php echo productnew?></span></a></li>  
                      <li><a href="?page=category"><span><?php echo categoryelements?></span></a></li>
                      <li><a href="#"><span><?php echo categoryediting?></span></a></li>
                      <li><a href="?page=categorynew"><span><?php echo categorynew?></span></a></li>
                      <li><a href="?page=manufacture"  class="current"><span>Nhà sản xuất</span></a></li>
                      <li><a href="?page=addmanufacture"><span>Thêm sản xuất</span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Danh mục</h1> <?php echo $combocategory;?>
    
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách danh mục</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
        	<input type="hidden" name="page" id="idcate" value="<?php echo $p?>">
			<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"/></th>
                <th width="136" scope="col">Tên Nhà sản xuất</th>
                <th width="102" scope="col">Người đăng</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Mô tả</th>
                <th width="50" scope="col">Hình ảnh</th>
                <th width="123" scope="col">Danh mục cấp trên</th>
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
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="?page=editcategory&id=<?php echo $partnerlist[$i][0]?>" class="edit_icon" title="Edit"></a> <a href="?page=category&act=del&id=<?php echo $partnerlist[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>  
              <?php } ?>            
              <tr class="footer">
                <td colspan="4"><a href="javascript:submitfrom()" class="delete_inline">Delete all</a><a href="#" class="approve_inline">Approve all</a><a href="#" class="reject_inline">Reject all</a></td>
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
  
 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script type="text/javascript" >
 $(document).ready(function(){
	 $("#cbcategory").change(function(){
		 var p=$("#page").val();
		 var idcate=$(this).val();
		 window.location.href="?page=category&p="+p+"&id="+idcate;
		 });
 });
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
</script> 