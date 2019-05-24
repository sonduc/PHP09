<?php
include_once pathtodir.'/lib/lib.php';
class FAQS{
	function GetFAQs($where){
		
		$kw=new KW_Hook();
		$result=$kw->getRecord('tbl_faq',$where);		
		$rows=mysql_affected_rows();
		$arr=array();
		for($i=0;$i<$rows;$i++)
		{		
			$row=mysql_fetch_array($result);	
			$faq_answer=$row['faq_answer'];
			$faq_answer_s=$kw->SubString($row['faq_answer'],25);
			$faq_question=$row['faq_question'];
			$faq_id=$row['faq_id'];
			$faq_status=$row['faq_status'];
			$faq_sortorder=$row['faq_sortorder'];
			$faq_dateadded=$row['faq_dateadded'];
			$faq_categoriesid=$row['faq_categoriesid'];
			$id_product=$row['id_product'];
			$fullname=$row['fullname'];
			$email=$row['email'];
			$arr[]=array($faq_id,$faq_answer,$faq_answer_s,$faq_question,$faq_status,$faq_sortorder,$faq_dateadded,$faq_categoriesid,$id_product,$email,$fullname);				
		}
		return $arr;
	}
}
?>