<?php 
include_once 'Model.php';

class Salesmans extends Model
{
	public $table ='salesmans';
	public $primary_key ='id';
	/*function __construct()
	{
		
	}*/
	public function login($user,$password){
		
	}
	public function checkUser($id){
		$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key."=".$id;

		$result = $this->conn->query($query);

		return $result; 
	}
	public function checkLogin($email,$password){
		
		$query = "SELECT * FROM ".$this->table." WHERE email = '".$email."' AND password = '".$password. " ' ";
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
}
?>