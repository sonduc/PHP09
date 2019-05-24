<?php 	include_once pathtodir.'lib/tbl_product_image.php';
//server code
		$id=$_GET['idproduct'];
		$idimage=$_GET['idimage'];		
		$pro=new ProductImage();
		$image=$pro->GetProductimage("idproductimage='".$idimage."'");
		if($_POST['txtsubmit']==1)
		{
			$name=strip_tags($_POST['txtname']);
			$sort=strip_tags($_POST['txtsort']);		
			$imagel=$_FILES['txtfile'];
			$err=array();	
			if(strlen(trim($name))<2)
			{
				$err[]="Tên sản phẩm quá ngắn";
			}
			if(count($err)==0)
			{			
				$result=$pro ->EditProductimage($name,$imagel,$id,$sort,$image[0][2]);
				if($result)
				{
					$kw->Redirect("?page=product&act=image&id=".$id);
				}
				else
				{
					$err[]="Lổi trong khi chạy";
				}
			}
		}	
	
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script> 
<div class="grid_16" id="content">	
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=product"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Lưu nội dung" src="<?php echo pathtoadminweb?>images/save.png"></a>
		</div>			
	</div>	
</div>
  <div class="grid_16" id="content">
    <div class="grid_15" id="textcontent">    
		<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
			<input name="txtsubmit" id="txtsubmit" value="0" type="hidden"/>
	    	<label>Tiêu đề hình ảnh</label>
	    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $image[0][1]?>"/>
	    	<label>Thứ tự</label>
	    	<input type="text" class="smallInput" name="txtsort" value="<?php echo $image[0][4]?>"/>
	    	<label>Hình đầy đủ</label>
	        <input type="file" name="txtfile"/>   <br/>             
	    </form><br>
    	<div class="clear"></div><br/>              
    </div>
    <div class="clear"> </div>
  </div>  