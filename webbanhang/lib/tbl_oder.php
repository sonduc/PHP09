<?php
//oder and oser detail
class Oder {
	function AddOder($b_fullname, $b_address, $b_email, $note, $b_phone, $c_name, $c_phone, $c_address, $taxnumber, $payment, $method, $s_address, $s_email, $s_fullname, $s_phone, $tongtien, $id_customer) {
		 
		$date_added = mktime ();
		$str = "insert into tbl_oder(b_fullname,b_address,b_email,note,date_added,b_phone,c_name,c_phone,c_address,taxnumber,payment,method,s_address,s_email,s_fullname,s_phone,tongtien,status,id_customer) values(N'" . $b_fullname . "',N'" . $b_address . "',N'" . $b_email . "',N'" . $note . "','" . $date_added . "',N'" . $b_phone . "',N'" . $c_name . "',N'" . $c_phone . "',N'" . $c_address . "','" . $taxnumber . "',N'" . $payment . "','" . $method . "',N'" . $s_address . "',N'" . $s_email . "',N'" . $s_fullname . "',N'" . $s_phone . "',N'" . $tongtien . "',N'0','" . $id_customer . "')";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		if ($result) {
			$id = mysql_insert_id ();
			return $id;
		} else {
			return FALSE;
		}
	}
	function AddOder_sellactor($ten,$diachi,$dienthoai,$email,$tongtien, $id_customer,$status) { 
	 //ten,diachi,dienthoai,email
		$date_added = mktime ();
		$str = "insert into tbl_oder(b_fullname,b_address,b_phone,b_email,date_added,id_customer,tongtien,status) values(N'" . $ten . "',N'". $diachi . "',N'". $dienthoai . "',N'". $email . "',N'" . $date_added . "',N'" .$id_customer . "',N'" . $tongtien  . "',N'".$status."')";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		if ($result) {
			$id = mysql_insert_id ();
			return $id;
		} else {
			return FALSE;
		}
	 
	}
	function CountListttableoder($where) {
		$kw = new KW_Hook ( );
		$result = $kw->CountRecord ( 'tbl_oder', $where );
		return $result;
	}
	function AddOderDetail($idproduct, $idoder, $soluong, $kichthuoc) {
		$str = "insert into tbl_oder_detail(id_product,id_oder,soluong,kichthuoc) values(N'" . $idproduct . "',N'" . $idoder . "',N'" . $soluong . "',N'" . $kichthuoc . "') ";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function ViewOder($where) {
		//echo $where;exit();
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_oder', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$arr [] = array ($row ['id_oder'], $row ['id_customer'], $row ['b_fullname'], $row ['b_address'], $row ['b_email'], $row ['note'], $row ['date_added'], $row ['status'], $row ['b_phone'], $row ['c_name'], $row ['c_phone'], $row ['c_address'], $row ['taxnumber'], $row ['payment'], $row ['method'], $row ['s_address'], $row ['s_email'], $row ['s_fullname'], $row ['s_phone'], $row ['tongtien'] );
		}
		return $arr;
	}
	function ViewOderDetail($where) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_oder_detail', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		include_once pathtodir . 'lib/tbl_product.php';
		$pro = new Product ( );
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$product = $pro->GetProduct ( "products_id='" . $row ['id_product'] . "'" );
			//print_r($product);exit();
			$arr [] = array ($row ['id_product'], $row ['id_oder'], $row ['soluong'], $row ['kichthuoc'], $product [0] [2], $product [0] [3], $product [0] [5] );
		}
		return $arr;
	}
	function changeStatus($idoder, $status) {  
		
		$kw = new KW_Hook ( );
		$str = "update tbl_oder set status='".$status."'  where id_oder='" . $idoder . "'";
		$result = $kw->AccessNoneReturn ($str);		 
		return $result;
	}
	function DEL($id) {
		$kw = new KW_Hook ( );
		$str = "delete from tbl_oder_detail where id_oder='" . $id . "'";
		//echo $str;exit();
		$result = $kw->AccessNoneReturn ( $str );
		if ($result) {
			$str = "delete from  tbl_oder where id_oder='" . $id . "'";
			$result = $kw->AccessNoneReturn ( $str );
		}
		return $result;
	}
	function DELALL() {
		$kw = new KW_Hook ( );
		$str = "delete from tbl_oder_detail";
		//echo $str;exit();
		$result = $kw->AccessNoneReturn ( $str );
		if ($result) {
			$str = "delete from  tbl_oder ";
			$result = $kw->AccessNoneReturn ( $str );
		}
		return $result;
	}
	
	function UpdateProductstatus($id) {
		$str = "update tbl_oder set status=1 where id_oder='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function UpdateProductstatus_khoiphuc($id) {
		$str = "update tbl_oder set status=0 where id_oder='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>