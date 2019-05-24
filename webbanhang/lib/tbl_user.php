<?php
class User { 
function ChangePass($cusrentpass, $pass, $repass, $id) {
//	echo "in fuction changepass"."</br>"; 
//	echo "currentpass : ".$cusrentpass."</br>";
//	echo "passnew : ".$pass."</br>";
//	echo "repass new : ".$repass."</br>";
//	echo "users name: ".$id."</br>"; 

		$kw = new KW_Hook ( );
		$result = $this->GetUserLitmit ( "uid='" . $id . "'" ); 
		if (count ( $result ) == 1) {
			$cusrentpass = md5 ( md5 ( $cusrentpass ) );
			if ($cusrentpass == $result [0] [2]) {
				if ($pass == $repass) {
					$pass = md5 ( md5 ( $pass ) );
					$str = "update tbl_user set pwd='" . $pass . "' where tbl_user.uid= '" . $id."'"; 
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
	function CreateAccount($uid,$pwd,$date_added,$last_modified,$status,$userinfo,$fullname) {
 
		$kw = new KW_Hook ( );
		$dateadd = mktime ();
		$err = array ();
		if (! $kw->checkemail ( $email ))
			$err [] = "email không hợp lệ";
		$row = $this->GetUserbyEmail ( $email );
		if (count ( $row ) > 0) {
			$err [] = "Email này đã tồn tại";
		}
		if (strlen(trim($hovaten))<6)
			$err [] = "Họ và tên quá ngắn";
		if (strlen ( trim ( $password ) ) < 6)
			$err [] = "Mật khẩu quá ngắn";
		if ($password != $repass)
			$err [] = "Mật khẩu nhập lại không chính xác";
		$password = md5 ( md5 ( $password ) );
		if (count ( $err ) == 0) {
			$str = "insert into tbl_user(uid,pwd,date_added,last_modified,status,userinfo,fullname)values(N'{$email}',N'{$password}',N'{$dateadd}',N'{$diachi}',N'{$phone}',N'{$gioitinh}',N'{$ngaysinh}')";
			//id,uid,pwd,date_added,last_modified,status,userinfo,fullname
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				$err [] = "Thêm thành công";
			} else {
				$err [] = "Msql query lỗi";
			}
		}
		return $err; 
	}
	function UpdateAccount($txtname,$txtusermane,$txtpassword,$txtrepassword,$text,$cbstatus,$userid)
	{
		//echo $txtname."</br>";
		//echo $txtusermane."</br>";
		//echo $txtpassword ."</br>";
		//echo $txtrepassword."</br>";echo $text."</br>";echo $cbstatus."</br>";echo $userid."</br>";
		$kw=new KW_Hook();
		$err=array();
		$dateadd = mktime ();
		if(strlen($txtname)<6)
		{ 
			 
			 $err []= "Họ tên bạn nhập quá ngắn";
		}
		if(strlen($txtusermane)<6)
		{
			$err []= "User name bạn nhập quá ngắn";
		}
		if($txtpassword!=$txtrepassword)
		{
			$err []= "Mật khẩu nhập lại không chính xác";
		}
		//print_r($err);exit();
		$txtpassword=md5(md5($txtpassword));
		if(count($err)==0)
		{
			//echo "trong ham";exit();
			//$txtname,$txtusermane,$txtpassword,$txtrepassword,$text,$cbstatus,$userid
			$str= "update tbl_user set uid ='".$txtusermane."' ,	last_modified ='".$dateadd."' ,status ='".$cbstatus.
			"',userinfo ='".$text."' ,fullname ='".$txtname."' where id= '".$userid."'";
			$result= $kw->AccessNoneReturn($str);
			//id,uid,pwd,date_added,last_modified,status,userinfo,fullname
			if($result)
			{
				$err[]= "Bạn đã thay đổi thành công ";
			}
			else 
			{
				$err []= "Thay đổi thất bại";
			}
			
		}
		//print_r($err);exit();
		return $err;
	}
	
	
	function INSERT($str) {
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function GetUserbyPwd($pwd) {
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_user', "pwd='" . $pwd . "'" );
		$row = mysql_fetch_array ( $user );
		return $row ['uid'];
	}
	function login($email, $pass) {
		$userlogin = $this->GetUserbyEmail ( $email );
		$pass = md5 ( md5 ( $pass ) );
		if ($pass == $userlogin [2]) {
			$_SESSION ['userlogin'] = array ($email, $userlogin [6] );
		} else {
			$err = "Sai Email hoặc sai mật khẩu";
		}
		return $err;
	}
	function GetUserbyEmail($email) {
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_user', "uid='" . $email . "'" );
		$row = mysql_fetch_array ( $user );
		if ($row ['uid'] != "") {
			$arr = array ($row ['Id'], $row ['uid'], $row ['pwd'], $row ['date_added'], $row ['last_modified'], $row ['status'], $row ['hovaten'], $row ['ans'] );
		} else {
			$arr = array ();
		}
		return $arr;
	}
	function GetUserLitmit($where) {
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_user', $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		if ($rows > 0) {
			for($i = 0; $i < $rows; $i ++) {
				$row = mysql_fetch_array ( $user );
				$arr [] = array ($row ['Id'], $row ['uid'], $row ['pwd'], $row ['date_added'], $row ['last_modified'], $row ['status'], $row ['fullname'], $row ['userinfo'] );
			}
		} else {
			$arr = array ();
		}
		return $arr;
	}	
	function CountUser($where) {
		$kw = new KW_Hook ( );
		$row = $kw->CountRecord ( 'tbl_user', $where );
		return $row;
	}
	function DeletePartner($id)
	{ 
		$kw = new KW_Hook ( );
		$str = "delete from tbl_user where Id='" . $id . "'";	
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}

	function CreateAccount_1($uid,$pwd,$txtrepassword,$status,$userinfo,$fullname) {
//		echo "Tài khoản : ".$uid."</br>";
//		echo "Mật khẩu : ".$pwd."</br>";
//		echo "Mật khẩu : ".$txtrepassword."</br>";
//		echo "Trạng thái người quản trị : ".$status."</br>";
//		echo $userinfo."</br>";
//		echo "Full name : ".$fullname."</br>";  
		$kw = new KW_Hook ( );
		$dateadd = mktime (); 
		$err = array ();
		//if (! $kw->checkemail ( $uid ))
			//$err [] = "email không hợp lệ";
		//$row = $this->GetUserbyEmail ( $email );				 
		$row = $this->GetUserbyId ( $uid );		
		if (count ( $row ) > 0) 
		{ 
			$err [] = "Tài khoản này đã tồn tại";
		}
		if (strlen ( trim ( $fullname ) ) < 6)
			$err [] = "Họ và tên quá ngắn";
		if (strlen ( trim ( $pwd ) ) < 6)
			$err [] = "Mật khẩu quá ngắn";
		if ($pwd != $txtrepassword)
			$err [] = "Mật khẩu nhập lại không chính xác";
		$pwd = md5 ( md5 ( $pwd ) ); 
		if (count ( $err ) == 0) { 
			$str = "insert into tbl_user(uid,pwd,date_added,status,userinfo,fullname)values('".$uid."','".$pwd."','".$dateadd."','".$status."','".$userinfo."',N'".$fullname."')";
			 //efficiency
			 //echo $str;exit();
		    //echo $str;exit();
			//id,uid,pwd,date_added,last_modified,status,userinfo,fullname
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				$err [] = "Bạn đã thêm thành công";
				//echo "them thanh cong";exit();
			} else {
				$err [] = "Msql query lỗi";
				//echo "bo loi ";exit();
			}
		}  
		return $err;
	}	
	function GetUserbyId($email) {
		 
		$kb = new KW_Hook ( );
		$user = $kb->getRecord ( 'tbl_user', "uid='" . $email . "'" );
		$row = mysql_fetch_array ( $user );
		if ($row ['uid'] != "") {
			$arr = array ($row ['Id'], $row ['uid'], $row ['pwd'], $row ['date_added'], $row ['last_modified'], $row ['status'], $row ['hovaten'], $row ['ans'] );
		} else {
			$arr = array ();
		}
		return $arr;
	}
}
?> 