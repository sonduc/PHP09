<?php
class Comment {
	function DeleteComment($id) {
		$str = "delete from tbl_comment where idcomment='" . $id . "'";
		$kw = new KW_Hook ( );
		$result = $kw->AccessNoneReturn ( $str );
		return $result;
	}
	function InsertComment($fullname, $email, $title, $content, $rate, $idtopic) {
		$err = array ();
		if (strlen ( trim ( $title ) ) < 2) {
			$err [] = "Tiêu đề quá ngắn";
		}
		if (strlen ( trim ( $content ) ) < 20) {
			$err [] = "Nội dung quá ngắn";
		}
		if (count ( $err ) == 0) {
			$kw = new KW_Hook ( );
			$str = "insert into tbl_comment(fullname,email,title,comment,iprequest,date_added,idtopic,status) values(N'" . $fullname . "','" . $email . "',N'" . $title . "',N'" . $content . "','" . $rate . "','" . mktime () . "','" . $idtopic . "','1')";
			$result = $kw->AccessNoneReturn ( $str );
			if ($result) {
				$err [] = "Thêm thành công";
			} else
				$err [] = "Thêm không thành công";
		}
		return $err;
	}
	function GetComment($where) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( "tbl_comment", $where );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$arr [] = array ($row ['idcomment'], $row ['comment'], $row ['fullname'], $row ['email'], $row ['status'], $row ['idtopic'], $row ['date_added'], $row ['iprequest'], $row ['title'] );
			//$arr[]=array($row['idcomment']0,$row['comment']1,$row['fullname'2],$row['email']3,$row['status']4,$row['idtopic']5,$row['date_added']6,$row['iprequest']7,$row['title']8);
		}
		return $arr;
	}
	function GetCommentByIdtopic($idtopic) {
		$kw = new KW_Hook ( );
		$result = $kw->getRecord ( "tbl_comment", "status=1 and idtopic='" . $idtopic . "'" );
		$rows = mysql_affected_rows ();
		$arr = array ();
		for($i = 0; $i < $rows; $i ++) {
			$row = mysql_fetch_array ( $result );
			$arr [] = array ($row ['idcomment'], $row ['comment'], $row ['fullname'], $row ['email'], $row ['status'], $row ['idtopic'], $row ['date_added'], $row ['iprequest'], $row ['title'] );
			//$arr[]=array($row['idcomment']0,$row['comment']1,$row['fullname'2],$row['email']3,$row['status']4,$row['idtopic']5,$row['date_added']6,$row['iprequest']7,$row['title']8);
		}
		return $arr;
	}
}
?>