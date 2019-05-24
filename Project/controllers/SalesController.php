<?php 
include_once 'models/Sales.php';
class SalesController{
	public $sales_model;
	public function __construct(){
		$this->sales_model = new Sales();
	}

	public function ShowSp(){
		$data = $this->sales_model->getAll();
		include_once 'views/sales/ShowSp.php';
	}
	public function add_to_cart(){
		session_start();
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$product = $this->sales_model->findProduct($id);

			if (isset($_SESSION['cart'][$id])) {
				$_SESSION['cart'][$id]['amount']++;
				/*$_SESSION['cart'][$code]['price'] += $_SESSION['cart'][$code]['price'];*/
			}else{
				$_SESSION['cart'][$id]= $product;
				$_SESSION['cart'][$id]['amount']= 1;
			}
			if(isset($_GET['add']) && $_GET['add'] == true){
				header('location: ?mod=sales&act=ShowSp');
			}else{
				header('location: ?mod=sales&act=cartSp');
			}
		}
	}

	public function add_to_cart_ajax($id){
		session_start();
			$product = $this->sales_model->findProduct($id);

			if (isset($_SESSION['cart'][$id])) {
				$_SESSION['cart'][$id]['amount']++;
				/*$_SESSION['cart'][$code]['price'] += $_SESSION['cart'][$code]['price'];*/
			}else{
				$_SESSION['cart'][$id]= $product;
				$_SESSION['cart'][$id]['amount']= 1;
			}
		
	}

	public function cartSp(){
		include_once 'views/sales/cartSp.php';
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

		header('Location: ?mod=sales&act=cartSp');
	}
	public function fromCheck(){
		include_once 'views/sales/checkClient.php';
	}
	public function checkClient(){
		if(isset($_POST['submit'])){
			$data['email'] = $_POST['email'];
			//$data['password'] = $_POST['password'];

			$checkS = $this->sales_model->checkLogin($data['email']);


			if($checkS->fetch_assoc() != null){

				$client = $this->sales_model->
				checkLogin($data['email'])->fetch_assoc();

				$_SESSION['client'] = $client;
				include_once 'views/sales/bill.php';
			}else{
				setcookie('msg_fromCheck', 'Khách hàng không tồn tại!', time() + 3,'/');
				header("location: ?mod=sales&act=fromCheck");
			}
		}else{
			include_once 'views/sales/checkSaleman.php';
		}
	}
	public function bill($id_client){
		$data = array();
		$data2 = array();
		foreach ($_SESSION['cart'] as $product => $value){
			$data = array();
			$data['id_product'] = $value['id'];
			$data['amount'] = $value['amount'];
			$data['unit_price'] = $value['price'];
			$data['price'] = ($value['price']* $value['amount']);
			$data['created_at'] = date('Y-m-d H:i:s');

			$data2['id_client'] = $id_client;
			$data2['created_at'] = date('Y-m-d H:i:s');
			$data2['price'] = ($value['price']* $value['amount']);
			$this->sales_model->insertDetail_bill($data);
			$this->sales_model->insertBill($data2);
		}	
		setcookie('msg_addSql', 'Mua hàng thành công!', time() + 3,'/');
		unset($_SESSION['cart']);
		header("location: ?mod=sales&act=ShowSp");
	}
	public function manageBill(){
		$data = $this->sales_model->getBill();
		if($data != null){
			include_once 'views/sales/manage.php';
		
		}else{
			include_once 'views/sales/manage.php';
		}
	}
}

?>