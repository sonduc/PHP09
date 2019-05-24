<?php session_start(); include_once 'config.php'; ini_set('display_errors',0);
global $uri;
$uri=$_SERVER['REQUEST_URI'];
$uri=str_replace('.htm','',$uri);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage"><head id="ctl00_ctl00_Head1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="đồ sơ sinh, do so sinh, mua đồ sơ sinh, mua do so sinh, baby, áo trẻ em, ao tre em, quần trẻ em, quan tre em, áo quần trẻ em, ao quan tre em, đồ sơ sinh, do so sinh, ao cho be, áo cho bé, áo quần cho bé, ao quan cho be,tã lót,yếm, bao tay, carter, miomio, mio" />
<meta name="description" content="Babyshops là shop thời trang cho bé yêu với đủ các loại sản phẩm quần áo trẻ em, đồ sơ sinh, mua đồ sơ sinh, tã lót khăn yếm" />
<meta http-equiv="content-language" content="vi">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8; IE=EmulateIE9">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="robots" content="index,follow">
<meta name="googlebot" content="index, follow">
<meta name="msnbot" content="index, follow">
<link rel="shortcut icon" href="#" type="image/x-icon"> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <!-- Framework CSS&JS compressor-->
 <!--
<script language=JavaScript>


//Disable right click script III- By Renigade (renigade@mediaone.net)
//For full source code, visit http://www.dynamicdrive.com

var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")

// ++ 12-Jun-08 Cuong added
// Disable text selection
document.onselectstart = function() {return false;} // ie
//  document.onmousedown = function() {return false;} // mozilla - does not work, it disable the access to all tags/controls
// -- 12-Jun-08 Cuong added


</script>
-->
<link media="screen, projection" type="text/css" href="<?php echo pathtoweb?>css/product-v3.css" rel="stylesheet">   
<link media="screen, projection" type="text/css" href="<?php echo pathtoweb?>css/main.css" rel="stylesheet">    
<script type="text/javascript" src="<?php echo pathtoweb?>js/DirLoader.js"></script>
<link rel="stylesheet" href="<?php echo pathtoweb?>css/cloud-zoom.css" type="text/css" />
<script type="text/javascript" src="<?php echo pathtoweb?>js/magiczoomplus.js"></script>
<link rel="stylesheet" href=".<?php echo pathtoweb?>css/magiczoomplus.css" type="text/css" />
<script type="text/javascript" src="<?php echo pathtoweb?>js/cloud-zoom.1.0.2.js"></script>
    <!--[if lt IE 8]><link rel="stylesheet" href="/Files/Themes/Default/v3/css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<!--[if lt IE 9]><script src="/Files/Themes/Default/v3/js/html5.js"></script><![endif]-->      

<?php 
include_once 'header.php';
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30308431-7']);
  _gaq.push(['_setDomainName', 'babyshops.com.vn']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<body>


    <div class="header">

        <div class="span-26 user-menu">  



    <div class="user-inner">
              	

                 <div id="nonLogin" style="display:block">

                      <ul>

                        <li><a href="/huong-dan-mua-hang-54-05.htm" >Hướng dẩn</a></li>                        

                        <li><a href="#" >Giới thiệu</a></li>

                        <li><a href="/thong-tin-lien-he-08-05.htm" >Liên hệ - Thanh toán</a></li>                                           

                    </ul>

                 </div>

                <div class="Basket">

                     <div id="cart_menu" class="s_nav">

                        <a class="bk_cart" href="<?php echo pathtoweb?>cart-11.htm" rel="nofollow"><span class="grand_total"> <label id="lblTotalQuantity" class="qproduct"><?php echo count($_SESSION['giohang'])?></label></span> </a>

                      </div>

                </div>

                <div id="NoPopup" count="0" class="clsContent"></div>

            </div>

        </div>

        <div class="span-26 hdchon">

            <h1 class="logo">

                <a href="<?php echo pathtoweb?>"><span>Trung tâm thời trang chính hãng uy tín hàng đầu việt nam</span></a></h1>            



<div class="search">

    <div class="common_keyword">

        <ul>           

            <li ><span>Từ khoá thông dụng</span></li>

        </ul>

    </div>

    <div class="searchbox">

        <p class="iconsearch">         
			<input type="text" id="txtQuery" maxlength="100" value="Nhập tên thương hiệu, mã hoặc đặc điểm sản phẩm" onblur="if(this.value=='') this.value='Nhập tên thương hiệu, mã hoặc đặc điểm sản phẩm';" onfocus="if(jQuery.trim(this.value)=='Nhập tên thương hiệu, mã hoặc đặc điểm sản phẩm') this.value='';" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
            

        </p>       

        <p class="iconbutton" >

        </p>

    </div>

</div>           

<script type="text/javascript">

    var txtQuery = '#txtQuery';

    var tempKeyword;

</script>

            <div class="hotline">

                <p>

                    Hotline:</p>

                <p class="num">

                    0902 455 005</p>

            </div>

            <div class="Share">

                <p>

                    Chia sẻ:</p>

                <p>

                    <a target="_blank" href ="https://www.facebook.com/pages/Baby-Shop/374897962592034" title="Đăng lên Facebook" style="cursor: pointer;"  class="facebook"></a> 

                   <a target="_blank" title="Đăng lên Twitter" style="cursor: pointer;"  class="twitter"> </a>

                    <a target="_blank" title="Đăng lên googleplus" class="googleplus" ></a>

                    <a href="mailto:nvtan@live.com" id="ShowMailBox999" title="" class="email" ></a>

                </p>

            </div>

        </div>

        <div class="span-26 nav">     


        	<?php 
include_once 'dropdown/index.php';
        	

        	?>   			           

        </div>

    </div>

    <div class="container">

    <?php 

    include_once 'loadtemplate.php';

    ?>

    <!-- payment suport -->
    <div style="background: #EFEFEF; margin-top: 10px; width: 100%;float: left;">
<table width="930" align="center" cellpadding="" style="margin-bottom: 0px">
        <tbody>
        <tr style='background: #6CD100; color:#fff ;width:980px '>
          <td height="25" colspan='5'><span ><strong>:: Danh mục sản phẩm :: </strong></span></td>
         
        </tr>
        <?php 
        include_once 'lib/tbl_product_category.php';
        $productcategoryclass=new ProductCategory();
        $productcategory=$productcategoryclass->GetCategory("parent=0 order by sort limit 0,5");
       
        ?>
        <tr>
        <?php 
        for($i=0;$i<count($productcategory);$i++){
        	$productcategorychil=$productcategoryclass->GetCategory("parent='".$productcategory[$i][0]."' order by sort limit 0,5");
        	
        ?>
          <td style="float: left;width: 135px;vertical-align: top;padding-bottom: 0px"><span style="color: #666">* <?php echo $productcategory[$i][1]?> *</span>
          	<?php 
          	if(count($productcategorychil)>0){
          	?>
          	<table>
          		
          		<?php 
          		for($o=0;$o<count($productcategorychil);$o++){
          		?>
          		<tr>
	          		<td style="padding-bottom: 0px">
	          			<a href="<?php echo pathtoweb.$kw->buildlink($productcategorychil[$o][1])."-".$productcategorychil[$o][0]."-01.htm" ?>"><?php echo $productcategorychil[$o][1]?></a>
	          		</td>
	          	</tr>
	          	<?php } ?>
          		
          	</table>          
          	<?php } ?>
		  </td>
		  <?php } ?>
        </tr>      
      </tbody>
      </table>
      </div>
    <div class="payment_support">
            <div class="slides box_content" id="featured_brands">
                <div class="slides_container">
                    <div class="slides_content" style="overflow-x: hidden; overflow-y: hidden; ">
                    <?php 

                    include_once 'lib/tbl_media.php';

                    $paymentimagesclass=new Media();

                    $payment=$paymentimagesclass->GetContentByCode('quang-cao');

                    ?>

                        <ul class="brand_list">

                        <?php 

                        for($i=0;$i<count($payment)-1;$i++)

                        {

                        ?>

                            <li>

                            	<a href="javascript:void(0)">

                                	<img src="<?php echo pathtoweb?>media/<?php echo $payment[$i][3]?>" style="height: 35px; padding: 0 15px">

                             	</a>

                            </li>  

                        <?php }?> 
								<a href="http://thuexedanang.vn/cho-thue-xe-du-lich-0-20-06.htm">

                                	<img src="<?php echo pathtoweb?>media/<?php echo $payment[$i][3]?>" style="height: 35px; padding: 0 15px" alt='cho thue xe du lich da nang'>

                             	</a>                     

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        

    <!-- end -->

    </div>

    

    <div class="footer">
<div style="width: 100%; margin: 0 auto; background-color:#FFFFFF" align="center"> <img src="images/footer-line.gif"> </div>
        <div align="center" class="fcontent"> Bản quyền © 2012 Baby Shop<a href="#"> - Thiết kế bởi Tấn - Đạt</a>        </div>

    </div>  

</body>

</html>