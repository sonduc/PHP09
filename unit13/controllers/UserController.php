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
		$data = array();
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['moblie'] = $_POST['moblie'];
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['password'] = md5($_POST['password']);
		$data['status'] = 1;

		/*var_dump($_FILES['avatar']);
		die;*/

		if(isset($_FILES["avatar"]["error"])) // kiem tra xem co loi khong
		{
			// Di chuyển file vào thư mục mong muốn
			// move_upload_file('Link ảnh hiện tại','link ảnh mới')
			move_uploaded_file($_FILES["avatar"]["tmp_name"],
				"upload/user/". $_FILES["avatar"]["name"]);

			$link = $_FILES["avatar"]["name"];
		}
		else{
			$msg ="<p class=\"text-danger\">File ảnh không hợp lệ !</p>" ;
		}

		$data['avatar'] = $link;
		/*echo "<pre>";
		print_r($_FILES["avatar"]);
		echo "</pre>";
		die;*/
		$result = $this->user_model->insert($data);

		header('Location: ?mod=users');
	}
	public function delete(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$this->user_model->destroy($id);
		}

		header('location: ?mod=users');
	}
	public function edit(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			$data = $this->user_model->find($id);
		}
		include_once 'views/user/edit.php';
	}
	public function update(){
		$id = $_POST['id'];
		$data = array();
		$data['name'] = $_POST['name'];
		$data['email'] = $_POST['email'];
		$data['moblie'] = $_POST['moblie'];
		$data['created_at'] = date('Y-m-d H:i:s');
		$data['status'] = 1;
		$result = $this->user_model->update($data,$id);

		header('Location: ?mod=users');
	}
}

?>