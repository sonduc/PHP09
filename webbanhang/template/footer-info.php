<div class="span-26 subfooter">
<div  style='float:left;width:600px'>                
<div class="support">
    <h2>
        <a>Hỗ trợ khách hàng</a></h2>
    <div class="cs-conntent">
        <ul class="fhotline">
            <li>
                <h3>Hotline:</h3>
            </li>
            <li><span class="buy">Hotline:</span>0902 455 005</li>
            <li><span class="custom">Kinh Doanh:</span>0938 917 947</li>
            <li><span class="custom">Kỹ thuật:</span>0989 59 49 39</li>
			<li><span class="custom">Email:</span><a href="mailto:nvtan78@gmail.com">nvtan@live.com</a></li>
        </ul>
        <ul class="fhotline">
            <li>
                <h3>
                    Thời gian làm việc:</h3>
            </li>
            <li>8:00 đến 21:00 (Thứ 2 đến CN)</li>
            <li>HCM: Giao hàng trong ngày</li>
            <li>Tỉnh: Giao hàng trong 3 ngày</li>
			<li>Online: <a href="ymsgr:SendIM?nvtan78"><img border="0" align="absmiddle" src="http://opi.yahoo.com/online?u=nvtan78&amp;m=g&amp;t=1"></a></li>
        </ul>
        <ul class="fhotline">
		</ul>
       <div style="margin-top: -10px" class="fb-like-box" data-href="https://www.facebook.com/pages/Baby-Shop/374897962592034?sk=likes" data-width="182" data-height="170" data-show-faces="true" data-border-color="#EFEFEF" data-stream="false" data-header="false"></div>
        
    </div>
</div>


            </div>
           
            <div class="span-7" style="margin-left: 1px ">
                <div class="payment">
                    <h2><a href="#">Tin tức thời trang</a></h2>
                    <div class="cpayment">
                        <div class="cpayment2">
                            <?php 
                            include_once 'lib/tbl_content.php';
                            $contentclass=new Content();
                            $content=$contentclass->GetContent("doc_categories_parentid=1 order by contents_id desc limit 0,3") ;                            
                            ?>
                              <div class="arrow-1">
                                <?php 
                                for($i=0;$i<count($content);$i++){
                                ?>
                                <div class="post1" style="vertical-align: top;margin:5px 0">
	                                <div class="news_box">
	                                	<a href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>">
	                                		<img  src="<?php echo pathtoweb?>content/<?php echo $content[$i][6] ?>">
	                                	</a>
										<div  style="width: 255px;float: left; padding: 5px ">
	                               		<a href="<?php echo pathtoweb.$kw->buildlink($content[$i][1])."-".$content[$i][0]."-05.htm " ?>"><?php echo $content[$i][1]?></a>
										<span style='font-size:10px;color:#333'><i><?php echo date('d/m/Y', $content[$i][9])?></i></span><br/>
										<span style='font-size:8pt;color:#333'><?php echo $kw->SubString($content[$i][4],9);?></span>
	                               </div>
	                               </div>
	                               
                                </div>
                                <?php } ?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        