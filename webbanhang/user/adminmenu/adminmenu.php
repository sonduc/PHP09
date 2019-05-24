<link rel="stylesheet" type="text/css" href="<?php echo pathtoadminweb."adminmenu/"?>jqueryslidemenu.css" />
<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->
<script type="text/javascript" src="<?php echo pathtoadminweb."adminmenu/"?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo pathtoadminweb."adminmenu/"?>jqueryslidemenu.js"></script>
<div id="myslidemenu" class="jqueryslidemenu">
<ul>
<li><a href="<?php echo pathtoadminweb?>">Bảng điều khiển</a></li>
<li><a href="#">Nội dung</a>
  <ul>
  	<li><a href="?page=content">Bài viết</a>
  		<ul>
	    	<li><a href="?page=content">Bài viết</a></li>
	    	<li><a href="?page=contentcategory">Danh mục bài viết</a></li>
	    </ul>
  	</li>
  	<li><a href="?page=product">Sản phẩm</a>
	  <ul>
		  <li><a href="?page=category">Danh mục sản phẩm</a></li>
		  <li><a href="?page=product">Sản phẩm</a></li>
	  </ul>
	</li>
	<li><a href="?page=media">Thư viện</a>
	  <ul>
		  <li><a href="?page=mediacategory">Danh mục thư viện</a></li>
		  <li><a href="?page=media">Nội dung thư viện</a></li>
	  </ul>
	</li>
	<li><a href="?page=websiteinfo">Thông tin website</a></li>
  </ul>
</li>
<li><a href="?page=oder">Đặt hàng</a></li>
<li><a href="?page=contact">Hộp thư</a></li>
<li><a href="#">Người dùng</a>
  <ul>
  	<li><a href="?page=customer">Thành viên đăng ký</a></li>
  	<li><a href="?page=user">Nhân viên công ty</a></li>
  	<li><a href="?page=email">Email nhận tin</a></li>
  </ul>
</li>
<li><a href="?page=changepass">Đổi mật khẩu</a></li>
<li><a href="?page=logout">Thoát</a></li>
</ul>
<br style="clear: left" />
</div>
