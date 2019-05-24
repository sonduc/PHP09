<?php
include_once pathtodir . '/lib/lib.php';
class ContentCategory {
	function getArrayCategory($split = "==", $id) {
		$kw = new KW_Hook ( );
		$ret = array ();
		$where = "status=1 and parent=" . $id;
		$result = $kw->getRecord ( 'tbl_content_category', $where );
		while ( $row = mysql_fetch_array ( $result ) ) {
			$ret [] = array ($row ['categories_id'], $split . $row ['categories_name'] );
			$getsub = $kw->getRecord ( 'tbl_content_category', "status=1 and parent=" . $row ['categories_id'] );
			$rows = mysql_affected_rows ();
			for($j = 0; $j < $rows; $j ++) {
				$sub = mysql_fetch_array ( $getsub );
				$ret [] = array ($sub ["categories_id"], $split . $split . $sub ["categories_name"] );
			}
		}
		return $ret;
	}
	function comboCategory($name, $arrSource, $class, $index, $all) {		 
		$name = $name != '' ? $name : 'cmbParent';
		if (! $arrSource) {
			return false;
		}
		$out = '';
		$out .= '<select size="1" name="' . $name . '" class="' . $class . '" id="' .$class. '">';
		$out .= $all == 1 ? '<option value="0">[Không chọn]</option>' : '';
		$cats = $arrSource;
		foreach ( $cats as $cat ) {
			$selected = $cat [0] == $index ? 'selected' : '';
			$out .= '<option value="' . $cat [0] . '" ' . $selected . '>' . $cat [1] . '</option>';
		}
		$out .= '</select>';
		return $out;
	}
	function GetCategory($where) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_content_category', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$name = $row ['categories_name'];
			$id = $row ['categories_id'];
			$parent = $kw->getRecord ( 'tbl_content_category', "categories_id=" . $row ['parent'] );
			$rowparent = mysql_fetch_array ( $parent );
			$code = $row ['code'];
			$detail_short = $row ['doc_categories_desc'];
			$image = $row ['image'];
			$sort = $row ['sort'];
			$status = $row ['status'];
			$date_added = $row ['date_added'];
			$last_modified = $row ['last_modified'];
			$user = $row ['useradd'];
			$arr [] = array ($name, $id, $rowparent ['categories_id'], $detail_short, $date_added, $last_modified, $status, $sort, $image, $code, $user, $rowparent ['categories_name'] );
			//$arr[]=array($name0,$id1,$parent2,$detail_short3 ,$date_added4,$last_modified5,$status6,$sort7,$image8,$code9);		
		}
		return $arr;
	}
	function CountCategory($where) {
		$kw = new KW_Hook ( );
		return $kw->CountRecord ( 'tbl_content_category', $where );
	}
	function DEL($id) {
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( 'update tbl_content_category set status=0 where categories_id="' . $id . '"' );
		return $result;
	}
	function InsertCategory($CategoryName, $Categoryinfo, $cate, $Category_image, $sort, $username, $code) {
		
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $Category_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$str = "insert into  tbl_content_category(categories_name,image,parent,sort,status,date_added,last_modified,	doc_categories_desc,useradd,code) values(N'" . $CategoryName . "',N'" . $Category_image . "',N'" . $cate . "',N'" . $sort . "','1','" . mktime () . "','" . mktime () . "',N'" . $Categoryinfo . "','" . $username . "','" . $code . "')";
			$result = $kw->AccessNoneReturn ( $str );
			$fsize = $Category_image ["size"];
			if ($result && $fsize > 0) {
				
				if (! is_dir ( pathtodir . "/contentcategory" )) {
					mkdir ( pathtodir . "/contentcategory" );
					chmod ( pathtodir . "/contentcategory", 777 );
				}
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $Category_image ['name'] );
				$result = $kw->makeUpload ( $Category_image, pathtodir . "/contentcategory/" . $name );
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
	function UpdateCategory($partnerName, $partnerinfo, $partnerCate, $partner_image, $sort, $partner_id, $username, $code) {
		$str = "update tbl_content_category set categories_name=N'" . $partnerName . "',parent=N'" . $partnerCate . "',sort=N'" . $sort . "',status=1,last_modified='" . mktime () . "',doc_categories_desc=N'" . $partnerinfo . "',useradd='" . $username . "',code=N'{$code}' where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $partner_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$result = $kw->AccessNoneReturn ( $str );
			if ($result && $partner_image ['size'] > 0) {
				$selectpartner = $kw->getRecord ( 'tbl_content_category', "categories_id='" . $partner_id . "'" );
				$image = $selectpartner [0] [2];
				if (file_exists ( pathtodir . "/contentcategory/" . $image )) {
					unlink ( pathtodir . "/contentcategory/" . $image );
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
		$str = "update  tbl_content_category set image='" . $partner_image . "' where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>