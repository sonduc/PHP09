<?php 	include_once pathtodir.'lib/tbl_product_image.php';
		include_once pathtodir.'lib/tbl_product.php';
		$productclass=new Product();
//server code
	$id=$_GET['idproduct'];
	$pro=new ProductImage();
	$kw=new KW_Hook();
	if($_POST['txtsubmit']==1)
	{
		$name=strip_tags($_POST['txtname']);		
		$imagel=$_FILES['txtfile']; 
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Tên sản phẩm quá ngắn";
		}
		if(count($err)==0)
		{ 
			$result = $pro->InsertProductimage1 ( $name, $imagel,$id );
			if($result)
			{ 
				$kw -> Redirect("?page=product&act=image&idproduct=".$id); 
			}
			else
			{
				$err[]="Lỗi trong khi chạy";
			}
		}
	} 
	if($_POST['txtsubmit1']==2)
	{  
		if(isset($_POST['checkbox']))
		{   
			foreach($_POST['checkbox'] as $id1)
			{ 
			    $pro->DeleteProductimage($id1);
			    
			} 
		    if($pro)
		    { 
		    	$kw -> Redirect("?page=product&act=image&idproduct=".$id);
		    }
		}
	}
	$product=$productclass->GetProduct("products_id='".$id."'");
	
?>
<div class="grid_16" id="content">	
	<div class="grid_7" style="float: right;">		
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=product"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfromdelete()"><img style="float: left;" title="Xóa sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa hình ảnh sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
  <div class="grid_16" id="content">
    
    <div class="grid_15" id="textcontent">     
		<input name="txtsubmit" id="txtsubmit" value="0" type="hidden"/>
		<input type="hidden" value="<?php echo $id?>" id="idproduct">
    	<label>Tiêu đề hình ảnh</label>
    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $product[0][2]?>"/>
    	<label>Thứ tự</label>
    	<input type="text" class="smallInput" name="txtsort"/>
    	<label>Hình đầy đủ</label>
        <input type="file" name="txtfile"/>   <br/>    
           
    <br>
    <div class="clear"></div><br/> 
    </div>
  
    <div class="clear"> </div>
<!-- END CONTENT-->    
<div id="portlets">  
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách hình ảnh của sản phẩm</div>
		<div class="portlet-content nopadding">
        <input type="hidden" name="txtsubmit1" id="txtsubmit1" value="0">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col">Stt</th>
                <th width="34" scope="col"></th>
                <th width="136" scope="col">Tiêu đề hình ảnh</th>
                <th width="50" scope="col">images</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $productlist=$pro->GetProductimage("idproduct='".$id."'");
            for($i=0;$i<count($productlist); $i++){?>
              <tr>
                <td width="34"><label>
                    <?php echo($i+1)?>
                </label></td>
                <td width="34" style="vertical-align: top"><label>
                    <input type="checkbox" class="checkboxclass" name="checkbox[]" id="checkbox<?php echo $i?>" value="<?php echo  $productlist[$i][0]?>"/>
                </label></td>
                <td><?php echo  $productlist[$i][1]?></td>
                <td><img src='<?php  echo pathtoweb.'product/color/'.$productlist[$i][2]?>' width="50px"></td> 
              </tr>
              <?php }?>             
            </tbody>
          </table>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div> 
  </div>
    </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" >
  $(document).ready(function(){		
			$("#editcontent").click(function(){
				var val = [];
			    $(':checkbox:checked').each(function(i){
			      val[i] = $(this).val();
			    });
			    if(val.length<1)
			    {
				    alert("Vui lòng chọn 1 hình sản phẩm khi sửa!");
				}
			    else
			    {
			    	var idproduct=$("#idproduct").val();
			    	window.location.href="?page=product&act=editimage&idimage="+val[0]+"&idproduct="+idproduct;
				}
			}); 
	 });
	function submitfromdelete() {
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
				document.getElementById('txtsubmit1').value=2;
				document.forms["edit"].submit(); 
			}
		}	
	} 
	function submitfrom() { 
		var answer=confirm("Bạn chắc chắn thêm vào sản phẩm !");
		if(answer)
		{
			document.getElementById('txtsubmit').value=1;
			document.forms["edit"].submit();	
		} 
	}  
</script> 