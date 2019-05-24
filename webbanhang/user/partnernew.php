<?php session_start(); include_once pathtodir.'lib/tbl_partner.php';
//server code
	if($_POST['txtsubmit']==1)
	{
		$name=strip_tags($_POST['txtname']);
		$sort=strip_tags($_POST['txtcode']);
		$image=$_FILES['txtimages'];
		$info=$_POST['txtcontent'];
		$category=$_POST['txtcategory'];
		$err=array();	
		if(strlen(trim($name))<2)
		{
			$err[]="Partner name is short";
		}
		if(count($err)==0)
		{
			$cate=new PartnerClass();
			$result=$cate->InsertPartner($name,$info,$category,$image,$sort,$_SESSION['usermane']);
			if($result)
			{
				$success='A new partner was added';
			}
			else
			{
				$err[]="Error run time";
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
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=partners"><span><?php echo partnerelements?></span></a></li>
                      <li><a href="#"><span><?php echo partnerediting?></span></a></li>
                      <li><a href="?page=newpartner" class="current"><span><?php echo partnernew?></span></a></li>
                      <li><a href="?page=trashpartner"><span><?php echo partnertrash?></span></a></li>   
                      <li><a href="?page=category"><span><?php echo categoryelements?></span></a></li>
                      <li><a href="#"><span><?php echo categoryediting?></span></a></li>
                      <li><a href="?page=categorynew"><span><?php echo categorynew?></span></a></li>
                      <li><a href="?page=categorytrash"><span><?php echo categorytrash?></span></a></li>          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<div class="grid_16" id="content">
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">Thêm đối tác</h1>
    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">Here would come a small tip of using this admin</a></div>
    <div class="clear">
    </div>
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">
    <h2>This is product guide</h2>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan  mauris a enim aliquet at elementum diam condimentum. Donec et sem eros.  Morbi mollis accumsan pellentesque. Duis ultricies, purus in sodales  luctus, urna dolor ultrices ligula, luctus faucibus ante dolor sit amet  tortor. Fusce non purus eros, id pulvinar ligula. Quisque ullamcorper  placerat libero. Mauris pretium purus eu nibh adipiscing pretium. Nam  libero ipsum, laoreet quis convallis id, viverra id dolor. Praesent  dignissim nisl a mauris ultrices eget ultrices libero adipiscing. Fusce  eget pretium nunc. </p>
    <p>Phasellus elit ipsum, euismod sit amet dignissim sed, varius at  velit. Praesent in tortor sem. Suspendisse potenti. Sed auctor laoreet  metus, quis luctus augue ullamcorper ut. Aenean ultricies interdum  pellentesque. Integer eget quam leo, ut vulputate purus. Suspendisse  semper commodo tellus, quis commodo ligula condimentum vel. </p>
<form id="edit" name="edit" enctype="multipart/form-data" action="" method="post" >
<input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
<input type="hidden" id="txtmess" name="txtmess">
    	<label>Partner name</label>
    	<input type="text" class="smallInput wide" name="txtname">
    	<label>Partner sort</label>
        <input type="text" class="smallInput" name="txtcode">
        <label>Partner images</label>
        <input type="file" name="txtimages">
        <!--WYSIWYG Editor is linked to the textarea with id: #wysiwyg-->
        <label>Partner content</label>
        <div style="width: 896px; " class="wysiwyg">
        	<?php 
        	include_once pathtodir.'/admin/fckeditor/fckeditor_php5.php';
        	$fck=new FCKeditor("txtcontent");
        	$fck->BasePath=pathtoweb."/admin/fckeditor/";
        	$fck->Create();
        	?>
        </div>
        <label>Please select category</label>
        <select class="smallInput" name="txtcategory">
        	<option value="1">Nhà sản xuất</option>
        	<option value="2">Nhà cung cấp</option>           
        </select>        
        <label>You can use any if the buttons below to submit this form (these are A tags)</label>
       <!-- BUTTONS -->
        <a class="button" onclick="javascript:submitfrom()"><span >Lưu nội dung</span></a>
        <a class="button_grey" onclick="javascript:document.location.href='<?php echo pathtoweb?>admin/CMS.php?page=partners'"><span>Danh sách</span></a>
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