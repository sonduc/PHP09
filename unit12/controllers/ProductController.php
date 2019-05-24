<?php 
include_once 'models/Product.php';
class ProductController{
	public $product_model;
	public function __construct(){
		$this->product_model = new product();
	}
	public function detail(){
		$id = $_GET['id'];
		$product = $this->product_model->find($id);
		include_once 'views/product/detail.php';
	}

	public function list(){
		
		$data = $this->product_model->getAll();
		// echo "<pre>"; 
		// print_r($data);
		// echo "</pre>"; 
		include_once 'views/product/list.php';
	}
	public function add(){
		include_once 'views/product/add.php';
	}
	public function store(){
		$name = $_POST['name'];
		$color = $_POST['color'];
		$price = $_POST['price'];
		$created_at = date('Y-m-d H:i:s');

		$status = $this->product_model->insert($name,$color,$price,$created_at);

		header('Location: ?mod=products');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $this->product_model->find($id);

			include_once 'views/product/edit.php';
		}
	}
	public function update(){
		$data = array();
		if(isset($_POST['submit'])){
			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['color'] = $_POST['color'];
			$data['price'] = $_POST['price'];
		}
		$this->product_model->update($data);
		header('location: ?mod=products');
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->product_model->destroy($id);
		}
		header('location: ?mod=products');
	}
	public function error(){
		echo "product-Error";
	}
}

?>