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
		$checkSl = (int)$data['amount'];
		
		if($checkId==null && $checkSl>0){
			$result = $this->product_model->insert($data);
			setcookie('msg_addProduct', '!Thêm thông tin sản phẩm thành công', time() + 3, '/');
			header('Location: ?mod=products&act=list');
		}else{
			if($checkSl<0){
				setcookie('msg_sl','Số lượng phải lớn hơn 0', time()+3, '/');
			}
			header('Location: ?mod=products&act=add');
		}
		
		
	}
	public function update(){
		$id = $_POST['id'];
		$data = array();
		$data['name'] = $_POST['name'];
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
			$link = $_POST['image'];
		}

		$data['image'] = $link;
		$checkSl = (int)$data['amount'];

		if($checkSl>0){
			$result = $this->product_model->update($data,$id);
			setcookie('msg_updateProduct', '!Sửa thông tin sản phẩm thành công', time() + 3, '/');
			header('Location: ?mod=products&act=list');
		}else{
			if($checkSl<0){
				setcookie('msg_sl','Số lượng phải lớn hơn 0', time()+3, '/');
			}
			header("Location: ?mod=products&act=edit&id=".$id);
		}

	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->product_model->find($id);

		/*	echo $data['price'];
			echo $data['name'];
			die;*/
		}
		include_once 'views/product/editSp.php';
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->product_model->destroy($id);
			setcookie('msg_deleteProduct', '!Xóa thông tin sản phẩm thành công', time() + 3, '/');
		}

		header('location: ?mod=products&act=list');
	}
/*	public function ShowSp(){
		$data = $this->product_model->getAll();
		include_once 'views/product/ShowSp.php';
	}
	public function add_to_cart(){
		session_start();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$product = $this->product_model->findProduct($id)->fetch_assoc();

			if (isset($_SESSION['cart'][$id])) {
				$_SESSION['cart'][$id]['amount']++;
			}else{
				$_SESSION['cart'][$id]= $product;
				$_SESSION['cart'][$id]['amount']= 1;
			}
			if(isset($_GET['add']) && $_GET['add'] == true){
				header('location: ?mod=products&act=ShowSp');
			}else{
				header('location: ?mod=products&act=cartSp');
			}
		}
	}
	public function cartSp(){
		include_once 'views/product/cartSp.php';
	}
	public function deleteCart(){
		session_start();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			if (isset($_SESSION['cart'][$id])) {

				if ($_SESSION['cart'][$id]['amount'] >1) {
			// khi san pham ton tai trong gio hang voi so luong > 1 don vi
			// // thuc hien tru di 1 don vi cua san pham
					$_SESSION['cart'][$id]['amount']--;
					//header('Location:?mod=products&act=cartSp');
				}else{
					unset($_SESSION['cart'][$id]);
				}
			}
			if(isset($_GET['delete']) && $_GET['delete'] == true){
				unset($_SESSION['cart'][$id]);
			}
		}

		header('Location: ?mod=products&act=cartSp');
	}*/
}
?>