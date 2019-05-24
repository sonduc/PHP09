<?php 
include_once pathtodir.'lib/tbl_mediacategory.php';
$cate=new MediaCategory();
$arrcate=$cate->getArrayCategory("=",0);
include_once pathtodir.'lib/tbl_media.php';
$c=new Media();
if($_POST['txtsubmit']==1)
{
	if(isset($_POST['checkbox']))
	{
		$cnn=0;
			foreach ($_POST['checkbox'] as $id){
				$result=$c->DEL($id);
				if($result)
				{
					$cnn++;
				}
			}
	}	
}
$content=$c->GetContent("1=1 order by contents_id desc");
?>
<style type="text/css">
		.tooltip {
			border-bottom: 1px dotted #000000; color: #000000; outline: none;
			cursor: help; text-decoration: none;
			position: relative;
		}
		.tooltip span {
			margin-left: -999em;
			position: absolute;
		}
		.tooltip:hover span {
			border-radius: 5px 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; 
			box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 5px 5px rgba(0, 0, 0, 0.1); -moz-box-shadow: 5px 5px rgba(0, 0, 0, 0.1);
			font-family: Calibri, Tahoma, Geneva, sans-serif;
			position: absolute; left: 1em; top: 2em; z-index: 99;
			margin-left: 0;
		}
		.tooltip:hover img {
			border: 0; margin: -10px 0 0 -55px;
			float: left; position: absolute;
		}
		.tooltip:hover em {
			font-family: Candara, Tahoma, Geneva, sans-serif; font-size: 1.2em; font-weight: bold;
			display: block; padding: 0.2em 0 0.6em 0;
		}
		.classic { padding: 0.8em 1em; }
		.custom { padding: 0.5em 0.8em 0.8em 2em; }
		* html a:hover { background: transparent; }
		.classic {background: #FFFFAA; border: 1px solid #FFAD33; }
		.critical { background: #FFCCAA; border: 1px solid #FF3334;	}
		.help { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.info { background: #9FDAEE; border: 1px solid #2BB0D7;	}
		.warning { background: #FFFFAA; border: 1px solid #FFAD33; }
		</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<script>
			$(document).ready(function(){
				$(".tooltip").colorbox({rel:"tooltip",iframe:true, width:"50%", height:"50%"});	
							
			});
		</script>

<style type="text/css">
	#content select {
	width: 150px !important;
	}
</style>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;padding-top: 25px" >
		<label>Chọn xem: </label><?php echo $combo;?>
	</div>
	<div class="grid_7" style="float: left;">
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img onclick="javascript:submitfrom();" style="float: left;cursor: pointer;" title="Xóa" src="<?php echo pathtoadminweb?>images/delete.png" >
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<img id="editcontent" style="float: left;" title="Sửa" src="<?php echo pathtoadminweb?>images/mime_txt.png">
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=media&act=add"><img style="float: left;" title="Thêm" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div>
	</div>	
</div>
  <div class="grid_16" id="content">    
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users">Danh sách file</div>
		<div class="portlet-content nopadding">
        <form action="" name="edit" method="post">
        <input type="hidden" value="0" name="txtsubmit" id="txtsubmit">
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
              </tr>
            </thead>
            <tbody>
            <?php 
            for($i=0;$i<count($content);$i++)
            {
            ?>
              <tr>
                <td width="34"><label>
                    <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox"  value="<?php echo $content[$i][0]?>">
                </label></td>
                <td><?php echo $content[$i][1]?></td>
                <td><?php echo $content[$i][4]?></td>
                <td><?php echo date('d/m/Y', $content[$i][5])?></td>
                <td><?php echo $kw->SubString($content[$i][2],20) ?></td>
                <td><a class="tooltip" href="<?php echo pathtoweb."media/".$content[$i][3]?>" >...<span class="classic"><img src="<?php echo pathtoweb."media/".$content[$i][3]?>" style="max-width: 200px" /> </span></a></td>
                <td><?php echo  $content[$i][7]?></td>                
              </tr>
              <?php } ?>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" >
  $(document).ready(function(){		 
			$("#editcontent").click(function(){
				var val = [];
			    $(':checkbox:checked').each(function(i){
			      val[i] = $(this).val();
			    });
			    if(val.length!=1)
			    {
				    alert("Vui lòng chọn 1 sản phẩm khi sửa!");
				}
			    else
			    {
			    	idcate=$("#idcate").val();
			    	window.location.href="?page=media&act=edit&idmedia="+val[0];
				}
			});
			$("#allbox").click(function(){ 
				if($("#allbox").is(':checked'))
				{ 
					$(".checkboxclass").attr('checked',true);
					
					}
				else{
					$(".checkboxclass").attr('checked',false);
					}
					
				}); 
	 });
	function submitfrom() {
		var val = [];
	    $(':checkbox:checked').each(function(i){
	      val[i] = $(this).val();
	    });
	    if(val.length<1)
	    {
		    alert("Vui lòng chọn ít nhất 1 sản phẩm khi xóa!");
		}
	    else
	    {
	    	var answer = confirm("Bạn chắc chắn muốn xóa?");
			if(answer){
				document.getElementById('txtsubmit').value=1;
				document.forms["edit"].submit();
			}
		}			
	}
</script> 