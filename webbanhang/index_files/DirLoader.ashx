/* -----------------------------------------------------------------------

 Chon CSS Framework 1.0.1
 http://chon.vn
 La Chinh Tam

----------------------------------------------------------------------- */

/* reset.css */
html {margin:0;padding:0;border:0;}
body, div, span, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, code, del, dfn, em, img, q, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, dialog, figure, footer, header, hgroup, nav, section {margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure, dialog, footer, header, hgroup, menu, nav, section {display:block;}
body {line-height:1.5;}
table {border-collapse:separate;border-spacing:0;}
caption, th, td {text-align:left;font-weight:normal;float:none !important;}
table, th, td {vertical-align:middle;}
blockquote:before, blockquote:after, q:before, q:after {content:'';}
blockquote, q {quotes:"" "";}
a img {border:none;}
:focus {outline:0;}

/* typography.css */
html {font-size:100.01%;}
body {font-size:75%;color:#666666;font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;}
iframe{background:transparent}
h1, h2, h3, h4, h5, h6 {font-weight:normal;color:#111;}
h1 {font-size:3em;line-height:1;margin-bottom:0.5em; text-decoration:none;}
h2 {font-size:1em;margin-bottom:0.75em;text-decoration:none;}
h3 {font-size:1em;line-height:1;margin-bottom:1em;text-decoration:none;}
h4 {font-size:1.2em;line-height:1.25;margin-bottom:1.25em;text-decoration:none;}
h5 {font-size:1em;font-weight:bold;margin-bottom:1.5em;text-decoration:none;}
h6 {font-size:1em;font-weight:bold;}
h1 img, h2 img, h3 img, h4 img, h5 img, h6 img {margin:0;}
p {margin:0 0 1.5em;}
.left {float:left !important;}
p .left {margin:1.5em 1.5em 1.5em 0;padding:0;}
.right {float:right !important;}
p .right {margin:1.5em 0 1.5em 1.5em;padding:0;}
a:focus, a:hover {color:#9b0000;}
a {color:#333333;text-decoration:none;}
blockquote {margin:1.5em;color:#666;font-style:italic;}
strong, dfn {font-weight:bold;}
em, dfn {font-style:italic;}
sup, sub {line-height:0;}
abbr, acronym {border-bottom:1px dotted #666;}
address {margin:0 0 1.5em;font-style:italic;}
del {color:#666;}
pre {margin:1.5em 0;white-space:pre;}
pre, code, tt {font:1em 'andale mono', 'lucida console', monospace;line-height:1.5;}
li ul, li ol {margin:0;}
ul, ol {/*margin:0 1.5em 1.5em 0;padding-left:1.5em;*/}
ul {list-style-type:none;}
ol {list-style-type:decimal;}
dl {margin:0 0 1.5em 0;}
dl dt {font-weight:bold;}
dd {margin-left:1.5em;}
table {margin-bottom:1.4em;width:100%;}
th {font-weight:bold;}
thead th { border-bottom:#ccc solid 1px;}
th, td, caption {padding:4px 5px 4px 5px;}
tbody tr:nth-child(even) td, tbody tr.even td {/*background:#e5ecf9;*/}
tfoot {font-style:italic;}
caption {background:#eee;}
.small {font-size:.8em;margin-bottom:1.875em;line-height:1.875em;}
.large {font-size:1.2em;line-height:2.5em;margin-bottom:1.25em;}
.hide {display:none;}
.quiet {color:#666;}
.loud {color:#000;}
.highlight {background:#ff0;}
.added {background:#060;color:#fff;}
.removed {background:#900;color:#fff;}
.first {margin-left:0;padding-left:0;}
.last {margin-right:0;padding-right:0;}
.top {margin-top:0;padding-top:0;}
.bottom {margin-bottom:0;padding-bottom:0;}

/* forms.css */
label {font-weight:bold;}
fieldset {padding:0 1.4em 1.4em 1.4em;margin:0 0 1.5em 0;border:1px solid #ccc;}
legend {font-weight:bold;font-size:1.2em;margin-top:-0.2em;margin-bottom:1em;}
fieldset, #IE8#HACK {padding-top:1.4em;}
legend, #IE8#HACK {margin-top:0;margin-bottom:0;}

input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea {background-color:#fff;border:1px solid #ededed;color:#000;}
/*
input[type=text]:focus, input[type=password]:focus, input[type=url]:focus, input[type=email]:focus, input.text:focus, input.title:focus, textarea:focus {border-color:#666;}
*/
select {background-color:#fff;border-width:1px;border-style:solid;}
input[type=text], input[type=password], input[type=url], input[type=email], input.text, input.title, textarea, select {margin:0.5em 0;}
input.text, input.title {width:300px;padding:5px;}
input.title {font-size:1.5em;}
textarea {width:390px;height:250px;padding:5px;}
form.inline {line-height:3;}
form.inline p {margin-bottom:0;}
.error, .alert, .notice, .success, .info {padding:0.8em;margin-bottom:1em;border:2px solid #ddd;}
.error, .alert {background:#fbe3e4;color:#8a1f11;border-color:#fbc2c4;}
.notice {background:#fff6bf;color:#514721;border-color:#ffd324;}
.success {background:#e6efc2;color:#264409;border-color:#c6d880;}
.info {background:#d5edf8;color:#205791;border-color:#92cae4;}
.error a, .alert a {color:#8a1f11;}
.notice a {color:#514721;}
.success a {color:#264409;}
.info a {color:#205791;}

/* grid.css */
.container {width:980px;margin:0 auto; position:relative;}
/*html[xmlns] .clearfix {display: block;}*/
/*.showgrid {background:url(src/grid.png);}*/

.span-15 {float:left;margin-right:15px;}.span-17{float:left; margin-right:1px}
.span-9, .span-5, .span-6, .span-7, .span-8, .span-11, .span-13, .span-14, .span-18,.span-20 {float:left;}
.span-19, .span-21   {float: right;}

.last {margin-right:0;}
.span-1 {width:30px;}
.span-2 {width:70px;}
.span-3 {width:110px;}
.span-4 {width:150px;}
.span-5 {width:188px;} /*tich diem doi qua*/
.span-6 {/*width:227px;*/ width:230px;} /*Cam kết của chon.vn*/
.span-7 {width:376px;} /*Hệ thống thanh toán*/
.span-8 {width:373px;} /*Hỗ trợ khách hàng*/
.span-9 {width:361px;}	/*trang index*/
.span-10 {width:390px;} /*trang index*/
.span-11 {width:320px;} /*control dang nhap*/
.span-12 {width:455px;}/*control user thong tin ca nhan */
.span-13 {width:450px;}/*control user diem thuong*/
.span-14 {width:530px;}/*control user diem thuong*/
.span-15 {width:603px;} /* left colum*/
.span-16 {width:630px;} /* right colum*/
.span-17 {width:602px;}/*index*/
.span-18 {width:480px;}/*control quan ly giao dich*/
.span-19 {width:480px;}/*control quan ly giao dich*/
.span-20 {width:660px;} /*product detail*/
.span-21 {width:300px;} /*product detail*/
.span-22 {width:870px;}
.span-23 {width:910px;}
.span-24 {width:950px;margin-right:0;}
.span-25 {width:960px;}
.span-26 {width:980px;}

input.span-1, textarea.span-1, input.span-2, textarea.span-2, input.span-3, textarea.span-3, input.span-4, textarea.span-4, input.span-5, textarea.span-5, input.span-6, textarea.span-6, input.span-7, textarea.span-7, input.span-8, textarea.span-8, input.span-9, textarea.span-9, input.span-10, textarea.span-10, input.span-11, textarea.span-11, input.span-12, textarea.span-12, input.span-13, textarea.span-13, input.span-14, textarea.span-14, input.span-15, textarea.span-15, input.span-16, textarea.span-16, input.span-17, textarea.span-17, input.span-18, textarea.span-18, input.span-19, textarea.span-19, input.span-20, textarea.span-20, input.span-21, textarea.span-21, input.span-22, textarea.span-22, input.span-23, textarea.span-23, input.span-24, textarea.span-24 {border-left-width:1px;border-right-width:1px;padding-left:5px;padding-right:5px;}
input.span-1, textarea.span-1 {width:18px;}
input.span-2, textarea.span-2 {width:58px;}
input.span-3, textarea.span-3 {width:98px;}
input.span-4, textarea.span-4 {width:138px;}
input.span-5, textarea.span-5 {width:178px;}
input.span-6, textarea.span-6 {width:218px;}
input.span-7, textarea.span-7 {width:258px;}
input.span-8, textarea.span-8 {width:298px;}
input.span-9, textarea.span-9 {width:338px;}
input.span-10, textarea.span-10 {width:378px;}
input.span-11, textarea.span-11 {width:418px;}
input.span-12, textarea.span-12 {width:458px;}
input.span-13, textarea.span-13 {width:498px;}
input.span-14, textarea.span-14 {width:538px;}
input.span-15, textarea.span-15 {width:578px;}
input.span-16, textarea.span-16 {width:618px;}
input.span-17, textarea.span-17 {width:658px;}
input.span-18, textarea.span-18 {width:698px;}
input.span-19, textarea.span-19 {width:738px;}
input.span-20, textarea.span-20 {width:778px;}
input.span-21, textarea.span-21 {width:818px;}
input.span-22, textarea.span-22 {width:858px;}
input.span-23, textarea.span-23 {width:898px;}
input.span-24, textarea.span-24 {width:938px;}
.append-1 {padding-right:40px;}
.append-2 {padding-right:80px;}
.append-3 {padding-right:120px;}
.append-4 {padding-right:160px;}
.append-5 {padding-right:200px;}
.append-6 {padding-right:240px;}
.append-7 {padding-right:280px;}
.append-8 {padding-right:320px;}
.append-9 {padding-right:360px;}
.append-10 {padding-right:400px;}
.append-11 {padding-right:440px;}
.append-12 {padding-right:480px;}
.append-13 {padding-right:520px;}
.append-14 {padding-right:560px;}
.append-15 {padding-right:600px;}
.append-16 {padding-right:640px;}
.append-17 {padding-right:680px;}
.append-18 {padding-right:720px;}
.append-19 {padding-right:760px;}
.append-20 {padding-right:800px;}
.append-21 {padding-right:840px;}
.append-22 {padding-right:880px;}
.append-23 {padding-right:920px;}
.prepend-1 {padding-left:40px;}
.prepend-2 {padding-left:80px;}
.prepend-3 {padding-left:120px;}
.prepend-4 {padding-left:160px;}
.prepend-5 {padding-left:200px;}
.prepend-6 {padding-left:240px;}
.prepend-7 {padding-left:280px;}
.prepend-8 {padding-left:320px;}
.prepend-9 {padding-left:360px;}
.prepend-10 {padding-left:400px;}
.prepend-11 {padding-left:440px;}
.prepend-12 {padding-left:480px;}
.prepend-13 {padding-left:520px;}
.prepend-14 {padding-left:560px;}
.prepend-15 {padding-left:600px;}
.prepend-16 {padding-left:640px;}
.prepend-17 {padding-left:680px;}
.prepend-18 {padding-left:720px;}
.prepend-19 {padding-left:760px;}
.prepend-20 {padding-left:800px;}
.prepend-21 {padding-left:840px;}
.prepend-22 {padding-left:880px;}
.prepend-23 {padding-left:920px;}
.border {padding-right:4px;margin-right:5px;border-right:1px solid #ddd;}
.colborder {padding-right:24px;margin-right:25px;border-right:1px solid #ddd;}
.pull-1 {margin-left:-40px;}
.pull-2 {margin-left:-80px;}
.pull-3 {margin-left:-120px;}
.pull-4 {margin-left:-160px;}
.pull-5 {margin-left:-200px;}
.pull-6 {margin-left:-240px;}
.pull-7 {margin-left:-280px;}
.pull-8 {margin-left:-320px;}
.pull-9 {margin-left:-360px;}
.pull-10 {margin-left:-400px;}
.pull-11 {margin-left:-440px;}
.pull-12 {margin-left:-480px;}
.pull-13 {margin-left:-520px;}
.pull-14 {margin-left:-560px;}
.pull-15 {margin-left:-600px;}
.pull-16 {margin-left:-640px;}
.pull-17 {margin-left:-680px;}
.pull-18 {margin-left:-720px;}
.pull-19 {margin-left:-760px;}
.pull-20 {margin-left:-800px;}
.pull-21 {margin-left:-840px;}
.pull-22 {margin-left:-880px;}
.pull-23 {margin-left:-920px;}
.pull-24 {margin-left:-960px;}
.pull-1, .pull-2, .pull-3, .pull-4, .pull-5, .pull-6, .pull-7, .pull-8, .pull-9, .pull-10, .pull-11, .pull-12, .pull-13, .pull-14, .pull-15, .pull-16, .pull-17, .pull-18, .pull-19, .pull-20, .pull-21, .pull-22, .pull-23, .pull-24 {float:left;position:relative;}
.push-1 {margin:0 -40px 1.5em 40px;}
.push-2 {margin:0 -80px 1.5em 80px;}
.push-3 {margin:0 -120px 1.5em 120px;}
.push-4 {margin:0 -160px 1.5em 160px;}
.push-5 {margin:0 -200px 1.5em 200px;}
.push-6 {margin:0 -240px 1.5em 240px;}
.push-7 {margin:0 -280px 1.5em 280px;}
.push-8 {margin:0 -320px 1.5em 320px;}
.push-9 {margin:0 -360px 1.5em 360px;}
.push-10 {margin:0 -400px 1.5em 400px;}
.push-11 {margin:0 -440px 1.5em 440px;}
.push-12 {margin:0 -480px 1.5em 480px;}
.push-13 {margin:0 -520px 1.5em 520px;}
.push-14 {margin:0 -560px 1.5em 560px;}
.push-15 {margin:0 -600px 1.5em 600px;}
.push-16 {margin:0 -640px 1.5em 640px;}
.push-17 {margin:0 -680px 1.5em 680px;}
.push-18 {margin:0 -720px 1.5em 720px;}
.push-19 {margin:0 -760px 1.5em 760px;}
.push-20 {margin:0 -800px 1.5em 800px;}
.push-21 {margin:0 -840px 1.5em 840px;}
.push-22 {margin:0 -880px 1.5em 880px;}
.push-23 {margin:0 -920px 1.5em 920px;}
.push-24 {margin:0 -960px 1.5em 960px;}
.push-1, .push-2, .push-3, .push-4, .push-5, .push-6, .push-7, .push-8, .push-9, .push-10, .push-11, .push-12, .push-13, .push-14, .push-15, .push-16, .push-17, .push-18, .push-19, .push-20, .push-21, .push-22, .push-23, .push-24 {float:left;position:relative;}
div.prepend-top, .prepend-top {margin-top:1.5em; float:left;}
div.append-bottom, .append-bottom {margin-bottom:1.5em;}
.box {padding:1.5em;margin-bottom:1.5em;background:#e5eCf9;}
hr {background:#ddd;color:#ddd;clear:both;float:none;width:100%;height:1px;margin:0 0 17px;border:none;}
hr.space {background:#fff;color:#fff;visibility:hidden;}
.clearfix:after, .container:after {content:"\0020";display:block;height:0;clear:both;visibility:hidden;overflow:hidden;}
.clearfix, .container {display:block;}
.clear {clear:both;}
.fright { float:right;}
.fleft { float:left;}


/* -----------------------------------------------------------------------

 Chon CSS Framework 1.0.1
 http://chon.vn
 La Chinh Tam

----------------------------------------------------------------------- */
/***Definition>*******/
.color1 {width: 15px;height: 15px;background: #496D88;display: inline-block;}

/***Header >*/ 
.header{ width:100%; height:174px; background:url(../images/v3_bgheader.png) repeat-x; }


/***Header > user menu*/
.user-menu{ margin:0 auto; height:20px;}
.user-inner{float: right;width: 600px; position:relative}
.user-inner ul{float: right;list-style: none;margin: 0;padding: 0 0 6px; position:absolute; right:100px; top:0;}
.user-inner ul li{float: left;margin: 0; padding-top:5px;}
.user-inner ul li a{display: block;text-decoration: none; color:#b2b1b1 ;border-left:#b2b1b1 solid 1px; padding: 0 10px; font-size:10px;line-height: 10px;}
.user-inner ul li a:hover{color:#fff;}
.user-inner ul li:first-child a{ border:none;}

/***Header > user addtocart*/
.Basket{ float:right; position:fixed; left:50%; top:0; margin-left:490px !important;}
.chcart th{ text-align:left; border-bottom: #CCC solid 1px;}
.chcart tr td img{ float:left; margin-right:5px}
.chcart tr td .text{ line-height:40px;}
.chcart tr.old td{ background:#f9f9f9;}
#cart-contpopup .legend-title{ font-weight:bold; color:#fff; background:#ccc; padding:5px;}
#cart-contpopup .mis{ margin:30px 0 0 30px;}
#cart-contpopup .mis p a{ color:#000; font-weight:bold;}
#cart-contpopup .mis p a:hover{ color:#9b0000; font-weight:bold;}
.total { float:right; background:url(../images/icon/more_arrow.png) no-repeat right 5px; padding-right:10px; margin:0 20px 20px 0; text-decoration:underline;}
#popup_cart_paging_contn1{ float:left;}
.page_nav{ float:left; width:527px; height:42px; background:#e9e9e9; position:relative;}
.totalplus{ float:left; color:#767676}
.totalplus{ margin:10px 0 0 10px;}
.totalplus span{ color:#9b0000; font-weight:bold;}
.popup_cart_info_text{ position:absolute; right:200px; top:12px}

.cart_add{ float:right; margin:5px 10px 0 0;}
.popup_cart_header{ float:left; width:487px; margin:20px 0 0 20px;}
.popup_cart_header table{ margin-bottom:0;}
.popup_cart_header tr td{ border-bottom:#585c5f solid 1px; margin-right:1px; font-weight:bold; color:#666666;}

.popup_cart_content{ float:left; width:487px; margin:0 0 0 20px;}
.popup_cart_content ul.content{float: left;list-style: none;margin: 0;padding:0;position: relative; left:0;top:0;}
.popup_cart_content ul.content li{float: left;margin: 0;padding: 0;width: 486px;}
.popup_cart_content ul.content li a{ float:left;}
.popup_cart_content ul.content li table{ margin-bottom:0;}
.popup_cart_content ul.content li tr td{ text-align:center;}
.popup_cart_content ul.content li tr td a{ line-height:50px; padding:0; border:none; margin-right:5px; color:#666;}
.popup_cart_content ul.content li tr td a:hover{color:#9b0000;}
.page_navigation{ position:absolute; right:145px; top:7px}
.page_navigation .ellipse .less{ display:none !important;}
.page_navigation .ellipse .more{ display:none !important;}
.page_navigation , .alt_page_navigation{float:left;}
.ellipse{display: none !important;}

.page_navigation a, .alt_page_navigation a{
	margin:2px;
	color:#767676;
	text-decoration:none;
	float: left;
	font-family: Tahoma;
	font-size: 12px;
}
.active_page{
	background-color:white !important;
	color:black !important;
}	

.content, .alt_content{
	color: black;
}



a.btn_b{ background:#222629 url(../images/button-right.gif) no-repeat 0 0; padding:0 15px; float:left;height: 33px;line-height: 34px; color:#e9e9e9;}
a.btn_b:hover{background:#b5b5b5 url(../images/button-left.gif) no-repeat 0 0;color:#E9E9E9;}
a.btn_b.active{background:#222629 url(../images/button-right.gif) no-repeat 0 0; margin-left:10px;}

a.btn_g{ background:#b5b5b5 url(../images/button-left.gif) no-repeat 0 0; padding:0 15px; float:left;height: 33px;line-height: 34px; color:#222629;}
a.btn_g:hover{background:#222629 url(../images/button-right.gif) no-repeat 0 0; color:#e9e9e9;}
a.btn_blue{ background:#64849c url(../images/bbnt-blue.png) no-repeat 0 -1px; padding:0 15px; float:left;height: 33px;line-height: 34px; color:#fff;}
a.btn_blue:hover{background:#99BFDC url(../images/bnt-blue.png) no-repeat 0 -1px; color:#fff;}

a.btn_red{ background:#64849c url(../images/bbnt-red.png) no-repeat 0 0; padding:0 15px; float:left;height: 33px;line-height: 34px; color:#fff;}


a.btn_b_small{ background:#222629 url(../images/bbtn-small.png) no-repeat 0 0; padding:0 15px; float:left;height: 27px;line-height: 27px; color:#e9e9e9;}
a.btn_b_small:hover{background:#b5b5b5 url(../images/gbtn-small.png) no-repeat 0 0;color:#E9E9E9;}
a.btn_b_small.active{background:#222629 url(../images/gbtn-small.png) no-repeat 0 0; margin-left:10px;}

a.btn_g_small{ background:#b5b5b5 url(../images/gbtn-small.png) no-repeat 0 0; padding:0 15px; float:left;height: 27px;line-height: 27px; color:#222629;}
a.btn_g_small:hover{background:#222629 url(../images/bbtn-small.png) no-repeat 0 0; color:#e9e9e9;}

input.btn_small{background:#222629 url(../images/bnt_payment.png) no-repeat 0 0; padding:0 10px; float:left;height: 20px;line-height: 20px; color:#e9e9e9; }
input.btn_small{ border:none; display:block; cursor:pointer;font-size:11px;}
input.btn_small:hover{}

/******   horizontal navigation   ********************/
a.bk_cart{ position:absolute; right:0; top:0; z-index:99999 !important; display:block; background:url(../images/i_cart.png) no-repeat 0 0;height:34px;width:22px; padding:3px 0 0 20px;} 
a.bk_cart:hover, a.bk_cart:active{ background:url(../images/i_cart.png) no-repeat 0 -37px;}
a.bk_cart label{font-weight: bold;position: absolute;left: 22px;text-align: center;width: 15px;} 
#cart_menu small.s_text{font-weight:700;margin-left:5px;color:#efefef;position: absolute; right:0;} 
#cart_menu .s_submenu{min-width:527px;min-height:210px;left:auto;right:0; background-color:#fff;box-shadow:0 0 10px rgba(0,0,0,0.2);-o-box-shadow:0 0 10px rgba(0,0,0,0.2);-ms-box-shadow:0 0 10px rgba(0,0,0,0.2);-moz-box-shadow:0 0 10px rgba(0,0,0,0.2);-webkit-box-shadow:0 0 10px rgba(0,0,0,0.2); z-index:9999 !important}
.s_nav .s_submenu{background:#FFF;z-index:10;position:absolute;display:none;top:21px;left:10px}
.s_nav > ul > li,.s_nav > ul > li > a{z-index:15;display:block;float:left}
.s_nav li .s_submenu ul ul{position:absolute;top:0;left:96%}
.s_nav li:hover,.s_nav li:hover > a{position:relative}
.s_nav li:hover .s_submenu,#cart_menu:hover .s_submenu{display:block}
.s_nav.s_size_1 > ul > li,.s_nav.s_size_1 > ul > li > a{height:20px;line-height:20px}
.s_nav.s_size_2 > ul > li,.s_nav.s_size_2 > ul > li > a{height:30px;line-height:30px}

.s_submenu h2{text-transform: uppercase;background: #000;height: 30px;margin: 0; width:100%; float:left;}
#cart_menu .s_submenu h2 a{ color:#efefef; background: url(../images/selection-tab.gif) no-repeat 10px bottom;font-weight: bold;padding: 7px 0 5px 0px;margin-left: 10px;float: left;cursor: pointer; position:relative; width:auto; height:auto;}

.s_mb_0 { float:left; /*padding:20px 15px;*/ width:527px; position:relative;}
.img-loading{ position:absolute; left:0; top:0;}

/***Header > Chon header*/
.hdchon{margin:0 auto; height:94px; position:relative;}
h1.logo{position:absolute;top:22px;left:20px;margin:0}
h1.logo,h1.logo a{width:197px;height:49px}
h1.logo a{display:block;background:url(../images/logo_chon.png) no-repeat}
h1.logo a span{display:none}

.common_keyword {color:#8b8b8b}
.common_keyword ul li{margin: 0;cursor: pointer;display: inline-block;}
.common_keyword li span {height: 20px;display: block;font-size:10px; text-decoration:none; color:#8b8b8b; cursor:pointer;}

.search{ position:absolute; left:300px; top:20px;}
.searchbox{ border:#ebebeb solid 3px; width:425px; height:26px; background:#fff;}
.searchbox p.iconsearch{ background:url(../images/icon/icon-search.gif) no-repeat 0 center; padding:0 0 0 15px; margin: 0 6px 0 6px; float:left;}
.searchbox input[type="text"]{ border:none !important; width:312px; color:#b8b8b8; margin:5px 0; font-size:11px;}
.iconbutton{ background:url(../images/btsearch.gif) no-repeat 0 0; width:72px; height:26px; margin:0; float:right; cursor:pointer;}
.iconbutton:hover{/*opacity:.1*/background:url(../images/btsearch-hover.gif) no-repeat 0 0;}

.hotline{position:absolute;top:38px;right:112px;margin:0; border-left:#cecece solid 1px; padding:0 0 0 10px; }
.hotline p{ margin:0; line-height:normal; color:#8b8b8b; line-height:16px;}
.hotline p.num{ margin:0; font-size:18px; font-weight:bold; color:#666666 }
.Share{position:absolute;top:38px;right:0px;margin:0; border-left:#cecece solid 1px; padding:0 0 0 10px; height:33px; }
.Share p a{ margin-right:5px; line-height:normal; color:#8b8b8b; height:18px; width:18px; float:left; cursor:pointer}
.Share p{ margin:0;color:#8b8b8b; vertical-align:top; line-height:16px;}

.Share p a.facebook, .Share p a.twitter, .Share p a.googleplus, .Share p a.email{-webkit-transition: all 0.3s ease;-moz-transition: all 0.3s ease;-o-transition: all 0.3s ease;-ms-transition: all 0.3s ease; position:relative}
.Share p a.facebook{ background:url(../images/icon/share-icon.png) no-repeat 0 0; width:18px; height:18px;	}
.Share p a:hover.facebook{background:url(../images/icon/share-icon.png) no-repeat 0 -18px;}
.Share p a.twitter{ background:url(../images/icon/share-icon.png) no-repeat -23px 0; width:18px; height:18px;}
.Share p a:hover.twitter{background:url(../images/icon/share-icon.png) no-repeat -23px -18px;}
.Share p a.googleplus{ background:url(../images/icon/share-icon.png) no-repeat -47px 0; width:18px; height:18px;}
.Share p a:hover.googleplus{background:url(../images/icon/share-icon.png) no-repeat -47px -18px;}
.Share p a.email{ background: url("../images/icon/share-icon.png") no-repeat scroll -70px 0 transparent; width:18px; height:18px;}
.Share p a:hover.email{background: url("../images/icon/share-icon.png") no-repeat scroll -70px -18px transparent; }
/***Header > navigater */

.nav{margin:0 auto;  position:relative;}


/**> Banner Interactive top >*********/
.block-slideshow{ width:980px; float:left;}
#slide-panel,#slide{height:450px;}
#slide-panel-cat,#slide-cat{height:360px; overflow:hidden;}

.buttontop{position: relative; bottom:250px; right: 0px;display:block; z-index:9999; width:100%;}
#slide-cat .buttontop-cat{position: relative; bottom:250px; right: 0px;display:block; z-index:9999; width:100%;}

/* Next and prev button, Sprite image */
.prev,.next,.next:hover,.prev:hover{display:block;width:20px;height:57px;background:url(../images/nivo-default-arrows.png) no-repeat;text-indent:-999999px;float:left;cursor:pointer}
.next {background-position: top right; right:-30px;position:absolute;z-index:9999;}
.prev {background-position: top left; left:-30px; position:absolute;z-index:9999;}
.next:hover {background-position: top right}
.prev:hover {background-position: top left}

area, param {display: block;}
#slide-detail{display: block; width:100%;}

#slide area.quicklook{  }
.item0, .item1, .item2, .item3, .item4, .item5, .item6, .item7, .item8, .item9, .item10, .item11, .item12, .item13, .item14,
.item15, .item16, .item17, .item18, .item19, .item20, .item21 , .item22, .item23, .item24, .item25, .item26, .item27, .item28,
.item29,.item30,.item31, .item32, .item33, .item34, .item35, .item36, .item37,.item38, .item39, .item40, .item41, .item42, .item43, .item44,
.item45, .item46, .item47, .item48, .item49, .item50, .item51 , .item52, .item53, .item54, .item55, .item56, .item57, .item58,
.item59,.item60,.item61 , .item62, .item63, .item64, .item65, .item66, .item67, .item68,
.item69,.item70,.item71, .item72, .item73, .item74, .item75, .item76, .item77,.item78, .item79, .item80, .item81, .item82, .item83, .item84,
.item85, .item86, .item87, .item88, .item89, .item90, .item91 , .item92, .item93, .item94, .item95, .item96, .item97, .item98,
.item99 {background:url(../images/Quiklook.png) no-repeat;height:20px; width:67px;}

.under_banner{ background:url(../images/v3_linebanner.gif) no-repeat center bottom; float:left; width:100%; height:39px; margin-bottom:15px;}
.under_banner ul{ width:100%; float:left; margin:0; padding:0}
.under_banner ul li{list-style: none; display:inline; }
.under_banner ul li a{text-decoration:none; float:left; color:#222629; font-size:12px}
.under_banner ul li a.s{ background:url(../images/icon/v3_ship.png) no-repeat; padding: 4px 0 5px 30px; margin:6px 0 0 10px}
.under_banner ul li a.s2{ background:url(../images/icon/v3_ship2.png) no-repeat; padding: 4px 0 5px 30px; margin:6px 0 0 15px;}
.under_banner ul li a.s3{ background:url(../images/icon/v3_ship3.png) no-repeat; padding: 4px 0 5px 30px; margin:6px 0 0 15px;}
.under_banner ul li a span{ color:#aaa}
.Email_letter{ width:445px; height:36px; float:right; background:#e9e9e9 url(../images/v3_bgemail.gif) no-repeat 0 0;}
.Email_letter p{float:left; margin:11px 0 0 10px; color:#666666; font-size:12px;}
.color-green{font-size: 12px; color: #3F8520;}

.letter{border: #e2e2e2 solid 3px;width: 240px;height: 21px;background:#fff; float:right; margin-top:6px;}
.letter p.iconemail input.valid_textbox{height: 17px;width: 125%;border: 1px dotted #9b0000;}
.letter p.iconemail{ margin:0;}
.letter p.iconemail input{ border:none; margin:0; width:180px; height:19px; color:#999999;}
.letter p.iconbtmail{ background:url(../images/btmail.gif) no-repeat 0 0; float:right; height:21px; width:66px; margin:0; cursor:pointer;}

.letter a.iconbtmail:hover{background:url(../images/btmail-hover.png) no-repeat 0 0; }

/**Contenter > product */

.anchors { background: #222629 url(../images/icon/icon-store.gif) no-repeat left 0; height:45px; zoom:1; width:582px; }
.anchors { list-style: none; margin: 0; padding: 0 0 1px 20px; }
.anchors:after { display: block; clear: both; content: " "; }
.anchors li { float: left; margin: 0 1px 0 0;line-height: 42px; background: url(../images/tabpage.gif) no-repeat 0 15px; }
.anchors li:first-child{ background:none;}

.anchors a {display: block; position: relative; top: 1px; float:left;font-weight: bold; border-bottom: 0; z-index: 2; padding: 2px 9px 1px; color: #e9e9e9; text-decoration: none;}
.icon-premium { background:url(../images/icon/icon-diamonds.png) no-repeat 0 0; display:block; width:16px; height:16px; float:left;margin: 16px 5px 0 0;}
.icon-luxury { background:url(../images/icon/icon-luxury.png) no-repeat 0 0; display:block; width:14px; height:16px; float:left;margin: 16px 5px 0 0;}

.anchors .on a { padding-bottom: 2px; font-weight: bold; }
.anchors a:focus, .anchors a:active { outline: none; }
.anchors .on a, .anchors a:hover, .anchors a:focus, .anchors a:active {  }
.anchors .on a:link, .anchors .on a:visited {  cursor: text; }
.anchors a:hover, .anchors a:focus, .anchors a:active { cursor: pointer;color: #9b0000; }
.on { display: block; }
.anchors a h2 { padding:0; margin:2px }
.anchors li a.active { color: #e9e9e9; font-weight: bold; background:url(../images/selection-tab.gif) no-repeat center bottom; margin-bottom: -1px; overflow: visible }
.tabContent {/* padding: 10px 25px;*/ clear: left; background-color: #fff; /*margin: 0 0 30px 0;*/ zoom:1}
.sampleTabContent { padding: 10px 25px; clear: left; background-color: #fff; margin: 0 0 50px 0; border: 1px solid #ddd; zoom:1}
.tabs-hide { display: none; background-color: #fff }

.pics { height: 232px; width: 232px; padding:0; margin:0; overflow: hidden }
.pics img { height: 200px; width: 200px; padding: 15px; border: 1px solid #ccc; background-color: #eee; top:0; left:0 }
.pics img {	-moz-border-radius: 10px; -webkit-border-radius: 10px;}

/***> Product id************/
.product-home{ font-size:10px}
.product-home ul{}
.product-home ul li{ float:left; list-style:none; margin-top:1px; margin-right:1px; margin-bottom:1px;}
.nameproduct { color:#dfe0e2; margin-left:10px; float:left;}

.boxgrid{width:200px;height:301px;float:left;overflow:hidden;position:relative}
.boxgrid img{position:absolute;bottom:0;left:0;border:0;cursor:pointer}
.boxgrid p{color:#afafaf;padding:0 10px; margin:0;}
.boxcaption{position:absolute;bottom:0;background:url(../images/tran.png) repeat;height:100px;width:100%}
.captionfull .boxcaption{top:240px;left:0}
.caption .boxcaption{ height:60px; cursor:pointer}

/***> Rating****/

.aggregateRating { float:left; margin:0 0 0 5px}
.aggregateRating a{ float:left;}
.rating{font-size:0;width:13px;height:13px;cursor:pointer;display:block;background-repeat:no-repeat;margin:0;padding:0}
.filledRating{background-image:url(../images/icon/FilledStar.png)}
.emptyRating{background-image:url(../images/icon/EmtyStar.png)}
/***> Rice to Rice****/
.offers{ float:left; clear:both; margin-left:10px; color:#fcfcfc}
.offers span { float:left; margin-right:5px}
.offers .arrow{ background:url(../images/icon/arrow.png) no-repeat; width:8px; height:5px; margin-top:5px}
.brand { float:left; margin:10px 0 0 10px;position:absolute;z-index:9;bottom:10px; width:180px; height:40px; overflow:hidden;}
.brand img { float:left; position:relative;}
.rice{ margin-top:5px;}

/***Contenter > Blog fashion news*/
.fashion_news{ margin-bottom:6px; float:left;}
.fashion_news ul { float:left;}
.fashion_news ul li{ list-style:none;}
.fashion_news h2{ float:left;background:#222629; height:45px; width:361px; font-size:100%; margin:0}
.fashion_news .title-news{background:url(../images/icon/icon-news.png) no-repeat 0 0; font-weight:bold; color:#fcfcfc; padding: 2px 0 10px 35px; margin:15px 0 0 21px;float: left; text-decoration:none;}
.news-item { float:left; width:361px; height:151px;}
.news-item a{ width:150px; overflow:hidden;float: left;margin: 2px 10px 0 0;}
.news-item img{float: left;}
.news-item h3 { float: left; margin: 15px 0 5px; width: 201px;}
.news-item h3 a{font-size:11px;font-weight: bold; line-height:16px; padding: 0 0 6px; color:#333333; text-transform:uppercase; }
.news-item h3 a:hover{ color:#9b0000;}
.news-item .newsdate{font-size:10px;}
.news-item p{color:#666666;line-height: 1.3em;margin: 0 0 6px;padding: 0; }

.fashion_news ul.news-item2 h3{font-size:11px; color:#222629; margin:10px 0;}
.fashion_news ul.news-item2 h3 a{ color:#aaaaaa}
.fashion_news ul.news-item2 h3 a:hover { color:#9b0000;}


/***Contenter > block Adventising*/

.adspace{ float:left;}
.adspace p{ margin:0;	}
.title-ad{ background:url(../images/ad.gif) no-repeat 0 0; width:47px; height:12px; float:right;}
.advslider{ float:right}
.c_ads { float:left; margin:10px 0;}
.ads1{background:#efefef; width:602px; height:49px; float:left;}
.ads1 p { text-transform:uppercase; font-weight:bold; margin:10px 0 0 30px;}
.ads1 span{float:left; margin-right:10px;}
.ads1 a { margin-top:8px; float:left}
.ads1 a:hover{ color:#9b0000;}
/***Contenter > block Support*/

.support, .promise{ margin-right:1px}
.support h2, .promise h2, .payment h2{text-transform:uppercase; background: #000; height:30px; margin:0;}
.support h2 a, .promise h2 a, .payment h2 a{ color:#fcfcfc; background:url(../images/selection-tab.gif) no-repeat 0 bottom;font-weight:bold; padding:7px 0 5px 0px; margin-left:10px; float:left; cursor:pointer;}

.cs-conntent, .cpromise{ background:#efefef; padding:20px 10px 10px 20px; float:left;}
.cs-conntent { width:342px; height:190px}
.cs-conntent ul { float:left; margin:0 40px 20px 0; font-size:11px;}
.cs-conntent ul li{ list-style:none; color:#626262;line-height: 18px;}
.cs-conntent ul li a{ color:#626262}
.cs-conntent h3{ text-transform:uppercase; font-weight:bold;}
.cs-conntent ul.fhotline { float:left; margin:0 25px 20px 0;}
.cs-conntent ul.fhotline span{ width:75px}
.cs-conntent ul.fhotline span.buy{background:url(../images/icon/buy.png) no-repeat 0 3px;float:left;padding: 0 0 0 16px;}
.cs-conntent ul.fhotline span.custom{background:url(../images/icon/call.png) no-repeat 0 3px;float:left;padding: 0 0 0 16px;}

.cs-conntent ul.fEmail { float:left; margin:0 0px 20px 0;}
.cs-conntent ul.fchat { float:left; margin:0 55px 20px 0;}
.cs-conntent ul.ftimeoff { float:left; margin:0 0px 20px 0;}
.cpromise { width:199px; height:190px;}
.cpromise ul {}
.cpromise ul li{list-style:none; line-height:25px; margin-bottom:4px;}
.cpromise1 a, .cpromise2 a, .cpromise3 a, .cpromise4 a, .cpromise5 a, .cpromise6 a{padding: 5px 0 5px 5px;color:#626262; font-size:11px;}
.cpromise1 a:hover, .cpromise2 a:hover, .cpromise3 a:hover, .cpromise4 a:hover, .cpromise5 a:hover, .cpromise6 a:hover{padding: 5px 0 5px 5px;color:#333333; font-size:11px;}
.cpromise1 a em{background:url(../images/iconadd.png) no-repeat 0 0; width:25px; height:25px; float:left; }
.cpromise1 a:hover em{background:url(../images/iconadd.png) no-repeat -31px 0; width:25px; height:25px; float:left; color:#333333;}
.cpromise2 a em{background:url(../images/iconadd.png) no-repeat 0 -30px; width:25px; height:25px; float:left; }
.cpromise2 a:hover em{background:url(../images/iconadd.png) no-repeat -31px -30px; width:25px; height:25px; float:left; color:#333333;}
.cpromise3 a em{background:url(../images/iconadd.png) no-repeat 0 -55px; width:25px; height:20px; float:left; }
.cpromise3 a:hover em{background:url(../images/iconadd.png) no-repeat -31px -55px; width:25px; height:20px; float:left; color:#333333;}
.cpromise4 a em{background:url(../images/iconadd.png) no-repeat 0 -77px; width:25px; height:25px; float:left; }
.cpromise4 a:hover em{background:url(../images/iconadd.png) no-repeat -31px -77px; width:25px; height:25px; float:left; color:#333333;}
.cpromise5 a em{background:url(../images/iconadd.png) no-repeat 0 -102px; width:25px; height:25px; float:left; }
.cpromise5 a:hover em{background:url(../images/iconadd.png) no-repeat -31px -102px; width:25px; height:25px; float:left; color:#333333;}
.cpromise6 a em{background:url(../images/iconadd.png) no-repeat 0 -131px; width:25px; height:25px; float:left; }
.cpromise6 a:hover em{background:url(../images/iconadd.png) no-repeat -31px -131px; width:25px; height:25px; float:left; color:#333333;}


.cpayment{ float:left; width:356px; height:190px; background:#efefef; padding:20px 10px 10px 10px}
.cpayment1 , .cpayment2{ float:left; width:100%; margin-bottom:17px;}

.cpayment1 h2, .cpayment2 h2{ float:left; width:100%; height:20px; background:none; font-weight:bold; font-size:11px;}
.cpayment1 ul, .cpayment2 ul{ float:left;}
.cpayment1 ul li, .cpayment2 ul li{ float:left; list-style:none;}
.cpayment1 h3, .cpayment2 h3 {text-transform: uppercase;}


.po1, .po2, .po3, .po4, .po5, .po6, .po7, .po8, .po9{ float:left}
.po1 a, .po2 a, .po3 a, .po4 a {display:block; background:url(../images/cod.png) no-repeat; width:65px; height:50px; overflow:hidden;}
.po1 a span, .po2 a span, .po3 a span, .po4 a span{ float:left; display: none;}
.po1 a { background-position:0 0;}
.po2 a { background-position:-65px 0;}
.po3 a { background-position:-130px 0; width:88px}
.po4 a { background-position:-212px 0; width:129px}

.po1 a:hover { background-position:0 -53px;}
.po2 a:hover { background-position:-65px -53px;}
.po3 a:hover { background-position:-130px -53px; width:88px}
.po4 a:hover { background-position:-212px -53px; width:129px}

.po5 a, .po6 a, .po7 a, .po8 a, .po9 a {display:block; background:url(../images/online_payment.png) no-repeat; width:65px; height:56px; overflow:hidden;}
.po5 a span, .po6 a span, .po7 a span, .po8 a span, .po9 a span{ float:left; display: none;}
.po5 a { background-position:0 0;}
.po6 a { background-position:-63px 0; width:77px;}
.po7 a { background-position:-140px 0;width:62px;}
.po8 a { background-position:-201px 0; width:85px;}
.po9 a { background-position:-286px 0; width:61px;}
.po5 a:hover { background-position:0 -55px;}
.po6 a:hover { background-position:-63px -55px;}
.po7 a:hover { background-position:-140px -55px;}
.po8 a:hover { background-position:-201px -55px;}
.po9 a:hover { background-position:-286px -55px;}

/*>****payment_support */
.payment_support{ float:left;}
#featured_brands{/*background:url(../images/brand_03.png) left top no-repeat;*/height:65px;width:100%;}
	#featured_brands .slides_container {width:980px;/*display:none;*/}
	#featured_brands .slides_container div.slides_content {	width:980px;height:65px;display:block; position: relative;padding-top:10px;overflow: auto;}
	ul.brand_list {display: block;height: 110px;width: 1500px;padding:5px 0 0 15px;margin: 0;list-style: none;}
	ul.brand_list li{display: block; float: left;  padding: 0 4px;}
	ul.brand_list a {display: block;text-decoration: none;}
	ul.brand_list span {display: block; margin-top: 3px;text-align: center;font-size: 12px; color: #fff;}
	ul.brand_list a:hover span { display: block;}
	ul.brand_list a img { border: 3px #fff solid; -webkit-border-radius: 3px; -moz-border-radius: 3px; filter: alpha(opacity=9); opacity: 0.4;-moz-opacity: 0.4;}
	ul.brand_list a:hover img {filter:alpha(opacity=90);opacity: 0.9;}

/****Footer>******************/
.subfooter{padding-top:0px; clear:both;}
.footer { width:100%; height:100%;}
.fcontent{ margin:0 auto; width:980px; background:url(../images/v3_linebanner.gif) no-repeat 0 top; padding-top:8px}
.fcontent p{ text-align:center; margin:0 }


/*beachcrumb*/
.breadcrumb{width: 980px; height: 40px; margin: auto; position:relative;clear: both;} 
.breadcrumb ul li{list-style: none; float: left}
.breadcrumb ul li.icon_home a {background: url(../images/tintuc/home_beach.png) no-repeat center 2px; width: 13px; height: 17px; float: left; }
.breadcrumb ul li.icon_home:hover a {background: url(../images/tintuc/home_beach_hover.png) no-repeat center 2px; }
.breadcrumb ul {float: left; width: 100%; margin: 10px 0px;}
.breadcrumb ul li a i {background: url(../images/tintuc/noi.png) no-repeat 0px 8px; width: 3px; height: 18px; float: left; }
.breadcrumb ul li a{padding: 0px 10px; color: #222629; font-size: 11px; /*text-decoration: underline*/;}
.breadcrumb ul li.currentpage a{text-decoration: none;}
.breadcrumb ul li:hover a{color: #9b0000;}

.Breads{ position:absolute; right:0; top:15px;} 
.breadcrumb h1.Breadscat{ font-size:11px;} 
/*popup*/
#fade { /*--Transparent background layer--*/
        display: none; /*--hidden by default--*/
        background: #000;
        position: fixed; left: 0; top: 0;
        width: 100%; height: 100%;
        opacity: .80;
        z-index: 9999;
}
.popup_block{
        display: none; /*--hidden by default--*/
        background: #fff;
        padding: 20px;
        border: 20px solid #ddd;
        float: left;
        font-size: 1.2em;
        position: fixed;
        top: 50%; left: 50%;
        z-index: 99999;
        /*--CSS3 Box Shadows--*/
        -webkit-box-shadow: 0px 0px 20px #000;
        -moz-box-shadow: 0px 0px 20px #000;
        box-shadow: 0px 0px 20px #000;
        /*--CSS3 Rounded Corners--*/
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
}
img.btn_close {
        float: right;
        margin: -55px -55px 0 0;
}
/*--Making IE6 Understand Fixed Positioning--*/
*html #fade {
        position: absolute;
}
*html .popup_block {
        position: absolute;
}



/*** ESSENTIAL STYLES ***/
.sf-menu, .sf-menu * {
	margin:			0;
	padding:		0;
	list-style:		none;
}
.sf-menu {
	line-height:	1.0;
}
.sf-menu ul {
	position:		absolute;
	top:			-999em;
	/*width:			10em;*/ /* left offset of submenus need to match (see below) */
}
.sf-menu ul li {
	width:			100%;
}
.sf-menu li:hover {
	visibility:		inherit; /* fixes IE7 'sticky bug' */
}
.sf-menu li {
	float:			left;
	/*position:		relative;*/
}
.sf-menu a {
	display:		block;
	position:		relative;
}
.sf-menu li:hover ul,
.sf-menu li.sfHover ul {
	left:			0;
	top:			32px; /* match top ul list item height */
	z-index:		99;
}
ul.sf-menu li:hover li ul,
ul.sf-menu li.sfHover li ul {
	top:			-999em;
}
ul.sf-menu li li:hover ul,
ul.sf-menu li li.sfHover ul {
	left:			10em; /* match ul width */
	top:			0;
}
ul.sf-menu li li:hover li ul,
ul.sf-menu li li.sfHover li ul {
	top:			-999em;
}
ul.sf-menu li li li:hover ul,
ul.sf-menu li li li.sfHover ul {
	left:			10em; /* match ul width */
	top:			0;
}

/*** Home Nav ***/

.sf-menu {
	float:			left;
	/*margin-bottom:	1em;*/
}
.sf-menu a {
	border-left:	1px solid #fff;
	border-top:		1px solid #CFDEFF;
	padding: 		.89em 1.1em .74em 1.1em;
	/*padding: 		.75em 1.0em;*/
	text-decoration:none;
}
.sf-menu a, .sf-menu a:visited  { /* visited pseudo selector so IE6 applies text colour*/
	/*color:			#999;*/
	text-transform:uppercase;
}
.sf-menu li li a{text-transform:none; color:#333}
.sf-menu li {
	/*background:		#BDD2FF;*/
}
.sf-menu li li {
	/*background:		#AABDE6;*/
}
.sf-menu li li li a{color:#fff}
.sf-menu li li li {
	/*background:		#9AAEDB;*/
}

.sf-menu li:hover, .sf-menu li.sfHover,
.sf-menu a:focus, .sf-menu a:hover, .sf-menu a:active {
	/*background:		#CFDEFF;*/
	outline:		0;
}

/*** arrows **/
.sf-menu a.sf-with-ul {
	padding-right: 	2.25em;
	min-width:		1px; /* trigger IE7 hasLayout so spans position accurately */
}
.sf-sub-indicator {
	position:		absolute;
	display:		block;
	right:			.75em;
	top:			1.05em; /* IE6 only */
	width:			10px;
	height:			10px;
	text-indent: 	-999em;
	overflow:		hidden;
	/*background:		url('../images/arrows-ffffff.png') no-repeat -10px -100px;*/ /* 8-bit indexed alpha png. IE6 gets solid image only */
}
a > .sf-sub-indicator {  /* give all except IE6 the correct values */
	top:			.8em;
	background-position: 0 -100px; /* use translucent arrow for modern browsers*/
}
/* apply hovers to modern browsers */
a:focus > .sf-sub-indicator,
a:hover > .sf-sub-indicator,
a:active > .sf-sub-indicator,
li:hover > a > .sf-sub-indicator,
li.sfHover > a > .sf-sub-indicator {
	background-position: -10px -100px; /* arrow hovers for modern browsers*/
}

/* point right for anchors in subs */
.sf-menu ul .sf-sub-indicator { background-position:  -10px 0; }
.sf-menu ul a > .sf-sub-indicator { background-position:  0 0; }
/* apply hovers to modern browsers */
.sf-menu ul a:focus > .sf-sub-indicator,
.sf-menu ul a:hover > .sf-sub-indicator,
.sf-menu ul a:active > .sf-sub-indicator,
.sf-menu ul li:hover > a > .sf-sub-indicator,
.sf-menu ul li.sfHover > a > .sf-sub-indicator {
	background-position: -10px 0; /* arrow hovers for modern browsers*/
}

/*** shadows for all but IE6 ***/
.sf-shadow ul {
	/*background:	url('../images/shadow.png') no-repeat bottom right;*/
	padding: 0 8px 9px 0;
	/*-moz-border-radius-bottomleft: 17px;
	-moz-border-radius-topright: 17px;
	-webkit-border-top-right-radius: 17px;
	-webkit-border-bottom-left-radius: 17px;*/
}
.sf-shadow ul.sf-shadow-off {
	background: transparent;
}

/*** adding the class sf-navbar in addition to sf-menu creates an all-horizontal nav-bar menu ***/
.sf-navbar {
	background:url(../images/v3_bgmenutop.gif) repeat-x 0 0;
	height:			2.5em;
	padding-bottom:	2.5em;
	position:		relative;
	width:			100%;
	/*z-index:10001 !important;*/
}
.sf-navbar li {
	/*background:		#AABDE6;
	position:		static;*/
}
.sf-navbar a {
	border-top:		none;
	font-weight:bold;
	color:#e9e9e9;
}

.sf-navbar a:hover { /*color:#999;*/}
.sf-navbar li ul {
	/*width:			44em;*/ /*IE6 soils itself without this*/
}
.sf-navbar li li {
	/*background:		#BDD2FF;
	position:		relative;*/
	
}
.sf-navbar li li a{ color:#474B4D;padding:8px 12px 10px 12px; z-index:3 /*padding:0.8em 1.5em 0.4em 1.5em;*/}
.sf-navbar li li:hover,
.sf-navbar li li a:hover { color:#474b4d;background: url(../images/hnav.png) center 24px no-repeat; visibility:visible;}
.sf-menu  li li li:hover{ background:none;}
.sf-navbar li a{ z-index:3}
.sf-navbar li.back {
    background-color: #444;
    width: 9px;
    height: 20px;
    z-index: 2;
    position: absolute;
    top:5px;
    
}
.sf-navbar li li ul {
	width:			13em;
}
.sf-navbar li li li {
	width:			100%;
}

.sf-navbar ul li {
	width:			auto;
	float:			left;
}
.sf-navbar a, .sf-navbar a:visited {
	border:			none;
}
.sf-navbar li.current {
	/*background:		#BDD2FF;*/
}
.sf-navbar li:hover,
.sf-navbar li.sfHover,
.sf-navbar li li.current,
.sf-navbar a:focus, .sf-navbar a:hover, .sf-navbar a:active {
	/*background:		#BDD2FF;*/
}
/*
.sf-navbar li:hover,.sf-navbar li.sfHover{background:#0E0E0E center bottom no-repeat;}
*/
.sf-navbar li.current{/*background:#0E0E0E url(../images/ac-nav.png) center bottom no-repeat;*/}
.sf-navbar div.home{ background:url(../images/home.gif) no-repeat; width:30px; height:30px; cursor:pointer; float:left;}
.sf-navbar div.home:hover{opacity:.40;}

.sf-navbar ul li:hover,
.sf-navbar ul li.sfHover,
ul.sf-navbar ul li:hover li,
ul.sf-navbar ul li.sfHover li,
.sf-navbar ul a:focus, .sf-navbar ul a:hover, .sf-navbar ul a:active {
	/*background:		#D1DFFF;*/
}
ul.sf-navbar li li li:hover,
ul.sf-navbar li li li.sfHover,
.sf-navbar li li.current li.current,
.sf-navbar ul li li a:focus, .sf-navbar ul li li a:hover, .sf-navbar ul li li a:active {
	/*background:		#E6EEFF;*/
}
ul.sf-navbar .current ul,
ul.sf-navbar ul li:hover ul,
ul.sf-navbar ul li.sfHover ul {
	left:			0;
	top:			2.7em; /* match top ul list item height */
	/*background:		#64849c;*/
}
ul.sf-navbar .current ul ul {
	top: 			-999em;
}

.sf-navbar li li.current > a {
	font-weight:	bold;
}

/*** point all arrows down ***/
/* point right for anchors in subs */
.sf-navbar ul .sf-sub-indicator { background-position: -10px -100px; }
.sf-navbar ul a > .sf-sub-indicator { background-position: 0 -100px; }
/* apply hovers to modern browsers */
.sf-navbar ul a:focus > .sf-sub-indicator,
.sf-navbar ul a:hover > .sf-sub-indicator,
.sf-navbar ul a:active > .sf-sub-indicator,
.sf-navbar ul li:hover > a > .sf-sub-indicator,
.sf-navbar ul li.sfHover > a > .sf-sub-indicator {
	background-position: -10px -100px; /* arrow hovers for modern browsers*/
}

/*** remove shadow on first submenu ***/
.sf-navbar > li > ul {
	background: transparent;
	padding: 0;
	-moz-border-radius-bottomleft: 0;
	-moz-border-radius-topright: 0;
	-webkit-border-top-right-radius: 0;
	-webkit-border-bottom-left-radius: 0;
	/*width:	100%;*/
}

ul.sf-navbar ul li.sfHover ul.col1 { border-left: 1px solid #C4C4C4;z-index: 200;}
ul.sf-navbar ul li.sfHover ul.col2 {margin-left: 165px;}

/*******************************/
.chon_2columns, 
.chon_3columns,
.chon_4columns,
.chon_5columns,
.chon_6columns,
.chon_7columns,
.chon_8columns,
.chon_9columns,
.chon_10columns,
.chon_11columns,
.chon_12columns{
	float:left;
	position:absolute;
	left:-999em; 
	text-align:left;
	padding:15px 5px 10px 15px;
	border-top:none;
	border-left:3px solid #e6e6e6;
	border-right:3px solid #e6e6e6;
	border-bottom:3px solid #e6e6e6;
	z-index:0;
}
.chon_2columns, 
.chon_3columns,
.chon_4columns,
.chon_5columns,
.chon_6columns,
.chon_7columns,
.chon_8columns,
.chon_9columns,
.chon_10columns,
.chon_11columns,
.chon_12columns{width: 954px; min-height:385px; background:#fff; color:#666;}
/*
.sf-menu li li:hover .chon_2columns {left:0;top:27px;}
.sf-menu li li:hover .chon_3columns {left:-102px;top:27px;}
.sf-menu li li:hover .chon_4columns {left:-213px;top:27px;}
.sf-menu li li:hover .chon_5columns {left:-305px;top:27px;}
.sf-menu li li:hover .chon_6columns {left:-406px;top:27px;}
.sf-menu li li:hover .chon_7columns {left:-498px;top:27px;}
.sf-menu li li:hover .chon_8columns {left:-599px;top:27px;}
.sf-menu li li:hover .chon_9columns {left:-658px;top:27px;}
.sf-menu li li:hover .chon_10columns {left:-719px;top:27px;}
.sf-menu li li:hover .chon_11columns {left:-794px;top:27px;}
.sf-menu li li:hover .chon_12columns {left:-906px;top:27px;}
*/
.sf-menu li li:hover .chon_2columns,
.sf-menu li li:hover .chon_3columns,
.sf-menu li li:hover .chon_4columns,
.sf-menu li li:hover .chon_5columns,
.sf-menu li li:hover .chon_6columns,
.sf-menu li li:hover .chon_7columns,
.sf-menu li li:hover .chon_8columns,
.sf-menu li li:hover .chon_9columns,
.sf-menu li li:hover .chon_10columns,
.sf-menu li li:hover .chon_11columns,
.sf-menu li li:hover .chon_12columns {left:0;top:27px;}
.col_1,
.col_2,
.col_3,
.col_4,
.col_5 {
	display:inline;
	float: left;
	position: relative;
}
.col_1 {width:160px;}
.col_2 {width:300px; margin-right:1px;}
.col_3 {width:312px;}
.col_4 {width:550px;}
.col_5 {width:690px;}

.sf-menu li li .col_1 h2{ background:#f1f1f1;color: #474B4D; float:left; width:149px; padding:7px 0 7px 10px; font-weight:bold; margin-bottom:10px; text-transform:uppercase;}
.sf-menu li li .col_1 ul.navgray1 {position:relative; top:0; left:0; float:left;width:150px; margin-bottom: 10px;}
.sf-menu li li .col_1 ul.navgray1 li a{ color:#474B4D; padding:7px 0 7px 10px; text-transform:none;font-weight:normal; font-size:11px;}
.sf-menu li li .col_1 ul.navgray1 li a:hover{ color:#9b0000;border:none; background:none;}
.sf-menu li li .col_1 .nav-adv{ float:left; padding:0; position:absolute; top:171px; left: 10px; margin:0;}
.sf-menu li li .col_1 .nav-adv a{ margin:0; float:left; padding:0;}

.sf-menu li li .col_2 h2{ background:#f1f1f1; color:#474B4D; float:left; width:290px; padding:7px 0 7px 10px; font-weight:bold; margin-bottom:10px; text-transform:uppercase; position:relative}
.sf-menu li li .col_2 ul.navgray { float:left; position:relative; top:0; left:0; width:150px;}
.sf-menu li li .col_2 ul.navgray li{ float:none;display:inline-block; /*margin:3px 0;*/ width:150px;}
.sf-menu li li .col_2 ul.navgray li a{ color:#474B4D; font-weight:normal; padding:0;background:none;}
.sf-menu li li .col_2 ul.navgray li a:hover{color:#9B0000; border:none; background:none;}
.sf-menu li li .col_2 ul.navgray li a.dm_a{ height:31px; line-height:31px;}
.sf-menu li li .col_2 ul.navgray li a.dm_a i{ float:left; background:url(../images/icon-menuv3.png) 0 0; width:25px; height:25px; overflow:hidden; margin:0 5px 0 0px;}
.sf-menu li li .col_2 ul.navgray li a.dm_a:hover i{background:url(../images/icon-menuv3.png) -25px 0;}
.sf-menu li li .col_2 ul.navgray li a.dm_a img{ visibility:visible; display:inline; vertical-align:middle; text-align:center;}
.sf-menu li li .col_2 a.readmore{ position:absolute; right:10px; bottom:7px; background:none; padding:0; font-size:10px; color:#666; font-weight:normal;}

.sf-menu li li .col_3 h2{ background:#f1f1f1; position:relative; color:#474B4D; float:left; width:300px; padding:7px 0 7px 10px; font-weight:bold; margin-bottom:10px; text-transform:uppercase;}
.sf-menu li li .col_3 ul.navgray2 {position:relative; top:0; left:0; float:left;}
.sf-menu li li .col_3 ul.navgray2 li{ float:none;display:inline-block; width:150px;}
.sf-menu li li .col_3 ul.navgray2 li a{ color:#474B4D; padding:7px 0 7px 10px; text-transform:uppercase; font-weight:normal;font-size:11px;}
.sf-menu li li .col_3 ul.navgray2 li a:hover{ color:#9b0000;border:none; background:none;}
.sf-menu li li .col_3 a.readmore{ position:absolute; right:10px; bottom:7px; background:none; padding:0; font-size:10px; color:#666; font-weight:normal;}
.sf-menu li li .col_3 ul.navgray2 li div.readmore a{ background:#000; color:#f1f1f1; font-size:10px; text-transform:none; padding:5px 10px;width:54px; height:11px; margin-left:10px}
.sf-menu li li .col_3 ul.navgray2 li div.readmore a:hover{ color:#9B0000;}


/*Lever 02*/
.sf-menu .chon_3columns .col_1 ul.navgray1 li a,
.sf-menu .chon_3columns .col_2 ul.navgray li a,
.sf-menu .chon_3columns .col_3 ul.navgray2 li a {color:#474B4D}

.sf-menu .chon_3columns .col_1 h2,
.sf-menu .chon_3columns .col_2 h2,
.sf-menu .chon_3columns .col_3 h2{color:#474B4D;}

.sf-menu .chon_3columns .col_2 ul.navgray li a:hover{color:#9b0000;}

/*Lever 01*/
.sf-menu li:hover .lever01 {left:0px;top:auto;}
.sf-menu li .lever01 {width: 954px; min-height:390px; background:#fff; color:#666;}
.sf-menu li .lever01 {float:left;position:absolute;	left:-999em; text-align:left;padding:15px 5px 10px 15px;border-top:none;border-left: 3px solid #E6E6E6;border-right: 3px solid #E6E6E6;border-bottom: 3px solid #E6E6E6;z-index:99999 !important;}
.sf-menu li .lever01 .col_1 h2{color:#474B4D;}
.sf-menu li .lever01 .col_1 ul.navgray li a {color:#474B4D}
.sf-menu li .lever01 .col_1 ul.navgray li a:hover{color:#9b0000; background:none;}

.sf-menu li .col_1 h2{ background:#f1f1f1;color: #474B4D; float:left; width:149px; padding:7px 0 7px 10px; font-weight:bold; margin-bottom:10px; text-transform:uppercase;}
.sf-menu li .col_1 ul {position:relative; top:0; left:0; float:left;width:150px;/*min-height:340px;*/ }
.sf-menu li .col_1 ul li{ width:100%}
.sf-menu li .col_1 ul li:hover{background:none;}
.sf-menu li .col_1 ul li a{width:100%; color:#474B4D; padding:7px 0 7px 10px; text-transform:uppercase;font-weight:normal; font-size:11px;}
.sf-menu li .col_1 ul li a:hover{ color:#9b0000;border:none; background:none}
.sf-menu li .col_1 .nav-adv{ margin:20px 0 0 0; float:left; padding:0;}
.sf-menu li .col_1 .nav-adv a{ margin:0; float:left; padding:0;}

.sf-menu li .lever01 .col_1{ width: 160px;min-height: 390px;}
.sf-menu li .lever01 .col_2{ width: auto;min-height: 390px;}
.sf-menu li .lever01 .col_2{display: block;float: left;position: relative;}
.sf-menu li .lever01 .col_2 h2{ background:#f1f1f1;color: #474B4D;width: 618px; float:left; padding:7px 0 7px 10px; font-weight:bold; margin-bottom:10px; text-transform:uppercase;}
.sf-menu li .lever01 .col_2 .col_2c2{ float:left;padding:0 0px 0 0px;height:340px;overflow:hidden;width: 618px;position:relative;}
.sf-menu li .lever01 .col_2 .col_2c2_inner{position:absolute;top:0;left:0px}
.sf-menu li .lever01 .col_2 .col_2c2 ul.ul-store{float:left; display:block; position:relative; width:150px;height:340px}
.sf-menu li .lever01 .col_2 .col_2c2 ul.ul-store li{width:150px;display:block;}
.sf-menu li .lever01 .col_2 .col_2c2 ul.ul-store li a:hover{background:none;}
.sf-menu li .lever01 .col_2 .col_2c2 ul.ul-store li:hover{background:none;}
.sf-menu li .lever01 .col_2 ul li a{width:100%; color:#474B4D; padding:7px 0 7px 10px; text-transform:uppercase;font-weight:normal; font-size:11px;}
.sf-menu li .lever01 .col_2 ul li a:hover{ color:#9b0000;border:none;background:none;}
.col_1 .col-foot{ position:absolute; bottom:0px; left:0; width:auto; display:block;}
.col_1 .col-foot a{color:#474B4D; font-size:10px;display:block; }
.col_1 .col-foot a:hover{color:#999; font-size:10px;}
.col_2 .col-foot{ position:absolute; bottom:0px; right:0; width:auto; display:block;}
.col_2 .col-foot a{color:#474B4D; font-size:10px;display:block; }
.col_2 .col-foot a:hover{color:#999; font-size:10px;background:none;}

.ch_arr{position:absolute;left:0;bottom:0;margin:0;}
.ch_arr a{margin:0 10px 0 0;/*height:20px;*/display:block;float:left;padding:.75em 10px; color:#474B4D; font-size:10px;}
.ch_arr a img{margin:0px 3px 0 3px}
.ch_arr a#pre img{float:left}
.ch_arr a#next img{float:right;}
.ch_arr em{font-style:normal}

/*for Category List Menu*/
#CateListMenu li.sfHover > a{background: url("../images/hnav.png") no-repeat scroll center 24px transparent;}.fltlft{float:left}
.fltrt{float:right}
.upper{text-transform:uppercase}
.clearfloat {clear:both;height:0;font-size: 1px;line-height: 0px;}
.space30{clear:both;height:30px;font-size: 1px;line-height: 0px;}
.btn_black{background:#000 url(../css/images/btn_arrow.png) left center no-repeat;padding:2px 7px 2px 8px;color:#fff;text-transform:capitalize;font-weight:bold;/*-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;transition: all 0.25s ease-in-out;*/}
.btn_black:hover{background:#9b0000 url(../css/images/bbnt-red.png) left -9px no-repeat; color: #FFF;}
.col_left{width:215px; padding:0px 7px;float:left; font-size:11px; margin-bottom: 20px;}
.col_content { border-left: 1px dotted #999999; float: left; margin-bottom: 20px; margin-left: 6px; padding-left: 12px; width: 730px;}

	#left_search_box{box-shadow:0 0 5px 0px #333; margin-bottom:17px}
	.col_left_block{clear:both;margin-bottom:1px; position: relative;}	
	
	.left_block_content{padding:7px}
	.left_block_image{}
	.left_title{background:#999999;color:#fff;height:30px;line-height:30px;text-transform:uppercase;font-weight:bold;padding-left:10px;margin:0}
	.input_box{border:solid 3px #f5f5f5;overflow:hidden;clear:both;position:relative}
	.btn_search_icon{position:absolute;right:6px;top:6px;background:url(../css/images/icon-search.gif);width:13px;height:13px;text-indent:-9999px;cursor:pointer}
	.input_box input{border:solid 0px #fff;margin-left:5px;font-size:11px;width:168px;}
	.left_block_content label{font-size:11px;color:#666}
	#cats ul li a{padding:0; line-height: 30px; font-size: 12px;}
	.left_cat ul li{display:block;list-style:none;margin-left:5px;float:left;width:195px ;/*clear:both;*/  }	
	.price_choice ul li{background:url(../images/bg_next.png) no-repeat left center;}
	.price_choice ul li:hover{background:url(../images/bg_next_hover.png) no-repeat left center;}
	.left_cat ul li a{display:block;padding:5px 12px;color:#000;/*font-weight:bold*/ float:left;}
	.left_cat ul li span{ float:left;padding:5px 5px;}
	.left_cat ul li li{ margin-left:30px;}
	.left_cat ul li li a{display:block;color:#000;font-weight:normal; }
	.left_cat ul li a img{margin-right: 2px;vertical-align:middle; text-align:center; float: left;}
	.left_cat ul li a{}
	.left_cat ul li a:hover{text-decoration:none;color:#9b0000}
	.left_cat ul li a:hover img,.left_cat ul li a.selected img{/*opacity:0.25;*/}
	
	.minus{height:20px;width:10px;background:#bcbdbd url(../css/images/minus.png) 2px 15px no-repeat;position:absolute;right:3px;}
	.plus{height:20px;width:10px;background:#bcbdbd url(../css/images/plus.png) 2px 10px no-repeat;position:absolute;right:3px;}
	
	#left_search_price_block label{float:left;display:block;width:50px;margin:7px 2px 0 7px;text-align:right}
	#left_search_price_block input{display:block;height:20px;width:125px;border:solid 1px #ddd;margin-bottom:10px;padding-left:5px}
	#btn_search_price{margin-right:10px;}
	#left_search_price_block li{display:block;list-style:none;margin-left:10px;float:left;clear:both;}
	#left_search_price_block li a{display:block;padding:5px 0px;color:#000;background:url(../images/icon/icon-total.png) left center no-repeat;padding-left:20px}
	#left_search_price_block li a:hover{/*text-decoration:underline*/ color:#9b0000;background:url(../images/icon/icon-total_red.png) left center no-repeat;}
	
	
	
	.toggle_title{position:relative;background:#f5f5f5;height:27px;line-height:27px;padding-left:10px;font-size:11px;font-weight:bold;margin:0;cursor:pointer}
	
    .toggle_image{position:relative;padding-left:5px;margin:0}
    .toggle_image ul li {padding-top:6px; }
    
	.title_search_result { background: url("../images/ket-qua-tim-kiem.png") no-repeat scroll left center transparent; border-right: 1px solid #333333; color: #333333; float: left; font-size: 14px; font-weight: bold; height: 15px; line-height: 15px; margin: 0 15px 0 0; padding-left: 30px; padding-right: 15px; text-transform: uppercase;}
	
	#filter_con{position:relative;margin-bottom:10px;overflow:hidden;clear:both;}
	#filter_con_title{position:absolute;display:block;font-size:11px;top:0px;left:0;background:#e6e6e6;z-index:2;padding:0 4px;text-transform:uppercase}
	#filter_con_clear{ cursor: pointer; position:absolute;display:block;top:50%; margin-top: -8px; right:12px;z-index:2;color:#9b0000;font-size:12px;font-weight:bold; width: 16px; height: 16px; text-indent: -99999px; background: url(../images/xoa-tat-ca-dieu-kien-loc.png) left center no-repeat;}
	#filter_con_clear:hover{background: url("../images/xoa-tat-ca-dieu-kien-loc-hover.png") no-repeat scroll left center transparent;}
	#filter_con_content{top:10px;left:0px;border:solid 3px #e6e6e6;width:705px;z-index:1;padding:20px 10px 10px 10px}
	#filter_con_content ul{display:block;width:690px;}
	#filter_con_content ul li{list-style:none;float:left;margin:0 10px 3px 0;background:url(../images/tintuc/bg_h2.png) repeat 0px 0px;display:block;height:16px;line-height:16px;}
	#filter_con_content ul li a{color:#666;background:url(../images/filter_close.png) right center no-repeat;padding:0 15px 0 5px;font-size:11px;cursor:pointer}
	#filter_con_content ul li .checked-list-text{ float:left;font-size:11px;margin-left:3px}
	
	#view_con{background:url(../css/images/bg_h2.png) top left repeat;height:16px;padding:12px 10px;clear:both;overflow:hidden;font-size:11px;}	
	#view_con select{width:50px;border:solid 1px #ddd;}
	#view_by_img{background:url(../css/images/view_by_img.gif) left center no-repeat;border-right:1px solid #333;padding-right:10px;margin-right:10px;margin-left:10px}
	#view_by_content{background:url(../css/images/view_by_content.gif) left center no-repeat;}
	.view_info{}
	.view_by{padding-left:17px;opacity:.5;filter:alpha(opacity=50);font-weight:bold;}
	.view_by:hover,.view_by_active{color:#333;text-decoration:underline;opacity:1;filter:alpha(opacity=100);font-weight:bold;}
	
	.search_sort_icon {margin:10px 0 0 50px;}
	.search_sort_icon ul li{float:left;list-style: none;}
	.sorter {display:block; color:#333;opacity:.25;background-image:url(../images/search_sort_icon.png);padding-left:25px;margin-right:10px;font-size:11px;background-repeat:no-repeat;height:20px;line-height:20px;-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;transition: all 0.25s ease-in-out;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";}
	.search_sort_icon ul li a:hover,.search_sort_icon ul li a.active{color:#333;opacity:1;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";}	
	#lastestproduct{background-position:0 0;}
	#sellonline{background-position:0 -20px}
	#lowestprice{background-position:0 -40px}
	#highestprice{background-position:0 -60px}
	#promotionhighest{background-position:0 -80px}
	#bestuserratings{background-position:0 -100px}	
	#favourite{background-position:0 -120px}
	

	.result_list li{float: left;list-style: none;position: relative;width: 170px;margin:20px 15px 20px 0px}
	.result_list li.fourth{margin:20px 0 20px 0}
	.result_list li:hover div.search_pro{}
	.result_list li div.search_pro{display:block;position:relative;}
	.result_list .search_pro_img{border:solid 1px #fff}
	.result_list .search_pro_img:hover{border:solid 1px #f5f5f5}
	.result_list .search_pro_brand{color:#333;font-size:11px;font-weight:bold;text-transform:uppercase}
	.result_list .search_pro_brand:hover{color:#9b0000;}
	.result_list .search_pro_color{position:absolute;top:252px;opacity:0;filter:alpha(opacity=0);display:block;}
	.result_list .search_pro_color ul{display:block;float:left;margin-left:5px;}
	.result_list .search_pro_color .color_title{font-size:11px;color:#666;float:left}
	.result_list .search_pro_color li{float:left;margin:2px 8px 2px 0px;width:13px;height:13px;border:solid 1px #eee;filter:alpha(opacity=0);display:block;}
	.search_pro_color li{float:left;margin:2px 8px 2px 0px;width:13px;height:13px;border:solid 1px #eee;}
	.search_pro_color li a.color{width:13px;height:13px;display:block;border:solid 1px #fff;text-indent:-9999px;}
	.search_pro_color li a.color:hover{box-shadow:0 0 3px 0px #666 }
	.featured_products_list_info{overflow:hidden;clear:both;margin-bottom:5px;}
	.price{font-size:11px;margin-right:3px}
	.old_price{font-size:11px;color:#999;text-decoration:line-through;margin-right:3px}
	.buy_info{height:19px;position:relative;border:dotted 1px #ccc;}
	.outstock{height:19px;position:relative;border:dotted 1px #eee}
	.buy_btn{background:url(../css/images/small_cart_btn.png) left top no-repeat;padding-left:30px;color:#6c8090;text-transform:uppercase;height:21px;display:block;line-height:21px;font-size:10px;-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;transition: all 0.25s ease-in-out;position:absolute; top: -1px;left: -1px;}
	.buy_btn:hover{background:url(../css/images/small_cart_btn_hover.png) left top no-repeat;color:#9b0000}
	.outstock .buy_btn{color:#666;filter:alpha(opacity=25);}
	.outstock .buy_btn:hover{opacity:.25;filter:alpha(opacity=25);color:#666;background:url("../css/images/small_cart_btn_hover.png") no-repeat scroll left top transparent; opacity:1; color: #9b0000;}
	.premium{background:url(../css/images/premium.png) left top no-repeat;position:absolute;top:1px;right:0px;display:block;width:70px;height:17px;}
	.luxury{background:url(../css/images/luxury.png) left top no-repeat;position:absolute;top:0px;right:0px;display:block;width:61px;height:18px;}
	.result_list .premium{background:url(../css/images/premium_icon.png) left top no-repeat;position:absolute;top:0px;right:0px;display:block;width:14px;height:66px;}
	.result_list .luxury{background:url(../css/images/luxury_icon.png) left top no-repeat;position:absolute;top:0px;right:0px;display:block;width:14px;height:61px;}
	
	
	.color_active{box-shadow:0 0 3px 0px #666 }
	.color_blue{background:#03C}
	.color_red{background:#C30}
	.color_green{background:#0C3}
	.baget{position:absolute;top:0px;left:0px;text-indent:-9999px;width:31px;height:31px;}
	.baget_new{background:url(../css/images/new_bagget.png);} 
	.baget_hot{background:url(../css/images/hot_bagget.png);} 
	.baget_sale{position:absolute;top:149px;left:0px;width:32px;height:32px;text-align:center;color:#fff;font-size:14px;line-height:32px;font-weight:bold;background:url(../css/images/sale_bagget.png);}
	
	
	.load-filter{width:728px; height:130px;  margin-bottom:15px;position:relative; z-index:9!important}
	.search-filter{background:#FFF;border:solid 1px #e6e6e6;height:110px;overflow:hidden;position:relative;border-bottom:solid 0px #fff;width:730px;font-size:11px;}
	.advanced-choice{float:right;font-size:11px;background:#e6e6e6;position:absolute;z-index:6;right:-4px;padding:3px 5px;top:0px;color:#333;text-transform:uppercase;font-weight:bold}
	.search-filter-more{height:auto!important;}
	.search-filter-content{margin:30px 10px 15px 0px;overflow:hidden;}
	
	.search-filter-explander{background:#fff;height:15px;position:relative;width:730px;border-bottom:solid 3px #222629;border-left:1px solid #d8d8d8;border-right:1px solid #d8d8d8}
	.search-filter-explander-button{display:block;height:11px;width:46px; background:url(../css/images/explander.gif) 0px 0px;text-indent:-9999px;position:absolute;left:50%;margin-left:-23px;top:5px}
	.search-filter-explander-button:hover{opacity:.95;filter:Alpha(Opacity=95)}
	.search-filter-explander-button-down{background:url(../css/images/explander.gif) -46px 0px;}
	.search-filter-explander-button-down:hover{opacity:.95;filter:Alpha(Opacity=95)}
	
	.search-filter .togglecontent{height:25px;float:left;margin-bottom:5px;overflow:hidden;width:580px;margin-left:10px}
	.search-filter .togglecontent-more{height:auto}
	.search-filter .togglecontent ul li{float:left;width:140px;margin-top:3px;list-style:none}
	.search-filter .togglecontent ul li input{margin-right:5px;}
	.search-filter .togglecontent ul li label{font-size:11px;}
	.search-checklist a img{float:left}
	.search-checklist .enable_image{text-indent:-9999px}
	
	div.toggle{background: url(../css/images/bg_h2.png) repeat 0px 0px;display: block;width: 120px;float: left;padding: 2px 0 2px 5px;font-size: 11px;font-weight: bold;position:relative;cursor:pointer;word-wrap: break-word;height:19px;}
	div.toggle .bullist{background:url(../css/images/hotline1.png) center center no-repeat;height:16px;width:16px;	float:right;display:block;margin:3px 5px 0 0;position:absolute;top:0px;left:705px;cursor:pointer}
	div.toggle .bullistdown{background:url(../css/images/hotline2.png) center center no-repeat;height:16px;width:16px;	float:right;display:block;margin:3px 5px 0 0;}
		
	.checked-remove{text-align:right;font-size:11px;font-weight:bold;margin:0}
	.checked-remove a{background:url(../images/icons/icon_remove.gif) 100% 3px no-repeat;padding-right:15px;}
	#checked-list {background:#eee;overflow:hidden;padding:10px;border:solid 1px #eee;}
	#checked-list .checked-list-text{font-size:11px;font-weight:bold;float:left;margin:3px 5px 0 5px;}
	#checked-list a{display:block;padding:0 15px 0 5px;float:left;margin:1px 3px;font-size:11px;border:solid 1px #d8d8d8;background:url(../images/icons/icon_remove.gif) 97% 50% no-repeat}
	#checked-list a:hover{background:#fff url(../images/icons/icon_remove.gif) 97% 50% no-repeat;}
	#checked-list a:hover span{text-decoration:line-through}	
	.display_image .enable_image img{margin:2px 0px}	
    .search_size .checked {font-weight: bold;}
    .search_size .disable_image{display: inline;}
    .search_size .enable_image{display: none;}
    .search_color .disable_image{display: none;}
    .search_color .enable_image{display: inline;vertical-align:top;}
	.search_color .enable_image img{display: inline;margin-top:2px;}
	
    #content-filter-data .togglecontent ul li{height: 22px;}
    #content-filter-data .togglecontent ul.search_size li a{padding-left: 20px;background:url(../css/images/siler.gif) no-repeat scroll left center transparent;font-size:11px;-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;transition: all 0.25s ease-in-out;color:#666}
	#content-filter-data .togglecontent ul.search_size li a:hover{color:#9b0000}
    #content-filter-data .togglecontent ul.search_size li a.checked{background: url(../css/images/check.gif) no-repeat scroll left center transparent;}
    #content-filter-data .togglecontent ul.search_color li{width: 64px;}
    #content-filter-data .togglecontent ul.search_color li a.checked img{border: solid 1px #d90000;}



    .page { clear: both; float: none !important; margin: auto !important; text-align: center; width: 100% !important;}
	.page:before { clear: both; content: "."; float: left; text-align: center; visibility: hidden;}
	.page:after { clear: both; content: "."; float: left; text-align: center; visibility: hidden;}
    .category_more{text-decoration:none;font-size:11px;font-style:italic}
    .category_more:hover{text-decoration:underline;cursor:pointer;color:Black;font-weight:bold}
    #divCategoriesNext{display: none; position: absolute; width: 250px;border: 1px solid #ddd; background-color: #fff; padding: 5px 5px 5px 0px; left: 223px !important; top: 97px !important;}
    #divManufacturersNext{display: none; position: absolute; width:770px;border: 1px solid #ddd; background-color: #fff; padding: 5px 5px 5px 0px; left: 223px !important; top: 233px !important;}
    #closemore{position: absolute; right: 1px; top: 1px;z-index:888;}
 
    #ctl00_ctl00_ctl00_cphContent_cphContent_V3SearchResultManager1_V3LeftCategories1_V3LeftPrice1_btn_search_price{margin-right:10px;}
    .btn_search
        {
            background:#000 url(../css/images/btn_arrow.png) left center no-repeat;
            
            padding:2px 7px 2px 8px;
            color:#fff;text-transform:uppercase;font-weight:bold;-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;transition: all 0.25s ease-in-out;
        }
   
#discount a {background: url("../images/uncheck1.gif") no-repeat scroll left center transparent; display: block; line-height: 22px; padding: 0; width: 94%;padding-left: 20px}

#discount a input {float: left;}
#discount li {background: none;}
#discount a.check,#discount a:hover {
    background: url("../images/check1.gif") no-repeat scroll left center transparent;
}



.rating-detail-r2 {float: left; width: 87px;}
/*View by content*/
.result_list_content .search_pro{position:relative;height:200px;border-bottom:dotted 1px #eee;margin-top:17px}
.result_list_content li{list-style:none}
.result_list_content .search_pro_img{float:left;border: solid 1px #f5f5f5}
.result_list_content .featured_products_list_info{position:absolute;left:180px;background:none;padding:0;width:545px}
.result_list_content .buy_info{position:absolute;bottom:17px;left:180px;width:170px;}
.result_list_content .search_pro_name{margin:2px 0 5px 0;}
.result_list_content .search_pro_brand{font-weight:bold;text-transform:uppercase}
.result_list_content .search_pro_name a:hover{color:#9b0000}
.result_list_content .search_pro_des{clear:both;color:#999;font-size:11px}
.result_list_content .search_pro_color {display: block;height: 12px;margin:5px 0 10px 0;}
.result_list_content .price{font-size:14px;color:#9b0000;font-weight:bold;margin-right:5px}
.search_result_share{position:absolute;top:0px;right:2px;}
.search_pro_review{position: absolute;top: 167px;right: 5px;}
.result_list_content .user_review{margin-right:10px; line-height: 15px;}
.like{background:url(../css/images/like_btn.png) left top no-repeat;margin-right:2px;display: block;width: 55px;height: 20px;float: left;}
.dislike{background:url(../css/images/liked-disable.png) left top no-repeat;margin-right:2px;display: block;width: 55px;height: 20px;float: left;}
.rating-detail-r1{display: block; float: left; line-height: 3px; width: 90px;}
.pagging {float: left; width: 100%; height: 25px;margin-top:10px}
.pagging ul{float: right; margin-right:-30px}
.pagging ul li{list-style: none; float: left; margin: 5px;}
.pagging ul li a{float: left; color: #000; font-size: 11px; font-family: Arial, sans-serif; font-weight: bold;  text-align: center; width: 20px; height: 20px; line-height: 20px; }
.pagging ul li a.pre_nav{background: url(../images/tintuc/bg_pre.png) no-repeat center center; width: 20px; height: 20px; text-indent:-9999px; line-height: 20px;}
.pagging ul li a.next_nav{background: url(../images/tintuc/bg_next.png) no-repeat center center; width: 16px; height: 16px; text-indent:-9999px;}
.pagging ul li:hover a.pre_nav{background: url(../images/tintuc/bg_pre_hover.png) no-repeat center center;}
.pagging ul li:hover a.next_nav{background: url(../images/tintuc/bg_next_hover.png) no-repeat center center;}
.pagging ul li.active a, .pagging ul li:hover a{ background: url(../images/tintuc/active_navpagging.png) no-repeat 0px 0px; width: 20px; height: 20px; color: #FFF;}
.container .assess_your .pagging ul li.active a, .container .pagging ul li:hover a{background: url("../images/tintuc/active_navpagging.png") no-repeat scroll 0 0 transparent; color: #FFFFFF; height: 20px !important; width: 20px !important;}
/*a {-moz-transition: color linear 0.5s; -webkit-transition: color linear 0.5s; -o-transition: color linear 0.5s; -ms-transition: color linear 0.5s; transition: color linear 0.5s;}*/

.container .wrapper_control .input input{margin: 0px 0px; width: 175px; height: 20px; border: 1px solid #e5e5e5; color: #666; padding:0 0 0 5px;}
input[type="text"]:focus, input[type="password"]:focus, input[type="url"]:focus, input[type="email"]:focus, input.text:focus, input.title:focus, textarea:focus, select:focus {/*border: 1px solid #666 !important;*/ color: #000 !important; }
select:focus option{color: #000;}
.container .wrapper_control .input select{margin: 0px 0px; width: 179px; height: 20px; border: 1px solid #e5e5e5; text-align: center; color: #666666;}
.container .wrapper_control .field > .label { float: left; padding: 0; position: relative; text-align: left; width: 120px; font-weight: normal; margin-left: 15px; line-height: 22px; }
.container .wrapper_control .field > .input.text { float: left;}
.container .wrapper_control .input select { height: 20px; margin: 0; width: 182px;}
.container .wrapper_control .control_h2{float: left; width: 100%;}
.container .wrapper_control .control_h2 h2{float: left; background: url(../css/images/bg_h2.png) repeat 0px 0px; width: 100%; height: 36px; }
.container .wrapper_control .control_h2 h2 a{color: #000000; display: block; font-size: 12px; font-weight: bold; padding: 9px 10px; text-transform: uppercase;}
.container .wrapper_control .actions.multi a.btn_b{position: absolute; right: 8px; top: 5px; line-height: 33px; }
.container .wrapper_control .actions.multi a.btn_b input{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}
.msg_validate{font-style: italic;}
/*for login*/
.container .wrapper_control{float: left; width: 100%; margin-bottom: 20px; margin-top: 10px;}
.container .wrapper_control .for_login{float: left;}
.container .wrapper_control .control_login_h2 h2 a i{ margin-right: 5px; float: left; background: url(../css/images/icon_login.png) repeat 0px 0px; width: 15px; height: 18px;}
.container .wrapper_control .control_login_h2 h2:hover a{color: #9b0000;}
.container .wrapper_control .control_login_h2 h2:hover a i{ background: url(../css/images/icon_login_hover.png) repeat 0px 0px;}

.container .wrapper_control .for_login .control_login_form{float: left; width: 100%;}
.container .wrapper_control .for_login .guide_login{float: left; width: 100%;}

.container .wrapper_control .field:after { clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden;}
.container .wrapper_control .login > .field.login > .label { margin: 0 0 0 -112px; width: 106px;}
.container .wrapper_control .login .input { overflow: visible; width: 185px; margin: 0px;}
.container .wrapper_control .login {margin-bottom: 6px;}

.container .wrapper_control .actions.multi {float: left; width: 100%; height: 60px; position: relative;}
.container .wrapper_control .actions.multi p {float: left; position: absolute; bottom: 0px; right: 8px; margin: 0px;}
.container .wrapper_control .actions.multi p a {float: left; color: #000; font-weight: bold;}
.container .wrapper_control .actions.multi p:hover a{text-decoration: underline; color:#9b0000;}
.container .wrapper_control .actions.multi span.failed{color: #9B0000; float: left; font-size: 11px; left: 16px; position: absolute; top: 5px; width: 180px;}
.container .wrapper_control .guide_login{float: left; margin-top: 10px; width: 100%;}
.container .wrapper_control .guide_login p{float: left; margin: 0px; text-align: justify; padding: 0 10px 0 20px; font-size: 11px; color: #939393;}


/*for register*/
.container .wrapper_control .control_register_h2 h2 a i{ margin-right: 5px; float: left; background: url(../css/images/icon_register.png) no-repeat 0px 2px; width: 15px; height: 18px;}
.container .wrapper_control .control_register_h2 h2:hover a{color: #9b0000;}
.container .wrapper_control .control_register_h2 h2:hover a i{ background: url(../css/images/icon_register_hover.png) no-repeat 0px 2px;}

.container .wrapper_control .for_register{margin-left: 10px;}
.container .wrapper_control .register .input { overflow: visible; width: 185px; margin: 0px; }
.container .wrapper_control .register {margin-bottom: 6px; float: left;}
.container .wrapper_control .control_register_form{float: left;}
.container .wrapper_control .register .txtHo {width: 75px; float: left;}
.container .wrapper_control .register .txtTen {margin-left: 3px; width: 90px;}

.container .wrapper_control .for_register .capcha{float: left; width: 100%; position: relative; height: 40px;}
.container .wrapper_control .for_register .capcha .img_capcha{float: left; position: absolute; top: 5px; left: 135px; background:#949494; width: 110px; height: 30px; border: 1px solid #ededed;}
.container .wrapper_control .for_register .capcha a.refesh_capcha{width: 14px; height: 15px; position: absolute; right: 50px; top: 15px;}
.container .wrapper_control .for_register .capcha a.refesh_capcha input{background: none; width: 14px; height: 15px;}
.container .wrapper_control .for_register .commit_member {float: left;}
.container .wrapper_control .for_register .commit_member label{ font-style: italic; color: #000; font-weight: normal; margin-bottom: 10px; float: left;}
.container .wrapper_control .for_register .commit_member p{padding: 0 10px 0 12px; color: #000;}
.container .wrapper_control .for_register .commit_member label a{ color: #000; text-decoration: underline; }
.container .wrapper_control .for_register .commit_member label a:hover{color: #9b0000;}
.container .wrapper_control .for_register .commit_member .checkbox input{width: 15px; height: 15px; float: left; border: none;}
.container .wrapper_control .for_register .commit_member .error-commit{ font-style: italic;}

/*for benefits*/
.container .wrapper_control .for_benefits {margin-left: 10px;}

.container .wrapper_control .control_benefits_h2 h2{margin-bottom: 5px;}
.container .wrapper_control .control_benefits_h2 h2 a i{ margin-right: 5px; float: left; background: url(../css/images/icon_members.png) no-repeat 0px 2px; width: 15px; height: 18px;}
.container .wrapper_control .control_benefits_h2 h2:hover a{color: #9b0000;}
.container .wrapper_control .control_benefits_h2 h2:hover a i{ background: url(../css/images/icon_members_hover.png) no-repeat 0px 2px;}
.container .wrapper_control .control_benefit_form{float: left;width:100%}
.container .wrapper_control .control_benefit_form .benefits_note{float: left; width: 100%;  }
.container .wrapper_control .control_benefit_form .benefits_note ul li{ margin-bottom: 7px;  margin-left: 10px; display: block; list-style: none; background: url(../css/images/icon_huongdan.png) no-repeat 94% 7px; }
.container .wrapper_control .control_benefit_form .benefits_note ul li a{color: #000; display: block; width: 100%; padding: 3px 0px; position: relative; }
.container .wrapper_control .control_benefit_form .benefits_note ul li.active a{border-bottom: 1px solid #c9c9c9; height: 17px;}
.container .wrapper_control .control_benefit_form .benefits_note ul li.active a i, .container .wrapper_control .control_benefit_form .benefits_note ul li:hover a i {background: url(../css/images/icon_bullet.png) no-repeat 0px 2px; width: 10px; height: 5px; position: absolute; bottom: 0px; left: 20px;cursor:pointer}
.container .wrapper_control .control_benefit_form .benefits_note ul li:hover a{color: #9b0000; height: 17px; border-bottom: 1px solid #c9c9c9;cursor:pointer}
.container .wrapper_control .control_benefit_form .benefits_note ul li:hover, .container .wrapper_control .control_benefit_form .benefits_note ul li.active{background: url(../css/images/icon_huongdan_hover.png) no-repeat 94% 7px;}

.container .wrapper_control .control_benefit_form .in_friends{float: left; background: #ececec;}
.container .wrapper_control .control_benefit_form .in_friends p{margin: 0; padding: 5px 20px 5px 12px; text-align: justify;}
.container .wrapper_control .control_benefit_form .in_friends .benefits{float: left; margin-bottom: 10px;}
.container .wrapper_control .control_benefit_form .in_friends .benefits .label{ color: #000; font-weight: bold; font-size: 11px; line-height: 24px; width: 110px;}
.container .wrapper_control .control_benefit_form .in_friends > div{margin-top: 10px;}
.container .wrapper_control .control_benefit_form .in_friends .valid_email_friend{font-size: 11px; color: #9b0000; font-style: italic; margin-left: 15px;}
.container .wrapper_control .control_benefit_form .actions.multi a.btn_b {right: 20px; cursor: pointer; }
.container .wrapper_control .control_benefit_form .actions.multi a.btn_b span{font-weight: bold; font-size: 11px; color: #FFF;}

/* form thong tin ca nhan cua thanh vien*/
.container .wrapper_info_user .field:after { clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden; }
.container .wrapper_info_user .input input{margin: 0px 0px; width: 175px; height: 20px; border: 1px solid #e5e5e5; color: #D4D4D4;}
.container .wrapper_info_user .input select{margin: 0px 0px; width: 179px; height: 20px; border: 1px solid #e5e5e5; text-align: center;}
.container .wrapper_info_user .field > .label { float: left; padding: 0; position: relative; text-align: left; width: 120px; font-weight: normal; margin-left: 15px; }
.container .wrapper_info_user .field > .input.text { float: left;}
.container .wrapper_info_user .input select { height: 24px; margin: 0; width: 175px; color: #D4D4D4;}
.container .wrapper_info_user .control_h2{float: left;  width: 100%;}
.container .wrapper_info_user .control_h2 h2 {background: url(../images/bg_h2_1.png) repeat-x bottom left; float: left; width: 100%;}
.container .wrapper_info_user .control_h2 h2 a{padding: 5px 0px 5px 10px; display: block; color: #000; font-weight: bold; text-transform: uppercase; float: left; }
.container .wrapper_info_user .actions.multi a.btn_b{position: absolute; right: 8px; top: 5px; line-height: 33px; font-weight: bold;}
.container .wrapper_info_user .actions.multi a.btn_b button{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}

	/*menu user account*/
.container ul.user_info_menu{float: left; width: 100%; background: url(../images/bg_h2.png) repeat 0px 0px ;}
.container ul.user_info_menu li {float: left; list-style: none; height: 36px;  }
.container ul.user_info_menu li.first_menu a {background: url(../images/icon/icon_chon.png) no-repeat -45px 0px; width: 16px; height: 18px; display: block; padding: 0px; margin: 11px 0 9px 10px;}
.container ul.user_info_menu li a{ padding: 10px 20px; color: #000; font-size: 12px; font-weight: bold; text-transform: uppercase; background: url(../images/bg_line.png) no-repeat right center; text-align: center; display: block;}
.container ul.user_info_menu li.active, .container ul.user_info_menu ul li:hover{border-bottom: 2px solid #000;}

.container ul.user_info_menu li:hover a,.container ul.user_info_menu li.active a{color: #9b0000;}
.container ul.user_info_menu li.first_menu{border: none;}
.container ul.user_info_menu li.first_menu:hover {border: none; }
.container ul.user_info_menu li:last-child a{background: none;}


	/*infomation user account*/
.container .wrapper_info_user {float: left; width: 100%;}
.container .wrapper_info_user .info_account{float: left; margin-left: 25px;}
.container .wrapper_info_user .control_h2 h2:hover a {color: #9b0000;}
.container .wrapper_info_user .info_account_h2 h2 i{background: url(../images/icon_chon.png) no-repeat -13px 3px; width: 10px; height: 15px; float: left }
.container .wrapper_info_user .info_account_h2 h2:hover i {background: url(../images/icon_chon.png) no-repeat -13px -18px; }
.container .wrapper_info_user .info_account_form{float: left;}
.container .wrapper_info_user .account {width: 100%; float: left; margin-bottom: 6px;}
.container .wrapper_info_user .account input {width: 255px;}
.container .wrapper_info_user .account .label{width: 170px; color:#666666; text-align: left; margin-left: 5px; line-height: 24px; font-size: 11px;}
.container .wrapper_info_user .account .hoten input{ width: 125px;}
.container .wrapper_info_user .account select{margin-right: 5px;}

.container .wrapper_info_user .nSinh .date select {width: 60px;}
.container .wrapper_info_user .nSinh .month select {width: 100px;}
.container .wrapper_info_user .nSinh .year select {width: 81px;}

.container .wrapper_info_user .lSex input{width: 13px; float:left; border: none; height: 13px; margin-right: 5px; margin-top: 3px;}
.container .wrapper_info_user .lSex span{margin-right: 10px;}
.container .wrapper_info_user .lSex > span > span {color: #666666; font-size: 11px; font-weight: bold; margin-right: 5px;}

.container .wrapper_info_user .Laccount select {width: 257px;}

.container .wrapper_info_user .overDate select{width: 100px;}

.container .wrapper_info_user .infoProvider textarea{width: 245px; height: 41px;}

.container .wrapper_info_user .note_user {width: auto; margin-left: 175px;}
.container .wrapper_info_user .note_user a{color: #989898;}


/* form thong tin ca nhan cua thanh vien*/
	/*infomation about you*/
.container .wrapper_info_user .info_about{float: right;}
.container .wrapper_info_user .info_about_h2 h2 i{background: url(../images/icon_chon.png) no-repeat 0px 3px; width: 12px; height: 15px; float: left }
.container .wrapper_info_user .info_about_h2 h2:hover i {background: url(../images/icon_chon.png) no-repeat 0px -18px; }

.container .wrapper_info_user .country select {width: 120px;}
.container .wrapper_info_user .city select {width: 120px;}
.container .wrapper_info_user .city input  {width: 147px;}
.container .wrapper_info_user .district select {width: 120px;}
.container .wrapper_info_user .district input  {width: 147px;}
.container .wrapper_info_user .headphone input {width: 117px;}
.container .wrapper_info_user .status select {width: 120px;}
.container .wrapper_info_user .income select {width: 120px;}
.container .wrapper_info_user .know span{float: left; width: 280px;}

.container .wrapper_info_user .know select {float: left; width: 255px; margin-bottom: 10px;}
.container .wrapper_info_user .know input {font-size: 11px;}

.container .wrapper_info_user .actions.multi { float: left; height: 45px; position: relative; width: 100%;}
.container .wrapper_info_user .actions.multi a.btn_b input{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}


.info_about .actions.multi .error_list { bottom: 60px; color: #9B0000; font-size: 11px; font-style: italic; left: 10px; position: absolute;}

/*form so thich*/
.container .favorite_your{float: left; clear: both; width: 100%; margin-bottom: 10px;}
.container .wrapper_info_user .info_favorite_h2 h2 i{background: url(../images/icon_chon.png) no-repeat -25px 3px; width: 15px; height: 15px; float: left }
.container .wrapper_info_user .info_favorite_h2 h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -25px -18px; }
.container .favorite_your .info_habit_form{float: left; padding: 0 0 0 20px; width: 100%;}
.container .favorite_your .info_habit_form table{width: 98%;}
.container .favorite_your .info_habit_form .habit {float: left; width: 160px;}
.container .favorite_your .info_habit_form .habit span {float: left; color: #666666;}
.container .favorite_your .info_habit_form .habit span input {float: left; height: 15px; width: 15px; border: none; margin-right: 10px; }
.info_habit_form table tr td {padding: 2px 5px;}
.info_habit_form table tr td input{margin-right: 10px; float: left; }
.info_habit_form table tr td label{font-weight: normal; float: left;}
.info_habit_form > span{color: #9b0000 !important; font-style: italic;}

/* tab doi mat ma*/
.container .change_pass .field:after { clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden;}
.container .change_pass .input input{margin: 0px 0px; width: 175px; height: 20px; border: 1px solid #e5e5e5; color: #666;}
input[type="text"]:focus, input[type="password"]:focus, input[type="url"]:focus, input[type="email"]:focus, input.text:focus, input.title:focus, textarea:focus, select:focus {}
select:focus option{color: #000;}
.container .change_pass .input select{margin: 0px 0px; width: 179px; height: 20px; border: 1px solid #e5e5e5; text-align: center;}
.container .change_pass .field > .label { color: #333333; line-height: 24px; float: left; padding: 0; position: relative; text-align: left; width: 135px; font-weight: normal; margin-left: 15px; }
.container .change_pass .field > .input.text { float: left;}
.container .change_pass .input select { height: 20px; margin: 0; width: 175px;}
.container .change_pass .control_h2{float: left; width: 100%;}
.container .change_pass .control_h2 h2{float: left; background: url(../images/bg_h2.png) repeat 0px 0px; width: 100%; height: 36px; }
.container .change_pass .control_h2 h2 a{color: #000000; display: block; font-size: 12px; font-weight: bold; padding: 9px 10px; text-transform: uppercase;}
.container .change_pass .actions.multi a.btn_b{position: absolute; right: 65px; top: 5px; line-height: 33px; font-weight: bold; }
.container .change_pass .actions.multi a.btn_b button{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}

.container .change_pass{float: left; width: 100%; margin-top: 10px; margin-bottom: 15px;}
.container .change_pass .form_change_pass{width: 40%; margin: auto; position: relative;}
.container .change_pass .changepass{margin-bottom: 5px;}
.messeger-change-pass .error_list{float: left; width: 50%;}

.container .change_pass .actions.multi { float: left; height: 45px; position: relative; width: 100%;}
.container .change_pass .actions.multi a.btn_b input{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}

.container .change_pass .form_change_pass .error_list span { color: #9B0000; font-size: 11px; font-style: italic; }
.container .change_pass .actions.multi.messeger-change-pass { float: left; height: auto; left: 15px; position: relative; top: -40px; width: 195px;}
.container .change_pass .form_change_pass .error_list{ position: absolute; width: 185px; margin: 0px;}
	/*tab Diem Thuong*/
.container .point_plus{float: left; width: 100%; background: #EDF1F2; margin-top: 2px;}
.container .point_plus .point_plus_box{margin-left: 30px; border-right: 1px solid #FFF; margin-top: 8px; float: left;}
.container .point_plus .point_plus_box .point_plus_login{float: left; width: 100%; margin-top: 5px;}
.point_plus_login .tooltip-login{ z-index:9999; position: absolute; background: url("../images/bg_moibanbe.png") no-repeat 0px 0px; width: 245px; height: 76px; display: block;/* top: -75px; left: 100px;*/}
.point_plus_login .tooltip-login p{text-align: justify; margin: 11px 7px 0px 7px !important; float: left; font-size: 11px;}
.container .point_plus .point_plus_box .point_plus_login p{color: #333; font-weight: normal; width: auto; float: left; font-size: 11px; margin: 0px;}
.container .point_plus .point_plus_box .point_plus_login span.fontbold {color: #000; font-weight: bold; font-size: 11px;}
.container .point_plus .point_plus_box .point_plus_login ul {float: left; margin: 0px 5px; position: relative;}
.container .point_plus .point_plus_box .point_plus_login ul li{list-style: none; float: left; background: url(../images/icon/icon_chon.png) no-repeat -68px -15px; width: 13px; height: 13px; float: left;margin: 2px 1px 1px;}
.container .point_plus .point_plus_box .point_plus_login ul li.Date_login{background: url(../images/icon/icon_chon.png) no-repeat -85px 0px; display: block;}
.container .point_plus .point_plus_box .point_plus_login ul li.Date_nologin{background: url(../images/icon/icon_chon.png) no-repeat -68px 0px; display: block;}

.tooltip-invite-friend {position: relative;}
.tooltip-invite-friend .tooltip-login-sucess{ z-index:9999; position: absolute; background: url("../images/bg-gioithieubanbedangkythanhcong.png") no-repeat 0px 0px; width: 245px; height: 131px; display: block;}
.tooltip-invite-friend .tooltip-login-sucess p{text-align: justify; margin: 11px 7px 0px 7px !important; float: left; font-size: 11px; color: #666666;}

.tooltip-review {position: relative}
.tooltip-review .tooltip-login-review{ z-index:9999; position: absolute; background: url("../images/bg-view-danh-gia.png") no-repeat 0px 0px; width: 245px; height: 190px; display: block;}
.tooltip-review .tooltip-login-review p{text-align: justify; margin: 11px 7px 0px 7px !important; float: left; font-size: 11px; color: #666666;}

.container .point_plus .point_plus_box .point_plus_invite{float: left; width: 100%;}
.container .point_plus .point_plus_box .point_plus_invite > span{font-weight: bold; color: #000; float: left; margin: 10px 0px;}
.container .point_plus .point_plus_box .point_plus_invite > span a{text-decoration: underline; color: #000; cursor: pointer; font-weight: normal;}
.container .point_plus .point_plus_box .point_plus_invite > span a:hover{color: #9b0000;}
.container .point_plus .point_plus_box .point_plus_invite > span > span {color: #666; font-weight: normal;}

.container .point_plus .field:after { clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden;}
.container .point_plus .point {float: left; margin-right:10px; }
.container .point_plus .point .label {color: #000; font-size: 11px;}
.container .point_plus .input input { border: 1px solid #E5E5E5; color: #D4D4D4; height: 22px; margin: 0; width: 137px;}
.container .point_plus .point_plus_box .point_plus_invite .actions.multi {float: left;}
.container .point_plus .error_list {float: left; margin-left: 113px; margin-top: 0; width: 60%;}
.container .point_plus .error_list span{color: #9B0000; display: block; font-size: 11px; font-style: italic; text-align: justify;}

.container .point_plus .actions.multi { float: left; position: relative; }
.container .point_plus .actions.multi a.btn_b input{background: none; border: none; color: #FFF; font-size: 11px; font-weight: bold; cursor: pointer;}
.container .point_plus .actions.multi a.btn_b {padding: 0 5px; background: url("../images/button-right.gif") no-repeat scroll 0 -4px #222629; line-height: 26px; height: 24px; font-weight: bold; }
.container .point_plus .actions.multi a.btn_b:hover { background: url("../images/button-left.gif") no-repeat scroll 0 -4px #B5B5B5; color: #E9E9E9;}

.container .point_plus .input_coupon{float: left; width: 100%; position: relative;}
.container .point_plus .input_coupon .codecoupont {width: 95%; margin-left: 22px; margin-top: 10px;}
.container .point_plus .codecoupont .label {color: #000; font-size: 12px; text-transform: uppercase;}
.container .point_plus .codecoupont input { border: 1px solid #E5E5E5; color: #D4D4D4; height: 22px; margin: 0; width: 280px;}
.container .point_plus .input_coupon .actions.multi{position: absolute; top: 11px; right: 35px;}
.container .point_plus .input_coupon .money_view{float: left; width: 100%; margin-top: 20px; margin-bottom: 10px;}
.container .point_plus .input_coupon .money_view .money_view1 { position: relative; float: left; margin-left: 22px; background: url("../images/bg_macoupon.jpg") no-repeat scroll 0 0px; width: 406px; height: 61px;}
.container .point_plus .input_coupon .money_view span { background: none repeat scroll 0 0 transparent; border: medium none; padding: 9px 0; position: absolute; right: 3px; text-align: center; top: 3px; width: 270px; color: #FFF;  font-size: 24px; font-weight: bold;}
#divmess label{font-size: 11px; color: #9b0000; font-style: italic; }

/*lich su diem thuong*/
.container .control_h2 h2{float: left; background: url(../images/bg_h2.png) repeat 0px 0px; width: 100%; height: 36px; }
.container .control_h2 h2 a{color: #000000; display: block; font-size: 12px; font-weight: bold; padding: 10px 10px; text-transform: uppercase;}
.container .control_h2 h2:hover a{color: #9b0000;}
.container .history_point_h2 i{background: url(../images/icon/icon_chon.png) no-repeat -85px -15px; width: 16px; height: 19px; margin: 9px; float: left;}
.container .history_point_h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -85px -36px;}
.container .history_point{float: left; width: 100%; margin-top: 25px;}
.container .history_point_box .boxx:after{width: 100%; margin: auto; clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden;} 
.container .history_point_box .boxx{ float: left; margin: 0px 19px;}
.container .history_point_box .pointtitle {border-bottom: 1px solid #7e7e7e; }
.container .history_point_box .boxx span{float: left; }
.container .history_point_box .boxx span.history_point_name {width: 325px; margin-left: 12px; font-size: 11px;}
.container .history_point_box .boxx span.history_point_diem {width: 180px; font-size: 11px;}
.container .history_point_box .boxx span.history_point_duyet {width: 180px; font-size: 11px;}
.container .history_point_box .boxx span.history_point_ngaytao {width: 245px; font-size: 11px;}
.container .history_point_box .boxx span.textbold{color: #666666; font-weight: bold; font-size: 12px;}
.container .history_point_box .pointrow1 {padding: 10px 0px;}
.container .history_point_box .pointrow2 {padding: 10px 0px; background: #f7f7f7;} 
.lbtcdate{float:left;}

	/*pagging diem thuong*/
.container .history_point .pagging {float: left; width: 100%; height: 35px; margin-bottom: 10px;}
.container .history_point .pagging ul{float: right; margin: 4px 10px; }
.container .history_point .pagging ul li{list-style: none; float: left; margin: 5px;}
.container .history_point .pagging ul li a{float: left; color: #000; font-size: 11px; font-family: Arial, sans-serif; font-weight: bold;  text-align: center; width: 20px; height: 20px; line-height: 20px; }
.container .history_point .pagging ul li.pre_nav a{background: url(../images/tintuc/bg_pre.png) no-repeat center center; width: 20px; height: 20px; text-indent:-9999px;}
.container .history_point .pagging ul li.next_nav a{background: url(../images/tintuc/bg_next.png) no-repeat center center; width: 20px; height: 20px; text-indent:-9999px;}
.container .history_point .pagging ul li.pre_nav:hover a{background: url(../images/tintuc/bg_pre_hover.png) no-repeat center center;}
.container .history_point .pagging ul li.next_nav:hover a{background: url(../images/tintuc/bg_next_hover.png) no-repeat center center;}
.container .history_point .pagging ul li.active a, .container .pagging ul li:hover a{ background: url(../images/tintuc/active_navpagging.png) no-repeat 0px 0px; width: 20px; height: 20px; color: #FFF;}

	/*t�ch luy diem thuong*/
.container .guide_points_h2 i{background: url(../images/icon/icon_chon.png) no-repeat -64px -28px; width: 16px; height: 16px; margin: 9px; float: left;}
.container .guide_points_h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -64px -42px;}	
.container .guide_points .guide_points_box{float: left; margin-bottom: 20px; width: 100%;}
.container .guide_points .guide_points_box ul li span:hover{color: #9b0000;}
.container .guide_points .guide_points_box .boxx{ position: relative; float: left; margin-left: 20px; width: 47%;}
.container .guide_points .guide_points_box .boxx i{ cursor: pointer; background: url(../images/icon/icon_chon.png) no-repeat -1px -36px; width: 15px; height: 16px; position: absolute; right: 0px; top: 11px;}
.container .guide_points  ul:after{width: 100%; margin: auto; clear: both; content: "."; display: block; height: 0; line-height: 0; visibility: hidden;} 
.container .guide_points  ul li{list-style: none; float: left; margin-bottom: 5px;}
.container .guide_points .guide_points_box .guidepoint1{ padding: 10px 0px; }
.container .guide_points .guide_points_box .guidepoint2{ padding: 10px 0px; background: #f7f7f7;}
.container .guide_points .guide_points_box .boxx span{display: block; margin-left: 12px; width: 94%;}

.container .guide_points ul li .guide_answers .close_guide{ background: none repeat scroll 0 0 #222629; height: 26px; margin-left: 1px; position: relative; width: 463px;} 
.container .guide_points ul li .guide_answers .close_guide button{ background: url(../images/icon/icon_chon.png) no-repeat -46px -42px;  width: 11px; height: 21px; border: none; cursor: pointer; position: absolute; right: 6px; top: 0px;}
.container .guide_points ul li .guide_answers .close_guide button:hover{background: url(../images/icon/icon_chon.png) no-repeat -1px -106px;}
.container .guide_points ul li .guide_answers{position: absolute; z-index: 99; width: 467px; background: url(../images/bg_answers.png) no-repeat left bottom; padding: 0 8px 18px 0;}
.container .guide_points ul li .guide_answers p{padding: 5px 15px; background: url(../images/bg_answers-mid.png) repeat-y left top #FFF;}


/* tabs quan ly giao dich*/
	/*menu quan ly giao dich*/
.container ul.manager_trading_menu{float: left; width: 100%; background: url(../images/bg_h2.png) repeat 0px 0px ;}
.container ul.manager_trading_menu li {float: left; list-style: none; height: 36px;  }
.container ul.manager_trading_menu li.first_menu a {background: url(../images/icon/icon_chon.png) no-repeat -78px -79px; width: 16px; height: 18px; display: block; padding: 0px; margin: 9px 0 9px 10px;}
.container ul.manager_trading_menu li a{ padding: 8px 20px; color: #000; font-size: 12px; font-weight: bold; text-transform: uppercase; background: url(../images/bg_line.png) no-repeat right center; text-align: center; display: block;}
.container ul.manager_trading_menu li a.tabs-selected{border-bottom: 2px solid #000;}
.container ul.manager_trading_menu li.tabs-selected, .container ul.manager_trading_menu ul li:hover{border-bottom: 2px solid #000;}
.container ul.manager_trading_menu li:hover a{color: #9b0000;}
.container ul.manager_trading_menu li.first_menu{border: none;}
.container ul.manager_trading_menu li.first_menu:hover {border: none; }
.container ul.manager_trading_menu li:last-child a{background: none;}

.list_trading{float: left; width: 100%; margin-top: 10px;}
.manager_trading_box{float: left; width: 100%; margin-top: 10px;} 
.manager_trading_view{float: left; width: 100%;}

.btnToggle{cursor:pointer;}
.manager_trading_view .accordion{float: left; width: 100%;}
.manager_trading_view .accordion tr th{color: #666666; border-bottom: 1px solid #d0e0d9; font-size: 11px;}
.manager_trading_view .accordion tr td{text-align: left !important; background: #f7f7f7; border-right: 2px solid #FFF; vertical-align: top; font-size: 11px;}
.manager_trading_view .accordion tr.bgwhite td{background: #FFF; vertical-align: top; }
.manager_trading_view .accordion tr.bgwhite1 th, .manager_trading_view .accordion tr.bgwhite2 th{color: #333; border-bottom: 1px solid #9b0000;}
.manager_trading_view .accordion tr.bgwhite1 td, .manager_trading_view .accordion tr.bgwhite2 td{background: none; border: none;  vertical-align: top; }
.cancle_order{background: url("../images/del.png") no-repeat scroll center center transparent; display: block;}
/*.continue_order{background: url("../images/chon-icon2.gif") no-repeat scroll center center transparent; display: block;}*/
.manager_trading_view .accordion tr  table{border: none !important;}
.manager_trading_view .accordion tr th.th1{border: none;}
.manager_trading_view .accordion tr th.th2{vertical-align: bottom; width: 90px; }
.manager_trading_view .accordion tr th.th3{vertical-align: bottom; width: 80px; }
.manager_trading_view .accordion tr th.th4{vertical-align: bottom; width: 80px; }
.manager_trading_view .accordion tr th.th5{vertical-align: bottom; width: 86px; }
.manager_trading_view .accordion tr th.th6{vertical-align: bottom; width: 80px; }
.manager_trading_view .accordion tr th.th7{vertical-align: bottom; width: 80px; }
.manager_trading_view .accordion tr th.th8{vertical-align: bottom; width: 125px; }
.manager_trading_view .accordion tr th.th9{vertical-align: bottom; width: 85px; }
.manager_trading_view .accordion tr th.th10{vertical-align: bottom; width: 80px; }
.manager_trading_view .accordion tr th.th11{vertical-align: bottom; width: 85px; }
.manager_trading_view .accordion tr th.th12{vertical-align: bottom; width: 108px; }

.manager_trading_view table table tr td b{color: #000; float: left; margin-right: 5px;}
.manager_trading_view table table tr td a { display: block; text-align: justify;}
.manager_trading_view table table {margin: 0px;}
.manager_trading_view table table p{margin: 0px;}
.manager_trading_view table table tr th{vertical-align: bottom; font-size: 11px;}
.manager_trading_view .accordion tr th.hd1{vertical-align: bottom; width: 244px; padding: 2px 0px; font-size: 11px; }
.manager_trading_view .accordion tr th.hd2{vertical-align: bottom; width: 154px; padding: 2px 5px; font-size: 11px;}
.manager_trading_view .accordion tr th.hd3{vertical-align: bottom; width: 75px; padding: 2px 5px; font-size: 11px;}
.manager_trading_view .accordion tr th.hd4{vertical-align: bottom; width: 98px; padding: 2px 5px; font-size: 11px;}
.manager_trading_view .accordion tr th.hd5{vertical-align: bottom; width: 157px; padding: 2px 5px; font-size: 11px;}
.manager_trading_view .accordion tr th.hd6{vertical-align: bottom; width: 83px; padding: 2px 5px; font-size: 11px;}

	/*pagging quan ly giao dich*/
.container .list_trading .pagging {float: left; width: 100%; height: 35px; margin-bottom: 10px;}
.container .list_trading .pagging ul{float: right; margin: 4px -5px; }
.container .list_trading .pagging ul li{list-style: none; float: left; margin: 5px;}
.container .list_trading .pagging ul li a{float: left; color: #000; font-size: 11px; font-family: Arial, sans-serif; font-weight: bold;  text-align: center; width: 20px; height: 20px; line-height: 20px; }
.container .list_trading .pagging ul li.pre_nav a{background: url(../images/tintuc/bg_pre.png) no-repeat center center; width: 20px; height: 20px; text-indent:-9999px;}
.container .list_trading .pagging ul li.next_nav a{background: url(../images/tintuc/bg_next.png) no-repeat center center; width: 20px; height: 20px; text-indent:-9999px;}
.container .list_trading .pagging ul li.pre_nav:hover a{background: url(../images/tintuc/bg_pre_hover.png) no-repeat center center;}
.container .list_trading .pagging ul li.next_nav:hover a{background: url(../images/tintuc/bg_next_hover.png) no-repeat center center;}
.container .list_trading .pagging ul li.active a, .container .pagging ul li:hover a{ background: url(../images/tintuc/active_navpagging.png) no-repeat 0px 0px; width: 20px; height: 20px; color: #FFF;}

	/*san pham yeu thich cua ban*/
.container .product_favorite{float: left; width: 100%; position: relative;}
.container .product_favorite_h2 i{background: url("../images/icon/icon_chon.png") no-repeat scroll -25px -133px transparent; float: left; height: 17px; margin: 9px; width: 20px;}
.container .product_favorite_h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -1px -133px;}	

.container .product_favorite a.readon{display: block; position: absolute; right: 5px; top: 10px; color: #000; font-style: italic; font-size: 11px;}
.container .product_favorite a.readon:hover{color: #9b0000;}
.container .product_favorite .product_favorite_box{float: left; width: 100%; overflow: hidden;}
.container .product_favorite .product_favorite_box ul li{ position: relative; float: left; list-style: none; border: 1px solid #f5f5f5; height: 167px; width: 156px; overflow: hidden; margin-right: 3px;}
.container .product_favorite .product_favorite_box ul {width: 101%;}
.container .product_favorite .product_favorite_box ul li i{background: url(../images/icon/icon_chon.png) no-repeat 0 -74px; width: 11px; height: 21px; position: absolute; right: 2px; top: 0px}
.container .product_favorite .product_favorite_box ul li i:hover{background: url(../images/icon/icon_chon.png) no-repeat 0 -106px;}


	/*san pham user da xem*/
.container .product_viewed{float: left; width: 100%; position: relative;}	
.container .product_viewed_h2 i{background: url("../images/icon/icon_chon.png") no-repeat scroll -19px -77px transparent; float: left; height: 17px; margin: 9px; width: 21px;}
.container .product_viewed_h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -19px -109px;}	

.container .product_viewed a.readon{display: block; position: absolute; right: 5px; top: 10px; color: #000; font-style: italic; font-size: 11px;}
.container .product_viewed a.readon:hover{color: #9b0000;}
.container .product_viewed .product_viewed_box{float: left; width: 100%; overflow: hidden;}
.container .product_viewed .product_viewed_box ul li{ position: relative; float: left; list-style: none; border: 1px solid #f5f5f5; height: 167px; width: 156px; overflow: hidden; margin-right: 3px;}
.container .product_viewed .product_viewed_box ul {width: 101%;}
.container .product_viewed .product_viewed_box ul li i{background: url(../images/icon/icon_chon.png) no-repeat 0 -74px; width: 11px; height: 21px; position: absolute; right: 2px; top: 0px}
.container .product_viewed .product_viewed_box ul li i:hover{background: url(../images/icon/icon_chon.png) no-repeat 0 -106px;}

	/*danh gia cua user*/
.container .assess_your{float: left; width: 100%; margin-top: 10px;}
.container .assess_your_h2 h2 {margin: 0px;}
.container .assess_your_h2 i{background: url("../images/icon/icon_chon.png") no-repeat scroll -45px -78px transparent; float: left; height: 20px; margin: 9px; width: 22px;}
.container .assess_your_h2:hover i {background: url(../images/icon/icon_chon.png) no-repeat -45px -110px;}	

.container .assess_your .wrapper_assess{width: 940px; margin: auto;}
.container .assess_your .wrapper_assess .wrapper-row {float: left; width: 100%;}
.container .assess_your .wrapper_assess .rows2 {background: #f7f7f7;}
.container .assess_your .wrapper_assess .rows{width: 470px; float: left; margin-bottom:5px;}
.container .assess_your .wrapper_assess .rows .rows_left{float: left; width: 80%; margin: 10px 0px}
.container .assess_your .wrapper_assess .rows .rows_right{float: right; width: 20%; margin: 10px 0px;}

.container .assess_your .wrapper_assess .rows .rows_left .ncomment{padding: 0 5px; width: 98%; float: left; font-weight: bold; color: #000; font-size: 11px; }
.container .assess_your .wrapper_assess .rows .vcomment{float: left; padding: 0 5px; width: 98%;}
.container .assess_your .wrapper_assess .rows .vcomment span{font-weight: bold;}
.container .assess_your .wrapper_assess .rows .tcomment{float: left; padding: 0 5px; width: 98%;}
.container .assess_your .wrapper_assess strong i{margin-top: 55px; display: block; text-align: center;}
	/*pagging comment's user*/
.container .assess_your .pagging {float: left; width: 100%; height: 35px; margin-bottom: 10px;}
.container .assess_your .pagging ul{float: right; margin: 4px 10px; }
.container .assess_your .pagging ul li{list-style: none; float: left; margin: 5px;}
.container .assess_your .pagging ul li a{float: left; color: #000; font-size: 11px; font-family: Arial, sans-serif; font-weight: bold;  text-align: center; width: 16px; height: 16px; }
.container .assess_your .pagging ul li a.pre_nav{background: url(../images/tintuc/bg_pre.png) no-repeat center center; width: 16px; height: 16px; text-indent:-9999px;}
.container .assess_your .pagging ul li a.next_nav{background: url(../images/tintuc/bg_next.png) no-repeat center center; width: 16px; height: 16px; text-indent:-9999px;}
.container .assess_your .pagging ul li:hover a.pre_nav{background: url(../images/tintuc/bg_pre_hover.png) no-repeat center center;}
.container .assess_your .pagging ul li:hover a.next_nav{background: url(../images/tintuc/bg_next_hover.png) no-repeat center center;}
.container .assess_your .pagging ul li.active a, .container .pagging ul li:hover a{ background: url(../images/tintuc/active_navpagging.png) no-repeat 0px 0px; width: 16px; height: 16px; color: #FFF;}

/*trang quen mat ma*/
.container .wrapper_control .forgot-pass .forgot-pass-form .field input{width: 267px; float: left; color: #666; padding: 0px 5px;}
.container .wrapper_control .forgot-pass .forgot-pass-form .field span.msg_validate{float: left; font-size: 11px;  font-style: italic;  margin-top: 5px;  width: 99%; color: #9b0000;}
.container .wrapper_control .forgot-pass .forgot-pass-form .field > .input.text {float: left; width: 46%;}
.container .wrapper_control .forgot-pass .forgot-pass-form .field span.failure{float: left; font-size: 11px;  font-style: italic;  margin-top: 5px;  width: 99%; color: #9b0000;}
.forgot-pass .control_forgotpass_h2 i{background: url(../images/icon/icon_login.png) repeat 0px 0px; width: 16px; height: 19px; margin: 0px 5px 0px 0px; float: left;}
.forgot-pass .control_forgotpass_h2:hover i {background: url(../images/icon/icon_login_hover.png) repeat 0px 0px;}
.forgot-pass input:focus {color: #000; border: 1px solid #000 !important;}
.forgot-pass{float: left; width: 650px;}
.forgot-pass .forgot-pass-form{float: left; width: 100%;}
.forgot-pass .forgot-pass-form h3{float: left; width: 97%; margin-left: 20px; margin-bottom: 30px;}
.forgot-pass .forgot-pass-form .field{float: left; margin-left: 35px; margin-bottom: 10px;}
.forgot-pass .forgot-pass-form .code-capcha{float: left; margin: 0 0 0 352px; width: 46%;}
.forgot-pass .forgot-pass-form .code-capcha .img_capcha {float: left;}
.forgot-pass .forgot-pass-form .code-capcha span{float: left; width: 109px; height: 29px}
.forgot-pass .forgot-pass-form .code-capcha input {float: left; width: 14px !important; height: 15px; margin: 7px; cursor: pointer;}

.container .wrapper_control .forgot-pass .forgot-pass-form .field label{width: 155px; float: left; line-height: 24px; color: #000;}
.forgot-pass .actions.sendPass {float: right; margin-right: 165px; margin-top: 15px;}
.forgot-pass .actions.sendPass a{color: #FFF; font-weight: bold;}
.forgot-pass .actions.sendPass a:hover{color: #9b0000;}
.forgot-pass .actions.sendPass a input{border: none; background: none; color: #FFF; font-weight: bold; cursor: pointer;}
.forgot-pass input:focus{border: 1px solid #E5E5E5 !important;}
.forgot-pass-form .sendPass input:focus{border: none !important; outline: none;}


/* ------------------------------------------------------------------------
	This you can edit.
------------------------------------------------------------------------- */

	/* ----------------------------------
		Default Theme
	----------------------------------- */

	div.pp_default .pp_top,
	div.pp_default .pp_top .pp_middle,
	div.pp_default .pp_top .pp_left,
	div.pp_default .pp_top .pp_right,
	div.pp_default .pp_bottom,
	div.pp_default .pp_bottom .pp_left,
	div.pp_default .pp_bottom .pp_middle,
	div.pp_default .pp_bottom .pp_right { height: 13px; }
	/*
	div.pp_default .pp_top .pp_left { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -78px -93px no-repeat; } 
	div.pp_default .pp_top .pp_middle { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_x.png) top left repeat-x; } 
	div.pp_default .pp_top .pp_right { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -112px -93px no-repeat; } 
	*/
	div.pp_default .pp_content .ppt { color: #eee;padding:20px; }
	/*
	div.pp_default .pp_content_container .pp_left { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_y.png) -7px 0 repeat-y; padding-left: 13px; }
	div.pp_default .pp_content_container .pp_right { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_y.png) top right repeat-y; padding-right: 13px; }
*/
	div.pp_default .pp_content {/*background-color: #fff;*/ /* background-color: #eee;*/} /* Content background */
	div.pp_default .pp_next:hover { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_next.png) center right  no-repeat; cursor: pointer; } /* Next button */
	div.pp_default .pp_previous:hover { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_prev.png) center left no-repeat; cursor: pointer; } /* Previous button */
	div.pp_default .pp_expand { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) 0 -29px no-repeat; cursor: pointer; width: 28px; height: 28px; } /* Expand button */
	div.pp_default .pp_expand:hover { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) 0 -56px no-repeat; cursor: pointer; } /* Expand button hover */
	div.pp_default .pp_contract { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) 0 -84px no-repeat; cursor: pointer; width: 28px; height: 28px; } /* Contract button */
	div.pp_default .pp_contract:hover { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) 0 -113px no-repeat; cursor: pointer; } /* Contract button hover */
	/*
	div.pp_default .pp_close { width: 30px; height: 30px; background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) 2px 1px no-repeat; cursor: pointer; position:absolute; top:22px; right: -4px} 
	*/
	div.pp_default #pp_full_res .pp_inline { color: #000; } 
	div.pp_default .pp_gallery ul li a { background:/* url(/files/themes/default/media/images/prettyPhoto/default/default_thumb.png) center center*/ #eeeeee; border:1px solid #aaa; }
	div.pp_default .pp_gallery ul li a:hover,
	div.pp_default .pp_gallery ul li.selected a { border-color: #fff; }

	div.pp_default .pp_gallery a.pp_arrow_previous,
	div.pp_default .pp_gallery a.pp_arrow_next { position: static; left: auto; }
	div.pp_default .pp_nav .pp_play,
	div.pp_default .pp_nav .pp_pause { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -51px 1px no-repeat; height:30px; width:30px; }
	div.pp_default .pp_nav .pp_pause { background-position: -51px -29px; }
	div.pp_default .pp_details { position: relative; }
	div.pp_default a.pp_arrow_previous,
	div.pp_default a.pp_arrow_next { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -31px -3px no-repeat; height: 20px; margin: 4px 0 0 0; width: 20px; }
	div.pp_default a.pp_arrow_next { left: 52px; background-position: -82px -3px; } /* The next arrow in the bottom nav */
	div.pp_default .pp_content_container .pp_details { margin-top: 5px; }
	div.pp_default .pp_nav { clear: none; height: 30px; width: 105px; position: relative; }
	div.pp_default .pp_nav .currentTextHolder{ font-family: Georgia; font-style: italic; font-color:#999; font-size: 11px; left: 75px; line-height: 25px; margin: 0; padding: 0 0 0 10px; position: absolute; top: 2px; }
	
	div.pp_default .pp_close:hover, div.pp_default .pp_nav .pp_play:hover, div.pp_default .pp_nav .pp_pause:hover, div.pp_default .pp_arrow_next:hover, div.pp_default .pp_arrow_previous:hover { opacity:0.7; }

	div.pp_default .pp_description{ font-size: 11px; font-weight: bold; line-height: 14px; margin: 5px 50px 5px 0; }
    /*
	div.pp_default .pp_bottom .pp_left { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -78px -127px no-repeat; } 
	div.pp_default .pp_bottom .pp_middle { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_x.png) bottom left repeat-x; }
	div.pp_default .pp_bottom .pp_right { background: url(/files/themes/default/media/images/prettyPhoto/default/sprite.png) -112px -127px no-repeat; }
*/
	div.pp_default .pp_loaderIcon { background: url(/files/themes/default/media/images/prettyPhoto/default/loader.gif) center center no-repeat; } /* Loader icon */

/* ------------------------------------------------------------------------
	DO NOT CHANGE
------------------------------------------------------------------------- */

	div.pp_pic_holder a:focus { outline:none; }

	div.pp_overlay {
		background: #000;
		display: none;
		left: 0;
		position: absolute;
		top: 0;
		width: 100%;
		z-index: 9500;
	}
	
	div.pp_pic_holder {
		display: none;
		position: absolute;
		width: 100px;
		z-index: 10000;
	}

		
		.pp_top {
			height: 13px;
			position: relative;
		}
			* html .pp_top { padding: 0 20px; }
		
			.pp_top .pp_left {
				height: 20px;
				left: 0;
				position: absolute;
				width: 20px;
			}
			.pp_top .pp_middle {
				height: 20px;
				left: 20px;
				position: absolute;
				right: 20px;
			}
				* html .pp_top .pp_middle {
					left: 0;
					position: static;
				}
			
			.pp_top .pp_right {
				height: 20px;
				left: auto;
				position: absolute;
				right: 0;
				top: 0;
				width: 20px;
			}
		
		.pp_content { height: 40px; /*min-width: 40px;;*/ background:none; }
		* html .pp_content { width: 40px; background:none;}
		
		.pp_fade { display: none;}
		
		.pp_content_container {
			position: relative;
			text-align: left;
			width: 100%;			
		}
		
			.pp_content_container .pp_left { padding-left: 20px; }
			.pp_content_container .pp_right { padding-right: 20px; }
		
			.pp_content_container .pp_details {
				float: left;
				margin: 10px 0 2px 0;
			}
				.pp_description {
					display: none;
					margin: 0;
				}
				
				.pp_social { float: left; margin: 7px 0 0 0;display:none; }
				.pp_social .facebook { float: left; position: relative; top: -1px; margin-left: 5px; width: 55px; overflow: hidden; }
				.pp_social .twitter { float: left; }
				
				.pp_nav {
					clear: right;
					float: left;
					margin: 3px 10px 0 0;
				}
				
					.pp_nav p {
						float: left;
						margin: 2px 4px;
					}
					
					.pp_nav .pp_play,
					.pp_nav .pp_pause {
						float: left;
						margin-right: 4px;
						text-indent: -10000px;
					}
				
					a.pp_arrow_previous,
					a.pp_arrow_next {
						display: block;
						float: left;
						height: 15px;
						margin-top: 3px;
						overflow: hidden;
						text-indent: -10000px;
						width: 14px;
					}
		
		.pp_hoverContainer {
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 2000;
		}
		
		.pp_gallery {
			display: none;
			left: 50%;
			margin-top: -50px;
			position: absolute;
			z-index: 10000;
		}
		
			.pp_gallery div {
				float: left;
				overflow: hidden;
				position: relative;
			}
			
			.pp_gallery ul {
				float: left;
				height: 35px;
				margin: 0 0 0 5px;
				padding: 0;
				position: relative;
				white-space: nowrap;
			}
			
			.pp_gallery ul a {
				border: 1px #000 solid;
				border: 1px rgba(0,0,0,0.5) solid;
				display: block;
				float: left;
				height: 33px;
				overflow: hidden;
			}
			
			.pp_gallery ul a:hover,
			.pp_gallery li.selected a { border-color: #fff; }
			
			.pp_gallery ul a img { border: 0; }
			
			.pp_gallery li {
				display: block;
				float: left;
				margin: 0 5px 0 0;
				padding: 0;
			}
			
			.pp_gallery li.default a {
				background: url(../images/prettyPhoto/facebook/default_thumbnail.gif) 0 0 no-repeat;
				display: block;
				height: 33px;
				width: 50px;
			}
			
			.pp_gallery li.default a img { display: none; }
			
			.pp_gallery .pp_arrow_previous,
			.pp_gallery .pp_arrow_next {
				margin-top: 7px !important;
			}
		
		a.pp_next {
			background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_next.png) 10000px 10000px no-repeat;
			display: block;
			float: right;
			height: 100%;
			text-indent: -10000px;
			width: 49%;
		}
			
		a.pp_previous {
			background: url(/files/themes/default/media/images/prettyPhoto/default/sprite_prev.png) 10000px 10000px no-repeat;
			display: block;
			float: left;
			height: 100%;
			text-indent: -10000px;
			width: 49%;
		}
		
		a.pp_expand,
		a.pp_contract {
			cursor: pointer;
			display: none;
			height: 20px;	
			position: absolute;
			left: 15px;
			text-indent: -10000px;
			top: 1px;
			width: 20px;
			z-index: 20000;
		}
			
		a.pp_close {
			position: absolute; right: 20px; top: 40px; 
			z-index:9999;
			display: block;
			line-height:22px;
			text-indent: -10000px;
		}
		
		.pp_bottom {
			height: 20px;
			position: relative;
		}
			* html .pp_bottom { padding: 0 20px; }
			
			.pp_bottom .pp_left {
				height: 20px;
				left: 0;
				position: absolute;
				width: 20px;
			}
			.pp_bottom .pp_middle {
				height: 20px;
				left: 20px;
				position: absolute;
				right: 20px;
			}
				* html .pp_bottom .pp_middle {
					left: 0;
					position: static;
				}
				
			.pp_bottom .pp_right {
				height: 20px;
				left: auto;
				position: absolute;
				right: 0;
				top: 0;
				width: 20px;
			}
		
		.pp_loaderIcon {
			display: block;
			height: 24px;
			left: 50%;
			margin: -12px 0 0 -12px;
			position: absolute;
			top: 50%;
			width: 24px;
		}
		
		#pp_full_res {
			line-height: 1 !important;
		}
		
			#pp_full_res .pp_inline {
				text-align: left;
			}
			
				#pp_full_res .pp_inline p { margin: 0 0 15px 0; }
	
		div.ppt {
			color: #fff;
			display: none;
			font-size: 17px;
			margin: 0 0 5px 15px;
			z-index: 9999;
		}

/* ------------------------------------------------------------------------
	Miscellaneous
------------------------------------------------------------------------- */

﻿  .itemCat .img-loading{display:none;position:absolute;top:5px;left:0px;z-index:999;}﻿/*
* jQuery UI CSS Framework
* Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
* Dual licensed under the MIT (MIT-LICENSE.txt) and GPL (GPL-LICENSE.txt) licenses.
*/

/* Layout helpers
----------------------------------*/
.ui-helper-hidden { display: none; }
.ui-helper-hidden-accessible { position: absolute; left: -99999999px; }
.ui-helper-reset { margin: 0; padding: 0; border: 0; outline: 0; line-height: 1.3; text-decoration: none; font-size: 100%; list-style: none; }
.ui-helper-clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
.ui-helper-clearfix { display: inline-block; }
/* required comment for clearfix to work in Opera \*/
* html .ui-helper-clearfix { height:1%; }
.ui-helper-clearfix { display:block; }
/* end clearfix */
.ui-helper-zfix { width: 100%; height: 100%; top: 0; left: 0; position: absolute; opacity: 0; filter:Alpha(Opacity=0); }


/* Interaction Cues
----------------------------------*/
.ui-state-disabled { cursor: default !important; }


/* Icons
----------------------------------*/

/* states and images */
.ui-icon { display: block; text-indent: -99999px; overflow: hidden; background-repeat: no-repeat; }


/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
/* Accordion
----------------------------------*/
.ui-accordion .ui-accordion-header { cursor: pointer; position: relative; margin-top: 1px; zoom: 1; }
.ui-accordion .ui-accordion-li-fix { display: inline; }
.ui-accordion .ui-accordion-header-active { border-bottom: 0 !important; }
.ui-accordion .ui-accordion-header a { display: block; font-size: 1em; padding: .5em .5em .5em .7em; }
/* IE7-/Win - Fix extra vertical space in lists */
.ui-accordion a { zoom: 1; }
.ui-accordion-icons .ui-accordion-header a { padding-left: 2.2em; }
.ui-accordion .ui-accordion-header .ui-icon { position: absolute; left: .5em; top: 50%; margin-top: -8px; }
.ui-accordion .ui-accordion-content { padding: 1em 2.2em; border-top: 0; margin-top: -2px; position: relative; top: 1px; margin-bottom: 2px; overflow: auto; display: none; zoom: 1; }
.ui-accordion .ui-accordion-content-active { display: block; }/* Autocomplete
----------------------------------*/
.ui-autocomplete { position: absolute; cursor: default; }	
.ui-autocomplete-loading { background: white url('../images/ui-anim_basic_16x16.gif') right center no-repeat; }

/* workarounds */
* html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */

/* Menu
----------------------------------*/
.ui-menu {
	list-style:none;
	padding: 2px;
	margin: 0;
	display:block;
}
.ui-menu .ui-menu {
	margin-top: -3px;
}
.ui-menu .ui-menu-item {
	margin:0;
	padding: 0;
	zoom: 1;
	float: left;
	clear: left;
	width: 100%;
}
.ui-menu .ui-menu-item a {
	text-decoration:none;
	display:block;
	padding:.2em .4em;
	line-height:1.5;
	zoom:1;
}
.ui-menu .ui-menu-item a.ui-state-hover,
.ui-menu .ui-menu-item a.ui-state-active {
	font-weight: normal;
	margin: -1px;
}
/* Button
----------------------------------*/

.ui-button { display: inline-block; position: relative; padding: 0; margin-right: .1em; text-decoration: none !important; cursor: pointer; text-align: center; zoom: 1; overflow: visible; } /* the overflow property removes extra width in IE */
.ui-button-icon-only { width: 2.2em; } /* to make room for the icon, a width needs to be set here */
button.ui-button-icon-only { width: 2.4em; } /* button elements seem to need a little more width */
.ui-button-icons-only { width: 3.4em; } 
button.ui-button-icons-only { width: 3.7em; } 

/*button text element */
.ui-button .ui-button-text { display: block; line-height: 1.4;  }
.ui-button-text-only .ui-button-text { padding: .4em 1em; }
.ui-button-icon-only .ui-button-text, .ui-button-icons-only .ui-button-text { padding: .4em; text-indent: -9999999px; }
.ui-button-text-icon .ui-button-text, .ui-button-text-icons .ui-button-text { padding: .4em 1em .4em 2.1em; }
.ui-button-text-icons .ui-button-text { padding-left: 2.1em; padding-right: 2.1em; }
/* no icon support for input elements, provide padding by default */
input.ui-button { padding: .4em 1em; }

/*button icon element(s) */
.ui-button-icon-only .ui-icon, .ui-button-text-icon .ui-icon, .ui-button-text-icons .ui-icon, .ui-button-icons-only .ui-icon { position: absolute; top: 50%; margin-top: -8px; }
.ui-button-icon-only .ui-icon { left: 50%; margin-left: -8px; }
.ui-button-text-icon .ui-button-icon-primary, .ui-button-text-icons .ui-button-icon-primary, .ui-button-icons-only .ui-button-icon-primary { left: .5em; }
.ui-button-text-icons .ui-button-icon-secondary, .ui-button-icons-only .ui-button-icon-secondary { right: .5em; }

/*button sets*/
.ui-buttonset { margin-right: 7px; }
.ui-buttonset .ui-button { margin-left: 0; margin-right: -.3em; }

/* workarounds */
button.ui-button::-moz-focus-inner { border: 0; padding: 0; } /* reset extra padding in Firefox */





/* Datepicker
----------------------------------*/
.ui-datepicker { width: 17em; padding: .2em .2em 0; }
.ui-datepicker .ui-datepicker-header { position:relative; padding:.2em 0; }
.ui-datepicker .ui-datepicker-prev, .ui-datepicker .ui-datepicker-next { position:absolute; top: 2px; width: 1.8em; height: 1.8em; }
.ui-datepicker .ui-datepicker-prev-hover, .ui-datepicker .ui-datepicker-next-hover { top: 1px; }
.ui-datepicker .ui-datepicker-prev { left:2px; }
.ui-datepicker .ui-datepicker-next { right:2px; }
.ui-datepicker .ui-datepicker-prev-hover { left:1px; }
.ui-datepicker .ui-datepicker-next-hover { right:1px; }
.ui-datepicker .ui-datepicker-prev span, .ui-datepicker .ui-datepicker-next span { display: block; position: absolute; left: 50%; margin-left: -8px; top: 50%; margin-top: -8px;  }
.ui-datepicker .ui-datepicker-title { margin: 0 2.3em; line-height: 1.8em; text-align: center; }
.ui-datepicker .ui-datepicker-title select { font-size:1em; margin:1px 0; }
.ui-datepicker select.ui-datepicker-month-year {width: 100%;}
.ui-datepicker select.ui-datepicker-month, 
.ui-datepicker select.ui-datepicker-year { width: 49%;}
.ui-datepicker table {width: 100%; font-size: .9em; border-collapse: collapse; margin:0 0 .4em; }
.ui-datepicker th { padding: .7em .3em; text-align: center; font-weight: bold; border: 0;  }
.ui-datepicker td { border: 0; padding: 1px; }
.ui-datepicker td span, .ui-datepicker td a { display: block; padding: .2em; text-align: right; text-decoration: none; }
.ui-datepicker .ui-datepicker-buttonpane { background-image: none; margin: .7em 0 0 0; padding:0 .2em; border-left: 0; border-right: 0; border-bottom: 0; }
.ui-datepicker .ui-datepicker-buttonpane button { float: right; margin: .5em .2em .4em; cursor: pointer; padding: .2em .6em .3em .6em; width:auto; overflow:visible; }
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current { float:left; }

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi { width:auto; }
.ui-datepicker-multi .ui-datepicker-group { float:left; }
.ui-datepicker-multi .ui-datepicker-group table { width:95%; margin:0 auto .4em; }
.ui-datepicker-multi-2 .ui-datepicker-group { width:50%; }
.ui-datepicker-multi-3 .ui-datepicker-group { width:33.3%; }
.ui-datepicker-multi-4 .ui-datepicker-group { width:25%; }
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header { border-left-width:0; }
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header { border-left-width:0; }
.ui-datepicker-multi .ui-datepicker-buttonpane { clear:left; }
.ui-datepicker-row-break { clear:both; width:100%; }

/* RTL support */
.ui-datepicker-rtl { direction: rtl; }
.ui-datepicker-rtl .ui-datepicker-prev { right: 2px; left: auto; }
.ui-datepicker-rtl .ui-datepicker-next { left: 2px; right: auto; }
.ui-datepicker-rtl .ui-datepicker-prev:hover { right: 1px; left: auto; }
.ui-datepicker-rtl .ui-datepicker-next:hover { left: 1px; right: auto; }
.ui-datepicker-rtl .ui-datepicker-buttonpane { clear:right; }
.ui-datepicker-rtl .ui-datepicker-buttonpane button { float: left; }
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current { float:right; }
.ui-datepicker-rtl .ui-datepicker-group { float:right; }
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header { border-right-width:0; border-left-width:1px; }
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header { border-right-width:0; border-left-width:1px; }

/* IE6 IFRAME FIX (taken from datepicker 1.5.3 */
.ui-datepicker-cover {
    display: none; /*sorry for IE5*/
    display/**/: block; /*sorry for IE5*/
    position: absolute; /*must have*/
    z-index: -1; /*must have*/
    filter: mask(); /*must have*/
    top: -4px; /*must have*/
    left: -4px; /*must have*/
    width: 200px; /*must have*/
    height: 200px; /*must have*/
}/* Dialog
----------------------------------*/
.ui-dialog { position: absolute; padding: .2em; width: 300px; overflow: hidden; }
.ui-dialog .ui-dialog-titlebar { padding: .5em 1em .3em; position: relative;  }
.ui-dialog .ui-dialog-title { float: left; margin: .1em 16px .2em 0; } 
.ui-dialog .ui-dialog-titlebar-close { position: absolute; right: .3em; top: 50%; width: 19px; margin: -10px 0 0 0; padding: 1px; height: 18px; }
.ui-dialog .ui-dialog-titlebar-close span { display: block; margin: 1px; }
.ui-dialog .ui-dialog-titlebar-close:hover, .ui-dialog .ui-dialog-titlebar-close:focus { padding: 0; }
.ui-dialog .ui-dialog-content { border: 0; padding: .5em 1em; background: none; overflow: auto; zoom: 1; }
.ui-dialog .ui-dialog-buttonpane { text-align: left; border-width: 1px 0 0 0; background-image: none; margin: .5em 0 0 0; padding: .3em 1em .5em .4em; }
.ui-dialog .ui-dialog-buttonpane button { float: right; margin: .5em .4em .5em 0; cursor: pointer; padding: .2em .6em .3em .6em; line-height: 1.4em; width:auto; overflow:visible; }
.ui-dialog .ui-resizable-se { width: 14px; height: 14px; right: 3px; bottom: 3px; }
.ui-draggable .ui-dialog-titlebar { cursor: move; }
/* Progressbar
----------------------------------*/
.ui-progressbar { height:2em; text-align: left; }
.ui-progressbar .ui-progressbar-value {margin: -1px; height:100%; }/* Resizable
----------------------------------*/
.ui-resizable { position: relative;}
.ui-resizable-handle { position: absolute;font-size: 0.1px;z-index: 99999; display: block;}
.ui-resizable-disabled .ui-resizable-handle, .ui-resizable-autohide .ui-resizable-handle { display: none; }
.ui-resizable-n { cursor: n-resize; height: 7px; width: 100%; top: -5px; left: 0; }
.ui-resizable-s { cursor: s-resize; height: 7px; width: 100%; bottom: -5px; left: 0; }
.ui-resizable-e { cursor: e-resize; width: 7px; right: -5px; top: 0; height: 100%; }
.ui-resizable-w { cursor: w-resize; width: 7px; left: -5px; top: 0; height: 100%; }
.ui-resizable-se { cursor: se-resize; width: 12px; height: 12px; right: 1px; bottom: 1px; }
.ui-resizable-sw { cursor: sw-resize; width: 9px; height: 9px; left: -5px; bottom: -5px; }
.ui-resizable-nw { cursor: nw-resize; width: 9px; height: 9px; left: -5px; top: -5px; }
.ui-resizable-ne { cursor: ne-resize; width: 9px; height: 9px; right: -5px; top: -5px;}/* Slider
----------------------------------*/
.ui-slider { position: relative; text-align: left; }
.ui-slider .ui-slider-handle { position: absolute; z-index: 2; width: 1.2em; height: 1.2em; cursor: default; }
.ui-slider .ui-slider-range { position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; }

.ui-slider-horizontal { height: .8em; }
.ui-slider-horizontal .ui-slider-handle { top: -.3em; margin-left: -.6em; }
.ui-slider-horizontal .ui-slider-range { top: 0; height: 100%; }
.ui-slider-horizontal .ui-slider-range-min { left: 0; }
.ui-slider-horizontal .ui-slider-range-max { right: 0; }

.ui-slider-vertical { width: .8em; height: 100px; }
.ui-slider-vertical .ui-slider-handle { left: -.3em; margin-left: 0; margin-bottom: -.6em; }
.ui-slider-vertical .ui-slider-range { left: 0; width: 100%; }
.ui-slider-vertical .ui-slider-range-min { bottom: 0; }
.ui-slider-vertical .ui-slider-range-max { top: 0; }/* Tabs
----------------------------------*/
.ui-tabs { position: relative; padding: .2em; zoom: 1; } /* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
.ui-tabs .ui-tabs-nav { margin: 0; padding: .2em .2em 0; }
.ui-tabs .ui-tabs-nav li { list-style: none; float: left; position: relative; top: 1px; margin: 0 .2em 1px 0; border-bottom: 0 !important; padding: 0; white-space: nowrap; }
.ui-tabs .ui-tabs-nav li a { float: left; padding: .5em 1em; text-decoration: none; }
.ui-tabs .ui-tabs-nav li.ui-tabs-selected { margin-bottom: 0; padding-bottom: 1px; }
.ui-tabs .ui-tabs-nav li.ui-tabs-selected a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a { cursor: text; }
.ui-tabs .ui-tabs-nav li a, .ui-tabs.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-selected a { cursor: pointer; } /* first selector in group seems obsolete, but required to overcome bug in Opera applying cursor: text overall if defined elsewhere... */
.ui-tabs .ui-tabs-panel { display: block; border-width: 0; padding: 1em 1.4em; background: none; }
.ui-tabs .ui-tabs-hide { display: none !important; }
/*
* jQuery UI CSS Framework
* Copyright (c) 2010 AUTHORS.txt (http://jqueryui.com/about)
* Dual licensed under the MIT (MIT-LICENSE.txt) and GPL (GPL-LICENSE.txt) licenses.
* To view and modify this theme, visit http://jqueryui.com/themeroller/
*/


/* Component containers
----------------------------------*/
.ui-widget { font-family: Verdana,Arial,sans-serif/*{ffDefault}*/; font-size: 1.1em/*{fsDefault}*/; }
.ui-widget .ui-widget { font-size: 1em; }
.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-family: Verdana,Arial,sans-serif/*{ffDefault}*/; font-size: 1em; }
.ui-widget-content { border: 5px solid #000/*{borderColorContent}*/; background: #ffffff/*{bgColorContent}*/ url(images/ui-bg_flat_75_ffffff_40x100.png)/*{bgImgUrlContent}*/ 50%/*{bgContentXPos}*/ 50%/*{bgContentYPos}*/ repeat-x/*{bgContentRepeat}*/; color: #222222/*{fcContent}*/; z-index:9999 !important }
.ui-widget-content a { color: #222222/*{fcContent}*/; }
.ui-widget-header { border: 1px solid #aaaaaa/*{borderColorHeader}*/; background: #cccccc/*{bgColorHeader}*/ url(images/ui-bg_highlight-soft_75_cccccc_1x100.png)/*{bgImgUrlHeader}*/ 50%/*{bgHeaderXPos}*/ 50%/*{bgHeaderYPos}*/ repeat-x/*{bgHeaderRepeat}*/; color: #222222/*{fcHeader}*/; font-weight: bold; }
.ui-widget-header a { color: #222222/*{fcHeader}*/; }

/* Interaction states
----------------------------------*/
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default { border: 1px solid #d3d3d3/*{borderColorDefault}*/; background: #e6e6e6/*{bgColorDefault}*/ url(images/ui-bg_glass_75_e6e6e6_1x400.png)/*{bgImgUrlDefault}*/ 50%/*{bgDefaultXPos}*/ 50%/*{bgDefaultYPos}*/ repeat-x/*{bgDefaultRepeat}*/; font-weight: normal/*{fwDefault}*/; color: #555555/*{fcDefault}*/; }
.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited { color: #555555/*{fcDefault}*/; text-decoration: none; }
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus { border: 1px solid #999999/*{borderColorHover}*/; background: #dadada/*{bgColorHover}*/ url(images/ui-bg_glass_75_dadada_1x400.png)/*{bgImgUrlHover}*/ 50%/*{bgHoverXPos}*/ 50%/*{bgHoverYPos}*/ repeat-x/*{bgHoverRepeat}*/; font-weight: normal/*{fwDefault}*/; color: #212121/*{fcHover}*/; }
.ui-state-hover a, .ui-state-hover a:hover { color: #212121/*{fcHover}*/; text-decoration: none; }
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active { border: 1px solid #aaaaaa/*{borderColorActive}*/; background: #ffffff/*{bgColorActive}*/ url(images/ui-bg_glass_65_ffffff_1x400.png)/*{bgImgUrlActive}*/ 50%/*{bgActiveXPos}*/ 50%/*{bgActiveYPos}*/ repeat-x/*{bgActiveRepeat}*/; font-weight: normal/*{fwDefault}*/; color: #212121/*{fcActive}*/; }
.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited { color: #212121/*{fcActive}*/; text-decoration: none; }
.ui-widget :active { outline: none; }

/* Interaction Cues
----------------------------------*/
.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight  {border: 1px solid #fcefa1/*{borderColorHighlight}*/; background: #fbf9ee/*{bgColorHighlight}*/ url(images/ui-bg_glass_55_fbf9ee_1x400.png)/*{bgImgUrlHighlight}*/ 50%/*{bgHighlightXPos}*/ 50%/*{bgHighlightYPos}*/ repeat-x/*{bgHighlightRepeat}*/; color: #363636/*{fcHighlight}*/; }
.ui-state-highlight a, .ui-widget-content .ui-state-highlight a,.ui-widget-header .ui-state-highlight a { color: #363636/*{fcHighlight}*/; }
.ui-state-error, .ui-widget-content .ui-state-error, .ui-widget-header .ui-state-error {border: 1px solid #cd0a0a/*{borderColorError}*/; background: #fef1ec/*{bgColorError}*/ url(images/ui-bg_glass_95_fef1ec_1x400.png)/*{bgImgUrlError}*/ 50%/*{bgErrorXPos}*/ 50%/*{bgErrorYPos}*/ repeat-x/*{bgErrorRepeat}*/; color: #cd0a0a/*{fcError}*/; }
.ui-state-error a, .ui-widget-content .ui-state-error a, .ui-widget-header .ui-state-error a { color: #cd0a0a/*{fcError}*/; }
.ui-state-error-text, .ui-widget-content .ui-state-error-text, .ui-widget-header .ui-state-error-text { color: #cd0a0a/*{fcError}*/; }
.ui-priority-primary, .ui-widget-content .ui-priority-primary, .ui-widget-header .ui-priority-primary { font-weight: bold; }
.ui-priority-secondary, .ui-widget-content .ui-priority-secondary,  .ui-widget-header .ui-priority-secondary { opacity: .7; filter:Alpha(Opacity=70); font-weight: normal; }
.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled { opacity: .35; filter:Alpha(Opacity=35); background-image: none; }

/* Icons
----------------------------------*/

/* states and images */
.ui-icon { width: 16px; height: 16px; background-image: url(images/ui-icons_222222_256x240.png)/*{iconsContent}*/; }
.ui-widget-content .ui-icon {background-image: url(images/ui-icons_222222_256x240.png)/*{iconsContent}*/; }
.ui-widget-header .ui-icon {background-image: url(images/ui-icons_222222_256x240.png)/*{iconsHeader}*/; }
.ui-state-default .ui-icon { background-image: url(images/ui-icons_888888_256x240.png)/*{iconsDefault}*/; }
.ui-state-hover .ui-icon, .ui-state-focus .ui-icon {background-image: url(images/ui-icons_454545_256x240.png)/*{iconsHover}*/; }
.ui-state-active .ui-icon {background-image: url(images/ui-icons_454545_256x240.png)/*{iconsActive}*/; }
.ui-state-highlight .ui-icon {background-image: url(images/ui-icons_2e83ff_256x240.png)/*{iconsHighlight}*/; }
.ui-state-error .ui-icon, .ui-state-error-text .ui-icon {background-image: url(images/ui-icons_cd0a0a_256x240.png)/*{iconsError}*/; }

/* positioning */
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-off { background-position: -96px -144px; }
.ui-icon-radio-on { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-start { background-position: -80px -160px; }
/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-tl { -moz-border-radius-topleft: 4px/*{cornerRadius}*/; -webkit-border-top-left-radius: 4px/*{cornerRadius}*/; border-top-left-radius: 4px/*{cornerRadius}*/; }
.ui-corner-tr { -moz-border-radius-topright: 4px/*{cornerRadius}*/; -webkit-border-top-right-radius: 4px/*{cornerRadius}*/; border-top-right-radius: 4px/*{cornerRadius}*/; }
.ui-corner-bl { -moz-border-radius-bottomleft: 4px/*{cornerRadius}*/; -webkit-border-bottom-left-radius: 4px/*{cornerRadius}*/; border-bottom-left-radius: 4px/*{cornerRadius}*/; }
.ui-corner-br { -moz-border-radius-bottomright: 4px/*{cornerRadius}*/; -webkit-border-bottom-right-radius: 4px/*{cornerRadius}*/; border-bottom-right-radius: 4px/*{cornerRadius}*/; }
.ui-corner-top { -moz-border-radius-topleft: 4px/*{cornerRadius}*/; -webkit-border-top-left-radius: 4px/*{cornerRadius}*/; border-top-left-radius: 4px/*{cornerRadius}*/; -moz-border-radius-topright: 4px/*{cornerRadius}*/; -webkit-border-top-right-radius: 4px/*{cornerRadius}*/; border-top-right-radius: 4px/*{cornerRadius}*/; }
.ui-corner-bottom { -moz-border-radius-bottomleft: 4px/*{cornerRadius}*/; -webkit-border-bottom-left-radius: 4px/*{cornerRadius}*/; border-bottom-left-radius: 4px/*{cornerRadius}*/; -moz-border-radius-bottomright: 4px/*{cornerRadius}*/; -webkit-border-bottom-right-radius: 4px/*{cornerRadius}*/; border-bottom-right-radius: 4px/*{cornerRadius}*/; }
.ui-corner-right {  -moz-border-radius-topright: 4px/*{cornerRadius}*/; -webkit-border-top-right-radius: 4px/*{cornerRadius}*/; border-top-right-radius: 4px/*{cornerRadius}*/; -moz-border-radius-bottomright: 4px/*{cornerRadius}*/; -webkit-border-bottom-right-radius: 4px/*{cornerRadius}*/; border-bottom-right-radius: 4px/*{cornerRadius}*/; }
.ui-corner-left { -moz-border-radius-topleft: 4px/*{cornerRadius}*/; -webkit-border-top-left-radius: 4px/*{cornerRadius}*/; border-top-left-radius: 4px/*{cornerRadius}*/; -moz-border-radius-bottomleft: 4px/*{cornerRadius}*/; -webkit-border-bottom-left-radius: 4px/*{cornerRadius}*/; border-bottom-left-radius: 4px/*{cornerRadius}*/; }
.ui-corner-all { -moz-border-radius: 10px/*{cornerRadius}*/; -webkit-border-radius: 10px/*{cornerRadius}*/; border-radius: 10px/*{cornerRadius}*/; }

/* Overlays */
.ui-widget-overlay { background: #aaaaaa/*{bgColorOverlay}*/ url(images/ui-bg_flat_0_aaaaaa_40x100.png)/*{bgImgUrlOverlay}*/ 50%/*{bgOverlayXPos}*/ 50%/*{bgOverlayYPos}*/ repeat-x/*{bgOverlayRepeat}*/; opacity: .3;filter:Alpha(Opacity=30)/*{opacityOverlay}*/; }
.ui-widget-shadow { margin: -8px/*{offsetTopShadow}*/ 0 0 -8px/*{offsetLeftShadow}*/; padding: 8px/*{thicknessShadow}*/; background: #aaaaaa/*{bgColorShadow}*/ url(images/ui-bg_flat_0_aaaaaa_40x100.png)/*{bgImgUrlShadow}*/ 50%/*{bgShadowXPos}*/ 50%/*{bgShadowYPos}*/ repeat-x/*{bgShadowRepeat}*/; opacity: .3;filter:Alpha(Opacity=30)/*{opacityShadow}*/; -moz-border-radius: 8px/*{cornerRadiusShadow}*/; -webkit-border-radius: 8px/*{cornerRadiusShadow}*/; border-radius: 8px/*{cornerRadiusShadow}*/; }


/*Popup QuickAdd phuc*/
/*
.ui-dialog-titlebar{
    float: right !important;
    height: 35px !important;
    position: absolute !important;
    right: -3px !important;
    top: -15px !important;
    width: 35px !important;
}
.ui-icon{

-moz-user-select: none;
    background: url("/cua-hang/images/close_btn.png") no-repeat scroll 0 0 transparent !important;
    height: 30px !important;
    width: 30px !important;
}
iframe.ui-widget-content{background: none;}
*/
.ui-dialog
{
	
    left: 19% !important;   
    position: fixed !important;
    top: 20px !important;
}
.ui-dialog-titlebar
{
    background:none!important;
    border:0px !important;}

﻿ .letter .valid_textbox
    {
        background-color: #FFE1F0;
        height: 21px;
        margin-top: 1px;
        width: 79%;
        border: 1px dotted #9b0000;
    }

.letter a.iconemail{ margin:0;}
.letter a.iconemail input{ border:none; margin:0; width:180px; height:19px; color:#999999;}
.letter a.iconbtmail{ background:url(../images/btmail.png) no-repeat 0 0; float:right; height:21px; width:58px; margin:0; cursor:pointer;}
.loader {
    background: url("/Files/Themes/Default/images/loading2.gif") no-repeat scroll center center #FFFFFF;
    display: none;
    height: 207px;
    left: 3px;
    position: absolute;
    top: 39px;
    width: 780px;
    z-index: 2147483647;
}
.tooltip {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #EBEBEB;
    border-radius: 4px 4px 4px 4px;
    box-shadow: 0 1px 2px #333333;
    color: #000000;
    float: left;
    font-size: 8pt;
    max-width: 300px;
    padding: 6px 10px;
    position: absolute;
    text-align: left;
    width: 200px;
    z-index: 100;
    left: 0; top: 22px;
}
.tooltip a:hover{ color:#9b0000;}
.tooltip:after {
    display: block;
    content: "";
    width: 16px;
    height: 14px;
    position: absolute;
    top: -13px;
    left: 20px;
    background: url(../images/tooltip-tip-top.png) 0 0 no-repeat;
}
