<?php session_start(); include_once pathtodir.'lib/tbl_event_category.php';
//server code
$cate=new eventCategory();
if($_POST['txtsubmit']==1)
	{
		$name=strip_tags($_POST['txtname']);
		$sort=strip_tags($_POST['txtcode']);
		$image=$_FILES['txtimages'];
		$info=$_POST['txtcontent'];
		$category=$_POST['txtcategory'];
        if(isset($_POST['txtcheck']))
        {
            $tieubieu=1;
        }
        else
        {
            $tieubieu=0;
        }
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Category name is short";
		}
		if(count($err)==0)
		{			
			$result=$cate->InsertCategory($name,$info,$category,$image,$sort,$_SESSION['username'],$tieubieu);
			if($result)
			{
				$success='A new category was added';
			}
			else
			{
				$err[]="Error run time";
			}
		}
	}
$arrcate=$cate->getArrayCategory("=",0);
?>
<script type="text/javascript" >
function submitfrom() {
	document.getElementById('txtsubmit').value=1;
	document.forms["edit"].submit();	
}
</script>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=eventproduct"><span>Sản phẩm và Sự kiện</span></a></li>
                      <li><a href="?page=addproductevent"><span>Thêm sản phẩm</span></a></li>
                      <li><a href="?page=event"><span>Sự kiện</span></a></li>
                      <li><a href="?page=eventnew" class="current"><span>Thêm sự kiện</span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<div class="grid_16" id="content">
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">Thêm sự kiện</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">    
<form id="edit" name="edit" enctype="multipart/form-data" action="" method="post" >
<input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
<input type="hidden" id="txtmess" name="txtmess">
    	<label>Tên danh mục</label>
    	<input type="text" class="smallInput wide" name="txtname">
    	<label>Sắp xếp</label>
        <input type="text" class="smallInput" name="txtcode">
        <label>Hình đại diện</label>
        <input type="file" name="txtimages">
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label>Mô tả</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtodir.'/admin/fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoweb."/admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>
        <label>Danh mục trên</label><br/>
        <?php 
        $out=$cate->comboCategory('txtcategory',$arrcate,'smallInput',0,1);
        echo $out;
        ?> <br/>           
       <!-- BUTTONS -->
        <a class="button" onclick="javascript:submitfrom()"><span >Lưu danh mục</span></a>
        <a class="button_grey" onclick="javascript:document.location.href='<?php echo pathtoweb?>admin/CMS.php?page=category'"><span>Danh sách đã nhập</span></a>
      <!--   <a class="button_ok"><span>Update information</span></a>
        <a class="button_notok"><span>Delete this record</span></a>
        <a class="button_grey_round"><span>This is a rounded button</span></a> -->
    </form><br>

    <div class="clear"></div><br>
    <!--NOTIFICATION MESSAGES-->
      <?php if(count($err)>0){ for($e=0;$e<count($err);$e++) {?>
        <p class="info" id="error"><span class="info_inner"><?php echo $err[$e]?></span></p>
        <?php } } if(trim($success)!=""){ ?>
        <p class="info" id="success"><span class="info_inner"><?php echo $success;?></span></p>
        <?php } ?>
       <!--   <p class="info" id="warning"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
        <p class="info" id="info"><span class="info_inner">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span></p>
        -->
       <?php ?>    
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>