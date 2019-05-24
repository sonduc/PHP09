<?php
session_start ();
include_once 'lib/tbl_product.php';
class Cart {
	function GetCart($where) {
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
	function GetProductALLCart($where) {
		$arr = array ();
		$pro = new Product ( );
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_oder_detail', $where );
		$rows = mysql_affected_rows ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$product = $pro->GetProduct ( "products_id=" . $row ['id_product'] );
			$arr [] = array ($product [0] [0], $product [0] [2], $product [0] [3], $row ['soluong'], $product [0] [5] );
		}
		return $arr;
	}
	function CountPriceFromCart() {
		$tongtien = 0;
		$pro = new Product ( );
		$cart = $_SESSION ['giohang'];
		for($i = 0; $i < count ( $cart ); $i ++) {
			if ($cart [$i] [0] != "") {
				$product = $pro->GetProduct ( "products_id=" . $cart [$i] [0] );
				$tien = $product [0] [5] * $cart [$i] [1];
				$tongtien = $tien + $tongtien;
			}
		}
		return $tongtien;
	}
	function GetProductFromCart() {
		//unset($_SESSION['cart']); exit();
		$arr = array ();
		$pro = new Product ( );
		$cart = $_SESSION ['giohang'];
		for($i = 0; $i < count ( $cart ); $i ++) {
			if ($cart [$i] [0] != "") {
				
				$product = $pro->GetProduct ( "products_id=" . $cart [$i] [0] );
				$arr [] = array ($product [0] [0], $product [0] [2], $product [0] [3], $cart [$i] [1], $product [0] [5], $cart [$i] [2] );
				//$arr[]=array($product[0][0]'id'0,$product[0][2]'ten'1,$product[0][3] hinh2,$cart[$i][1]soluong3,$product[0][5]gia4,$cart[$i][2]5);
			}
		}
		return $arr;
	}
	function addProductToCart($idproduct, $soluong, $kichthuoc) {
		$cart = array ();
		if ($soluong > 0) {
			if (! isset ( $_SESSION ['giohang'] )) {
				
				$cart [] = array ($idproduct, $soluong, $kichthuoc );
			} else {
				$cart = $_SESSION ['giohang'];
				$glad = 0;
				for($i = 0; $i < count ( $cart ); $i ++) {
					$product = $cart [$i];
					if ($product [0] == $idproduct) {
						$product [1] = $product [1] + $soluong;
						$cart [$i] = $product;
						$glad = 1;
						break;
					}
				}
				if ($glad == 0) {
					$cart [] = array ($idproduct, $soluong, $kichthuoc );
				}
			}
			$_SESSION ['giohang'] = $cart;
		
		}
	}
	function DeleteProductFromCart($idproduct) {
		$cart = $_SESSION ['giohang'];
		unset ( $_SESSION ['giohang'] );
		$cart2 = array ();
		for($i = 0; $i < count ( $cart ); $i ++) {
			$product = $cart [$i];
			if ($product [0] != $idproduct) {
				$cart2 [] = $product;
			}
		}
		$_SESSION ['giohang'] = $cart2;
	}
	function UpdateCart($idproduct, $num) {
		$cart = $_SESSION ['giohang'];
		$cart2 = array ();
		for($i = 0; $i < count ( $cart ); $i ++) {
			$product = $cart [$i];
			if ($product [0] == $idproduct) {
				if ($num > 0) {
					$cart2 [] = array ($idproduct, $num );
				}
			} else {
				$cart2 [] = $product;
			}
		}
		$_SESSION ['giohang'] = $cart2;
	}
}
?>