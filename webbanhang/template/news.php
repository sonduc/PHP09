<?php 
	 include_once 'lib/tbl_content.php';
	 $contentclass=new Content();
	 $p=$kw->GetParamater($uri,2);
	 if(!is_numeric($p))
		$p=0;
	 $sta=$p*12;
	 $contentnew=$contentclass->GetContent("doc_categories_parentid='1' order by contents_id desc limit $sta,12");
	 $tongdong=$contentclass->count("doc_categories_parentid='1'");
	 $tongtrang=ceil($tongdong/12);
?>
<div class="breadcrumb" >
    <ul class="brech">
        <li itemscope="" >
			<a itemprop="url" property="v:title" href="<?php echo pathtoweb?>" title="Mua sắm">
                <span itemprop="title">Trang chủ</span>
					<i></i>
            </a>
        </li>
        <li itemscope="" >
            <a itemprop="url" rel="v:url" property="v:title" >
                <span itemprop="title">Tin tức thời trang</span>
                    <i></i>
            </a>
		</li>
	</ul>     
</div>
<div class="part_3">
    <div class="part_left">
    <div class="newsTTTT">
		<h2><a href="<?php echo pathtoweb?>tin-thoi-trang-04.htm"><span class="icon_news_fashion"></span>TIN THỜI TRANG &amp; LÀM ĐẸP</a></h2>
				<?php 
				for($i=0;$i<count($contentnew);$i++){
				?>
				<div class="post">
					<div class="news_box">
						<a class="title_post" href="<?php echo pathtoweb.$kw->buildlink($contentnew[$i][1])."-".$contentnew[$i][0]."-05.htm"?>">
							<img src="<?php echo pathtoweb?>content/<?php echo $contentnew[$i][6]?>" title="<?php echo $contentnew[$i][1]?>" alt="<?php echo $contentnew[$i][1]?>">
							</a><div class="news_description">
							<a class="title_post" href="<?php echo pathtoweb.$kw->buildlink($contentnew[$i][1])."-".$contentnew[$i][0]."-05.htm"?>">
								<h4><?php echo $contentnew[$i][1]?></h4>
								<p>
									<span class="time_post"><?php 
									echo date('d/m/Y',$contentnew[$i][10]);
									?></span>
								</p>
								<p class="short_desc"><?php echo $contentnew[$i][4]?></p>
							</a>
					</div>
				</div>
				</div>
			<?php } ?>    
		<div class="pagging ">
		  <ul class="pagging_nav">
			 <span id="ctl00_ctl00_ctl00_cphContent_cphContent_V3SearchResultManager1_V3SearchResultList1_pager2">
				<li> <a href="<?php echo pathtoweb."tin-tuc-thoi-trang-0-04.htm" ?>" title="Trang đầu">&nbsp;«&nbsp;</a></li>&nbsp;
				<?php 
				if($p>0)
				{
				?>
				<li> <a href="<?php echo pathtoweb."tin-tuc-thoi-trang-".($p+1)."-04.htm" ?>" title="Trang trước" > &nbsp;‹&nbsp;</a></li>&nbsp;
				
				<?php } 
				for($i=0;$i<$tongtrang;$i++){
					$vt=$i+1;
					if($p==$i){
				?>
				<li class="active"> <a href="#" ><?php echo $vt?></a></li>&nbsp;
				<?php } else{?>
				<li> <a href="<?php echo pathtoweb.$kw->buildlink("Tin tức thời trang")."-".$i."-04.htm" ?>"><?php echo $vt?></a></li>&nbsp;         	
				<?php } } if($p<($tongtrang-1))
				{
				?>         	
				<li> <a href="<?php echo pathtoweb.$kw->buildlink("Tin tức thời trang")."-".($p+1)."-04.htm" ?>" title="Trang tiếp">&nbsp;›&nbsp;</a></li>&nbsp;
				<?php } ?>
				<li> <a href="<?php echo pathtoweb.$kw->buildlink("Tin tức thời trang")."-".($tongtrang-1)."-01.htm" ?>">&nbsp;»&nbsp;</a></li>&nbsp;
			 </span>
		   </ul>
		</div>
	</div>

 </div>       
</div>