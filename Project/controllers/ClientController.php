<?php 
include_once 'models/Clients.php';
class ClientController{
	public $client_model;
	public function __construct(){
		$this->client_model = new Clients();
	}
	public function list(){
		$data = $this->client_model->getAll();
		include_once 'views/client/listKh.php';
	}
	public function detail(){
		$id = $_GET['id'];
		$client = $this->client_model->find($id);
		include_once 'views/client/detailKh.php';
	}
	public function search(){
		
	}
	public function add(){
		include_once 'views/client/addKh.php';
	}
	public function store(){
		$data = array();
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['phone'] = $_POST['phone'];
		$data['email'] = $_POST['email'];
		$data['address'] = $_POST['address'];

		$checkId = $this->client_model->checkUser($data['id']);
		$checkName =$this->client_model->ktra($data['name']);
		$checkEmail = $this->client_model->checkEmail($data['email']);

		if (preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone']) && $checkId==null && $checkName ==false && $checkEmail==null ){
			$result = $this->client_model->insert($data);
			setcookie('msg_addClient', '!Thêm mới khách hàng thành công', time() + 3, '/');
			header('Location: ?mod=clients&act=list');
		}else{
			if(!preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone'])){
				setcookie('msg_sdt', 'số điện thoại >= 10 chữ số và <=11 chữ số!', time() + 3, '/');
			}
			if($checkId != null){
				setcookie('msg_id', 'Mã ID này đã tồn tại', time() + 3, '/');
			}	
			if($checkName ==true){
				setcookie('msg_name', 'Tên không được chứa số hoặc bỏ trống!', time() + 3, '/');
			}
			if($checkEmail !=null){
				setcookie('msg_email', 'Email này đã tồn tại!', time() + 3, '/');
			}
			header('Location: ?mod=clients&act=add');
		}		
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->client_model->find($id);
			$_SESSION['edit1'] = $data;
		}
		include_once 'views/client/editKh.php';
	}
	public function update(){

		$id = $_POST['id'];
		$data = array();
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['phone'] = $_POST['phone'];
		$data['address'] = $_POST['address'];

		$checkName =$this->client_model->ktra($data['name']);

		$checkEmail = $this->client_model->checkEmail1($_SESSION['edit1']['email'],
			$data['email']);


		unset($_SESSION['edit1']);
		if (preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone']) && 
			$checkName ==false && $checkEmail ==null){
			$result = $this->client_model->update($data,$id);
		setcookie('msg_updateClient', '!Sửa thông tin khách hàng thành công', time() + 3, '/');
		header('Location: ?mod=clients&act=list');
	}else{
		if(!preg_match('/^(01[2689]|09)[0-9]{8}$/', $data['phone'])){
			setcookie('msg_sdt', 'số điện thoại >= 10 chữ số và <=11 chữ số!', time() + 3, '/');
		}
		if($checkName ==true){
			setcookie('msg_name', 'Tên không được chứa số hoặc bỏ trống!', time() + 3, '/');
		}
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->client_model->find($id);
		}
		if($checkEmail !=null){
			setcookie('msg_email', 'Email này đã tồn tại!', time() + 3, '/');
		}
		header("Location: ?mod=clients&act=edit&id=".$id."");
	}

}
public function delete(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		setcookie('msg_deleteClient', '!Xóa thông tin khách hàng thành công', time() + 3, '/');
		$this->client_model->destroy($id);
	}

	header('location: ?mod=clients&act=list');
}
}
?>