<?php 	include_once pathtodir.'lib/tbl_partner.php';
		include_once pathtodir.'lib/tbl_product_category.php';
		include_once pathtodir.'lib/tbl_product.php';        
		$cate=new ProductCategory();
		$arrcategory=$cate->getArrayCategory("=");
//server code
		$partner=new PartnerClass();
         $pro=new Product();
		$arrmanufer=$partner->getArrayCategory("=",1);
		$arrsupplier=$partner->getArrayCategory("=",2);
		if($_POST['txtsubmit']==1)
		{
		$name=strip_tags($_POST['txtname']);
		$code=strip_tags($_POST['txtcode']);
		$sort=strip_tags($_POST['txtsort']);
		$price=strip_tags($_POST['txtprice']);
		$txtshortcontent=strip_tags($_POST['txtshortcontent']);
		$txtcontent=$_POST['txtcontent'];
		$txtvanhanh=$_POST['txtvanhanh'];
		$txtcongnghe=$_POST['txtcongnghe'];
		$txttinhnang=$_POST['txttinhnang'];
		$txtthongso=$_POST['txtthongso'];
		$txttieuchuan=$_POST['txttieuchuan'];
		$txtcategory=strip_tags($_POST['txtcategory']);
		$txtmanuafer=strip_tags($_POST['txtmanuafer']);
		$txtsupplier=strip_tags($_POST['txtsupplier']);
		$image=$_FILES['txtfilesmall'];
		$imagel=$_FILES['txtfile'];
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Product name is short";
		}
		if(count($err)==0)
		{
			$pro=new Product();
			$result=$pro ->InsertProductcolor($code,$name,$image,$imagel,$price,$sort,$txtshortcontent,$txtcontent,$txtcategory,$txtmanuafer,$txtsupplier,$_SESSION['username'],$txtvanhanh,$txtcongnghe,$_GET['id']);
			if($result)
			{
				$kw->Redirect("?page=product");
			}
			else
			{
				$err[]="Error run time";
			}
		}
	}
	if($_GET['act']=='del')
	{
		if(is_numeric($_GET['idimage']))
		{
			$pro->DeleteProductcolor($_GET['idimage']);
		}
	}
    $product=$pro->GetProduct("products_id=".$_GET['id']);	
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script> 

  <div class="grid_16" id="content">
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">Thêm màu sắc sản phẩm</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip"><?php echo admintip ?></a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">
    <h2>Hướng dẩn nhập màu sắc sản phẩm</h2>
    <p> Mặc định thông tin của một màu sắc khác của sản phẩm trùng với thông tin với màu gốc. Nhưng trong một vài trường hợp thông tin khác nhau
        Vì vậy , nếu thông tin của màu sắc khác (VD: màu sắc khác thì giá bán khác) thì nhập những thông tin khác đó tại đây.
    </p>
    <p>Tên sản phẩm bắt buộc giống nhau tiêu đề sản phẩm trong phần này chỉ có tác dụng tại thẻ ALT và TITLE khi hiển thị màu sắc sản phẩm</p>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
    	<label>Tiêu đề hình ảnh</label>
    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $product[0][2]; ?>"/>
    	<label>Mã số sản phẩm</label>
        <input type="text" class="smallInput" name="txtcode" value="<?php echo $product[0][1]; ?>"/>
        <label>Giá bán</label>
        <input type="text" class="smallInput" name="txtprice" value="<?php echo $product[0][5]; ?>"/>
        <label>Giá gốc</label>
        <input type="text" name="txtvanhanh" value="<?php echo $product[0][20]; ?>">        
        <label>Hình nhỏ</label>
        <input type="file" name="txtfilesmall">
        <label>Hình đầy đủ</label>
        <input type="file" name="txtfile">        
        <label>Mô tả ngắn</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"><?php echo $product[0][10]; ?></textarea>
        </div>
        <label>Giới thiệu sản phẩm</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtodir.'admin/fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoweb."admin/fckeditor/";
            $fck->Value=$product[0][11];
        	$fck->Create();
        	?>
        </div>   
        <label>Chọn danh mục</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcategory,'smallInput',$product[0][19],1);
        echo $out;
        ?>     <br/>
        <label>Bài viết kích thước</label>
        
            <?php 
            include_once pathtodir.'lib/tbl_content.php';
            $c=new Content();
            $arrcontent=$c->GetContent("doc_categories_parentid in (select categories_id from tbl_content_category where code ='product' )");            
            ?>
            <select name="txtsupplier">
            <?php
            for($i=0;$i<count($arrcontent);$i++)
            {
                ?>
                <option <?php if($arrcontent[$i][0]==$product[0][17]){ ?> selected="selected" <?php } ?> value="<?php echo $arrcontent[$i][0] ?>"><?php echo $arrcontent[$i][1] ?></option>    
                <?
            }
            ?>
        </select>    <br/>
        <label>Bài viết màu sắc</label>
        <select name="txtmanuafer">
            <?php 
            $arrcontent=$c->GetContent("doc_categories_parentid in (select categories_id from tbl_content_category where code ='productcolor' )");
            for($i=0;$i<count($arrcontent);$i++)
            {
                ?>
                <option <?php if($arrcontent[$i][0]==$product[0][13]){ ?> selected="selected" <?php } ?> value="<?php echo $arrcontent[$i][0] ?>"><?php echo $arrcontent[$i][1] ?></option>    
                <?
            }
            ?>
        </select>    <br/>     
       <!-- <label>Tìm hiểu về kích thước</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	$fck=new FCKeditor("txtcongnghe");
        	$fck->BasePath=pathtoweb."admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>
       
        <label>Tìm hiểu màu sắc</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	$fck=new FCKeditor("txttinhnang");
        	$fck->BasePath=pathtoweb."admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>
        
        <label>Tiêu chuẩn</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	$fck=new FCKeditor("txttieuchuan");
        	$fck->BasePath=pathtoweb."admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>
        <label>Thông số kỹ thuật</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	$fck=new FCKeditor("txtthongso");
        	$fck->BasePath=pathtoweb."admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>--> <br />
      <!--   <label>Chọn danh mục</label>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcategory,'smallInput',0,1);
        echo $out;
        ?>     <br/>
        
       <label>Please select manufacturer</label>
        <?php 
        $out=$cate->comboCategory('txtmanuafer',$arrmanufer,'smallInput',0,1);
        echo $out;
        ?> 
        <label>Please select supplier</label>
        <?php 
        $out=$cate->comboCategory('txtsupplier',$arrsupplier,'smallInput',0,1);
        echo $out;
        ?>
        <label>You can use any if the buttons below to submit this form (these are A tags)</label>-->
       
        <a class="button"  onclick="javascript:submitfrom()"><span>Lưu sản phẩm</span></a>
        <a class="button_grey" onclick="javascript:window.location.href='?page=product'"><span>Quay lại danh sách sản phẩm</span></a>       
    </form><br/>
    <div class="clear"></div><br/>
    <!--NOTIFICATION MESSAGES-->
    <?php if(trim($success)!=""){?>
        <p class="info" id="success"><span class="info_inner"><?php echo $success;?></span></p>
        <?php }else{ 
        if(trim($success)!=""){
        	for($i=0;$i<count($err);$i++){
        ?>
        <p class="info" id="error"><span class="info_inner"><?php echo $err[$i]?></span></p>
        <?php 
        	}
        }
        }
        	?>
      
        
        <!--<p class="info" id="warning"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
        <p class="info" id="info"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>-->    
    </div>
    <div class="clear"> </div>
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Những màu sắc khác của sản phẩm này</div>
		<div class="portlet-content nopadding">       
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo productname ?></th>
                <th width="102" scope="col"><?php echo useradd ?></th>
                <th width="109" scope="col"><?php echo dateadd ?></th>
                <th width="250" scope="col"><?php echo shortcontent ?></th>
                <th width="50" scope="col"><?php echo image ?></th>
                <th width="123" scope="col"><?php echo Category ?></th>
                <th width="90" scope="col"><?php echo Actions ?></th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $productlist=$pro->GetProduct("products_pro='".$_GET['id']."'");
            for($i=0;$i<count($productlist);$i++){?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo  $productlist[$i][0]?>">
                </label></td>
                <td><?php echo  $productlist[$i][2]?></td>
                <td><?php echo $productlist[$i][15]?></td>
                <td><?php echo date('d/m/Y',$productlist[$i][7])?></td>
                <td><?php  echo $kw->SubString(strip_tags($productlist[$i][10]),10) ?></td>
                <td><img src='<?php  echo pathtoweb.'product/'.$productlist[$i][3]?>' width="50px"></td>
                <td><?php  echo $productlist[$i][12]?></td>
                <td width="90"><a href="?page=productimage&id=<?php echo $productlist[$i][0]?>" class="approve_icon" title="Thêm hình ảnh"></a> <a href="?page=productcolor&id=<?php echo $productlist[$i][0]?>" class="reject_icon" title="Thêm màu sắc"></a> <a href="?page=editproduct&id=<?php echo $productlist[$i][0]?>" class="edit_icon" title="Sửa"></a> <a href="?page=product&act=del&id=<?php echo $productlist[$i][0]?>" class="delete_icon" title="Xóa"></a></td>
              </tr>
              <?php }?>              
            </tbody>
          </table>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
<!-- END CONTENT-->    
  </div>