<?php 
include_once 'Model.php';

class Clients extends Model
{
	public $table ='clients';
	public $primary_key ='id';
	/*function __construct()
	{
		
	}*/

	public function checkUser($id){
		$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key."=".$id;

		$result = $this->conn->query($query);

		return $result; 
	}
	public function ktra($String){
		for($i=0; $i<10; $i++){
			if(strstr($String,$i."") == true || empty($String)){
				return true;
			}
		}
		return false;
	}

	public function checkEmail1($email, $e){
		$query = "SELECT email FROM ".$this->table." WHERE email != '".$email."' group by email HAVING email = '".$e."'";

		// echo $query;
		// die;
		$result = $this->conn->query($query);

		return $result->fetch_assoc(); 
	}
}
?>