<?php 
include_once pathtodir.'lib/tbl_content_category.php';
$cate=new ContentCategory();
$arrcate=$cate->getArrayCategory("=",0);
include_once pathtodir.'lib/tbl_content.php';
$c=new Content();
$p=0;
if(is_numeric($_GET['p']))
{
	$p=$_GET['p'];
}
if($_GET['act']=='del')
{
    $c->DelContent($_GET['id']);
}
$sta=($p)*20;
$content=$c->GetContent("status=1 order by contents_id desc limit ".$sta.",20");
$countcontent=$c->count("status=1");
if(isset($_POST['btxoa']))
{
	$arrid=$_POST['checkbox'];
	$cnn=0;
	foreach ($arrid as  $idproduct)
	{
		$result=$c->DelContent($idproduct);
		if($result)
		{
			$cnn++;
		}		
	}
}
?>
<div class="grid_16">
<!-- TABS START -->
     <div id="tabs">
         <div class="container">
            <ul>
					<li><a href="?page=content" class="current"><span><?php echo contentelements?></span></a></li>
                    <li><a href="#"><span><?php echo contentediting?></span></a></li>
                    <li><a href="?page=newcontent"><span><?php echo contentnew?></span></a></li>
                    <li><a href="?page=trashcontent"><span><?php echo contenttrash?></span></a></li>  
                    <li><a href="?page=contentcategory"><span><?php echo categoryelements?></span></a></li>
                    <li><a href="?page=contentcategorynew"><span><?php echo categorynew?></span></a></li>   
                    <li><a href="?page=contentcomment"><span><?php echo contentcomment?></span></a></li>    
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content"><?php echo content_lang?> đã xóa</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Last Registered users Table Example</div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
           <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo title?></th>
                <th width="102" scope="col"><?php echo username?></th>
                <th width="109" scope="col"><?php echo date?></th>
                <th width="250" scope="col"><?php echo content?></th>
                <th width="50" scope="col"><?php echo images?></th>
                <th width="123" scope="col"><?php echo category?></th>
                <th width="90" scope="col"><?php echo actions?></th>
              </tr>
            </thead>
            <tbody>
            <?php 
            for($i=0;$i<count($content);$i++)
            {
            ?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $content[$i][0]?>">
                </label></td>
                <td><?php echo $content[$i][1]?></td>
                <td><?php echo $content[$i][14]?></td>
                <td><?php echo date('d/m/Y', $content[$i][10])?></td>
                <td><?php echo $kw->SubString($content[$i][4],20) ?></td>
                <td>...</td>
                <td><?php echo  $content[$i][11]?></td>
                <td width="90"><a href="#" class="approve_icon" title="Approve"></a> <a href="#" class="reject_icon" title="Reject"></a> <a href="?page=editcontent&id=<?php echo $content[$i][0]?>" class="edit_icon" title="Edit"></a> <a href="?page=content&act=del&id=<?php echo $content[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>
              <?php } ?>
              <tr class="footer">
                <td colspan="4"><input type="submit" value="Xóa chọn" name="btxoa"> </td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->
				<?php echo $kw->createPage($countcontent,"?page=content&p=@x",20,$p); ?>          
                      
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