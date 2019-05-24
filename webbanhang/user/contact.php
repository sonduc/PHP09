<?php 
include_once pathtodir.'lib/tbl_contact.php';
$contactclass=new Contact();
$p=0;
if(is_numeric($_GET['p']))
{
	$p=$_GET['p'];
}
if($_GET['act']=='del')
{
    $contactclass->DEL($_GET['id']);
}
if(isset($_POST['btsubmit'])&& $_POST['btsubmit']==1)
{
	$nt=0;
	foreach ($_POST['checkbox'] as $idcontact)
	{
		$result=$contactclass->DEL($idcontact);
		if($result)
			$nt++;		
	}
}
if(isset($_POST['btsubmit'])&& $_POST['btsubmit']==2)
{
	$nt=0;
	foreach ($_POST['checkbox'] as $idcontact)
	{
		$result=$contactclass->UpdateStatus(0,$idcontact);
		if($result)
			$nt++;		
	}
}
if(isset($_POST['btsubmit'])&& $_POST['btsubmit']==3)
{
	$nt=0;
	foreach ($_POST['checkbox'] as $idcontact)
	{
		$result=$contactclass->UpdateStatus(1,$idcontact);
		if($result)
			$nt++;		
	}
}
$sta=($p)*20;
$contact=$contactclass->ViewContact("1=1 order by idcontact desc limit ".$sta.",20");
//print_r($contact);exit();
$countcontent=$contactclass->count("1=1");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){ 
				$(".approve_icon").colorbox({inline:true, width:"50%"});
				$("#allbox").click(function() {
					if($("#allbox").is(':checked'))
							{$(".checkboxclass").attr('checked',true);
					}
					else{
						$(".checkboxclass").attr('checked',false); } });				
			});
			function submitform()
			{
				var answer = confirm("Bạn muốn xóa những dòng đã chọn?")
				if (answer){
					document.getElementById("btsubmit").value=1;
					document.contactform.submit();
				}				
			}
			function submitform2()
			{
				var answer = confirm("Bạn đánh dấu đã đọc những dòng đã chọn?")
				if (answer){
					document.getElementById("btsubmit").value=2;
					document.contactform.submit();
				}				
			}
			function submitform3()
			{
				var answer = confirm("Bạn đánh dấu chưa đọc những dòng đã chọn?");
				if (answer){
					document.getElementById("btsubmit").value=3;
					document.contactform.submit();
				}				
			}
		</script>

<div class="grid_16">   
</div>
  <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="inner content">Liên hệ</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> Danh sách liên hệ</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="contactform" id="contactform">
        <input type="hidden" name="btsubmit" id="btsubmit" value="0">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" ></th>                
                <th width="102" scope="col">Người gửi</th>
                <th width="136" scope="col">Email</th>
                <th width="109" scope="col">Ngày gửi</th>
                <th width="250" scope="col">Tiêu đề</th>
                <th width="90" scope="col"><?php echo actions?></th>
              </tr>
            </thead>
            <tbody>
	            <?php  for($i=0;$i<count($contact);$i++) {
	            	$bgcolor="";
	            	if($contact[$i][6]==1)
	            		$bgcolor=" style='color:red'"; ?>
              <tr >
              <div style='display:none'>
					<div id='inline_content<?php echo $i?>' style='padding:10px; background:#fff;' align="justify"> 
			            Họ tên : <?php echo $contact[$i][1];?><br>
			            Email: <?php echo $contact[$i][2];?><br>
			            Điện thoại : <?php echo $contact[$i][5];?><br>
			            Mô tả :<?php echo $contact[$i][3];?> <br>
			            Ngày gởi thông tin: <?php echo date('d/m/Y', $contact[$i][4]);?>  
					</div>
			</div>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox" value="<?php echo $contact[$i][0];?>">
                </label></td>
                <td <?php echo $bgcolor;?>><?php echo $contact[$i][1]?></td>
                <td <?php echo $bgcolor;?>><?php echo $contact[$i][2]?></td>
                <td <?php echo $bgcolor;?>><?php echo date('d/m/Y', $contact[$i][4])?></td>
                <td <?php echo $bgcolor;?>><?php echo $kw->SubString($contact[$i][7],20) ?></td>
                <td width="90"><a id='inline<?php echo $i?>' href="#inline_content<?php echo $i?>" class="approve_icon" title="Approve"></a><a href="#" onclick="delete_InForm('<?php echo $i?>');" class="delete_icon" title="Delete"></a></td>
                <input type="hidden"  id="admin_oder_hiden<?php echo $i;?>" name="admin_oder_hiden" value="<?php echo $contact[$i][0]?>">
              </tr> <?php } ?>
              <tr class="footer">
                <td colspan="4"><a href="javascript: submitform()" class="delete_inline">Xóa chọn</a><a href="javascript: submitform2()" class="approve_inline">Đã đọc</a><a href="javascript: submitform3()" class="approve_inline">Chưa đọc</a></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">				
				<?php echo $kw->createPage($countcontent,"?page=content&p=@x",20,$p,10); ?>  
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
  <script type="text/javascript">
	function delete_InForm(selId)
	{
		var answer =confirm("Bạn có chắc chắn muốn xóa hộp thư này ?");
		if( answer)
		{ 
			 var b=document.getElementById('admin_oder_hiden'+selId).value;
			 window.location.href="?page=contact&act=del&id=" + b;
		}
	}
</script>
  