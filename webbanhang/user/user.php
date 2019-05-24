<?php include_once pathtodir.'lib/tbl_user.php';
//server code
$user=new User();
$kw=new KW_Hook();
if($_GET['act']=='del')
{
	 
	if(is_numeric($_GET['id']))
	{ 
		//echo "in function";exit();
		$result=$user->DeletePartner($_GET['id']);
		if($result)
		{
			$success="Delete  success";
		}
	}
} 
if($_POST['txtsubmit']==1)
{  
	 
	if(isset($_POST['checkbox']))
	{
		 
		 foreach($_POST['checkbox'] as $id){
		    $user->DeletePartner($id);
		}
	}
} 
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$userlist=$user->GetUserLitmit('status!=0 limit '.$sta.",20");
$tongdong=$user->CountUser("status!=0");
$tongtrang=ceil($tongdong/20);
?>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa nhân viên đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa nhân viên đã chọn" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=newuser&act=add"><img style="float: left;" title="Thêm nhân viên" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div>		
	</div>	
</div>
  <div class="grid_16" id="content">
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách nhân viên</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit" id="edit">
        <input value="0" type="hidden" name="txtsubmit" id="txtsubmit">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" ></th>
                <th width="136" scope="col">Họ và tên</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Thông tin cá nhân</th>
                <th width="50" scope="col">Ảnh đại diện</th>                
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($userlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox" value="<?php echo $userlist[$i][0]?>">
                </label></td>
                <td><?php echo $userlist[$i][6]?></td>
                <td><?php echo $userlist[$i][1]?></td>
                <td><?php echo date('d/m/Y',$userlist[$i][3])?></td>
                <td><?php echo $kw->SubString($userlist[$i][7],20)?></td>
                <td><?php if(trim($userlist[$i][2])!="") echo "...";?></td>                
                <td width="90">
                <a href="?page=edituser&id=<?php echo $userlist[$i][0]?>" class="edit_icon" title="Edit"></a>
                <a href="#" onclick="delete_inForm('<?php echo $i;?>')" class="delete_icon" title="Delete"></a></td>
                <input type="hidden"  id="admin_oder_hiden<?php echo $i;?>" name="admin_oder_hiden" value="<?php echo $userlist[$i][0]?>">
              </tr>  
              <?php } ?>            
              <tr class="footer">
                <td colspan="4"><a href="javascript:submitfrom()" class="delete_inline">Delete all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
	                     <?php  echo $kw->createPage($tongdong,"?page=partners&p=",20,$p-1);?>
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
 	$(document).ready(function(){
 		$("#allbox").click(function()
				{
			if($("#allbox").is(':checked'))
					{$(".checkboxclass").attr('checked',true);
			}
			else{
				$(".checkboxclass").attr('checked',false); 
			}
		});
		$("#editcontent").click(function(){
			var val =[];
			$(':checkbox:checked').each(function(i){
				val[i]=$(this).val();				
				});
			if(val.length==0)
			{
				alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này !");
			}
			else
			{
				$('#txtsubmit').val(3);
				 
				window.location.href="?page=edituser&id="+val[0];
			}
			});
					
 	 	});
	function submitfrom() {
		var answer = confirm("Bạn chắc chắn muốn xóa?");
		if(answer)
		{
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();
		}	
		
		}
	function delete_inForm(id) 
	{  
		var answer = confirm("Bạn chắc chắn muốn xóa?");
		if(answer)
		{ 
			var b = document.getElementById('admin_oder_hiden'+ id).value;
			window.location.href="?page=user&act=del&id= "+b;
		} 
	}
	
</script> 