<?php
class Media {
	function GetContent($where) {
		include_once 'tbl_mediacategory.php';
		$mediacategoryclass = new MediaCategory ( );
		$kw = new KW_Hook ( );
		$media = $kw->getRecord ( 'tbl_media', $where );
		$arr = array ();
		$rows = mysql_affected_rows ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $media );
			$mediacategory = $mediacategoryclass->GetCategory ( "categories_id='" . $row ['doc_categories_parentid'] . "'" );
			$arr [] = array ($row ['contents_id'], $row ['contents_name'], $row ['detail_short'], $row ['contents_image'], $row ['useradd'], $row ['date_added'], $row ['last_modified'], $mediacategory [0] [2], $row ['doc_categories_parentid'] );
			///$arr[]=array($row['contents_id']0,$row['contents_name']1,$row['detail_short']2,$row['contents_image']3,$row['useradd']4,$row['date_added']5,$row['last_modified']6,$mediacategory[0][2]7,$row['doc_categories_parentid8']);
		}
		return $arr;
	}
	function GetContentByCode($where) {
		include_once 'tbl_mediacategory.php';
		$mediacategoryclass = new MediaCategory ( );
		$contentcategory = $mediacategoryclass->GetCategory ( "code='" . $where . "'" );
		$kw = new KW_Hook ( );
		for($i = 0; $i < count ( $contentcategory ); $i ++) {
			if ($i == 0)
				$str .= $contentcategory [$i] [0];
			else
				$str .= "," . $contentcategory [$i] [0];
		}
		$media = $this->GetContent ( " doc_categories_parentid in ( " . $str . " ) order by contents_id" );
		return $media;
	}
	function DEL($id) {
		$result = $this->GetContent ( "contents_id='" . $id . "'" );
		if (count ( $result ) > 0) {
			$media = $result [0] [3];
			if (file_exists ( pathtodir . "media/" . $media ) && $media != "") {
				unlink ( pathtodir . "media/" . $media );
			}
			$str = "delete from tbl_media where contents_id='" . $id . "'";
			$kw = new KW_Hook ( );
			$kw->AccessNoneReturn ( $str );
		}
	}
	function UpdateMediaImage($name, $id) {
		if ($name != "")
			$i1 = "contents_image='" . $name . "' ";
		$str = "update  tbl_media set {$i1} where contents_id='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function InsertContent($name, $txtshortcontent, $category, $image, $sort, $username, $height, $width, $loaifile) {
		$err = array ();
		$kw = new KW_Hook ( );
		$str = $kw->checkUpload ( $image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($str == "") {
			if (! is_dir ( pathtodir . "/media" )) {
				mkdir ( pathtodir . "/media" );
				chmod ( pathtodir . "/media", 777 );
			}
			$str = "insert into tbl_media(contents_name,detail_short,doc_categories_parentid,sort,useradd,height,width,date_added,last_modified,status)
		 values(N'" . $name . "',N'" . $txtshortcontent . "',N'" . $category . "',N'" . $sort . "',N'" . $username . "',N'" . $height . "',N'" . $width . "',N'" . mktime () . "',N'" . mktime () . "',N'" . $loaifile . "')";
			$result = $kw->AccessNoneReturn ( $str );
			$id = mysql_insert_id ();
			$name = $id . "_" . str_replace ( ' ', '-', $image ['name'] );
			$result = $kw->makeUpload ( $image, pathtodir . "/media/" . $name );
			if ($result) {
				$result = $this->UpdateMediaImage ( $name, $id );
				return $result;
			} else {
				return FALSE;
			}
		} else
			$err [] = $str;
	}
}
?>