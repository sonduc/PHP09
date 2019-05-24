<?php include_once pathtodir.'lib/tbl_product_category.php';
$productcategoryclass=new ProductCategory(); 
$arrcate=$productcategoryclass->getArrayCategory("==");
$idcate=$_GET['idcate'];
$combo=$productcategoryclass->comboCategory('cbcategory',$arrcate,'',$idcate,0);
include_once pathtodir.'lib/tbl_product.php';
//server code
$product=new Product();
$kw=new KW_Hook();
if($_POST['txtsubmit']==1)
{
	if(isset($_POST['checkbox']))
	{
			foreach ($_POST['checkbox'] as $id){
				$product->DeleteProductByAdmin($id);
			}
	}
}
$p=0;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=$p*20;
if(!is_numeric($idcate))
{
	$productlist=$product->GetProduct('products_status=1  order by products_id desc limit '.$sta.",20");
	$tongdong=$product-> countProduct("products_status=1 ");
}else 
{
	$productlist=$product->GetProduct('products_status=1  and categories_id='.$idcate.'  order by products_id desc limit '.$sta.",20");
	 $tongdong=$product-> countProduct("products_status=1  and categories_id='".$idcate."' ");
}
// 
?>
<style type="text/css">
	#content select { width: 150px !important; }
</style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;padding-top: 25px" >
		<label>Chọn xem: </label><?php echo $combo;?>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a  href="?page=logout" ><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="addimage" style="float: left;cursor: pointer; " title="Thêm hình ảnh cho sản phẩm" src="<?php echo pathtoadminweb?>images/image_add.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=product&act=add"><img style="float: left;" title="Thêm sản phẩm" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div>		
	</div>	
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  -->    
    <div class="clear"></div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách đã nhập</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
        <input type="hidden" name="txtsubmit" id="txtsubmit" value="0">
        <input type="hidden" id="page" value="<?php echo $p?>">
        <input type="hidden" id="idcate" value="<?php echo $idcate?>">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo productname ?></th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="250" scope="col">Mô tả</th>
                <th width="50" scope="col">Hình</th>
                <th width="100" scope="col">Danh mục</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td width="34" style="vertical-align: top"><label>
                    <input type="checkbox" class="checkboxclass" name="checkbox[]" id="checkbox<?php echo $i?>" value="<?php echo  $productlist[$i][0]?>"/>
                </label></td>
                <td style="vertical-align: top"><?php echo  $productlist[$i][2]?></td>
                <td style="vertical-align: top"><?php echo $productlist[$i][15]?></td>
                <td style="vertical-align: top"><?php echo date('d/m/Y',$productlist[$i][7])?></td>
                <td style="vertical-align: top"><?php  echo $kw->SubString(strip_tags($productlist[$i][11]),10) ?></td>
                <td style="vertical-align: top"><img src='<?php echo pathtoweb.'product/'.$productlist[$i][3]?>' width="50px" /></td>
                <td style="vertical-align: top"><?php  echo $productlist[$i][12]?></td>               
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
			$("#allbox").click(function(){
			 
				if($("#allbox").is(':checked'))
				{
					$(".checkboxclass").attr('checked', true);					
				}
				else
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
		    alert("Vui lòng chọn 1 sản phẩm khi sửa!");
		}
	    else
	    { 
			var answer = confirm("Bạn chắc chắn muốn xóa?");
			if(answer)
			{
				document.getElementById('txtsubmit').value=1;
				document.forms["edit"].submit();
			}
		}	
	}
</script> 