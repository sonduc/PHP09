<?php
class Email
{
	function AddEmail($email)
	{
		$kw=new KW_Hook();
		if($kw->checkemail($email))
		{
			$countemail=$this->countEmail("email='".$email."'");
			if($countemail>0)
			{
				$mess=array(0,"Cám ơn bạn đã sử dụng dịch vụ này. Email các bạn đã tồn tại trong hệ thống chúng tôi");
			}
			else{
				$str="insert into tbl_email(email,date_add,date_modify) values('".$email."','".mktime()."','".mktime()."')";
				$result=$kw->AccessNoneReturn($str);
				if($result)
				{
					$mess=array(1,"Chúng tôi đã nhận được email của bạn. Cám ơn các bạn đã sử dụng dịch vụ.");
				}
				else 
				{
					$mess=array(0,"Thêm không thành công.");
				}
			}
		}
		else
		{
			$mess=array(0,"Email không hợp lệ");
		}
		return $mess;
	}
	function GetEmail($where)
	{
		$kw=new KW_Hook();
		$result=$kw->getRecord("tbl_email",$where);	
		$rows=mysql_affected_rows();
		$arr=array();
		for($i=0;$i<$rows;$i++)
		{
			$row=mysql_fetch_array($result);
			$arr[]=array($row['idemail'],$row['email'],$row['date_add'],$row['date_modify']);
		}
		return $arr;
	}
	function countEmail($where)
	{
		$kw=new KW_Hook();
		$result=$kw->CountRecord('tbl_email',$where) ;
		return $result;
	}
}
?>