<?php include_once pathtodir.'lib/tbl_comment.php';
		include_once pathtodir.'lib/tbl_product.php';
		$pro=new Product();
//server code
$commentclass=new Comment();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$commentclass->DeleteComment($_GET['id']);
		if($result)
		{
			$kw->Redirect("?page=comment");
		}
	}
}
if(isset($_POST['checkbox']))
{
	
	if(isset($_POST['checkbox']))
	{
			foreach ($_POST['checkbox'] as $id){
				$partner->DeletePartner($id);
			}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$comment=$commentclass->GetComment("1=1 order by idcomment desc");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".approve_icon").colorbox({inline:true, width:"50%"});				
			});
</script>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="?page=user"><span>Danh sách User</span></a></li>
                      <li><a href="?page=comment" class="current"><span>Bình luận</span></a></li>
                      <li><a href="?page=oder"><span>Đặt hàng</span></a></li>
                                               
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Quản bình luận</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách bình Luận</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit" id="edit">
        <input value="0" type="hidden" name="txtsubmit" id="txtsubmit">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="136" scope="col">Họ và tên</th>
                <th width="102" scope="col">Email</th>
                <th width="109" scope="col">Ngày thêm</th>
                <th width="50" scope="col">Tiêu đề</th>
                <th width="250" scope="col">Nội dung</th>
                <th width="90" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($comment);$i++){
            $product=$pro->GetProduct("products_id='".$comment[$i][5]."'");
            	?>            
              <tr>
                <td width="34"><label>
                	<div style='display:none;'>
					<div id='inline_content<?php echo $i?>' style='padding:10px; background:#fff;' align="justify">
					<table style="float: left;width: 400px;">
							<tr><td style="width: 150px">Họ và tên: </td><td style="width: 250px"><?php echo $comment[$i][2]?></td></tr>
							<tr><td style="width: 150px">Email : </td><td style="width: 250px"><?php echo $comment[$i][3]?></td></tr>							
							<tr><td style="width: 150px">Ngày đăng  : </td><td style="width: 250px"><?php echo date('d/m/Y',$comment[$i][6])?></td></tr>
							<tr><td colspan="2"><?php echo $comment[$i][8]."<br/>".$comment[$i][1]?></td></tr>
							<tr><td colspan="2">Sản phẩm  : <?php echo $product[0][2]?><br/><a target="_blank" href="<?php echo pathtoweb.$kw->buildlink($product[0][2])."-".$product[0][0]?>-04.htm"><img border="0" src="<?php echo pathtoweb."product/".$product[0][3] ;?>" height="50px"></a> </td></tr>
						
					</table>
					</div>
				</div>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $comment[$i][0]?>">
                </label></td>
                <td><?php echo $comment[$i][2]?></td>
                <td><?php echo $comment[$i][3]?></td>
                <td><?php echo date('d/m/Y',$comment[$i][6])?></td>                
                <td><?php echo $comment[$i][8];?></td>  
                <td><?php echo $kw->SubString($comment[$i][1],20)?></td>              
                <td width="90"><a id='inline<?php echo $i?>' href="#inline_content<?php echo $i?>" class="approve_icon" title="Bình luận của: <?php echo $comment[$i][2]?>"></a> <a href="?page=comment&act=del&id=<?php echo $comment[$i][0]?>" class="delete_icon" title="Delete"></a></td>
              </tr>  
              <?php } ?>            
              <tr class="footer">
                <td colspan="4"><a href="javascript:submitfrom()" class="delete_inline">Delete all</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
	                     <?php  echo $kw->createPage($tongdong,"?page=comment&p=",20,$p-1);?>
                    </div>  
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
 <script type="text/javascript" >
	function submitfrom() {
		var answer = confirm("Bạn chắc chắn muốn xóa?");
		if(answer)
		{
		document.getElementById('txtsubmit').value=1;
		document.forms["edit"].submit();
	}	
	}
</script> 