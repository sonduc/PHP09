<?php include_once pathtodir.'lib/tbl_event_category.php';
//server code
$cate=new eventCategory();
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
				$cate->DeleteCategory($id);
			}
		}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$partnerlist=$cate->GetCategory('status=1 limit '.$sta.",20");
$tongdong=$cate->CountCategory("status=1");
$tongtrang=ceil($tongdong/20);
?>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=eventproduct"><span>Sản phẩm và Sự kiện</span></a></li>
                      <li><a href="?page=addproductevent"><span>Thêm sản phẩm</span></a></li>
                      <li><a href="?page=event" class="current"><span>Sự kiện</span></a></li>
                      <li><a href="?page=eventnew"><span>Thêm sự kiện</span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Danh mục sự kiện</h1>
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
			<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"/></th>
                <th width="136" scope="col">Tên danh mục</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Mã số sản phẩm</th>
                <th width="50" scope="col">Hình</th>
                <th width="123" scope="col">Thuộc sự kiện</th>
                <th width="90" scope="col">Tác vụ</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($partnerlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="chk[]" id="checkbox" value="<?php echo $partnerlist[$i][0]?>">
                </label></td>
                <td><?php echo $partnerlist[$i][0]?></td>
                <td><?php echo $partnerlist[$i][10]?></td>
                <td><?php echo date('d/m/Y',$partnerlist[$i][4])?></td>
                <td><?php echo strip_tags($partnerlist[$i][3])?></td>
                <td><?php if(trim($partnerlist[$i][2])!="") echo "...";?></td>
                <td><?php echo $partnerlist[$i][11]?></td>
                <td width="90"><a href="?page=addproduct&id=<?php echo $partnerlist[$i][1]?>" class="add_icon" title="Thêm sản phẩm"></a><a href="?page=viewproductevent&id=<?php echo $partnerlist[$i][1]?>" class="approve_icon" title="Xem sản phẩm"></a><a href="?page=editevent&id=<?php echo $partnerlist[$i][1]?>" class="edit_icon" title="Edit"></a> <a href="?page=event&act=del&id=<?php echo $partnerlist[$i][1]?>" class="delete_icon" title="Delete"></a></td>
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
 <script type="text/javascript" >
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
</script> 