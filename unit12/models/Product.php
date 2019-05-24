<?php 
include_once 'Connection.php';
class Product{
	public $product_conn;
	public function __construct(){
		$connection = new Connection();
		$this->product_conn = $connection->conn;
	}

	public function getAll(){
		$data = array();

		$query = "SELECT * FROM products";

		$result = $this->product_conn->query($query);
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	public function find($id){
		$query = "SELECT * FROM products WHERE id=".$id;

		$result = $this->product_conn->query($query);

		$product = $result->fetch_assoc();
		return $product;
	}
	public function insert($name,$color,$price,$created_at){
		$query ="INSERT INTO products (name,color,price,created_at) 
		VALUES('".$name."','".$color."','".$price."','".$created_at."')";

		setcookie('add', "Thêm thành công!", time()+3);
		return $this->product_conn->query($query);
	}
	public function destroy($id){
		$query = "DELETE FROM products WHERE id=".$id;

		setcookie('delete', "Xóa thành công !", time()+3);
		return $this->product_conn->query($query);
	}
	public function update($data){
		$query ="UPDATE products SET name= '".$data['name']."',
		color= '".$data['color']."',price= '".$data['price']."' WHERE id=".$data['id']; 

		setcookie('update', "Cập nhật thành công!", time()+3);
		return $this->product_conn->query($query);
	}
}
?>