<?php 
include_once 'models/Salesmans.php';
class SalesmanController{
	public $salesman_model;
	public function __construct(){
		$this->salesman_model = new Salesmans();
	}
	public function list(){
		$data = $this->salesman_model->getAll();
		include_once 'views/salesman/listSlm.php';
	}
	public function detail(){
		$id = $_GET['id'];
		$salesman = $this->salesman_model->find($id);
		include_once 'views/salesman/detailSlm.php';
	}
	public function search(){
		
	}
	public function add(){
		include_once 'views/salesman/addSlm.php';
	}
	public function store(){
		$data = array();
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['phone'] = $_POST['phone'];
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);
		$data['address'] = $_POST['address'];

		$result = $this->salesman_model->insert($data);
		header('Location: ?mod=salesmans');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->salesman_model->find($id);
		}
		include_once 'views/salesman/editSlm.php';
	}
	public function update(){
		$id = $_POST['id'];
		$data = array();
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['password'] = $_POST['password'];
		$data['address'] = $_POST['address'];

		$result = $this->salesman_model->update($data,$id);

		header('Location: ?mod=salesmans');
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->salesman_model->destroy($id);
		}

		header('location: ?mod=salesmans');
	}
	public function Getlogin(){
		if(isset($_SESSION['login'])){
			header

		}else{
			include_once 'views/user/login.php';

		}
	}
	public function PostLogin(){
		if (condition) {
			# code...
		}else{
			header
		}
	}
}
?>