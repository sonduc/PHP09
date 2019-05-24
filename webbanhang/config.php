<?php define("pathtodir",$_SERVER['DOCUMENT_ROOT']."/");
define('pathtoweb','http://'.$_SERVER['HTTP_HOST']."/");
define('pathtomediacontent',pathtodir.'/media');
define('pathtomediacontentforweb',pathtoweb.'/media');
define("pathtoadmindir",pathtodir."user/");
define('pathtoadminweb',pathtoweb."user/");
define('EXT',".php");
define('_databaseuser','babyshop_web');
define('_databasepassword','XK!q+)E1itbQ');
define('_databasename','babyshop_web');
define('_databaseserver','localhost');
define('adminemail',"tambao@live.com");
include_once 'lib/lib.php';
$kw=new KW_Hook();
?>