<?php
class Customers {
	function ChangePasswords_forgot($pass, $repass, $code, $email) {
		$kw = new KW_Hook ( );
		$code = $kw->killInjection ( $code );
		$email = $kw->killInjection ( $email );
		$result = $this->GetUserLitmit ( "changepasswords='" . $code . "' and uid ='" . $email . "'" );
		if (count ( $result ) == 0) {
			$mess = array (0, "Sai mã số hoặc sai email , vui lòng xem lại email mà chúng tôi gửi cho bạn" );
		} else {
			if ($pass != $repass) {
				$mess = array (0, "Mật khẩu và mật khẩu nhập lại của bạn không giống nhau" );
			} else {
				$pass = md5 ( md5 ( $pass ) );
				$str = "update tbl_customer set pwd='" . $pass . "' where tbl_customer.uid='" . $email . "'";
				$result = $kw->AccessNoneReturn ( $str );
				if ($result) {
					$mess = array (1, "Thay đổi mật khẩu thành công" );
				} else {
					$mess = array (0, "Vui lòng thử lại , kết nối server thất bại" );
				}
			}
		}
		return $mess;
	}
	function EmailChangePassword($fullname, $code) {
		$str = "<b>Chào " . $fullname . " !</b>";
		$str .= "<p>Chúng tôi nhận được một yêu cầu thay đổi mật khẩu của bạn tại hệ thống flexoffice.com.vn .</br>";
		$str .= "Để thực hiện việc đổi mật khẩu bạn vui lòng nhấp vào <a href='" . pathtoweb . "change-password-" . $code . "-21.htm'>đây</a>, hoặc copy liên kết sau và paste vào trình duyệt: " . pathtoweb . "change-password-" . $code . "-21.htm <br />";
		$str . "Chân thành cám ơn bạn vì đã sử dụng dịch vụ của chúng tôi. <br />";
		$str . "Chúc bạn thuận tiện với siêu thị văn phòng phẩm online flexoffice.com.vn.<br /></p>";
		$str .= " Trân trọng.<br />";
		$str .= " BQT Flexoffice.com.vn.";
		return $str;
	}
	function forgotPasswords($email) {
		$result = $this->GetCustomersbyEmail ( $email );
		if (count ( $result ) == 0) {
			$mess = array (0, "Email này không có trong hệ thống chúng tôi ! Vui lòng nhớ chính xác email đã đăng ký tại flexoffice.com.vn." );
		} else {
			$kw = new KW_Hook ( );
			$code = md5 ( $email );
			$code = substr ( $code, 0, 5 );
			$code = md5 ( $code );
			$code = substr ( $code, 0, 5 );
			$name = $result [0] [7];
			$body = $this->EmailChangePassword ( $name, $code );
			$result = $kw->sendmail ( adminemail, $email, "Đổi mật khẩu tại Flexoffice.com.vn", $body, "Flexoffice - Đổi mật khẩu", $name );
			if ($result) {
				$str = "update tbl_customer set changepasswords='" . $code . "' where tbl_customer.uid='" . $email . "'";
				$result = $kw->AccessNoneReturn ( $str );
				if ($result) {
					$mess = array (1, "Chúng tôi đã gửi cho bạn một email vào địa chỉ email mà bạn đã đăng ký. vui lòng kiểm tra email (có thể trong hộp thư rác) để hoàn thành." );
				} else {
					$mess = array (0, "Vui lòng thử lại , một lổi sảy ra khi đang cố gắng kết nối dữ liệu" );
				}
			} else
				$mess = array (0, "Gửi email không thành công. Vùi lòng kiểm tra lại hoặc báo cho bộ phận kỹ thuật của chúng tôi" );
		}
		return $mess;
	}
	function GetUserLitmit($where) { 
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_customer', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		if ($rows > 0) {
			for($i = 0; $i < $rows; $i ++) {
				$row = mysql_fetch_array ( $user );
				$arr [] = array ($row ['Id'], $row ['uid'], $row ['pwd'], $row ['date_added'], $row ['last_modified'], $row ['status'], $row ['fullname'], $row ['userinfo'], $row ['diachi'], $row ['phone'], $row ['congty'], $row ['diachict'], $row ['dienthoaict'], $row ['fax'], $row ['mst'], $row ['thuhang'] );
				//$arr[]=array($row['Id']0,$row['uid']1,$row['pwd']2,$row['date_added']3,$row['last_modified']4,$row['status']5,$row['fullname']6,$row['userinfo']7,$row['diachi']8,$row['phone']9,$row['congty']10,$row['diachict']11,$row['dienthoaict']12,$row['fax']13,$row['mst']14);
			}
		} else {
			$arr = array ();
		}
		return $arr;
	}
	function DeleteCustomer($id) {
		$str = "delete from tbl_customer where tbl_customer.Id='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function CountUser($where) {
		
		$kw = new KW_Hook ( );
		$row = $kw->CountRecord ( 'tbl_customer', $where );
		return $row;
	}
	function INSERT($str) {
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function ChangeEmail($id, $email_cu, $email, $reemail, $pass, $repass) {
		$kw = new KW_Hook ( );
		$email = $kw->killInjection ( $email );
		$chechemail = $kw->checkemail ( $email );
		$resultemail = $this->GetCustomersbyEmail ( $email );
		if (count ( $resultemail ) == 0) {
			if (! $chechemail) {
				$err [] = array (0, "Email không hợp lệ" );
			} else {
				$reemail = $kw->killInjection ( $reemail );
				$listcustomer = $this->GetUserLitmit ( "Id='" . $id . "'" );
				$pass = md5 ( md5 ( $pass ) );
				if ($pass == $listcustomer [0] [2]) {
					$repass = md5 ( md5 ( $repass ) );
					if ($pass == $repass) {
						$str = "update tbl_customer set uid='" . $reemail . "' where Id=" . $id;
						$str1 = "update tbl_oder set b_email='" . $email . "' where b_email='" . $email_cu . "'";
						$result = $kw->AccessNoneReturn ( $str );
						
						if ($result) {
							$err [] = array (1, "Cập nhật thành công" );
						} else {
							$err [] = array (0, "Cập nhật không thành công" );
						}
					} else {
						$err [] = array (0, "Hai mật khẩu không giống nhau" );
					}
				} else {
					$err [] = array (0, "Mật mã hiện hành không đúng" );
				}
			}
		} else {
			$err [] = array (0, "Email này đã đăng ký trong hệ thống chúng tôi" );
		}
		return $err;
	}
	function Res($hoten, $email, $pass, $repass, $diachi, $dienthoai, $tinh, $congty, $diachict, $tinhct, $dienthoaict, $fax, $mst) {
		$kw = new KW_Hook ( );
		$hoten = $kw->killInjection ( $hoten );
		$email = $kw->killInjection ( $email );
		$result = $this->GetCustomersbyEmail ( $email );
		$err = array ();
		if (count ( $result ) == 0) {
			if (! $kw->checkemail ( $email ))
				$err [] = array (0, "Email không hợp lệ" );
			if (strlen ( strip_tags ( $hoten ) ) < 3)
				$err [] = array (0, "Họ tên quá ngắn" );
			if (strlen ( strip_tags ( $pass ) ) < 3)
				$err [] = array (0, "Mật mã quá ngắn" );
			if ($pass != $repass)
				$err [] = array (0, "Mật mã nhập lại không chính sát" );
			if (count ( $err ) == 0) {
				$pass = md5 ( md5 ( $pass ) );
				$str = "insert into tbl_customer(uid,pwd,date_added,last_modified,status,diachi,tinh,phone,fullname,congty,diachict,tinhct,dienthoaict,fax,mst) 
			    values(N'" . $email . "',N'" . $pass . "',N'" . mktime () . "',N'" . mktime () . "',N'1',N'" . $diachi . "',N'" . $tinh . "',N'" . $dienthoai . "',N'" . $hoten . "',N'" . $congty . "',N'" . $diachict . "',N'" . $tinhct . "',N'" . $dienthoaict . "',N'" . $fax . "',N'" . $mst . "')";
				$result = $this->INSERT ( $str );
				if ($result) {
					$err [] = array (1, "Đăng ký thành công" );
				} else
					$err [] = array (0, "Đăng ký  không thành công" );
			}
		} else {
			$err [] = array (0, "Email này đã đăng ký trong hệ thống chúng tôi" );
		}
		return $err;
	}
function Res1($ten,$hoten, $pass, $repass,$status) {
	//echo $hoten;echo $pass;echo $repass; echo $status;
	//exit();
		$kw = new KW_Hook ( );
		$hoten = $kw->killInjection ( $hoten );
		 $err = array ();
		if (count ( $result ) == 0) {
			 if (strlen ( strip_tags ( $ten ) ) < 3)
				$err [] = array (0, "Họ tên quá ngắn" );
			 if (strlen ( strip_tags ( $hoten ) ) < 3)
				$err [] = array (0, "Họ tên quá ngắn" );
			if (strlen ( strip_tags ( $pass ) ) < 3)
				$err [] = array (0, "Mật mã quá ngắn" );
			if ($pass != $repass)
				$err [] = array (0, "Mật mã nhập lại không chính sát" );
			if (count ( $err ) == 0) {
				$pass = md5 ( md5 ( $pass ) );
				$str = "insert into tbl_customer(fullname,uid,pwd,status) 
			    values(N'".$ten."',N'" . $hoten . "',N'" . $pass . "','" . $status. "')";
				$result = $this->INSERT ( $str );
				if ($result) {
					$err [] = array (1, "Đăng ký thành công" );
				} else
					$err [] = array (0, "Đăng ký  không thành công" );
			}
		} else {
			$err [] = array (0, "Email này đã đăng ký trong hệ thống chúng tôi" );
		}
		return $err;
	}
	function CheckPass() {
		return 0;
	}
	function ChangePass($cusrentpass, $pass, $repass, $id) {
		$kw = new KW_Hook ( );
		$result = $this->GetUserLitmit ( "Id='" . $id . "'" );
		if (count ( $result ) == 1) {
			$cusrentpass = md5 ( md5 ( $cusrentpass ) );
			if ($cusrentpass == $result [0] [2]) {
				if ($pass == $repass) {
					$pass = md5 ( md5 ( $pass ) );
					$str = "update tbl_customer set pwd='" . $pass . "' where tbl_customer.Id=" . $id;
					$result = $kw->AccessNoneReturn ( $str );
					if ($result) {
						$err [] = array (1, "Cập nhật thành công" );
					} else
						$err [] = array (0, "Cập nhật không thành công" );
				} else {
					$err [] = array (0, "Hai mật mã mới nhập lại phải giống nhau" );
				}
			} else
				$err [] = array (0, "Mật mã hiện hành không đúng" );
		}
		return $err;
	}
	function UpdateCustomerInfo($hoten, $diachi, $dienthoai, $congty, $diachict, $dienthoaict, $fax, $mst, $id) {
		$kw = new KW_Hook ( );
		$hoten = $kw->killInjection ( $hoten );
		$err = array ();
		if (strlen ( strip_tags ( $hoten ) ) < 3)
			$err [] = array (0, "Họ tên quá ngắn" );
		if (count ( $err ) == 0) {
			$str = "update tbl_customer set last_modified=N'" . mktime () . "',status=N'1',diachi=N'" . $diachi . "',phone=N'" . $dienthoai . "',fullname=N'" . $hoten . "',congty=N'" . $congty . "',diachict=N'" . $diachict . "',dienthoaict=N'" . $dienthoaict . "',fax=N'" . $fax . "',mst=N'" . $mst . "' where tbl_customer.Id='{$id}'";
			$result = $this->INSERT ( $str );
			if ($result) {
				$err [] = array (1, "Cập nhật thành công" );
			} else
				$err [] = array (0, "Cập nhật không thành công" );
		}
		return $err;
	}
	function GetCustomersbyEmail($email) {
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_customer', "uid='" . $email . "'" );
		$row = mysql_fetch_array ( $user );
		if ($row ['Id'] != "") {
			include_once 'lib/tbl_oder.php';
			$getlist = new Oder ( );
			$listoder = $getlist->ViewOder ( "id_customer='" . $row ['Id'] . "' and status= 4" );
			//print_r($listoder); 
			//echo "</br>So luong san pham co trong danh sach".count($listoder); exit();
			$tongtien = 0;
			for($i = 0; $i < count ( $listoder ); $i ++) {
				
				$tongtien += $listoder [$i] [19];
			}
			
			$arr = array ($row ['Id'], $row ['uid'], $row ['date_added'], $row ['last_modified'], $row ['pwd'], $row ['diachi'], $row ['phone'], $row ['fullname'], $row ['congty'], $row ['diachict'], $row ['mst'], $row ['dienthoaict'], $row ['fax'], $row ['thuhang'], $tongtien ,$row ['status']);
		} else {
			$arr = array ();
		}
		return $arr;
	}
	function changeStatus_custommer($idoder, $status) {
		$kw = new KW_Hook ( );
		$str = "update tbl_customer set thuhang='" . $status . "'  where Id='" . $idoder . "'";
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>