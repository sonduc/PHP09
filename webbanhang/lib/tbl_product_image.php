<?php
class ProductImage {
	function DeleteProductimage($id) {
		$product = $this->GetProductimage ( "idproductimage='" . $id . "'" );
		$kw = new KW_Hook ( );
		if (file_exists ( pathtodir . "productimages/" . $product [0] [2] ) && $product [0] [2] != "") {
			echo pathtodir . "productimages/" . $product [0] [2];
			exit ();
			unlink ( pathtodir . "productimages/" . $product [0] [2] );
			$str = "delete from tbl_productimage where idproductimage='" . $id . "'";
			$result = $kw->AccessNoneReturn ( $str );
			return $result;
		} else {
			$str = "delete from tbl_productimage where idproductimage='" . $id . "'";
			$result = $kw->AccessNoneReturn ( $str );
			return $result;
		}
	}
	function GetProductimage($where) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_productimage', $where );
		//echo $where;exit();
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$arr [] = array ($row ['idproductimage'], $row ['titleproductimage'], $row ['productimage'], $row ['idproduct'] );
		}
		return $arr;
	}
	function InsertProductimage($name, $imagel, $id) {
		$kw = new KW_Hook ( );
		$r2 = $kw->checkUpload ( $imagel, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r2 == "") {
			$str = "insert into  tbl_productimage(titleproductimage,idproduct) 
			values(N'" . $name . "',N'" . $id . "')";
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				
				if (! is_dir ( pathtodir . "/productimages" )) {
					mkdir ( pathtodir . "/productimages" );
					chmod ( pathtodir . "/productimages", 777 );
				}
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $imagel ['name'] );
				$result = $kw->makeUpload ( $imagel, pathtodir . "productimages/" . $name );
				if ($result) {
					$str = "update tbl_productimage set productimage ='" . $name . "' where idproductimage ='" . $id . "'";
					$result = $kw->AccessNoneReturn ( $str );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
function InsertProductimage1($name, $imagel, $id) {
		$kw = new KW_Hook ( );
		$r2 = $kw->checkUpload ( $imagel, ".jpg;.png;.jpeg;.gif", 5000000 * 1024, 0 );
		 
		if ($r2 == "") {
			$str = "insert into  tbl_productimage(titleproductimage,idproduct) 
			values(N'" . $name . "',N'" . $id . "')";
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				
				if (! is_dir ( pathtodir . "/product" )) {
					mkdir ( pathtodir . "/product" );
					chmod ( pathtodir . "/product", 777 );
				}
				if (! is_dir ( pathtodir . "/product/color" )) {
					mkdir ( pathtodir . "/product/color" );
					chmod ( pathtodir . "/product/color", 777 );
				} 
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $imagel ['name'] );
				$result = $kw->makeUpload ( $imagel, pathtodir . "product/color/" . $name );
				//imagesdetail\imagessmall 
				$kw->createThumbs( pathtodir . "product/color/" . $name,pathtodir."imagesdetail/imagessmall/".$name,500);
				//$result1 = $kw->makeUpload ( $image2, pathtodir . "imagesdetail/imagessmall/" . $name );
				if ($result) {
					$str = "update tbl_productimage set productimage ='" . $name . "' where idproductimage ='" . $id . "'";
					$result = $kw->AccessNoneReturn ( $str );
					 
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
}
?>