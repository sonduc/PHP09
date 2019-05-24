<?php 
include_once 'Model.php';

class Category extends Model{
	public $table ='categories';
	public $primary_key ='id';
	
	public function products($id_category){
		$data = array();

		$query = "SELECT * FROM products WHERE category_id = ".$id_category;


		$result = $this->conn->query($query);
		while ($row = $result->fetch_assoc()) {

			$data[] = $row;
		}
		return $data;
	}
}
?>