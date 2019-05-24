<?php 
include_once 'models/Products.php';
class ProductController{
	public $product_model;
	public function __construct(){
		$this->product_model = new Products();
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
		$data = array();

		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['slug'] = $_POST['slug'];
		$data['category_id'] = $_POST['category_id'];
		$data['update_id'] = date('Y-m-d H:i:s');

		$status = $this->product_model->insert($data);

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
		$id = $_POST['id'];
		if(isset($_POST['submit'])){
		
			$data['name'] = $_POST['name'];
			$data['slug'] = $_POST['slug'];
			$data['category_id'] = $_POST['category_id'];
		}
		$this->product_model->update($data,$id);
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