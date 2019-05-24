<?php
include_once pathtodir . '/lib/lib.php';
class Content {
	function GetContent($where) {
		include_once pathtodir . '/lib/tbl_content_category.php';
		$cc = new ContentCategory ( );
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_content', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$code = $row ['code'];
			$id = $row ['contents_id'];
			$name = $row ['contents_name'];
			$parent = $row ['doc_categories_parentid'];
			$detail_short = $row ['detail_short'];
			$detail = $row ['contents_content'];
			$image = $row ['contents_image'];
			$sort = $row ['sort'];
			$status = $row ['status'];
			$date_added = $row ['date_added'];
			$last_modified = $row ['last_modified'];
			$useradd = $row ['useradd'];
			$tag = $row ['tag'];
			$keytag = $row ['keytag'];
			$ccresult = $cc->GetCategory ( "categories_id='" . $parent . "'" );
			$arr [] = array ($id, $name, $code, $parent, $detail_short, $detail, $image, $sort, $status, $date_added, $last_modified, $ccresult [0] [0], $ccresult [0] [1], $tag, $keytag, $useradd );
		}
		return $arr;
	}
	
	function GetContentbyCode($code) {
		$kw = new KW_Hook ( );
		include_once pathtodir . '/lib/tbl_content_category.php';
		$cc = new ContentCategory ( );
		$contentcategory = $cc->GetCategory ( "code='" . $code . "' and status=1" );
		$str = "";
		for($i = 0; $i < count ( $contentcategory ); $i ++) {
			if ($i == 0)
				$str .= $contentcategory [$i] [1];
			else
				$str .= "," . $contentcategory [$i] [1];
		}
		$result = $kw->getRecord ( 'tbl_content', "doc_categories_parentid in (" . $str . ") order by contents_id desc" );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$code = $row ['code'];
			$id = $row ['contents_id'];
			$name = $row ['contents_name'];
			$parent = $row ['doc_categories_parentid'];
			$detail_short = $row ['detail_short'];
			$detail = $row ['contents_content'];
			$image = $row ['contents_image'];
			$sort = $row ['sort'];
			$status = $row ['status'];
			$date_added = $row ['date_added'];
			$last_modified = $row ['last_modified'];
			$useradd = $row ['useradd'];
			$tag = $row ['tag'];
			$ccresult = $cc->GetCategory ( "categories_id='" . $parent . "'" );
			$arr [] = array ($id, $name, $code, $parent, $detail_short, $detail, $image, $sort, $status, $date_added, $last_modified, $ccresult [0] [0], $ccresult [0] [1], $tag, $useradd );
		}
		return $arr;
	}
	///so sanh chuoi trong 
	function Comparestringtag($where) {
		$kw = new KW_Hook ( );
		if ($kw->check_str ( $where )) {
			$listtag = $kw->Comparetag ( 'tbl_content', 'keytag', $where );
		
		} else {
			$listtag = $kw->Comparetag ( 'tbl_content', 'tag', $where );
		}
		$rows = mysql_affected_rows ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $listtag );
			$code = $row ['code'];
			$id = $row ['contents_id'];
			$name = $row ['contents_name'];
			$parent = $row ['doc_categories_parentid'];
			$detail_short = $row ['detail_short'];
			$detail = $row ['contents_content'];
			$image = $row ['contents_image'];
			$sort = $row ['sort'];
			$status = $row ['status'];
			$date_added = $row ['date_added'];
			$last_modified = $row ['last_modified'];
			$useradd = $row ['useradd'];
			$tag = $row ['tag'];
			$arr [] = array ($id, $name, $code, $parent, $detail_short, $detail, $image, $sort, $status, $date_added, $last_modified, $tag, $useradd );
		}
		return $arr;
	}
	//bang so sanh cac tag voi nhau bo id hien hanh
	function Comparetageijectid($table, $stringtag, $where = "", $id) //thien
{
		if ($table == "")
			return false;
		if ($where == "")
			$where = "1=1";
		$kw = new KW_Hook ( );
		//var_dump($where);exit();
		$str = trim ( $where );
		$result = $kw->getRecord ( $table, " $stringtag LIKE '%$str%' and contents_id != '$id'" );
		//$result = mysql_query ( "select * from $table a where $stringtag LIKE '%$str%' and NOT EXISTS (SELECT * FROM `tbl_content` b WHERE contents_id = '$id' and a.contents_id=b.contents_id )", $link ) or die ( mysql_error () );
		return $result;
	}
	
	function Comparestringtag1($where, $id) {
		$kw = new KW_Hook ( );
		if ($kw->check_str ( $where )) {
			//$listtag=$kw->Comparetag('tbl_content','keytag',$where);
			$listtag = $this->Comparetageijectid ( 'tbl_content', 'keytag', $where, $id );
		} else {
			//$listtag=$kw->Comparetag('tbl_content','tag',$where);	
			$listtag = $this->Comparetageijectid ( 'tbl_content', 'tag', $where, $id );
		}
		$rows = mysql_affected_rows ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $listtag );
			$code = $row ['code'];
			$id = $row ['contents_id'];
			$name = $row ['contents_name'];
			$parent = $row ['doc_categories_parentid'];
			$detail_short = $row ['detail_short'];
			$detail = $row ['contents_content'];
			$image = $row ['contents_image'];
			$sort = $row ['sort'];
			$status = $row ['status'];
			$date_added = $row ['date_added'];
			$last_modified = $row ['last_modified'];
			$useradd = $row ['useradd'];
			$tag = $row ['tag'];
			$arr [] = array ($id, $name, $code, $parent, $detail_short, $detail, $image, $sort, $status, $date_added, $last_modified, $tag, $useradd );
		}
		return $arr;
	}
	function count($where) {
		$kw = new KW_Hook ( );
		$count = $kw->CountRecord ( 'tbl_content', $where );
		return $count;
	}
	function DelContent($id) {
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( 'update tbl_content set status=0 where contents_id="' . $id . '"' );
		return $result;
	}
	function DEL($id) {
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( 'delete from tbl_content where contents_id="' . $id . '"' );
		return $result;
	}
	function InsertContent($ContentName, $Contentinfor, $contentshort, $cate, $Content_image, $sort, $tag, $keytag, $username) {
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $Content_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$str = "insert into  tbl_content(contents_name,contents_content,detail_short,doc_categories_parentid,date_added,last_modified,status,sort,tag,keytag,useradd)
			 values(N'" . $ContentName . "',N'" . $Contentinfor . "',N'" . $contentshort . "',N'" . $cate . "','" . mktime () . "','" . mktime () . "',1,N'" . $sort . "',N'" . $tag . "',N'" . $keytag . "','" . $username . "')";
			$result = $kw->AccessNoneReturn ( $str );
			$name = str_replace ( ' ', '-', $Content_image ['name'] );
			if ($result && $name != '') {
				if (! is_dir ( pathtodir . "/content" )) {
					mkdir ( pathtodir . "/content" );
					chmod ( pathtodir . "/content", 777 );
				}
				$id = mysql_insert_id ();
				$name = $id . "_" . $name;
				$result = $kw->makeUpload ( $Content_image, pathtodir . "/content/" . $name );
				if ($result) {
					$result = $this->UpdateCategoryImage ( $name, $id );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
	function UpdateContent($ContentName, $Contentinfor, $contentshort, $cate, $Content_image, $sort, $tag, $keytag, $username, $id) {
		//echo "in  function update";exit();
		//$ContentName;
		//$Contentinfor, $contentshort, $cate, $Content_image, $sort, $tag, $keytag, $username, $id
		$kw = new KW_Hook ( ); 
		$r = $kw->checkUpload ( $Content_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$str = "update tbl_content set contents_name=N'" . $ContentName . "',contents_content=N'" . $Contentinfor . "',detail_short=N'" . $contentshort . "',doc_categories_parentid=N'" . $cate . "',last_modified='" . mktime () . "',status=1,sort='" . $sort . "',tag= N'" . $tag . "',keytag= N'" . $keytag . "',useradd='" . $username . "' where contents_id='{$id}'";
			//echo $str;exit();
			$result = $kw->AccessNoneReturn ( $str );
			$name = str_replace ( ' ', '-', $Content_image ['name'] );
			if ($result && $name != '') {
				if (! is_dir ( pathtodir . "/content" )) {
					mkdir ( pathtodir . "/content" );
					chmod ( pathtodir . "/content", 777 );
				}
				//$id = mysql_insert_id ();
				 $name = $id . "_" . $name; 
				$result = $kw->makeUpload ( $Content_image, pathtodir . "/content/" . $name );
				if ($result) {
					$result = $this->UpdateCategoryImage ( $name, $id );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
	function UpdateCategory($partnerName, $partnerinfo, $partnerCate, $partner_image, $sort, $tag, $keytag, $partner_id, $username, $code) {
		$str = "update tbl_content set categories_name=N'" . $partnerName . "',parent=N'" . $partnerCate . "',sort=N'" . $sort . "',tag=N'" . $tag . "',keytag=N'" . $keytag . "',status=1,last_modified='" . mktime () . "',doc_categories_desc=N'" . $partnerinfo . "',useradd='" . $username . "',code=N'{$code}' where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $partner_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$result = $kw->AccessNoneReturn ( $str );
			if ($result && $partner_image ['size'] > 0) {
				$selectpartner = $kw->getRecord ( 'tbl_content_category', "categories_id='" . $partner_id . "'" );
				$image = $selectpartner [0] [2];
				if (file_exists ( pathtodir . "/content/" . $image )) {
					unlink ( pathtodir . "/content/" . $image );
				}
				$name = $partner_id . "_" . str_replace ( ' ', '-', $partner_image ['name'] );
				$result = $kw->makeUpload ( $partner_image, pathtodir . "/contentcategory/" . $name );
				if ($result) {
					$result = $this->UpdateCategoryImage ( $name, $partner_id );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		}
		return $result;
	}
	function UpdateCategoryImage($partner_image, $partner_id) {
		$str = "update   tbl_content set contents_image='" . $partner_image . "' where contents_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>