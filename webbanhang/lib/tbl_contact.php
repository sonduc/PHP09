<?php
class Contact {
	function count($where) {
		$kw = new KW_Hook ( );
		$row = $kw->CountRecord ( 'tbl_contact', $where );
		return $row;
	}
	function ViewContact($where) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( 'tbl_contact', $where );
		$arr = array ();
		$rows = mysql_affected_rows ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$arr [] = array ($row ['idcontact'], $row ['fullname'], $row ['email'], $row ['content'], $row ['date_add'], $row ['dienthoai'], $row ['status'], $row ['title'] );
		}
		return $arr;
	}
	function DEL($id) {
		$str = "delete from tbl_contact where idcontact='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function sentContact($name, $email, $content, $dienthoai, $tieude) {
		$kw = new KW_Hook ( );
		$err = array ();
		if (trim ( $name ) != "") {
			$checkemail = $kw->checkemail ( $email );
			if ($checkemail) {
				if (trim ( $content ) != "") {
					$result = $this->insertContact ( $name, $email, $content, $dienthoai, $tieude );
					if ($result) {
						$kw->sendmail ( $email, adminemail, "Liên hệ: " . $tieude, $content );
					} else
						$err [] = "Lỗi Khi thêm dữ liệu";
				} else
					$err [] = "Nội dung quá ngắn";
			} else
				$err [] = "Email không hợp lệ";
		} else
			$err [] = "Họ và tên quá ngắn";
		return $err;
	}
	function insertContact($name, $email, $content, $dienthoai, $tieude) {
		$kw = new KW_Hook ( );
		$str = "insert into tbl_contact(title,status,fullname,email,content,date_add,dienthoai) values(N'" . $tieude . "',1,N'" . $name . "',N'" . $email . "',N'" . $content . "',N'" . mktime () . "',N'" . $dienthoai . "')";
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function UpdateStatus($status, $id) {
		$kw = new KW_Hook ( );
		$str = "update tbl_contact set status='" . $status . "' where idcontact='" . $id . "'";
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
}
?>