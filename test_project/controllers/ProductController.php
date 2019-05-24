<?php 
include_once 'models/Products.php';
class ProductController{
	public $product_model;
	public function __construct(){
		$this->product_model = new Products();
	}
	public function list(){
		$data = $this->product_model->getAll();
	/*	echo "<pre>"; 
		print_r($data);
		echo "</pre>";*/
		include_once 'views/product/listSp.php';
	}
	public function detail(){
		$id = $_GET['id'];
		$product = $this->product_model->find($id);
		include_once 'views/product/detailSp.php';
	}
	public function search(){
		
	}
	public function add(){
		include_once 'views/product/addSp.php';
	}
	public function store(){
		$data = array();
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['amount'] = $_POST['amount'];
		$data['price'] = $_POST['price'];
		if(isset($_FILES["image"]["error"])) // kiem tra xem co loi khong
		{
			// Di chuyển file vào thư mục mong muốn
			// move_upload_file('Link ảnh hiện tại','link ảnh mới')
			move_uploaded_file($_FILES["image"]["tmp_name"],
				"upload/products/". $_FILES["image"]["name"]);

			$link = $_FILES["image"]["name"];
		}
		else{
			$msg ="<p class=\"text-danger\">File ảnh không hợp lệ !</p>" ;
		}

		$data['image'] = $link;

		$result = $this->product_model->insert($data);
		header('Location: ?mod=products');
	}
	public function update(){
		$id = $_POST['id'];
		$data = array();
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['amount'] = $_POST['amount'];
		$data['price'] = $_POST['price'];
		if(isset($_FILES["image"]["error"]))
		{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],
				"upload/products/". $_FILES["image"]["name"]);

			$link = $_FILES["image"]["name"];
		}
		else{
			$msg ="<p class=\"text-danger\">File ảnh không hợp lệ !</p>" ;
		}

		$result = $this->product_model->update($data,$id);

		header('Location: ?mod=products');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->product_model->find($id);
		}
		include_once 'views/product/editSp.php';
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->product_model->destroy($id);
		}

		header('location: ?mod=products');
	}
}
?>