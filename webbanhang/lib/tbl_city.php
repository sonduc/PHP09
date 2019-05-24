<?php
class City{
	function GetCiTy($where)
	{
		$kw=new KW_Hook();
		$result=$kw->getRecord('tbl_city',$where);
		$rows=mysql_affected_rows();
		$arr=array();
		for($i=0;$i<$rows;$i++)
		{
			$row=mysql_fetch_array($result);
			$arr[]=array($row['idcity'],$row['cityname']);	
		}
		return $arr;
	}
}
?>