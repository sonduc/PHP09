<?php 
include_once 'lib/tbl_comment.php';
$m=new Comment();
include_once pathtodir.'lib/tbl_content.php';
$c=new Content();
$p=0;
if(is_numeric($_GET['p']))
{
	$p=$_GET['p'];
}
$sta=($p)*2;
$comment=$m->ViewComment("status=2 order by idcomment desc limit {$sta},20");
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
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Bình luận bài viết</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> <?php echo contentelist?></div>
		<div class="portlet-content nopadding">
        <form action="" method="post">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col"><?php echo title?></th>
                <th width="102" scope="col"><?php echo fullname?></th>
                <th width="109" scope="col"><?php echo date?></th>
                <th width="250" scope="col"><?php echo content?></th>
                <th width="50" scope="col"><?php echo Email?></th>
                <th width="123" scope="col"><?php echo toptic?></th>
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
                    <input type="checkbox" name="checkbox" id="checkbox">
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
                <td colspan="4"><a href="#" class="delete_inline">Delete all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->
				<?php echo $kw->createPage($tongtrang,"?page=content&p=",2,$p,10); ?>          
                      
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