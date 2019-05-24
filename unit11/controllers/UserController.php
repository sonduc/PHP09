<?php 
include_once 'models/User.php';
class UserController{
	public $user_model;
	public function __construct(){
		$this->user_model = new User();
	}
	public function detail(){
		$id = $_GET['id'];
		$user = $this->user_model->find($id);
		$user['status'] = ($user['status']==1)?'Active':'Deactive';
		include_once 'views/user/detail.php';
	}

	public function list(){
		
		$data = $this->user_model->getAll();
		// echo "<pre>"; 
		// print_r($data);
		// echo "</pre>"; 
		include_once 'views/user/list.php';
	}
	public function add(){
		include_once 'views/user/add.php';
	}
	public function store(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$moblie = $_POST['moblie'];
		$created_at = date('Y-m-d H:i:s');
		$password = md5($_POST['password']);

		$status = $this->user_model->insert($name,$email,$moblie,$password,
			$created_at,$status);

		header('Location: ?mod=users');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $this->user_model->find($id);

			include_once 'views/user/edit.php';
		}
	}
	public function update(){
		$data = array();
		if(isset($_POST['submit'])){
			$data['id'] = $_POST['id'];
			$data['name'] = $_POST['name'];
			$data['moblie'] = $_POST['moblie'];
			$data['email'] = $_POST['email'];
		}
		$this->user_model->update($data);
		header('location: ?mod=users');
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->user_model->destroy($id);
		}
		header('location: ?mod=users');
	}
	public function error(){
		echo "User-Error";
	}
}

?>