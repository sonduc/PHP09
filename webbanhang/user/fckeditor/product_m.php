<? // Config
$tableCategoryConfig = 'tbl_product_category';
$tableConfig         = 'tbl_product';
$actConfig           = 'product';
$parentWhereConfig   = 'parent<>0';
$path = "../images/product";
$pathdb = "images/product";
$link=Connect();
?>
<script language="javascript">
function btnSave_onclick(){
	if(test_empty(document.frmForm.txtName.value)){
		alert('Hãy nhập "tên" !');
		document.frmForm.txtName.focus();
		return false;
	}
	if(test_integer(document.frmForm.txtSort.value)){
		alert('"Thứ tự sắp xếp" phải là số !');
		document.frmForm.txtSort.focus();
		return false;
	}	
	return true;
}
</script>

<? $errMsg =''?>
<?
if (isset($_POST['btnSave'])){
	$code          = isset($_POST['txtCode']) ? trim($_POST['txtCode']) : '';
	$name          = isset($_POST['txtName']) ? trim($_POST['txtName']) : '';
	$parent        = $_POST['ddCat'];
	$subject       = isset($_POST['txtSubject']) ? trim($_POST['txtSubject']) : '';
	$detail_short  = isset($_POST['txtDetailShort']) ? trim($_POST['txtDetailShort']) : '';
	$detail        = isset($_POST['txtDetail']) ? trim($_POST['txtDetail']) : '';
	$sort          = isset($_POST['txtSort']) ? trim($_POST['txtSort']) : 0;
	$status        = $_POST['chkStatus']!='' ? 1 : 0;
	$price         = isset($_POST['txtPrice']) ? trim($_POST['txtPrice']) : 0;
	$baohanh       = isset($_POST['txtName']) ? trim($_POST['txtBaohanh']) : '';
	$video      	= isset($_POST['txtvideo']) ? trim($_POST['txtvideo']) : '';
	$huongdan      = isset($_POST['txthuongdan']) ? trim($_POST['txthuongdan']) : '';	
	$catInfo       = getRecord($tableCategoryConfig, 'id='.$parent);
	$lang          = $_POST['cmbLang'];
	if ($name=="") $errMsg .= "Hãy nhập tên danh mục !<br>";
	$errMsg .= checkUpload($_FILES["txtImage"],".jpg;.gif;.bmp;.png",500*1024,0);
	$errMsg .= checkUpload($_FILES["txtImageLarge"],".jpg;.gif;.bmp;.png",500*1024,0);

	if ($errMsg==''){
		if (!empty($_POST['id'])){
			$oldid = $_POST['id'];
			$sql = "update ".$tableConfig." set video=N'".$video."', products_include=N'".$huongdan."' , products_code=N'".$code."',products_name=N'".$name."', categories_id='".$parent."',subject=N'".$subject."',products_shortdescription=N'".$detail_short."',products_description=N'".$detail."', products_ordered=N'".$sort."', products_status=N'".$status."',products_date_modified=now(), language='".$lang."', products_price=N'".$price."', baohanh=N'".$baohanh."' where products_id='".$oldid."'";
		}else{
			$sql = "insert into ".$tableConfig." (video,products_include,products_code, products_name, categories_id, subject, products_shortdescription, products_description, products_ordered, products_status,  products_date_added, products_date_modified, language, products_price,baohanh) values (N'".$video."',N'".$huongdan."',N'".$code."',N'".$name."',N'".$parent."',N'".$subject."',N'".$detail_short."',N'".$detail."',N'".$sort."',N'".$status."',now(),now(),'".$lang."',N'".$price."',N'".$baohanh."')";
		}
		if (mysql_query($sql,$link) or die(mysql_error())){
			if(empty($_POST['id'])) $oldid = mysql_insert_id();
			$r = getRecord($tableConfig,"products_id=".$oldid);
			
			$sqlUpdateField = "";
			
			if ($_POST['chkClearImg']==''){
				$extsmall=getFileExtention($_FILES['txtImage']['name']);
				if (makeUpload($_FILES['txtImage'],"$path/".$actConfig."_s".$oldid.$extsmall)){
					@chmod("$path/".$actConfig."_s".$oldid.$extsmall, 0777);
					$sqlUpdateField = " products_image='$pathdb/".$actConfig."_s".$oldid.$extsmall."' ";
				}
			}else{
				if(file_exists('../'.$r['products_image'])) @unlink('../'.$r['products_image']);
				$sqlUpdateField = " products_image='' ";
			}
			
			if ($_POST['chkClearImgLarge']==''){
				$extlarge=getFileExtention($_FILES['txtImageLarge']['name']);
				if (makeUpload($_FILES['txtImageLarge'],"$path/".$actConfig."_l".$oldid.$extlarge)){
					@chmod("$path/".$actConfig."_l".$oldid.$extlarge, 0777);
					if($sqlUpdateField != "") $sqlUpdateField .= ",";
					$sqlUpdateField .= " products_image_large='$pathdb/".$actConfig."_l".$oldid.$extlarge."' ";
				}
			}else{
				if(file_exists('../'.$r['products_image_large'])) @unlink('../'.$r['products_image_large']);
				if($sqlUpdateField != "") $sqlUpdateField .= ",";
				$sqlUpdateField .= " products_image_large='' ";
			}
			
			if($sqlUpdateField!='')	{
				$sqlUpdate = "update ".$tableConfig." set $sqlUpdateField where products_id='".$oldid."'";
				mysql_query($sqlUpdate,$link);
			}
		}else{
			$errMsg = "Không thể cập nhật !";
		}
	}
	if ($errMsg == '')
		echo '<script>window.location="./?act='.$actConfig.'&cat='.$_REQUEST['cat'].'&page='.$_REQUEST['page'].'&code=1"</script>';
}else{
	if (isset($_GET['id'])){
		$oldid=$_GET['id'];
		$page = $_GET['page'];
		$sql = "select * from ".$tableConfig." where products_id='".$oldid."'";
		if ($result = mysql_query($sql,$link)) {
			$row=mysql_fetch_array($result);
			$code          = $row['products_code'];
			$huongdan          = $row['products_include'];
			$video          = $row['video'];
			$name          = $row['products_name'];
			$parent        = $row['categories_id'];
			$subject       = $row['subject'];
			$detail_short  = $row['products_shortdescription'];
			$detail        = $row['products_description'];
			$image         = $row['products_image'];
			$image_large   = $row['products_image_large'];
			$sort          = $row['products_ordered'];
			$status        = $row['products_status'];
			$date_added    = $row['products_date_added'];
			$last_modified = $row['products_last_modified'];
			$price         = $row['products_price'];
			$baohanh       = $row['baohanh'];
		}
	}
}

?>
<form method="post" name="frmForm" enctype="multipart/form-data" action="./">
<input type="hidden" name="act" value="<?=$actConfig?>_m">
<input type="hidden" name="id" value="<?=$_REQUEST['id']?>">
<input type="hidden" name="page" value="<?=$_REQUEST['page']?>">
<table border="1" cellpadding="0" cellspacing="0" bordercolor="#0069A8" width="100%">
	<tr>
    	<td>
    		<table border="0" cellpadding="2" bordercolor="#111111" width="100%" cellspacing="0">
				<tr><td height="10"></td></tr>
				<tr>
					<td colspan="3" align="center">
						<table width="100%">
							<? if($image!='' || $image_large!=''){?>
							<tr>
								<td width="15%"></td>
								<td width="40%" align="center" class="smallfont">
<? if ($image!=''){ echo '<img border="0" src="../'.$image.'" width="100"><br><br>Hình (kích thước nhỏ)';}?>
								</td>
								
								<td width="40%" align="center" class="smallfont">
<? if ($image_large!=''){ echo '<img border="0" src="../'.$image_large.'" width="100"><br><br>Hình (kích thước lớn)';}?>
								</td>
								<td width="15%"></td>
							</tr>
							<? }else{echo '<tr><td colspan="3" class="smallfont" align="center">Chưa có hình ảnh !</td></tr>';}?>
							<tr><td colspan="4" height="10"></td></tr>
							<tr><td colspan="4" height="1" bgcolor="#999999"></td></tr>
							<tr><td colspan="4" height="10"></td></tr>
						</table>
					</td>
				</tr>       		
        		
				<? if($multiLanguage){?>
				<tr>
					<td width="15%" class="smallfont"><p align="right">Ngôn ngữ</td>
					<td width="1%" class="smallfont"></td>
					<td width="83%" class="smallfont">
						<?=comboLanguage('cmbLang', $multiLanguage, 'smallfont')?>
					</td>
				</tr>
				<? }?> 
				
				<tr>
        			<td width="15%" class="smallfont" align="right">Mã</td>
        			<td width="1%" class="smallfont" align="center"></td>
        			<td width="83%" class="smallfont">
						<input value="<?=$code?>" type="text" name="txtCode" class="textbox" size="34">
					</td>
      			</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Tên sản phẩm</td>
					<td width="1%" class="smallfont" align="center"><font color="#FF0000">*</font></td>
					<td width="83%" class="smallfont">
						<input value="<?=$name?>" type="text" name="txtName" class="textbox" size="34">
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Gi&aacute;</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<input value="<?=$price?>" type="text" name="txtPrice" class="textbox" size="34"> <?=$currencyUnit?>
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Bảo hành </td>
					<td width="1%" class="smallfont" align="center"></td>
				  <td width="83%" class="smallfont">
						<input value="<?=$baohanh?>" type="text" name="txtBaohanh" class="textbox" size="34">&nbsp;
					  		Tháng	</td>
				</tr>		
				<tr>
					<td width="15%" class="smallfont" align="right">Hình (kích thước nhỏ)</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<input type="file" name="txtImage" class="textbox" size="34">
						<input type="checkbox" name="chkClearImg" value="on"> Xóa bỏ hình ảnh
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Hình (kích thước lớn)</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<input type="file" name="txtImageLarge" class="textbox" size="34">
						<input type="checkbox" name="chkClearImgLarge" value="on"> Xóa bỏ hình ảnh
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Mô tả ngắn</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">		
						<textarea rows="20" cols="6" name="txtDetailShort"><?php echo $detail_short?></textarea>						
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Thông tin chi tiết</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<?php 		
						include_once '/fckeditor/fckeditor.php';
						$edito=new FCKeditor("txtDetail");				
                 		$edito->ToolbarSet="Alibaba";   
                 		$edito->Width=608;
                 		$edito->ResizeMode=FALSE;
                 		$edito->Height=372;
                 		$edito->BasePath="/admin/fckeditor/";
                 		$edito->Value=$detail; 
                 		$edito->Create(); 
						?>
					</td>
				</tr>
				<tr>
					<td width="15%" class="smallfont" align="right">Hướng dẩn sữ dụng</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<?php 		
						$edito1=new FCKeditor("txthuongdan");				
                 		$edito1->ToolbarSet="Basic";   
                 		$edito1->Width=608;
                 		$edito1->ResizeMode=FALSE;
                 		$edito1->Height=372;
                 		$edito1->BasePath="/admin/fckeditor/";
                 		$edito1->Value=$huongdan; 
                 		$edito1->Create(); 
						?>
					</td>
				</tr>
				<tr>
					<td width="15%" class="smallfont" align="right">Video</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<?php 		
						$edito2=new FCKeditor("txtvideo");				
                 		$edito2->ToolbarSet="Alibaba";   
                 		$edito2->Width=608;
                 		$edito2->ResizeMode=FALSE;
                 		$edito2->Height=372;
                 		$edito2->BasePath="/admin/fckeditor/";
                 		$edito2->Value=$video; 
                 		$edito2->Create(); 
						?>
					</td>
				</tr>
				<tr>
					<td width="15%" class="smallfont" align="right">Thu&#7897;c Danh m&#7909;c</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<?=comboCategory('ddCat',getArrayCategory($tableCategoryConfig),'smallfont',$parent,0)?>
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Thứ tự sắp xếp</td>
					<td width="1%" class="smallfont" align="right"></td>
					<td width="83%" class="smallfont">
						<input value="<?=$sort?>" type="text" name="txtSort" class="textbox" size="34">
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont" align="right">Không hiển thị</td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<input type="checkbox" name="chkStatus" value="on" <? if ($status>0) echo 'checked' ?>>
					</td>
				</tr>
				
				<tr>
					<td width="15%" class="smallfont"></td>
					<td width="1%" class="smallfont" align="center"></td>
					<td width="83%" class="smallfont">
						<input type="submit" name="btnSave" VALUE="Cập nhật" class="button" onclick="return btnSave_onclick()">
						<input type="reset" class=button value="Nhập lại">
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>
<? if($errMsg!=''){echo '<p align=center class="err">'.$errMsg.'<br></p>';}?>