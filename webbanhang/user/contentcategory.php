<?php include_once pathtodir.'lib/tbl_content_category.php';
//server code
$cate=new ContentCategory();
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
if($_POST['txtsubmit']==1)
{
	if(isset($_POST['checkbox']))
	{
			foreach ($_POST['checkbox'] as $id){
				$result=$cate->DEL($id);
			}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$partnerlist=$cate->GetCategory('status=1 order by categories_id desc  limit '.$sta.",20");
$tongdong=$cate->CountCategory("status=1");
$tongtrang=ceil($tongdong/20);
?> 
<div class="grid_16" id="content">	
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=contentcategory&act=add"><img style="float: left;" title="Thêm" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div>
	</div>	
</div>
  <div class="grid_16" id="content"> 
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users">Danh mục tin tức</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
<input type="hidden" name="txtsubmit" id="txtsubmit" value="0">
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
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($partnerlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" id="checkbox" class="checkboxclass" value="<?php echo $partnerlist[$i][1]?>">
                </label></td>
                <td><?php echo $partnerlist[$i][0]?></td>
                <td><?php echo $partnerlist[$i][10]?></td>
                <td><?php echo date('d/m/Y',$partnerlist[$i][5])?></td>
                <td><?php echo strip_tags($partnerlist[$i][3])?></td>
                <td><?php if(trim($partnerlist[$i][8])!="") echo "...";?></td>
                <td><?php echo $partnerlist[$i][11]?></td>                
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" >
  $(document).ready(function(){
			$("#editcontent").click(function(){
				var val = [];
			    $(':checkbox:checked').each(function(i){
			      val[i] = $(this).val();
			    });
			    if(val.length!=1)
			    {
				    alert("Vui lòng chọn  khi sửa!");
				}
			    else
			    {
			    	idcate=$("#idcate").val();
			    	window.location.href="?page=contentcategory&act=edit&id="+val[0]+"&idcate="+idcate;;
				}
			});
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
		var val = [];
	    $(':checkbox:checked').each(function(i){
	      val[i] = $(this).val();
	    });
	    if(val.length<1)
	    {
		    alert("Vui lòng chọn  khi xóa!");
		}
	    else
	    {
	    	var answer = confirm("Bạn chắc chắn muốn xóa?");
			if(answer){
				document.getElementById('txtsubmit').value=1;
				document.forms["edit"].submit();
			}
		}
			
	}
</script> 