<?php
include_once pathtodir . '/lib/lib.php';
class Product {
	function GetProduct($where) {
		
		include_once 'tbl_product_category.php';
		$cate = new ProductCategory ( );
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_product', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$caterogy = $cate->GetCategory ( "categories_id=" . $row ["categories_id"] );
			$numbercolor = $this->countProduct ( "products_pro='" . $row ['products_id'] . "'" );
			$numbercolor = $numbercolor + 1;
			$arr [] = array ($row ['products_id'], $row ['products_code'], $row ['products_name'], $row ['products_image'], $row ['products_image_large'], $row ['products_price'], $row ['products_date_added'], $row ['products_date_modified'], $row ['products_status'], $row ['products_ordered'], $row ['products_shortdescription'], $row ['products_description'], $caterogy [0] [1], $row ['providers_id'], $row ['donvi_id'], $row ['useradd'], $row ['products_loai'], $row ['products_supplier'], $row ['products_pro'], $row ["categories_id"], $row ["vanhanh"], $row ["congnghe"], $row ["tieuchuan"], $numbercolor, $row ["products_new"], $row ["tinhnang"] );
		}
		//$arr [] = array ($row ['products_id']0, $row ['products_code']1, $row ['products_name']2, $row ['products_image']3, $row ['products_image_large']4, $row ['products_price']5, $row ['products_date_added']6, $row ['products_date_modified']7, $row ['products_status']8, $row ['products_ordered']9, $row ['products_shortdescription']10, $row ['products_description']11, $caterogy [0] [1]12, $row ['providers_id']13, $row ['donvi_id']14, $row ['useradd']15, $row ['products_loai']16, $row ['products_supplier']17, $row ['products_pro']18, $row ["categories_id"]19, $row ["vanhanh"]20, $row ["congnghe"]21, $row ["tieuchuan"]22, $numbercolor23, $row ["products_new"]24 );
		return $arr;
	}
	function TaoArrCatagories() {
		include_once 'tbl_product_category.php';
		$cate = new ProductCategory ( );
		$kw = new KW_Hook ( );
		$result = $kw->CreateCategoies ( 'tbl_product' );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$caterogy = $kw->CreateCategoieshienthi ( 'tbl_product', $row ["categories_id"] );
			$rows2 = mysql_affected_rows ();
			$row1 = mysql_fetch_array ( $caterogy );
			//$arr[]=array($row1['products_id'],$row1['products_code'],$row1['products_name'],$row1['products_image'],$row1['products_image_large'],$row1['products_price'],$row1['products_date_added'],$row1['products_date_modified'],$row1['products_status'],$row1['products_ordered'],$row1['products_shortdescription'],$row1['products_description'],$row1['providers_id'],$row1['donvi_id'],$row1['useradd'],$row1['products_loai'],$row1['products_supplier'],$row1['products_pro'],$row1["categories_id"],$row1["vanhanh"],$row1["congnghe"],$row1["tieuchuan"]);
			$arr [] = array ($row1 ['products_name'] );
		}
		
		return $arr;
	}
	
	function countProduct($where) {
		$kw = new KW_Hook ( );
		$result = $kw->CountRecord ( 'tbl_product', $where );
		return $result;
	}
	function InsertProductcolor($products_code, $products_name, $products_image, $products_image_large, $products_price, $products_ordered, $products_shortdescription, $products_description, $categories_id, $providers_id, $products_supplier, $username, $txtvanhanh, $txtcongnghe, $products_pro) {
		
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $products_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		$r2 = $kw->checkUpload ( $products_image_large, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		if ($r == "" && $r2 == "") {
			$str = "insert into  tbl_product(products_pro,products_code,products_name,products_price,products_date_added,products_date_modified,products_status,products_ordered,products_shortdescription,products_description,categories_id,providers_id,products_supplier,useradd,vanhanh,congnghe) 
			values(N'" . $products_pro . "',N'" . $products_code . "',N'" . $products_name . "',N'" . $products_price . "','" . mktime () . "','" . mktime () . "',N'1',N'" . $products_ordered . "',N'" . $products_shortdescription . "',N'" . $products_description . "',N'" . $categories_id . "',N'" . $providers_id . "',N'" . $products_supplier . "','" . $username . "','" . $txtvanhanh . "','" . $txtcongnghe . "')";
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				
				if (! is_dir ( pathtodir . "/product" )) {
					mkdir ( pathtodir . "/product" );
					chmod ( pathtodir . "/product", 777 );
				}
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $kw->ReplaceUnicode ( $products_image ['name'] ) );
				$name2 = $id . "_large_" . str_replace ( ' ', '-', $kw->ReplaceUnicode ( $products_image_large ['name'] ) );
				$result = $kw->makeUpload ( $products_image, pathtodir . "/product/" . $name );
				$result2 = $kw->makeUpload ( $products_image_large, pathtodir . "/product/" . $name2 );
				if ($result && $result2) {
					$result = $this->UpdateProductImage ( $name, $name2, $id );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
function InsertProduct2($products_code,$products_name,$products_image_large,$products_price,$products_ordered,$products_shortdescription,$products_description,$categories_id,$providers_id,$products_supplier,$username,$txtvanhanh,$txtcongnghe,$txttieuchuan,$productnew,$txttinhnang)
	{		
			
		$kw=new KW_Hook();
		$r2=$kw->checkUpload($products_image_large,".jpg;.png;.jpeg;.gif",500*1024,0);	
		if($r2=="")
		{		
		 	$str="insert into  tbl_product(products_code,products_name,products_price,products_date_added,products_date_modified,products_status,products_ordered,products_shortdescription,products_description,categories_id,providers_id,products_supplier,useradd,vanhanh,congnghe,tieuchuan,products_new,tinhnang) 
			values(N'".$products_code."',N'".$products_name."',N'".$products_price."','".mktime()."','".mktime()."',N'1',N'".$products_ordered."',N'".$products_shortdescription."',N'".$products_description."',N'".$categories_id."',N'".$providers_id."',N'".$products_supplier."','".$username."',N'".$txtvanhanh."',N'".$txtcongnghe."',N'".$txttieuchuan."',N'".$productnew."',N'".$txttinhnang."')";		
			$result=$kw->AccessNoneReturn($str);			
			if($result)
			{
				if($products_image_large['name']!="")
				{
					if(!is_dir(pathtodir."/product"))
					{
						mkdir(pathtodir."/product");
						chmod(pathtodir."/product",777);
					}								
					$id=mysql_insert_id();
					$name2=$id."_".str_replace(' ','-',$products_image_large['name']);
					$result2=$kw->makeUpload($products_image_large,pathtodir."/product/".$name2);			
					if($result2)
					{		$name="small_".$name2;
						$kw->createThumbs(pathtodir."product/".$name2,pathtodir."product/".$name,500);			
						$result=$this->UpdateProductImage($name,$name2,$id);
						return $result;
					}
					else 
					{
						return FALSE;
					}	
				}							
			}
			return $result;
		}
		else
			return FALSE;
	}
	function InsertProduct($products_code, $products_name, $products_image, $products_image_large, $products_price, $products_ordered, $products_shortdescription, $products_description, $categories_id, $providers_id, $products_supplier, $username, $txtvanhanh, $txtcongnghe, $txttieuchuan) {
		
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $products_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		
		$r2 = $kw->checkUpload ( $products_image_large, ".jpg;.png;.jpeg;.gif", 500 * 1024, 0 );
		//$r2=$kw->checkUploadvideo($products_image_large,".mp3",500*1024,0);		
		if ($r == "" && $r2 == "") {
			//echo "trong ham ínert hinh anh "; exit();
			$str = "insert into  tbl_product(products_code,products_name,products_price,products_date_added,products_date_modified,products_status,products_ordered,products_shortdescription,products_description,categories_id,providers_id,products_supplier,useradd,vanhanh,congnghe,tieuchuan) 
			values(N'" . $products_code . "',N'" . $products_name . "',N'" . $products_price . "','" . mktime () . "','" . mktime () . "',N'1',N'" . $products_ordered . "',N'" . $products_shortdescription . "',N'" . $products_description . "',N'" . $categories_id . "',N'" . $providers_id . "',N'" . $products_supplier . "','" . $username . "',N'" . $txtvanhanh . "',N'" . $txtcongnghe . "',N'" . $txttieuchuan . "')";
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				
				if (! is_dir ( pathtodir . "/product" )) {
					mkdir ( pathtodir . "/product" );
					chmod ( pathtodir . "/product", 777 );
				}
				$id = mysql_insert_id ();
				$name = $id . "_" . str_replace ( ' ', '-', $products_image ['name'] );
				$name2 = $id . "_large_" . str_replace ( ' ', '-', $products_image_large ['name'] );
				$result = $kw->makeUpload ( $products_image, pathtodir . "/product/" . $name );
				$result2 = $kw->makeUpload ( $products_image_large, pathtodir . "/product/" . $name2 );
				if ($result && $result2) {
					$result = $this->UpdateProductImage ( $name, $name2, $id );
					return $result;
				} else {
					return FALSE;
				}
			}
			return $result;
		} else
			return FALSE;
	}
	// lấy hình ảnh sp
	function EditProduct($id, $products_code, $products_name, $products_image, $products_image_large, $products_price, $products_ordered, $products_shortdescription, $products_description, $categories_id, $providers_id, $products_supplier, $username, $vanhanh, $congnghe, $txttieuchuan, $products_pro) {
		
		
		$kw = new KW_Hook ( );
		$r = $kw->checkUpload ( $products_image, ".jpg;.png;.jpeg;.gif", 500 * 1024, 1 );
		$r2 = $kw->checkUpload ( $products_image_large, ".jpg;.png;.jpeg;.gif", 500 * 1024, 1 );
		$str = "update tbl_product set  tieuchuan=N'" . $txttieuchuan . "',vanhanh=N'" . $vanhanh . "', congnghe=N'" . $congnghe . "', products_code=N'" . $products_code . "',products_name=N'" . $products_name . "',products_price=N'" . $products_price . "',products_date_modified='" . mktime () . "',products_status=1,products_ordered=N'" . $products_ordered . "',products_shortdescription=N'" . $products_shortdescription . "',products_description=N'" . $products_description . "',categories_id=N'" . $categories_id . "',providers_id=N'" . $providers_id . "',products_supplier=N'" . $products_supplier . "',useradd='" . $username . "', products_pro='" . $products_pro . "' where products_id='" . $id . "'";
		$result = $kw->AccessNoneReturn ( $str );
		$product = $this->GetProduct ( 'products_id=' . $id );
		$err = array ();
		if ($r == "") {
			if ($result) {
				if (! is_dir ( pathtodir . "/product" )) {
					mkdir ( pathtodir . "/product" );
					chmod ( pathtodir . "/product", 777 );
				}
				if ($product [0] [3] != "" && file_exists ( pathtodir . "/product/" . $product [0] [3] ))
					unlink ( pathtodir . "/product/" . $product [0] [3] );
				$name = $id . "_" . str_replace ( ' ', '-', $products_image ['name'] );
				$result = $kw->makeUpload ( $products_image, pathtodir . "/product/" . $name );
				if ($result) {
					$result = $this->UpdateProductImage ( $name, "", $id );
					if (! $result)
						$err [] = "S?a hình nh? th?t b?i";
				} else {
					$err [] = "Upload hình nh? th?t b?i";
				}
			}
		}
		if ($r2 == "") {
			if ($result) {
				
				if (! is_dir ( pathtodir . "/product" )) {
					mkdir ( pathtodir . "/product" );
					chmod ( pathtodir . "/product", 777 );
				}
				if ($product [0] [4] != "" && file_exists ( pathtodir . "/product/" . $product [0] [4] ))
					unlink ( pathtodir . "/product/" . $product [0] [4] );
				$name2 = $id . "_large_" . str_replace ( ' ', '-', $products_image_large ['name'] );
				$result2 = $kw->makeUpload ( $products_image_large, pathtodir . "/product/" . $name2 );
				if ($result2) {
					$result = $this->UpdateProductImage ( "", $name2, $id );
					if (! $result)
						$err [] = "S?a hình l?n th?t b?i";
				} else {
					$err [] = "Upload hình l?n th?t b?i";
				}
			}
		}
		return $err;
	} 
function EditProduct1($id, $products_code, $products_name, $products_image, $products_price, $products_ordered, $products_shortdescription, $products_description, $categories_id, $providers_id, $products_supplier, $username, $vanhanh, $congnghe, $txttieuchuan, $products_pro,$txttinhnang) {
 		$kw = new KW_Hook ();
		$r = $kw->checkUpload ( $products_image, ".jpg;.png;.jpeg;.gif", 5000 * 1024, 1 );	
		$str = "update tbl_product set  tieuchuan=N'" . $txttieuchuan . "',vanhanh=N'" . $vanhanh . "', congnghe=N'" . $congnghe . "', products_code=N'" . $products_code . "',products_name=N'" . $products_name . "',products_price=N'" . $products_price . "',products_date_modified='" . mktime () . "',products_status=1,products_ordered=N'" . $products_ordered . "',products_shortdescription=N'" . $products_shortdescription . "',products_description=N'" . $products_description . "',categories_id=N'" . $categories_id . "',providers_id=N'" . $providers_id . "',products_supplier=N'" . $products_supplier . "',useradd='" . $username . "', products_new='" . $products_pro . "',tinhnang=N'".$txttinhnang."' where products_id='" . $id . "'";
		$result = $kw->AccessNoneReturn ( $str );
		$product = $this->GetProduct ( 'products_id=' . $id );
		$err = array ();
		if ($r == "") {
			if ($result) {
				if (! is_dir ( pathtodir . "product" )){
					mkdir ( pathtodir . "product" );
					chmod ( pathtodir . "product", 777 );
				}
				if ($product [0] [3] != "" && file_exists ( pathtodir . "product/" . $product [0] [3] ))
					unlink ( pathtodir . "product/" . $product [0] [3] );
				$name2 = $id . "_" . str_replace ( ' ', '-', $products_image ['name'] );
				$result = $kw->makeUpload ( $products_image, pathtodir . "product/" . $name2 );
				if ($result) {
						$name="small_".$name2;
						$kw->createThumbs(pathtodir."product/".$name2,pathtodir."product/".$name,500);			
						$result=$this->UpdateProductImage($name,$name2,$id);
					if (! $result)
						$err [] = "S?a hình nh? th?t b?i";
				} else {
					$err [] = "Upload hình nh? th?t b?i";
				}
			}
		}
		
		return $err;
	}
	
	function EditProductKetHop($id, $txttieuchuan) {
		$kw = new KW_Hook ( );
		$str = "update tbl_product set  tieuchuan=N'" . $txttieuchuan . "' where products_id='" . $id . "'";
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function UpdateProductImage($partner_image, $partner_imagel, $partner_id) {
		if ($partner_image != "")
			$i1 = "products_image='" . $partner_image . "' ";
		if ($partner_imagel != "")
			$i2 = "products_image_large='" . $partner_imagel . "'";
		if ($i2 != "" && $i1 != "")
			$i1 = $i1 . " , ";
		$str = "update  tbl_product set {$i1} {$i2} where products_id='" . $partner_id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function RestoreProduct($id) {
		$str = "update tbl_product set products_status=1 where products_id='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function DeleteProduct($id) {
		$str = "update tbl_product set products_status=0 where products_id='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function DeleteProductByAdmin($id) {
		$str = "delete from tbl_product where products_id='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>