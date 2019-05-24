<?php include_once pathtodir.'lib/tbl_mediacategory.php';
//server code
$cate=new  MediaCategory();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$cate->DEL($_GET['id']);
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
$partnerlist=$cate->GetCategory('status=1 limit '.$sta.",20");
$tongdong=$cate->CountCategory("status=1");
$tongtrang=ceil($tongdong/20);
?>

  <div class="grid_16" id="content">    
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách đã đăng</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo categoryname?></th>
                <th width="102" scope="col"><?php echo username?></th>
                <th width="109" scope="col"><?php echo date?></th>
                <th width="250" scope="col"><?php echo content?></th>
                <th width="50" scope="col"><?php echo images?></th>
                <th width="123" scope="col"><?php echo categoryparent?></th>
                <th width="90" scope="col"><?php echo actions?></th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($partnerlist);$i++){
            $parent=$cate->GetCategory("categories_id='".$partnerlist[$i][8]."'");
            	?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox" class="checkboxclass" id="checkbox">
                </label></td>
                <td><?php echo $partnerlist[$i][2]?></td>
                <td><?php echo $partnerlist[$i][8]?></td>
                <td><?php echo date('d/m/Y',$partnerlist[$i][5])?></td>
                <td><?php echo strip_tags($partnerlist[$i][4])?></td>
                <td><?php if(trim($partnerlist[$i][4])!="") echo "...";?></td>
                <td><?php echo $parent[0][2]?></td>
                <td width="90"><a href="?page=mediacategory&act=del&id=<?php echo $partnerlist[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>  
              <?php } ?>            
             
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
 $("document").ready(function() {
		$("#allbox").click(function()
				{
			if($("#allbox").is(':checked'))
					{$(".checkboxclass").attr('checked',true);
			}
			else{
				$(".checkboxclass").attr('checked',false);

			}
			});		
	 });
	function submitfrom() {
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();	
	}
</script> 