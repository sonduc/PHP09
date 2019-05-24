<?php include_once pathtodir.'lib/tbl_product.php';
include_once pathtodir.'lib/tbl_product_category.php';
include_once pathtodir.'lib/tbl_event_category.php';
$eventclass=new eventCategory();
$event=$eventclass->GetCategory("categories_id='".$_GET['id']."'");
$idproductofevent=$event[0][3];
$categoryclass=new ProductCategory();
$idcategory=$_GET['idcategory'];
$arrcategory=$categoryclass->getArrayCategory("==");
$combocategory=$categoryclass->comboCategory('cbcategory',$arrcategory,'',$idcategory,1);
//server code

$product=new Product();
$kw=new KW_Hook();
if($_POST['txtsubmit']==1)
{
	
	if(isset($_POST['checkbox']))
	{
		$i=0;
		$str="";
			foreach ($_POST['checkbox'] as $id){
				if($i!=0)
					$str.=",".$id;
				else 
					$str.=$id;
				$i++;
			}
			if($str!="")
			{
				if($idproductofevent!="")
					$str=$idproductofevent.",".$str;
				$eventclass->ADDProductCategory($_GET['id'],$str);
			}
	}
}
if($idproductofevent=="")
	$productlist=$product->GetProduct('products_status=1  and categories_id=\''.$idcategory.'\'');
else 
	$productlist=$product->GetProduct('products_status=1  and categories_id=\''.$idcategory.'\' and products_id not in ('.$idproductofevent.')');


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script language="javascript">
			$(document).ready(function(){ 
				$("#cbcategory").change(function(){
					window.location.href="?page=addproduct&id="+$("#idevent").val()+"&idcategory="+$("#cbcategory").val();
				});						
			});
</script>
<div class="grid_16">
  
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Sản phẩm</h1>
    <?php echo $combocategory;?>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách đã nhập</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit">
        <input type="hidden" id="idevent" value="<?php echo $_GET['id']?>">
        <input type="hidden" name="txtsubmit" id="txtsubmit" value="0">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo productname ?></th>
                <th width="102" scope="col">Username</th>
                <th width="109" scope="col">Date</th>
                <th width="250" scope="col">Product content</th>
                <th width="50" scope="col">images</th>
                <th width="123" scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo  $productlist[$i][0]?>"/>
                </label></td>
                <td><?php echo  $productlist[$i][2]?></td>
                <td><?php echo $productlist[$i][15]?></td>
                <td><?php echo date('d/m/Y',$productlist[$i][7])?></td>
                <td><?php  echo $kw->SubString(strip_tags($productlist[$i][10]),10) ?></td>
                <td><img src='<?php  echo pathtoweb.'product/'.$productlist[$i][3]?>' width="50px" /></td>
                <td><?php  echo $productlist[$i][12]?></td>                
              </tr>
              <?php }?> 
              <tr class="footer">
                <td colspan="4"><a href="javascript:submitfrom()" class="delete_inline">Thêm vào sự kiện</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				     
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
		var answer = confirm("Bạn chắc chắn muốn thêm?");
		if(answer){
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();
		}	
	}
</script> 