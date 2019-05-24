<?php include_once pathtodir.'lib/tbl_oder.php';
$oderclass=new Oder();
if($_GET['act']=='del')
{	 
	 if(is_numeric($_GET['id']))
	 {
	 	$result = $oderclass ->DEL($_GET['id']);
	 	if($result)
	 	{
	 		$kw->Redirect("?page=oder");
	 	}	
	 }
}
if (isset($_POST['admin_oder_hiden']))
{ 
	 	$trangthai=$_POST['oder_donhang'];
	 	 $hiden_oder=$_POST['admin_oder_hiden'];
	 	 $oderclass->changeStatus($hiden_oder,$trangthai);	 	
}
if($_POST['txtsubmit']==1)
{  
	if(isset($_POST['checkbox']))
	{  
		 foreach($_POST['checkbox'] as $id){
		    $oderclass->DEL($id);
		}
	}
}elseif ($_POST['txtsubmit']==2){ 
	
	if(isset($_POST['checkbox']))
	{   
		 foreach ($_POST['checkbox'] as $id)
		 {     
		 	$oderclass->changeStatus($id,4);
		 }
	}
}elseif ($_POST['txtsubmit']==3){
		foreach ($_POST['checkbox'] as $id){
			$oderclass->changeStatus($id,3);
		}
}
elseif ($_POST['txtsubmit']==6){
		foreach($_POST['checkbox'] as $id){
			$oderclass->changeStatus($id,1);
		}
}
elseif ($_POST['txtsubmit']== 5){
		foreach($_POST['checkbox'] as $id)
		{
			$oderclass->changeStatus($id,0);
		}
} 
elseif ($_POST['txtsubmit']== 7){
		foreach($_POST['checkbox'] as $id)
		{
			$oderclass->changeStatus($id,2);
		}
}  
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$oder=$oderclass->ViewOder('1= 1 order by id_oder desc limit '.$sta.",10");
$tongdong= $oderclass->CountListttableoder('1=1'); 
?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script> $(document).ready(function(){ $(".approve_icon").colorbox({inline:true, width:"51%"}); });
</script>   	<div class="grid_16" id="content">
	<div style="float: left;margin-left: 10px;" >
		<h1>Giỏ hàng</h1>
	</div>
	<div class="grid_7" style="float: left;width: 500px;float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa đơn hàng đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="viewoder" style="float: left;cursor: pointer;" title="Xem đơn hàng đã chọn" src="<?php echo pathtoadminweb?>images/view-presentation.png">
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="finishoder" style="float: left;cursor: pointer;" title="Đơn hàng đã hoàn tất" src="<?php echo pathtoadminweb?>images/stock_signature-ok.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			 <img id="waitting" style="float: left;cursor: pointer;" title="Đơn hàng đang thực hiện" src="<?php echo pathtoadminweb?>images/clock.png"> 
		</div>
		<div style="float: right;width: 48px;margin-right: 10px;"> 
		<img id="bill_admin_cancel" style="float: left;cursor: pointer;" title="Đơn hàng do người quản trị hủy" src="<?php echo pathtoadminweb?>images/admin_cancel.png"> 
		</div>
		<div style="float: right;width: 48px;margin-right: 10px;"> 
		<img id="bill_peoble_cancle" style="float: left;cursor: pointer;" title="Đơn hàng do khách hàng hủy" src="<?php echo pathtoadminweb?>images/people_cancel.png"> 
		</div>
		<div style="float: right;width: 48px;margin-right: 10px;"> 
		<img id="billnew" style="float: left;cursor: pointer;" title="Đơn hàng mới" src="<?php echo pathtoadminweb?>images/new.png"> 
		</div>
	</div>	
	</div>
    <div class="grid_16" id="content">
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách đặt hàng</div>
		<div class="portlet-content nopadding">
         <form action="" method="post" name="edit" id="edit">
     	   <input value="0" type="hidden" name="txtsubmit" id="txtsubmit">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col">Họ và tên</th>
                <th width="102" scope="col">Địa chỉ</th>
                <th width="100" scope="col">Điện thoại</th>
                <th width="150" scope="col">Email</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="109" scope="col">Trạng thái</th>          
              </tr>
            </thead>
            <tbody>  
            <?php for($i=0;$i<count($oder);$i++){
            	 $productlist=$oderclass->ViewOderDetail(" id_oder='".$oder[$i][0]."' "); ?> 
            	 <tr>             	
             	 <!-- Begin------------------------- -->
             	 <td width="34" style="display: none;">             	  
                	<div style='display:none;'><div id='inline_content<?php echo $i?>' style='padding:10px; background:#fff;' align="justify">                	
							<div style="width: 550px;float: left;">  
                                      <table cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
                                        <thead>
                                          <tr>
                                            <th width="34" scope="col">Stt</th>
                                            <th width="150" scope="col">Tên sản phẩm</th>
                                            <th width="50" scope="col">Hình ảnh</th>
                                            <th width="50" scope="col">Kích thước</th>
                                            <th width="50" scope="col">Giá</th>
                                            <th width="50" scope="col">Số lượng</th>
                                            <th width="100" scope="col">Thành tiền</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        	<?php $tongtien=0; for($j=0;$j<count($productlist);$j++){ $thanhtien=$productlist[$j][6]*$productlist[$j][2]; $tongtien+=$thanhtien; ?>
                                        <tr>
                                            <td width="34">1</td>
                                            <td><?php echo $productlist[$j][4]; ?></td>
                                            <td><img src="<?php echo pathtoweb."product/".$productlist[$j][5] ?>" width="100px" /></td>
                                            <td><?php echo $productlist[$j][3]; ?></td> 
                                            <td><?php echo $productlist[$j][6]; ?></td>                                            
                                            <td> <?php echo $productlist[$j][2]; ?> </td>
                                            <td><?php echo number_format($thanhtien) ; ?></td>                                           
                                        </tr>
                                        <?php } ?>
                                      <tr class="footer">
                                            <td colspan="4"></td>
                                            <td colspan="2" align="right">&nbsp;</td>
                                            <td colspan="2" align="right">                            				
                            				    <span class="active">Tổng giá: <?php echo number_format($tongtien); ?> </span>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>                                   
								</div> 
						</div>
				</div>
                     </td> 
             	 <!-- end------------------------------>
                <td width="34">                
                    <input type="checkbox" class="checkboxclass"  name="checkbox[]" id="checkbox<?php echo $i?>" value="<?php echo $oder[$i][0]?>">
                </td>                                
                <td width="136" scope="col"><?php echo $oder[$i][2]?></td>                
                <td width="136" scope="col"><?php echo $kw->SubString($oder[$i][3],20)?></td>
                <td width="102" scope="col"><?php echo $oder[$i][8];?></td>  
                <td width="100" scope="col"><?php echo $kw->SubString($oder[$i][4],20)?></td> 
                <td width="150" scope="col"><?php echo date('d/m/Y',$oder[$i][6])?></td>
                <td width="109" scope="col">
            	<?php  if($oder[$i][7]==0)
            	{
            		echo "Đơn hàng mới đặt";
            	}
            	elseif($oder[$i][7]==1)
            	{
            		echo "Đơn hàng khách hàng hủy";
            	}
            	elseif($oder[$i][7]==2)
            	{
            		echo "Đơn hàng người quản trị hủy";
            	}
            	elseif($oder[$i][7]==3)
            	{
            		echo "Đơn hàng đang thực hiện";
            	}
            	elseif($oder[$i][7]==4)
            	{
            		echo "Đơn hàng đã hoàn tất ";
            	}?>
            	 
				<input type="hidden"  name="admin_oder_hiden" value="<?php echo $oder[$i][0]?>">
			  	<a id='inline<?php echo $i?>' href="#inline_content<?php echo $i?>" class="approve_icon" title="Xem đơn hàng với kích thước thu nhỏ với giỏ hàng : <?php echo $oder[$i][1]?>"></a>				
				<a href="#" onclick="del_inline('<?php echo $i;?>')" class="delete_icon" title="Xóa đơn hàng <?php echo $oder[$i][1]?>"></a>		
				<input type="hidden"  id="admin_oder_hiden<?php echo $i;?>" name="admin_oder_hiden" value="<?php echo $oder[$i][0]?>">
				</td>	 
              </tr>   
              <!-- </form> -->   
              <?php }?> 
              <tr class="footer">
                <td colspan="4"><a href="javascript: submitfrom1()" class="delete_inline" >Delete all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="7" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination"> 
	                       <?php  echo $kw->createPage($tongdong,"?page=oder&p=",10,0,$p-1);?>
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
		$("#viewoder").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length!=1)
		    {
			    alert("Vui lòng chọn 1 đơn hàng khi xem!");
			}
		    else
		    {
		    	window.location.href="?page=oder&act=view&idoder="+val[0];
			}
		});	
		$("#finishoder").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length==0)
		    {
			    alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này!");
			}
		    else
		    {
		    	$('#txtsubmit').val(2);
				document.forms["edit"].submit();
			}
		});
		$("#waitting").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length==0)
		    {
			    alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này!");
			}
		    else
		    {
		    	$('#txtsubmit').val(3);
				document.forms["edit"].submit();
			}
		});	
		$("#billnew").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length==0)
		    {
			    alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này!");
			}
		    else
		    {
		    	$('#txtsubmit').val(5);
				document.forms["edit"].submit();
			}
		});	
		$("#bill_peoble_cancle").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length==0)
		    {
			    alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này!");
			}
		    else
		    {
		    	$('#txtsubmit').val(6);
				document.forms["edit"].submit();
			}
		});	
		$("#bill_admin_cancel").click(function(){
			var val = [];
		    $(':checkbox:checked').each(function(i){
		      val[i] = $(this).val();
		    });
		    if(val.length==0)
		    {
			    alert("Vui lòng chọn ít nhất 1 đơn hàng khi thực hiện chức năng này!");
			}
		    else
		    {
		    	$('#txtsubmit').val(7);
				document.forms["edit"].submit();
			}
		});
		
	 	$("#allbox").click(function(){
			if($("#allbox").is(':checked'))
			{
				$(".checkboxclass").attr('checked', true);
			}else
			{
				$(".checkboxclass").attr('checked', false);
				}
		 	});	
 });
	function submitfrom() {
		var val = [];
	    $(':checkbox:checked').each(function(i){
	      val[i] = $(this).val();
	    });
	    if(val.length!=1)
	    {
		    alert("Vui lòng chọn ít nhất 1 sản phẩm khi xóa!");
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
	function submitfrom1()
	{
		var answer =confirm("Bạn chắc chắn muốn xóa hết các sản phẩm ? ");
		if(answer)
		{
			document.getElementById('txtsubmit').value=1;
			document.forms["edit"].submit();
		}
	}
	function checkAll1(field)
	{  
		for (i = 0; i < field.length; i++)
			field[i].checked = true ;
	}  
	function del_inline(id)
	{
		var answer =confirm("Bạn chắc chắn muốn xóa đơn hàng này ? ");
		if(answer)
		{   
			var b=document.getElementById('admin_oder_hiden'+ id).value;
			window.location.href="?page=oder&act=del&id="+b;
			
		} 
	}
	
</script> 