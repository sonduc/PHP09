<?php 
include_once pathtodir.'lib/tbl_content_category.php';
$cate=new ContentCategory();
$idcate=$_GET['idcate'];
//echo "GET idcate : ".$idcate;
$arrcate=$cate->getArrayCategory("=",0);
$combo=$cate->comboCategory('cbcategory_content',$arrcate,'cbcategory_content',$idcate,1);
include_once pathtodir.'lib/tbl_content.php';
$c=new Content();
$p=0;
if(is_numeric($_GET['p']))
{
	$p=$_GET['p'];
}
$sta=($p)*20;
if($_POST['txtsubmit']==1)
{
	$arrid=$_POST['checkbox'];
	$cnn=0;
	foreach ($arrid as  $idproduct)
	{
		$result=$c->DEL($idproduct);
		if($result)
		{
			$cnn++;
		}		
	}
}
if(!is_numeric($idcate))
{
	//echo "not exist idcate";exit();
	$content=$c->GetContent("status=1 order by contents_id desc limit ".$sta.",20");
	$countcontent=$c->count("status=1 ");
}
else 
{
	//echo "exist idcate";exit();
	$content=$c->GetContent("status=1 and doc_categories_parentid='" .$idcate. "' order by contents_id desc limit ".$sta.",20");
	$countcontent=$c->count("status=1 and doc_categories_parentid='" .$idcate. "'");
}
//print_r($content);exit();
?>
<style type="text/css">
	#content select {
	width: 150px !important;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoweb?>popup/colorbox.css" />
<script language="javascript" type="text/javascript" src="<?php echo pathtoweb?>popup/jquery.colorbox-min.js"></script>
<div class="grid_16" id="content">
	<div class="grid_7" style="float: left;padding-top: 25px" >
		<label>Chọn xem: </label><?php echo $combo;?>
	</div>
	<div class="grid_7" style="float: left;" >
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=logout"><img style="float: left;" title="Thoát" src="<?php echo pathtoadminweb?>images/exit.png"></a>
		</div>	
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img style="float: left;" title="Quay lại" src="<?php echo pathtoadminweb?>images/Paper-arrow-back.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#" onclick="javascript:submitfrom()"><img style="float: left;" title="Xóa" src="<?php echo pathtoadminweb?>images/delete.png"></a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="#"><img id="editcontent" style="float: left;" title="Sửa" src="<?php echo pathtoadminweb?>images/mime_txt.png"><a>
		</div>
		<div style="float: right;width: 48px;margin-right: 10px">
			<a href="?page=content&act=add&idcate=<?php echo $idcate?>"><img style="float: left;" title="Thêm" src="<?php echo pathtoadminweb?>images/file_add.png"></a>
		</div>
	</div>
</div>
  <div class="grid_16" id="content">
     <!--  TITLE START  -->    
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets"> 
    <div class="portlet ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="portlet-header fixed ui-widget-header ui-corner-top"><span class="ui-icon ui-icon-triangle-1-n"></span><img src="images/user.gif" width="16" height="16" alt="Latest Registered Users"> <?php echo contentelist?></div>
		<div class="portlet-content nopadding">
        <form action="" name="edit" id="edit" method="post">
        <input type="hidden" id="txtsubmit" name="txtsubmit" value="0">
        <input type="hidden" value="<?php echo $_GET['idcate']?>" id="idcate">
        <input type="hidden" value="<?php echo $p ?>" id="page">
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
                    <input type="checkbox" name="checkbox[]" class="checkboxclass" id="checkbox" value="<?php echo $content[$i][0]?>">
                </label></td>
                <td><?php echo $content[$i][1]?></td>
                <td><?php echo $content[$i][15]?></td>
                <td><?php echo date('d/m/Y', $content[$i][10])?></td>
                <td><?php echo $kw->SubString($content[$i][4],20) ?></td>
                <td><?php if($content[$i][6]!=""){?> 
    				<a class="group1" href="<?php echo pathtoweb."content/".$content[$i][6]?>"><span title="Click để xem anh đầy đủ">...</span></a>
    		<?php }?></td>
                <td><?php echo  $content[$i][11]?></td>                
              </tr>
              <?php } ?>
              <tr class="footer">                
                <td align="right">&nbsp;</td>
                <td colspan="6" align="right">
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
  <script type="text/javascript" >
  $(document).ready(function(){ 
		 $("#cbcategory_content").change(function(){			  
			 var p=$("#page").val();
			 var idcate=$(this).val();
			 window.location.href="?page=content&p="+p+"&idcate="+idcate;
			 });
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
			    	window.location.href="?page=content&act=edit&id="+val[0]+"&idcate="+idcate;;
				}
			});
			$("#allbox").click(function(){
				if($("#allbox").is(':checked'))
				{
					$(".checkboxclass").attr('checked', true);
				}else
				{
					$(".checkboxclass").attr('checked', false);
				}
				});
		 		
	 });
	function submitfrom() {
		var val = [];
	    $(':checkbox:checked').each(function(i){
	      val[i] = $(this).val();
	    });
	    if(val.length!=1)
	    {
		    alert("Vui lòng chọn sản phẩm khi xóa!");
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