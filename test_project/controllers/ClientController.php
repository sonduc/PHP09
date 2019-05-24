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

		$result = $this->client_model->insert($data);
		header('Location: ?mod=clients');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->client_model->find($id);
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

		$result = $this->client_model->update($data,$id);

		header('Location: ?mod=clients');
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->client_model->destroy($id);
		}

		header('location: ?mod=clients');
	}
}
?>