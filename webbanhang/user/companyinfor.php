<?php 
if($_POST['txtsubmit']==1)
{
	$kw=new KW_Hook();
	$tendoanhnghiep=$_POST['txtname'];
	$nguoidaidien=$_POST['txtnguoidaidien'];
	$diachi=$_POST['txtdiachi'];
	$phone=$_POST['txtphone'];
	$mota=$_POST['txtshortcontent'];
	$text=$_POST['txtcontent'];	
	$str="update tbl_company set name=N'$tendoanhnghiep',nguoidaidien=N'$nguoidaidien', phone=N'$phone', diachi=N'$diachi', text=N'$text', mota=N'$mota'";
	$result=$kw->AccessNoneReturn($str);
	if($result)	
	{
		$fname=strtolower(basename($_FILES['txtfilesmall']['name']));	
		if($fname!="")
		{	
				$fname=$kw->buildlink($fname);
				$result=$kw->makeUpload($_FILES['txtfilesmall'],pathtodir.$fname);
				if($result)
				{					
					$str="update tbl_company set logo='$fname'";
					$result=$kw->AccessNoneReturn($str);
					if($result)
					{
						$message=array(1,"Cập nhật thành công");						
					}
					else 
						$message=array(0,"Cập nhật hình không thành công , vui lòng thử lại");
				}
				else 
					$message=array(0,"Upload hình không thành công , vui lòng thử lại");			
		}
	}else 
			$message=array(0,"Cập nhật thông tin không thành công , vui lòng thử lại");
}
$result=$kw->getRecord('tbl_company','1=1');
$company=mysql_fetch_array($result);
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
    <h1 class="content_edit">Thông tin công ty</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">    
    <?php 
    echo "<span style='color:red'>".$message[1]."</span>";
    ?>
<form id="edit" name="edit" action="" method="post" enctype="multipart/form-data">
<input name="txtsubmit" id="txtsubmit" value="0" type="hidden">
    	<label>Tên doanh nghiệp</label>
    	<input type="text" class="smallInput wide" name="txtname" value="<?php echo $company['name']?>">
    	<label>Người đại diện</label>
        <input type="text" class="smallInput" name="txtnguoidaidien" value="<?php echo $company['nguoidaidien']?>">
    	<label>Địa chỉ</label>
        <input type="text" class="smallInput" name="txtdiachi" value="<?php echo $company['diachi']?>">
        <label>Phone</label>
        <input type="text" class="smallInput" name="txtphone" value="<?php echo $company['phone']?>">
        <label>Logo</label>
        <input type="file" name="txtfilesmall">          
        <label>Welcome text</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtshortcontent" rows="5" cols="109"> <?php echo $company['mota']?></textarea>
        </div>    
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
        	<textarea name="txtcontent" rows="5" cols="109"><?php echo $company['text']?></textarea>
        </div>
        <br/>       
        <a class="button"  onclick="javascript:submitfrom()"><span>Lưu thông tin</span></a>              
    </form>
        
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>