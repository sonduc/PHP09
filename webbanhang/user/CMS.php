<?php session_start(); if (!isset($_SESSION['username']))header("location:login.php"); if(!securitycharacter){echo "Bạn truy cập sai đường dẫn";}   include_once '../config.php'; include_once 'vn.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo dashboard." | ".modernadmin?></title>
<link rel="stylesheet" type="text/css" href="<?php echo pathtoadminweb?>css/960.css" />
<link rel="stylesheet" type="text/css" href="<?php echo pathtoadminweb?>css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo pathtoadminweb?>css/text.css" />
<link rel="stylesheet" type="text/css" href="<?php echo pathtoadminweb?>css/blue.css" />
<link type="text/css" href="<?php echo pathtoadminweb?>css/ui.css" rel="stylesheet" />  
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <!--[if IE]>
    <script language="javascript" type="text/javascript" src="js/flot/excanvas.pack.js"></script>
    <![endif]-->
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>        
    <![endif]-->
    <script language="javascript" type="text/javascript" src="<?php echo pathtoadminweb?>js/graphs.js"></script>
</head>
<body>

<input name="txtpage" type="hidden" id="txtpage" value="<?php echo $_GET['page']?>"/>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	    
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
	<img src="<?php echo pathtoadminweb?>banner.jpg" />
</div>
<div  align="right" style="position: absolute; margin-left: 500px;margin-top: 60px"><!-- USER TOOLS START -->
<div id="user_tools1"><span><a href="#" class="mail">(1)</a> <?php
echo welcome?> <a
	href="#"><?php
	echo $_SESSION ['username']?></a> |<a
	href="?page=changepass">Đổi mật khẩu</a> | <a  href="#"><?php
	echo changetheme?></a>
| <a  href="?page=logout"> <?php
echo logout?></a></span></div>
</div>
<div class="grid_16">
		<?php
	 
		include_once 'adminmenu/adminmenu.php';
		?>
</div>
<?php include_once 'act.php';?>
<div class="clear"> </div>

		<!-- This contains the hidden content for modal box calls -->
		<div class='hidden'>
			<div id="inline_example1" title="This is a modal box" style='padding:10px; background:#fff;'>
			<p><strong>This content comes from a hidden element on this page.</strong></p>
            			
			<p><strong>Try testing yourself!</strong></p>
            <p>You can call as many dialogs you want with jQuery UI.</p>
			</div>
		</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="http://www.flexoffice.com.vn">Flexoffice</a></div>
<!-- FOOTER END -->
</body>
</html>