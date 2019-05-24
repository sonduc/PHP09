<?php
class KW_Hook {
	function GetCompanyInfor() {
		$result = $this->getRecord ( "tbl_company", "1=1" );
		return mysql_fetch_array ( $result );
	}
	function Redirect($url) {
		if (! headers_sent ()) {
			header ( "location:" . $url );
		} else {
			echo "<script type=\"text/javascript\">window.location.href='" . $url . "'</script>";
		}
	}
	function GetFileNaneFromDir($pathtodir) {
		// open the directory  
		$dir = opendir ( $pathtodir );
		$arr = array ();
		$kw = new KW_Hook ( );
		// loop through it, looking for any/all JPG files:
		while ( false !== ($fname = readdir ( $dir )) ) {
			// parse path for the extension
			$ext = $kw->getFileExtention ( $fname );
			$arr [] = array ($fname, $ext );
			// continue only if this is a JPEG image    
		}
		// close the directory
		closedir ( $dir );
		return $arr;
	}
	function GetParamater($str, $int) {
		$str = trim ( $str );
		$arr = split ( '-', $str );
		$total = count ( $arr );
		$i = $total - $int;
		return $arr [$i];
	}
	function SubString($str, $int) {
		$str = trim ( $str );
		$arr = split ( ' ', $str );
		
		if (count ( $arr ) <= $int)
			return $str;
		else {
			$str = "";
			for($i = 0; $i <= $int; $i ++) {
				if ($i == $int)
					$str .= $arr [$i];
				else
					$str .= $arr [$i] . ' ';
			}
			return $str;
		}
	}
	function checkUpload($f, $ext = "", $maxsize = 0, $req = 0) {
		$fname = strtolower ( basename ( $f ['name'] ) );
		$fsize = $f ["size"];
		$fext = $this->getFileExtention ( $fname );
		if ($fsize == 0) {
			if ($req != 0)
				return "Bạn chưa chọn file !";
			return "";
		} else {
			if ($ext != "")
				if (strpos ( $ext, $fext ) === false)
					return "Tập tin không đúng định dạng : $fname";
			if ($maxsize > 0)
				if ($fsize > $maxsize)
					return "Kích thước file không đúng " . $maxsize . " byte";
		}
		return "";
	}
	 
	function makeUpload($f, $newfile) {
		if (move_uploaded_file ( $f ["tmp_name"], $newfile ))
			return $newfile;
		return false;
	}
	function getFileExtention($filename) {
		return strrchr ( $filename, "." );
	}
	function createPage($total, $link, $nitem, $itemcurrent, $step = 10) {
		if ($total < 1) {
			return false;
		}
		$ret = "";
		$pages = $this->countPages ( $total, $nitem );
		if ($itemcurrent > 0)
			$ret .= '<span class="previous-off"><a title="Trang đầu" href="' . str_replace ( '@x', '0', $link ) . '" class="lslink"><img src="' . pathtoweb . 'images/BACK_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a> </span>';
		if ($itemcurrent > 1)
			$ret .= '<a title="Trang trước" href="' . str_replace ( '@x', ($itemcurrent - 1), $link ) . '" class="lslink">[&lt;]</a> ';
		$from = ($itemcurrent - $step > 0 ? $itemcurrent - $step : 0);
		$to = ($itemcurrent + $step < $pages ? $itemcurrent + $step : $pages);
		for($i = $from; $i < $to; $i ++) {
			if ($i != $itemcurrent)
				$ret .= '<a href="' . str_replace ( '@x', $i, $link ) . '" class="lslink">' . ($i + 1) . '</a> ';
			else
				$ret .= '<span class="active">' . ($i + 1) . '</span> ';
		}
		if (($itemcurrent < $pages - 2) && ($pages > 1))
			$ret .= '<span class="previousPage"><a class="next" title="Trang tiếp" href="' . str_replace ( '@x', ($itemcurrent + 1), $link ) . '"><img src="' . pathtoweb . 'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a> </span>';
		if ($itemcurrent < $pages - 1)
			$ret .= '<span class="nextPage"><a title="Trang cuối" href="' . str_replace ( '@x', ($pages - 1), $link ) . '"><img src="' . pathtoweb . 'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a></span>';
		return $ret;
	}
	function createPageweb($total, $link, $nitem, $itemcurrent, $step = 10, $vt) {
		
		$arrlink = split ( '-', $link );
		$int = count ( $arrlink ) - $vt;
		$arrlink [$int] = "@x";
		$link = "";
		for($i = 0; $i < count ( $arrlink ); $i ++) {
			if ($i != 0)
				$link = $link . "-" . $arrlink [$i];
			else
				$link = $arrlink [$i];
		}
		if ($total < 1) {
			return false;
		}
		$ret = "";
		$pages = $this->countPages ( $total, $nitem );
		//if ($itemcurrent>0) $ret.='<span class="previous-off"><a title="Trang đầu" href="'.str_replace('@x','0', $link).'" class="lslink"><img src="'.pathtoweb.'images/BACK_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a> </span>';
		//if ($itemcurrent>1) $ret.='<a title="Trang trước" href="'.str_replace('@x',($itemcurrent-1), $link).'" class="lslink">[&lt;]</a> ';
		$from = ($itemcurrent - $step > 0 ? $itemcurrent - $step : 0);
		$to = ($itemcurrent + $step < $pages ? $itemcurrent + $step : $pages);
		for($i = $from; $i < $to; $i ++) {
			if ($i != $itemcurrent)
				$ret .= '<a href="' . str_replace ( '@x', $i, $link ) . '" class="lslink">' . ($i + 1) . '</a> ';
			else
				$ret .= '<a class="active" style="color:#f90">' . ($i + 1) . '</a> ';
		}
		//if (($itemcurrent<$pages-2) && ($pages>1)) $ret.='<span class="previousPage"><a class="next" title="Trang tiếp" href="'.str_replace('@x',($itemcurrent+1), $link).'"><img src="'.pathtoweb.'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a> </span>';
		//if ($itemcurrent<$pages-1) $ret.='<span class="nextPage"><a title="Trang cuối" href="'.str_replace('@x',($pages-1), $link).'"><img src="'.pathtoweb.'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a></span>'; 
		return $ret;
	}
	function countPages($total, $n) {
		if ($total % $n == 0)
			return ( int ) ($total / $n);
		return ( int ) ($total / $n) + 1;
	}
	function getArrayCategory($table, $catid = "", $split = "==") { 
		//
		$link = $this->Connect ();
		$hide = "status=0";
		if (isset ( $_SESSION ['log'] ))
			$hide = "1=1";
		$ret = array ();
		if ($catid == "")
			$catid = 0;
		$str = "select * from $table where $hide and parent=$catid";
		$result = mysql_query ( $str, $link ) or die ( mysql_error () );
		while ( $row = mysql_fetch_array ( $result ) ) {
			$ret [] = array ($row ['categories_id'], ($catid == 0 ? "" : $split) . $row ['categories_name'] );
			$getsub = $this->getArrayCategory ( $table, $row ['categories_id'], $split . $split );
			foreach ( $getsub as $sub )
				$ret [] = array ($sub [0], $sub [1] );
		}
		return $ret;
		//
	}
	function comboCategory($name, $arrSource, $class, $index, $all) {
		
		$name = $name != '' ? $name : 'cmbParent';
		if (! $arrSource) {
			return false;
		}
		$out = '';
		$out .= '<select size="1" name="' . $name . '" class="' . $class . '">';
		$out .= $all == 1 ? '<option value="0">[Không chọn]</option>' : '';
		$cats = $arrSource;
		foreach ( $cats as $cat ) {
			$selected = $cat [0] == $index ? 'selected' : '';
			$out .= '<option value="' . $cat [0] . '" ' . $selected . '>' . $cat [1] . '</option>';
		}
		$out .= '</select>';
		return $out;
		
	}
	function checkemail($email) 
	{  
		if (! eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email ))
			return false; 
		return true;
	
	}
	function Connect() {
		$link = @mysql_connect ( _databaseserver, _databaseuser, _databasepassword );
		mysql_select_db ( _databasename, $link );
		mysql_query ( "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $link );
		mysql_query ( "SET character_set_results=utf8", $link );
		return $link;
	}
	function GetListNews($where = "1=1", $limit = "1000", $status = "0") {
		global $link;
		$ret = array ();
		$str = "select * from tbl_content where status=$status and $where order by date_added desc limit $limit";
		$result = mysql_query ( $str, $link ) or die ( mysql_error () );
		while ( ($row = mysql_fetch_array ( $result )) )
			$ret [] = $row;
		return $ret;
	} 
	function killInjection($str) {
		$bad = array ("'", "\\", "=", ":" ,",","/",";");
		$good=str_replace($bad,"",$str);				
		return $good;
	}
	function GetNewsCategoryInfo($id, $status = 0) {
		
		global $link;
		$id = killInjection ( $id );
		if ($id == "")
			return false;
		$str = "select * from tbl_content_category where status=$status and categories_id=$id limit 1";
		$result = mysql_query ( $str, $link );
		return mysql_fetch_array ( $result );
	}
	function CountRecord($table, $where = "") {
		$link = $this->Connect ();
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";	 
		$result = mysql_query ( "select count(*) as cnt from $table where $where", $link );
		$row = @mysql_fetch_array ( $result );
		return $row ['cnt'];
	}
	function count_page($total, $n) {
		if ($total % $n == 0)
			return ( int ) ($total / $n);
		return ( int ) ($total / $n) + 1;
	}
	function GetNewsInfo($id, $status = 0) {
		
		$link = $this->Connect ();
		$id = killInjection ( $id );
		if ($id == "")
			return false;
		$str = "select * from tbl_content where status=$status and contents_id=$id limit 1";
		$result = mysql_query ( $str, $link );
		return mysql_fetch_array ( $result );
	}
	function getRecord($table, $where = "") {
		 
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";
		$link = $this->Connect (); 
		$result = mysql_query ( "select * from $table where $where", $link ) or die ( mysql_error () ); 
		return $result;
	}
	function AccessNoneReturn($str) {
		$link = $this->Connect ();
		$result = mysql_query ( $str, $link ) or die ( mysql_error () );
		return $result;   
	}
	function sendmail($from, $to, $subject, $body) {
		return $this->mail_smtp ( $from, $to, $subject, $body, 1 );
	}
	function ReplaceUnicode($str) {
		$marTViet = array ("à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ", "ì", "í", "ị", "ỉ", "ĩ", "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ", "ờ", "ớ", "ợ", "ở", "ỡ", "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ", "ỳ", "ý", "ỵ", "ỷ", "ỹ", "đ", "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă", "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ", "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ", "Ì", "Í", "Ị", "Ỉ", "Ĩ", "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ", "Ờ", "Ớ", "Ợ", "Ở", "Ỡ", "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ", "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ", "Đ" );
		$marKoDau = array ("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "i", "i", "i", "i", "i", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "y", "y", "y", "y", "y", "d", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "I", "I", "I", "I", "I", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "Y", "Y", "Y", "Y", "Y", "D" );
		return str_replace ( $marTViet, $marKoDau, $str ); 
	}
	function mail_smtp($from, $to, $subject, $body, $html = 0, $namefrom = 'Sieu thi van phong pham - Flexoffice', $nameto = "Bui Tan Dat") {
		//error_reporting(E_ALL);
		//error_reporting(E_STRICT);
		date_default_timezone_set ( 'Asia/Ho_Chi_Minh' );
		require_once ('class.phpmailer.php');
		include ("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
		$mail = new PHPMailer ( );
		$body = eregi_replace ( "[\]", '', $body );
		$mail->IsSMTP (); // telling the class to use SMTP
		$mail->Host = "mail.flexoffice.com.vn"; // SMTP server
		$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
		// 1 = errors and messages
		// 2 = messages only
		$mail->SMTPAuth = true; // enable SMTP authentication
		//$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host = "mail.flexoffice.com.vn"; // sets GMAIL as the SMTP server
		$mail->Port = 25; // set the SMTP port for the GMAIL server
		$mail->Username = "dat.bt@flexoffice.com.vn"; // GMAIL username
		$mail->Password = "!@#buitandat"; // GMAIL password		
		$mail->SetFrom ( $from, $namefrom );
		//$mail->AddReplyTo("name@yourdomain.com","dat2");
		$mail->Subject = $subject;
		$mail->AltBody = "Vui lòng chấp nhận xem dạng HTML , để có thể xem được email này"; // optional, comment out and test		
		$mail->MsgHTML ( $body );
		$mail->AddAddress ( $to, $nameto );
		//$mail->AddAttachment("images/phpmailer.gif");      // attachment
		//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment		
		if (! $mail->Send ()) {
			return FALSE;
		} else {
			return TRUE;
		} 
	}
	function buildlink($str) {
		$str = $this->ReplaceUnicode ( $str );
		$str = strtolower ( $str );
		$str = str_replace ( ' ', '-', $str );
		$str = str_replace ( '?', '', $str );
		$str = str_replace ( '!', '', $str );
		$str = str_replace ( '"', '', $str );
		$str = str_replace ( "'", '', $str );
		$str = str_replace ( "/", '-', $str );
		$str = str_replace ( "(", '-', $str );
		$str = str_replace ( ")", '-', $str );
		$str = str_replace ( ":", '-', $str );
		return $str;
	}
	function createThumbs($Images, $pathToThumbs, $thumbWidth) {
	
		//  // open the directory  
		//  $dir = opendir( $pathToImages );
		//  // loop through it, looking for any/all JPG files:
		//  while (false !== ($fname = readdir( $dir ))) {
		//    // parse path for the extension
		//    $info = pathinfo($pathToImages . $fname);
		//    // continue only if this is a JPEG image
		//    if ( strtolower($info['extension']) == 'jpg' )     {
		//      echo "Creating thumbnail for {$fname} <br />";
		//      // load image and get image size
		$kw = new KW_Hook ( );
		$ext = $kw->getFileExtention ( $Images );
		$ext = strtolower ( $ext );
		switch ($ext) {
			case '.jpg' :
				$img = imagecreatefromjpeg ( $Images );
				$width = imagesx ( $img );
				$height = imagesy ( $img );
				// calculate thumbnail size
				$new_width = $thumbWidth;
				$new_height = floor ( $height * ($thumbWidth / $width) );
				// create a new temporary image
				$tmp_img = imagecreatetruecolor ( $new_width, $new_height );
				// copy and resize old image into new image 
				imagecopyresized ( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
				// save thumbnail into a file
				imagejpeg ( $tmp_img, $pathToThumbs );
				break;
			case '.png' :
				$img = imagecreatefrompng ( $Images );
				$width = imagesx ( $img );
				$height = imagesy ( $img );
				// calculate thumbnail size
				$new_width = $thumbWidth;
				$new_height = floor ( $height * ($thumbWidth / $width) );
				// create a new temporary image
				$tmp_img = imagecreatetruecolor ( $new_width, $new_height );
				// copy and resize old image into new image 
				imagecopyresized ( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
				// save thumbnail into a file
				imagepng ( $tmp_img, $pathToThumbs );
				break;
			case '.gif' :
				$img = imagecreatefromgif ( $Images );
				$width = imagesx ( $img );
				$height = imagesy ( $img );
				// calculate thumbnail size
				$new_width = $thumbWidth;
				$new_height = floor ( $height * ($thumbWidth / $width) );
				// create a new temporary image
				$tmp_img = imagecreatetruecolor ( $new_width, $new_height );
				// copy and resize old image into new image 
				imagecopyresized ( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
				// save thumbnail into a file
				imagegif ( $tmp_img, $pathToThumbs );
				break;
		}
		//    }
	//  }
	//  // close the directory
	//  closedir( $dir );
	}
	// call createThumb function and pass to it as parameters the path 
	// to the directory that contains images, the path to the directory
	// in which thumbnails will be placed and the thumbnail's width. 
	// We are assuming that the path will be a relative path working 
	// both in the filesystem, and through the web for linksư
	

	function check_str($value) //thien 
{
		for($i = 0; $i < strlen ( $value ); $i ++) {
			$ord = ord ( $value {$i} );
			if (($ord == 32) || ($ord == 35) || ($ord == 37) || ($ord == 38) || ($ord == 39) || ($ord >= 48 and $ord <= 57) || ($ord >= 65 and $ord <= 90) || ($ord >= 97 and $ord <= 122)) //0-9 a-z A - Z 
{
			} else {
				return FALSE;
			}
		}
		return TRUE;
	}
	
	//get link bang phuong thuc $_GET
	function GetParamater_get($str, $int) {
		$str = trim ( $str );
		$arr = split ( '&', $str );
		
		$total = count ( $arr );
		$i = $total - $int;
		return $arr [$i];
	}
	function Getnamefromlink($str, $int) //thien
{
		$str = trim ( $str );
		$arr = split ( '-', $str );
		for($i = 0; $i < count ( $arr ) - 2; $i ++) {
			$chuoi = $chuoi . " " . $arr [$i];
		}
		return $chuoi;
	}
	
	function createPagewebdonhang($total, $link, $nitem, $itemcurrent, $step = 3, $vt) {
		$arrlink = split ( '&', $link );
		$int = count ( $arrlink ) - $vt;
		$arrlink [$int] = "@x";
		$link = "";
		for($i = 0; $i < count ( $arrlink ); $i ++) {
			if ($i != 0)
				$link = $link . "&" . $arrlink [$i];
			else
				$link = $arrlink [$i];
		}
		if ($total < 1) {
			return false;
		}
		$ret = "";
		$pages = $this->countPages ( $total, $nitem );
		$from = ($itemcurrent - $step > 0 ? $itemcurrent - $step : 0);
		//echo "Tu vi tri".$from;
		$to = ($itemcurrent + $step < $pages ? $itemcurrent + $step : $pages);
		//echo "Đen vi tri".$to;
		for($i = $from; $i < $to; $i ++) {
			if ($i != $itemcurrent)
				$ret .= '<a href="' . str_replace ( '@x', $i, $link ) . '" class="lslink">' . ($i + 1) . '</a> ';
			else
				$ret .= '<a class="active" style="color:#f90">' . ($i + 1) . '</a> ';
		}
		//if (($itemcurrent<$pages-2) && ($pages>1)) $ret.='<span class="previousPage"><a class="next" title="Trang tiếp" href="'.str_replace('@x',($itemcurrent+1), $link).'"><img src="'.pathtoweb.'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a> </span>';
		//if ($itemcurrent<$pages-1) $ret.='<span class="nextPage"><a title="Trang cuối" href="'.str_replace('@x',($pages-1), $link).'"><img src="'.pathtoweb.'images/FORWARD_ARROW._V199023537_.gif" height="13" alt="next page" width="11" border="0"></a></span>';
		

		return $ret;
	}
	//tao Catagories
	function CreateCategoies($table) {
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";
		$link = $this->Connect ();
		$resutl = mysql_query ( "select DISTINCT(categories_id)  from  $table order by products_id desc limit 20", $link ) or die ( mysql_error () );
		return $resutl;
	}
	////Loc san pham tru ma san pham da chon
	function CloseConect() {
		return mysql_close ( $link );
	}
	
	function CreateCategoieshienthi($table, $where) {
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";
		$link = $this->Connect ();
		$resutl = mysql_query ( "select * from  $table where categories_id = $where limit 1", $link ) or die ( mysql_error () );
		return $resutl;
	}
	//bang so sanh cac tag voi nhau khong bo id hien hanh
	function Comparetag($table, $stringtag, $where = "") {
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";
		$link = $this->Connect ();
		//var_dump($where);exit();
		$str = trim ( $where );
		$result = mysql_query ( "select * from $table where $stringtag LIKE '%$str%'", $link ) or die ( mysql_error () );
		return $result;
	}
	
	function buildlinktag($str) {
		$str = $this->ReplaceUnicode ( $str );
		$str = strtolower ( $str );
		$str = str_replace ( ' ', '-', $str );
		$str = str_replace ( '?', '', $str );
		$str = str_replace ( '!', '', $str );
		$str = str_replace ( '"', '', $str );
		$str = str_replace ( "'", '', $str );
		$str = str_replace ( "/", '-', $str );
		$str = str_replace ( "(", '-', $str );
		$str = str_replace ( ")", '-', $str );
		return $str;
	}
	function kiemtraloikhinhap($bbcode_str) {
		return str_replace ( array ('<', '>' ), array ('', '' ), $bbcode_str );
	
	}
	function uploadfile($name,$tmp_name,$uploadFilesTo)
	  {
	  	//$name,$tmp_name,$uploadFilesTo
	  	
	  	//$uploadFilesTo = 'D:/thu/';
	    $name = ereg_replace('[^A-Za-z0-9.]', '-', $name);
	    // Disallowed file extensions
	    $naughtyFileExtension = array("php", "php3", "asp", "inc", "txt", "mov", "js", "exe", "jsp", "map", "obj", " ", "", "html", "mp3", "mpu","cur", "ani");
	    // Returns an array that includes the extension
	    $fileInfo = pathinfo($name);
	    // Check extension
	    if (!in_array($fileInfo['extension'], $naughtyFileExtension))
	    {
	      // Get filename
	      $name = $this->getNonExistingFilename($uploadFilesTo, $name);
	      // Upload the file
	      if (move_uploaded_file($tmp_name, $uploadFilesTo.'/'.$name))
	      {
	          // Show success message
	          echo '<center><p>File uploaded to /'.$uploadFilesTo.'/'.$name.'</p></center>';
	      }
	      else
	      {
	          // Show failure message
	          echo '<center><p>File failed to upload to /'.$name.'</p></center>';
	      }
	    }
	    else
	    {
	        // Bad File type
	        echo '<center><p>The file uses an extension we don\'t allow.</p></center>';
	    }
	  }
	  // Functions do not need to be inline with the rest of the code
	  function getNonExistingFilename($uploadFilesTo, $name)
	  {
	      if (!file_exists($uploadFilesTo . '/' . $name))
	          return $name; 
	      return getNonExistingFilename($uploadFilesTo, rand(100, 200) . '_' . $name); 
	   }
	
}
?>