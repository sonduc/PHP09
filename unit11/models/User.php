<?php 
include_once 'Connection.php';
class User{
	public $user_conn;
	public function __construct(){
		$connection = new Connection();
		$this->user_conn = $connection->conn;
	}

	public function getAll(){
		$data = array();

		$query = "SELECT * FROM users";

		$result = $this->user_conn->query($query);
		while ($row = $result->fetch_assoc()) {
			if ($row['status']==1) {
				$row['status'] = "Active";
			}else{
				$row['status'] = "Deactive";
			}

			$data[] = $row;
		}
		return $data;
	}
	public function find($id){
		$query = "SELECT * FROM users WHERE id=".$id;

		$result = $this->user_conn->query($query);

		$user = $result->fetch_assoc();
		return $user;
	}
	public function insert($name,$email,$moblie,$password,$created_at,$status){
		$query = "INSERT INTO users (name,email,moblie,password,created_at,status) 
		values('$name','$email','$moblie','$password','$created_at',1)  ";

		
		return $this->user_conn->query($query);
	}
	public function destroy($id){
		$query = "DELETE FROM users WHERE id=".$id;

		return $this->user_conn->query($query);
	}
	public function update($data){
		$query ="UPDATE users SET name= '".$data['name']."',
		email= '".$data['email']."',moblie= '".$data['moblie']."' WHERE id=".$data['id']; 

		return $this->user_conn->query($query);
	}
}
?>