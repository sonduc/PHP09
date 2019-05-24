<?php include_once pathtodir.'lib/tbl_product.php';
$productclass=new Product();
$event=$productclass->GetProduct("products_id='".$_GET['id']."'");
$idproductofevent=$event[0][22]; 
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
				$eventclass->EditProductKetHop($_GET['id'],$str);
			}
	}
	$kw->Redirect(pathtoweb."admin/CMS.php?page=event");
}
if($idproductofevent!="")
	$productlist=$productclass->GetProduct('products_status=1  and products_id in ('.$idproductofevent.')');


?>
<div class="grid_16">
  
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Sản phẩm kết hợp <?php echo $event[0][2] ?></h1>
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
                <th width="34" scope="col">Chọn</th>
                <th width="136" scope="col"><?php echo productname ?></th>
                <th width="102" scope="col">Người đăng</th>
                <th width="109" scope="col">Ngày đăng</th>
                <th width="250" scope="col">Mô tả</th>
                <th width="50" scope="col">Hình</th>
                <th width="123" scope="col">Danh mục</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input checked="checked" type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo  $productlist[$i][0]?>"/>
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
                <td colspan="4"><a href="javascript:submitfrom()" class="delete_inline">Lưu thay đổi</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right"></td>
              </tr>             
            </tbody>
          </table>
          <?php 
          if(count($productlist)==0)
          	echo "Không có sản phẩm nào cho sự kiện này";
          ?>
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
		var answer = confirm("Bạn chắc chắn muốn lưu?");
		if(answer){
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();
		}	
	}
</script> 