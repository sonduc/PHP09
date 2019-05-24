<?php include_once pathtodir.'lib/tbl_email.php';
//server code
$emailclass=new Email();
$kw=new KW_Hook();
if($_GET['act']=='del')
{
	if(is_numeric($_GET['id']))
	{
		$result=$emailclass->DeleteEmail($_GET['id']);
		if($result)
		{
			$kw->Redirect("?page=email");
		}
	}
}
if(isset($_POST['checkbox']))
{	
	if(isset($_POST['checkbox']))
	{
		foreach ($_POST['checkbox'] as $id){
			$emailclass->DeleteEmail($id);
		}
	}
}
$p=1;
if(is_numeric($_GET['p']))
	$p=$_GET['p'];
$sta=($p-1)*20;
$email=$emailclass->GetEmail("1=1");
$tongdong=$emailclass->countEmail('1=1');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <div class="grid_16" id="content">
	<div class="grid_7" style="float: right;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a  href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;cursor: pointer;" title="Sửa sản phẩm đã chọn" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=customer&act=add"><img style="float: left;" title="Thêm sản phẩm" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div> 
	</div>	
</div>
  <div class="grid_16" id="content">
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users">Danh sách email</div>
		<div class="portlet-content nopadding">
        <form action="" method="post" name="edit" id="edit">
        <input value="0" type="hidden" name="txtsubmit" id="txtsubmit">
          <table width="100%" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="34" scope="col"><input type="checkbox" name="allbox" id="allbox" onclick="checkAll()"></th>
                <th width="36" scope="col">Mã số</th>
                <th width="202" scope="col">Email</th>
                <th width="109" scope="col">Ngày thêm</th>
              </tr>
            </thead>
            <tbody>
            <?php for($i=0;$i<count($email);$i++){?> 
              <tr>
                <td width="34">            	
                    <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox" value="<?php echo $email[$i][0]?>">
                </td>
                <td><?php echo $email[$i][0]?></td>
                <td><?php echo $email[$i][1]?></td>
                <td><?php echo date('d/m/Y',$email[$i][3])?></td>
              </tr>  
              <?php } ?>            
              <tr class="footer">
                <td ></td>
                <td align="right">&nbsp;</td>
                <td colspan="3" align="right">
				<!--  PAGINATION START  -->             
                    <div class="pagination">
	                     <?php  echo $kw->createPage($tongdong,"?page=email&p=",20,$p-1);?>
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
  <script type="text/javascript">
  $("document").ready(function(){
	  $("#allbox").click(function()
				{
			if($("#allbox").is(':checked'))
					{$(".checkboxclass").attr('checked',true);
			}
			else{
				$(".checkboxclass").attr('checked',false);

			}
			});			
	  }
		  );
  
  </script>