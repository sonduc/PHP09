<?php 
include_once 'models/Category.php';

class CategoryController{
	public $category_model;

	public function __construct(){
		$this->category_model = new Category();
	}
	// danh sach danh muc
	public function list(){
		$data = $this->category_model->getAll();

		include_once 'views/category/list.php';
	}
	public function detail(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			
			$data = $this->category_model->products($id);
			
		}
		include_once 'views/category/listProduct.php';
	}
}
?>