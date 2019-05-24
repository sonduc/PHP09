<?php
class Manufacturer {
	function GetBreadcrumb($id) {
		$ret = array ();
		do {
			$where = " categories_id=" . $id . " and status=1";
			$row = $this->GetCategory ( $where );
			$id = $row [0] [3];
			$ret [] = array ($row [0] [0], $row [0] [1] );
		} while ( $id != 0 );
		return $ret;
	}
	function getArrayCategory($split = "==") {
		$kw = new KW_Hook ( );
		$ret = array ();
		$where = " parent=0 and status=1";
		$result = $kw->getRecord ( 'tbl_manufacturer', $where );
		while ( $row = mysql_fetch_array ( $result ) ) {
			$ret [] = array ($row ['categories_id'], $split . $row ['categories_name'] );
			$getsub = $kw->getRecord ( 'tbl_manufacturer', "  status=1 and parent=" . $row ['categories_id'] );
			$rows = mysql_affected_rows ();
			for($j = 0; $j < $rows; $j ++) {
				$sub = mysql_fetch_array ( $getsub );
				$ret [] = array ($sub ['categories_id'], $split . $split . $sub ['categories_name'] );
				$getsub2 = $kw->getRecord ( 'tbl_manufacturer', "  status=1 and parent=" . $sub ['categories_id'] );
				$rows2 = mysql_affected_rows ();
				for($n = 0; $n < $rows2; $n ++) {
					$sub2 = mysql_fetch_array ( $getsub2 );
					$ret [] = array ($sub2 ['categories_id'], $split . $split . $split . $split . $sub2 ['categories_name'] );
				}
			}
		}
		return $ret;
	}
	function getStringIDcategory($idparent) {
		$kw = new KW_Hook ( );
		$resulti = $this->GetCategory ( "parent='" . $idparent . "'" );
		$str = $idparent;
		
		for($i = 0; $i < count ( $resulti ); $i ++) {
			$str .= "," . $resulti [$i] [0];
			$resultj = $this->GetCategory ( "parent='" . $resulti [$i] [0] . "'" );
			for($j = 0; $j < count ( $resultj ); $j ++) {
				$str .= "," . $resultj [$j] [0];
				$resultn = $this->GetCategory ( "parent='" . $resultj [$j] [0] . "'" );
				for($n = 0; $n < count ( $resultn ); $n ++) {
					$str .= "," . $resultn [$n] [0];
				}
			}
		}
		return $str;
	}
	function comboCategory($name, $arrSource, $class, $index, $all) {
		$name = $name != '' ? $name : 'cmbParent';
		if (! $arrSource) {
			return false;
		}
		$out = '';
		$out .= '<select size="1" name="' . $name . '" id="' . $name . '" class="' . $class . '">';
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
		$result = $kw->getRecord ( 'tbl_manufacturer', $where );
		$rows = mysql_num_rows ( $result );
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$parentresult = $kw->getRecord ( 'tbl_manufacturer', "categories_id=" . $row ['parent'] );
			$parent = mysql_fetch_array ( $parentresult );
			$arr [] = array ($row ['categories_id'], $row ['categories_name'], $row ['categories_image'], $row ['parent'], $row ['sort'], $row ['indexpage'], $row ['status'], $row ['date_added'], $row ['last_modified'], $row ['categories_description'], $row ['useradd'], $row ['type'], $row ['code'], $parent ['categories_name'], $parent ['categories_id'] );
			//$arr[]=array($row['categories_id']0,$row['categories_name']1,$row['categories_image']2,$row['parent']3,$row['sort']4,$row['indexpage']5,$row['status']6,$row['date_added']7,$row['last_modified']8,$row['categories_description']9,$row['useradd']10,$row['type']11,$row['code']12,$parent['categories_name']13,$parent['categories_id']14);
		

		}
		return $arr;
	}
	function CountCategory($where) {
		$kw = new KW_Hook ( );
		$num = $kw->CountRecord ( 'tbl_manufacturer', $where );
		return $num;
	}
	function InsertCategory($categoryName, $categoryinfo, $cate, $category_image, $sort, $username, $tieubieu) {
		
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $category_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$str = "insert into  tbl_manufacturer(categories_name,parent,sort,status,date_added,last_modified,categories_description,useradd,indexpage) values(N'" . $categoryName . "',N'" . $cate . "',N'" . $sort . "','1','" . mktime () . "','" . mktime () . "',N'" . $categoryinfo . "','" . $username . "','" . $tieubieu . "')";
			$result = $kw->AccessNoneReturn ( $str );
			
			if ($result) {
				
				if (! is_dir ( pathtodir . "/category" )) {
					mkdir ( pathtodir . "/category" );
					chmod ( pathtodir . "/category", 777 );
				}
				
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $category_image ['name'] );
				$result = $kw->makeUpload ( $category_image, pathtodir . "/category/" . $name );
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
	function UpdateCategory($partnerName, $partnerinfo, $partnerCate, $partner_image, $sort, $partner_id, $username, $indexpage) {
		$str = "update tbl_manufacturer set indexpage='" . $indexpage . "', categories_name=N'" . $partnerName . "',parent=N'" . $partnerCate . "',sort=N'" . $sort . "',status=1,date_added='" . mktime () . "',last_modified='" . mktime () . "',categories_description=N'" . $partnerinfo . "',useradd='" . $username . "' where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $partner_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "") {
			$result = $kw->AccessNoneReturn ( $str );
			if ($result && $partner_image ['size'] > 0) {
				$selectpartner = $kw->getRecord ( 'tbl_manufacturer', "partner_id='" . $partner_id . "'" );
				$image = $selectpartner [0] [2];
				if (file_exists ( pathtodir . "/productcategory/" . $image )) {
					unlink ( pathtodir . "/productcategory/" . $image );
				}
				$name = $partner_id . "_" . str_replace ( ' ', '-', $partner_image ['name'] );
				$result = $kw->makeUpload ( $partner_image, pathtodir . "/productcategory/" . $name );
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
	function UpdateCategoryImage($categories_image, $categories_id) {
		$str = "update  tbl_manufacturer set categories_image='" . $categories_image . "' where categories_id='" . $categories_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function DeleteCategory($partner_id) {
		$str = "update tbl_manufacturer set status=0 where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function RestoreCategory($partner_id) {
		$str = "update tbl_manufacturer set status=1 where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function DeleteCategoryAdmin($partner_id) {
		$str = "delete from tbl_manufacturer where categories_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>