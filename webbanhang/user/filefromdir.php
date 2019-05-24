<table width="350" cellpadding="0" cellspacing="0" id="box-table-a" summary="Employee Pay Sheet">
            <thead>
              <tr>
                <th width="50" scope="col">Chọn</th>
                <th width="100" scope="col">Icon</th>
                <th width="200" scope="col">Tên file</th>               
              </tr>
            </thead>
            <tbody>
            <?php 
            for($i=0;$i<count($images);$i++)
            {
            	if( strlen($images[$i][0])>4)
            	{
            ?>
            	<tr>
                	<th width="50" scope="col"><input type="radio" class="txtcheckbox" name="txtcheckbox" value="<?php echo $images[$i][0]?>"> </th>
                	<th width="100" scope="col">
                		<img src="<?php echo pathtoweb."content/".$images[$i][0]?>" style="max-height: 40px">
                	</th>
                	<th width="200" scope="col"><?php echo $images[$i][0]?></th>               
              	</tr>
              <?php }
            	}?>
            </tbody>
</table>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	$(".txtcheckbox").click(function(){
		$("#hinhdaidienselect").val($(this).val());
		});
});
</script>