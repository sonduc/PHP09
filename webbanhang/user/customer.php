<?php include_once pathtodir.'lib/tbl_customers.php';
$user=new Customers();
$kw=new KW_Hook();
if($_GET['act']=='del')
{ 	 
	if(is_numeric($_GET['id']))
	{
		$result=$user->DeleteCustomer($_GET['id']);
		if($result)
		{
			$kw->Redirect("?page=customer");
		}
	}
}
if($_POST['txtsubmit']==1)
{   
	if(isset($_POST['checkbox']))
	{ 
		foreach ($_POST['checkbox'] as $id)
		{   
			$partner=$user->DeleteCustomer($id);
		} 
	}
}
if($_GET['act']=='up')
{
 	$trangthai=$_GET['status'];
	$hiden_oder=$_GET['id'];
    $user->changeStatus_custommer($hiden_oder,$trangthai);
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$userlist=$user->GetUserLitmit('status!=0 limit '.$sta.",20");
$tongdong=$user->CountUser("status!=0");
$tongtrang=ceil($tongdong/20);  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script> $(document).ready(function(){ $(".approve_icon").colorbox({inline:true, width:"50%"}); }); </script>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa tài khoản khách hàng đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa khách hàng đã chọn" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			 <img style="float: left; cursor: pointer;" id="addcontent"; title="Thêm khách hàng đã chọn" src="<?php echo pathtoadminweb?>images/file_add.png">
		</div>		
	</div>
</div>
 <div class="grid_16" id="content">   
   <div id="portlets">
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
       <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách khách hàng</div>
			<div class="portlet-content nopadding">
        <form action="" method="post" name="edit" id="edit">
        <input value="0" type="hidden" name="txtsubmit" id="txtsubmit">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col">Họ và tên</th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Thứ hạng</th>
                <th width="50" scope="col">Ảnh đại diện</th>
                <th with="90" scope="col">Hành động tương ứng</th>
              </tr>
            </thead> 
            <tbody>
            <?php for($i=0;$i<count($userlist);$i++){?>
              <tr> 
              	<td width="34"><label>
                	<div style='display:none;'>
					<div id='inline_content<?php echo $i?>' style='padding:10px; background:#fff;' align="justify">
					<table style="float: left;width: 400px;">
							<tr><td style="width: 150px">Họ và tên: </td><td style="width: 250px"><?php echo $userlist[$i][6]?></td></tr>
							<tr><td style="width: 150px">Địa chỉ  : </td><td style="width: 250px"><?php echo $userlist[$i][8]?></td></tr>
							<tr><td style="width: 150px">Điện thoại  : </td><td style="width: 250px"><?php echo $userlist[$i][9]?></td></tr>
							<tr><td style="width: 150px">Email : </td><td style="width: 250px"><?php echo $userlist[$i][1]?></td></tr>
							<tr><td style="width: 150px">Ngày đăng ký  : </td><td style="width: 250px"><?php echo date('d/m/Y',$userlist[$i][3])?></td></tr>
							<tr><td style="width: 150px">Thứ hạng : </td><td style="width: 250px"><?php if($userlist[$i][15]==1){ echo "vàng";} elseif ($userlist[$i][15]==2){ echo "Titan";} elseif ($userlist[$i][15]==3 ) { echo "Bạc";} else { echo "Chưa có thứ hạng";}?></td></tr>
							<tr><td colspan="2"><?php echo $userlist[$i][7]?></td></tr> 
					</table>
					</div>
				</div>
                <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox" value="<?php echo $userlist[$i][0]?>">
                </label></td>
                <td width="136" scope="col"><?php echo $userlist[$i][6]?></td>
                <td width="102" scope="col"><?php echo $userlist[$i][1]?></td>
                <td width="109" scope="col"><?php echo date('d/m/Y',$userlist[$i][3])?></td>                
                <td width="205px" scope="col">
					<?php if($userlist[$i][15]==1) { echo "<b>Vàng</b>"; }
                  	elseif ($userlist[$i][15]==2){ echo "<b>Titan</b>";}
                  	elseif ($userlist[$i][15]==3 ) { echo "<b>Bạc</b>";} 
                  	elseif(($userlist[$i][15]==4 )) { echo "<b>Chưa có thứ hạng</b>";} ?>
                <select name="oder_donhang" id="selId<?php echo $i;?>">
            	  <option>---Cập nhật thứ hạng cho khách hàng---</option>
            	  <option  value="1" scope="col">Vàng</option>
            	  <option  value="2" scope="col">Tittan</option>
				  <option value="3" scope="col">Bạc</option>
				  <option value="4" scope="col">Chưa có thứ hạng</option> 
				</select>
                </td>
                <td><?php if(trim($userlist[$i][2])!="") echo "...";?></td>
                <td width="90">
                	<a href="#" onclick="alertSelectedIndex('<?php echo $i;?>');"><img style="margin-top: 2px;" src="<?php echo pathtoadminweb?>images/capnhat.png" title="Cập nhật trạng thái" name="admin_order" id="hinh<?php echo $i;?>" value="<?php echo $oder;?>"></a> &nbsp;
                <a id='inline<?php echo $i?>' href="#inline_content<?php echo $i?>" class="approve_icon" title="Thông tin chi tiết: <?php echo $userlist[$i][6]?>"></a> <a href="#" class="delete_icon" title="Delete" onclick="delete_InForm('<?php echo $i;?>');"></a>
                <input type="hidden"  id="admin_oder_hiden<?php echo $i;?>" name="admin_oder_hiden" value="<?php echo $userlist[$i][0]?>">
				 </td>
              </tr>  
              <?php }?>  
              <tr class="footer">
                <td colspan="4"></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->  
                    <div class="pagination"> <?php  echo $kw->createPage($tongdong,"?page=partners&p=",20,$p-1);?> </div>         
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
		 $("#cbcategory").change(function(){
			 var p=$("#page").val();
			 var idcate=$(this).val();
			 window.location.href="?page=product&p="+p+"&idcate="+idcate; 
			 });
			$("#editcontent").click(function(){
				var answer = confirm("Bạn không được sử dụng chức năng này !"); 
			});
			$("#addcontent").click(function(){
				var answer= confirm("Bạn không được sử dụng chức năng này");
				});
			$("#addimage").click(function(){
				var val = [];
			    $(':checkbox:checked').each(function(i){
			      val[i] = $(this).val();
			    });
			    if(val.length!=1)
			    {
				    alert("Vui lòng chọn 1 sản phẩm khi sửa!");
				}
			    else
			    {
			    	idcate=$("#idcate").val();
			    	window.location.href="?page=product&act=image&idproduct="+val[0]+"&idcate="+idcate;
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
	function submitfrom(){
		var val = [];
	    $(':checkbox:checked').each(function(i){
	      val[i] = $(this).val();  
	    });
	    if(val.length!=1)
	    {
		    alert("Vui lòng chọn 1 sản phẩm khi xóa!");
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
	function alertSelectedIndex(selId)
	{ 
		var answer =confirm("Bạn có chắc chắn muốn cập nhật ?");
		if( answer)
		{
			var a=document.getElementById('selId'+selId).value;
			  var b=document.getElementById('admin_oder_hiden'+selId).value;
			 window.location.href="?page=customer&act=up&status="+a+"&id="+b;
		}	   
	}
	function delete_InForm(selId)
	{
		var answer =confirm("Bạn có chắc chắn muốn xóa ?");
		if( answer)
		{ 
			 var b=document.getElementById('admin_oder_hiden'+selId).value;
			 window.location.href="?page=customer&act=del&id=" + b;
		}
	}
</script> 