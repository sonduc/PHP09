<?php 
include_once 'Model.php';

class Products extends Model{
	public $table ='products';
	public $primary_key ='id';

	public function findProduct($id){
		$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = ".$id;

		$result = $this->conn->query($query);
	
		return $result; 
	}
}

?>