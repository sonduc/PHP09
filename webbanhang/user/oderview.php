<?php $idoder=$_GET['idoder'];
include_once pathtodir.'lib/tbl_oder.php';
include_once pathtodir.'lib/tbl_customers.php';
$oderclass=new Oder();
$customers= new Customers();
$idoderview= $_GET['idoder'];
$customer=$oderclass->ViewOder("id_oder =".$idoderview);
$oder=$oderclass->ViewOderDetail("id_oder='".$idoder."'");
$customerlistasss=$customers->GetUserLitmit("uid = '".$oder[0][1]."'");
$str="";
for($i=0;$i<count($oder);$i++)
{
	if($str!="")
		$str.=",".$oder[$i][0];
	else 
		$str=$oder[$i][0];
}
include_once pathtodir.'lib/tbl_product.php';
$product=new Product();
$productlist=$product->GetProduct("products_id in (".$str.")");
?>

<style type="text/css"> #content select { width: 150px !important; } </style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;" >
		<h1 class="content_edit">Xem chi tiết hóa đơn</h1>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=oder"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
 <div class="grid_16" id="content1">
 <div class="grid_7" style="margin-bottom: 10px">
 <table style="width: 940px" align="center"><tr>
 <td style="width: 315px;">
 	<span style="font-weight : bold;font-size: 15px;">Địa chỉ khách hàng</span></br></br>
    <font style="font-weight: bold;">Họ và tên: </font><label><?php echo $customer[0][2]?></label></br>
    <font style="font-weight: bold;">Địa chỉ: </font><label><?php echo $customer[0][3]?></label> <br />
    <font style="font-weight: bold;">Điện thoại: </font><label><?php echo $customer[0][8]?></label><br>
    <font style="font-weight: bold;">Email: </font><label><?php echo $customer[0][4]?></label> <br>
    <font style="font-weight: bold;">Tình trạng hóa đơn: </font><?php if($customer[0][7]==0){echo "Đơn hàng mới đặt";}elseif($customer[0][7]==1){echo "Đơn hàng bị hủy do khách hàng";}elseif($customer[0][7]==2){echo "Đơn hàng bị do quản trị hủy";}elseif($customer[0][7]==3){echo "Đơn hàng đang thực hiện";}elseif($customer[0][7]==4){echo "Đơn hàng đã giải quyết xong";}?><br>
    <font style="font-weight: bold;">Số tiền của hóa đơn : </font><label><?php echo number_format($customer[0][19]) ;?> vnd</label> <br>    
  </td> 
   <td style="border-left: 1px solid #CCCCCC;padding-left: 10px;width: 315px">
  <span style="font-weight : bold;font-size: 15px;" >Thông tin xuất hóa đơn</span></br></br>
  <font style="font-weight: bold;">Tên công ty: </font><label><?php echo $customer[0][9]?></label></br>
  <font style="font-weight: bold;">Địa chỉ :</font><label><?php echo $customer[0][11]?></label></br>
  <font style="font-weight: bold;">Số điện thoại:</font><label><?php echo $customer[0][10]?></label></br> 
  <font style="font-weight: bold;">Email: </font><label><?php echo $customer[0][16]?></label></br>
  <font style="font-weight: bold;">Mã số thuế:</font> <label><?php echo $customer[0][12]?></label></br>
</td>
   <td style="border-left: 1px solid #cccccc;padding-left: 10px;width: 310px">
   <span style="font-weight : bold;font-size: 15px;">Thông tin giao hàng</span></br></br> 
   <font style="font-weight: bold;">Tên người giao hàng: </font><label><?php echo $customer[0][17]?></label></br>
   <font style="font-weight: bold;">Địa chỉ:</font><label><?php echo $customer[0][15]?></label></br>
   <font style="font-weight: bold;">Số điện thoại:</font><label><?php echo $customer[0][18];
   ?></label></br> 
   
   </td>
   </tr>
    </table>
 </div>
    <!--  TITLE START  -->    
    <div class="clear"></div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách sản phẩm chọn mua</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
        <input type="hidden" name="txtsubmit" id="txtsubmit" value="0">
        <input type="hidden" id="page" value="<?php echo $p?>">
        <input type="hidden" id="idcate" value="<?php echo $idcate?>">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>                
                <th width="136" scope="col"><?php echo productname ?></th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Mô tả</th>
                <th width="50" scope="col">Hình</th>
                <th width="100" scope="col">Danh mục</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td style="vertical-align: top"><?php echo  $productlist[$i][2]?></td>               
                <td style="vertical-align: top"><?php echo date('d/m/Y',$productlist[$i][7])?></td>
                <td style="vertical-align: top"><?php  echo $kw->SubString(strip_tags($productlist[$i][11]),100) ?></td>
                <td style="vertical-align: top"><img src='<?php echo pathtoweb.'product/'.$productlist[$i][4]?>' width="150px" /></td>
                <td style="vertical-align: top"><?php  echo $productlist[$i][12]
                //  
                ?></td>               
              </tr>
              <?php }?>
              <tr class="footer">                
                <td align="right">&nbsp;</td>
                <td colspan="6" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
                    <?php  echo $kw->createPage($tongdong,"?page=product&idcate=".$_GET['idcate']."&p=@x",20,$p);?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" >
  $(document).ready(function(){
		 $("#cbcategory").change(function(){
			 var p=$("#page").val();
			 var idcate=$(this).val();
			 window.location.href="?page=product&p="+p+"&idcate="+idcate;
			 });
			$("#editcontent").click(function(){
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
			    	window.location.href="?page=product&act=edit&idproduct="+val[0]+"&idcate="+idcate;
				}
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
		 		
	 });
	function submitfrom() {
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

			var answer = confirm("Bạn chắc chắn muốn xóa?");
			if(answer){
				document.getElementById('txtsubmit').value=1;
				document.forms["edit"].submit();
			}
		}	
	}
</script> 