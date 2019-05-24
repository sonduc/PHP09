<?php
include_once pathtodir. '/lib/lib.php';
class PartnerClass
{
	function getArrayCategory($split="==",$id){
		$kw=new KW_Hook(); 
	    $ret = array();
	    $where= " status=1 and parent=".$id;   		
		$result =$kw->getRecord('tbl_partner',$where);	
		while($row=mysql_fetch_array($result)){		
			$ret[] = array($row['partner_id'],$split.$row['partner_name']);
			$getsub =$kw->getRecord('tbl_partner'," status=1 and parent=".$row['partner_id']);	
			$rows=mysql_affected_rows();
			for($j=0;$j<$rows;$j++)
			{
				$sub=mysql_fetch_array($getsub);
				$ret[]=array($sub["partner_id"],$split.$split.$sub["partner_name"]);
			}
		}
		return $ret;
	}
	function comboCategory($name, $arrSource, $class, $index, $all){
		
		$name = $name != '' ? $name : 'cmbParent';
		if(!$arrSource){return false;}
		$out = '';
		$out .= '<select size="1" name="'.$name.'" class="'.$class.'">';
        if($all==1)	$out .= '<option value="0">[Không chọn]</option>';
		$cats = $arrSource;
		foreach ($cats as $cat){		
			$selected = $cat[0] == $index ? 'selected' : '';
			$out .= '<option value="'.$cat[0].'" '.$selected.'>'.$cat[1].'</option>';
		}
		$out .= '</select>';
		return $out;
	}
	function GetCategory($where)
	{
		$kw=new KW_Hook();
		$result=$kw->getRecord('tbl_partner',$where);
		$rows=mysql_affected_rows();
		$arr=array();
		for($i=0;$i<$rows;$i++)
		{
			$row=mysql_fetch_array($result);
			$arr[]=array($row['partner_id'],$row['partner_name'],$row['partner_image'],$row['parent'],$row['sort'],$row['status'],$row['date_added'],$row['last_modified'],$row['partner_description'],$row['useradd']);			
		}
		return $arr;
	}
	function CountPartner($where)
	{
		$kw=new KW_Hook();
		$num=$kw->CountRecord('tbl_partner',$where);
		return $num;
	}
	function InsertPartner($partnerName,$partnerinfo,$cate,$partner_image,$sort,$username)
	{		
			
		$kw=new KW_Hook();
		$r=$kw->checkUpload($partner_image,".jpg;.png;.jpeg;.gif",500*1024,0);	
		if($r=="")
		{		
			$str="insert into  tbl_partner(partner_name,partner_image,parent,sort,status,date_added,last_modified,partner_description,useradd) values(N'".$partnerName."',N'".$partner_image."',N'".$cate."',N'".$sort."','1','".mktime()."','".mktime()."',N'".$partnerinfo."','".$username."')"; 			
			$result=$kw->AccessNoneReturn($str);
			
			if($result)
			{
				
				if(!is_dir(pathtodir."/partner"))
				{
					mkdir(pathtodir."/partner");
					chmod(pathtodir."/partner",777);
				}	
							
				$id=mysql_insert_id();
				$name=$id."_".str_replace(' ','-',$partner_image['name']); 
				$result=$kw->makeUpload($partner_image,pathtodir."/partner/".$name);				
				if($result)
				{					
					$result=$this->UpdatePartnerImage($name,$id);
					return $result;
				}
				else 
				{
					return FALSE;
				}								
			}
			return $result;
		}
		else
			return FALSE;
	}
	function UpdatePartner($partnerName,$partnerinfo,$partnerCate,$partner_image,$sort,$partner_id,$username)
	{		
		$str="update tbl_partner set partner_name=N'".$partnerName."',parent=N'".$partnerCate."',sort=N'".$sort."',status=1,date_added='".mktime()."',last_modified='".mktime()."',partner_description=N'".$partnerinfo."',useradd='".$username."' where partner_id='".$partner_id."'"; 
		$kw=new KW_Hook();
		$r=$kw->checkUpload($partner_image,".jpg;.png;.jpeg;.gif",500*1024,0);	
		if($r=="")
		{
			$result=$kw->AccessNoneReturn($str);
			if($result&&$partner_image['size']>0)
			{
				$selectpartner=$kw->getRecord('tbl_partner',"partner_id='".$partner_id."'");
				$image=$selectpartner[0][2];
				if(file_exists(pathtodir."/partner/".$image))
				{
					unlink(pathtodir."/partner/".$image);
				}			
				$name=$partner_id."_".str_replace(' ','-',$partner_image['name']); 
				$result=$kw->makeUpload($partner_image,pathtodir."/partner/".$name);				
				if($result)
				{					
					$result=$this->UpdatePartnerImage($name,$partner_id);
					return $result;
				}
				else 
				{
					return FALSE;
				}								
			}
			return $result;
		}
		return $result;
	}
	function UpdatePartnerImage($partner_image,$partner_id)
	{		
		$str="update  tbl_partner set partner_image='".$partner_image."' where partner_id='".$partner_id."'";
		$kw=new KW_Hook();
		$result=$kw->AccessNoneReturn($str);
		return $result;
	}
	function DeletePartner($partner_id)
	{		
		$str="update tbl_partner set status=0 where partner_id='".$partner_id."'";
		$kw=new KW_Hook();
		$result=$kw->AccessNoneReturn($str);
		return $result;
	}
}
?>