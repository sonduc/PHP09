<?php
class MediaCategory {
	function  GetCategory($where)
	{
		$kw=new KW_Hook();
		$category=$kw->getRecord('tbl_media_category',$where);
		$rows=mysql_affected_rows();
		$arr=array();
		for($i=0;$i<$rows;$i++)
		{
			$row=mysql_fetch_array($category);
			$arr[]=array($row['categories_id'],$row['parent'],$row['categories_name'],$row['status'],$row['doc_categories_desc'],$row['date_added'],$row['code'],$row['last_modified'],$row['useradd'],$row['sort'],$row['image']);
		}
		return $arr;
	}
	function  CountCategory($where)
	{
		$kw=new KW_Hook();
		$category=$kw->CountRecord('tbl_media_category',$where);
		return $category;		
	}
	function getArrayCategory($split="=="){
		$kw=new KW_Hook(); 
	    $ret = array();
	    $where= " parent=0 and status=1";   		
		$result =$kw->getRecord('tbl_media_category',$where);	
		while($row=mysql_fetch_array($result)){		
			$ret[] = array($row['categories_id'],$split.$row['categories_name']);
			$getsub =$kw->getRecord('tbl_product_category',"  status=1 and parent=".$row['categories_id']);	
			$rows=mysql_affected_rows();
			for($j=0;$j<$rows;$j++)
			{
				$sub=mysql_fetch_array($getsub);
				$ret[]=array($sub['categories_id'],$split.$split.$sub['categories_name']);
			}
		}
		return $ret;
	}
function comboCategory($name, $arrSource, $class, $index, $all){
		
		$name = $name != '' ? $name : 'cmbParent';
		if(!$arrSource){return false;}
		$out = '';
		$out .= '<select size="1" name="'.$name.'" class="'.$class.'">';
		$out .= $all==1 ? '<option value="0">[Không chọn]</option>' : '';
		$cats = $arrSource;
		foreach ($cats as $cat){		
			$selected = $cat[0] == $index ? 'selected' : '';
			$out .= '<option value="'.$cat[0].'" '.$selected.'>'.$cat[1].'</option>';
		}
		$out .= '</select>';
		return $out;
	}
	function DEL($id)
	{		
		$result=$this->GetCategory("categories_id='".$id."'");
		if(count($result)>0)
		{
			$media=$result[0][10];
			if(file_exists(pathtodir."mediatcategory/".$media)&&$media!="")
			{
				unlink(pathtodir."mediatcategory/".$media);				
			}
			$str="delete from tbl_media_category where categories_id='".$id."'"; 
			$kw=new KW_Hook();
			$kw->AccessNoneReturn($str);
		}		
	}
	function UpdateCategoryImage($partner_image,$partner_id)
	{		
		$str="update  tbl_media_category set image='".$partner_image."' where categories_id='".$partner_id."'";
		$kw=new KW_Hook();
		$result=$kw->AccessNoneReturn($str);
		return $result;
	}
	function InsertCategory($CategoryName,$Categoryinfo,$cate,$Category_image,$sort,$username,$code)
	{		
			
		$kw=new KW_Hook();
		$r=$kw->checkUpload($Category_image,".jpg;.png;.jpeg;.gif",500*1024,0);	
		if($r=="")
		{		
			$str="insert into  tbl_media_category(categories_name,image,parent,sort,status,date_added,last_modified,	doc_categories_desc,useradd,code) values(N'".$CategoryName."',N'".$Category_image."',N'".$cate."',N'".$sort."','1','".mktime()."','".mktime()."',N'".$Categoryinfo."','".$username."','".$code."')"; 			
			$result=$kw->AccessNoneReturn($str);			
			if($result)
			{
				
				if(!is_dir(pathtodir."mediatcategory"))
				{
					mkdir(pathtodir."mediacategory");
					chmod(pathtodir."mediacategory",777);
				}								
				$id=mysql_insert_id();
				$name=$id."_".str_replace(' ','-',$Category_image['name']); 
				$result=$kw->makeUpload($Category_image,pathtodir."mediacategory/".$name);				
				if($result)
				{					
					$result=$this->UpdateCategoryImage($name,$id);
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
}
?>