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

		$checkId = $this->salesman_model->checkUser($data['id']);
		$checkName =$this->salesman_model->ktra($data['name']);
		$checkEmail = $this->salesman_model->checkEmail($data['email']);

		if (preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone']) && $checkId==null && $checkName ==false && $checkEmail==null ){
			$result = $this->salesman_model->insert($data);

			setcookie('msg_addSalesman', '!Thêm mới nhân viên thành công', time() + 3, '/');
			header('Location: ?mod=salesmans&act=list');
		}else{
			if(!preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone'])){
				setcookie('msg_sdt', 'số điện thoại >= 10 chữ số và <=11 chữ số!', time() + 3, '/');
			}
			if($checkId != null){
				setcookie('msg_id', 'Mã ID này đã tồn tại!', time() + 3, '/');
			}	
			if($checkName ==true){
				setcookie('msg_name', 'Tên không được chứa số hoặc bỏ trống!', time() + 3, '/');
			}
			if($checkEmail !=null){
				setcookie('msg_email', 'Email này đã tồn tại!', time() + 3, '/');
			}
			header('Location: ?mod=salesmans&act=add');

		}
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->salesman_model->find($id);

			$_SESSION['edit'] = $data;
		}
		include_once 'views/salesman/editSlm.php';
	}
	public function update(){
		$id = $_POST['id'];
		$data = array();
		$data['name'] =  $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		//$data['password'] = md5($_POST['password']);
		$data['address'] = $_POST['address'];

		$checkName =$this->salesman_model->ktra($data['name']);

		if($_SESSION['edit']['email'] != $data['email']){
			$checkEmail = $this->salesman_model->checkEmail($data['email']);
		}else{
			$checkEmail == null;
		}
		
		unset($_SESSION['edit']);
		if (preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone']) && 
			$checkName ==false  && $checkEmail==null){
			$result = $this->salesman_model->update($data,$id);
		setcookie('msg_updateSalesman', '!Sửa thông tin nhân viên thành công', time() + 3, '/');
		header('Location: ?mod=salesmans&act=list');
	}else{
		if(!preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone'])){
			setcookie('msg_sdt', 'số điện thoại >= 10 chữ số và <=11 chữ số!', time() + 3, '/');
		}
		if($checkName ==true){
			setcookie('msg_name', 'Tên không được chứa số hoặc bỏ trống!', time() + 3, '/');
		}
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->salesman_model->find($id);
		}
		if($checkEmail !=null){
				setcookie('msg_email', 'Email này đã tồn tại!', time() + 3, '/');
			}
		header("Location: ?mod=salesmans&act=edit&id=".$id."");
	}
}
public function delete(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		setcookie('msg_deleteSalesman', '!Xóa thông tin nhân viên thành công', time() + 3, '/');
		$this->salesman_model->destroy($id);
	}

	header('location: ?mod=salesmans&act=list');
}

public function login(){
	if(isset($_POST['submit'])){
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);

		$check = $this->salesman_model->checkLogin($data['email'],$data['password']);

		if(!$check){
			header("locatxion: ?mod=salesmans&act=login");
		}else{
			$_SESSION['loginNv'] = $check->fetch_assoc();
			header("location: ?mod=products&act=list");
		}
	}else{
		include_once 'views/salesman/login.php';
	}
	
}

public function Logout(){

	unset($_SESSION['loginNv']);

	
	header("location: ?mod=salesmans&act=login");
}

}
?>