<?php 
include_once 'Connection.php';

class Model{
	public $table;
	public $primary_key;
	public $conn;

	public function __construct(){
		$connection = new Connection();
		$this->conn = $connection->conn;
	}

	public function getAll(){
		$data = array();

		$query = "SELECT * FROM ".$this->table;

		$result = $this->conn->query($query);
		while ($row = $result->fetch_assoc()) {

			$data[] = $row;
		}
		return $data;
	}
	public function find($id){
		$query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key."=".$id;

		$result = $this->conn->query($query);

		$user = $result->fetch_assoc();
		return $user;
	}
	public function insert($data){
		$field ="";
		$values ="";
		foreach ($data as $key => $value) {
			//echo "<br>$value";
			$field .= $key.',';
			$values .= "'".$value."',";
		}
		$field = trim($field,',');
		$values = trim($values,',');

		$query ="INSERT INTO ".$this->table." (".$field.") VALUES (". $values ." )";
		//echo "<br> $query";

		return $this->conn->query($query);
	}

	public function destroy($id){
		$query = "DELETE FROM ".$this->table." WHERE ".$this->primary_key."=".$id;

		return $this->conn->query($query);
	}
	public function update($data,$id){

		$arr ="";
		foreach ($data as $key => $value) {
			//echo "<br>$value";
			$arr .= $key.' = '."'".$value."',";
		}
		$arr = trim($arr,',');
		//echo "<br>".$arr;
		$query ="UPDATE ".$this->table." SET ".$arr." WHERE ".$this->primary_key."=".$id;
		//echo $query;
		return $this->conn->query($query);
		
	}
/*	public function update($data){
		$query ="UPDATE users SET name= '".$data['name']."',
		email= '".$data['email']."',moblie= '".$data['moblie']."' WHERE id=".$data['id']; 

		return $this->user_conn->query($query);
	}*/
}
?>