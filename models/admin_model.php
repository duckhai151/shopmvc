<?php 

class Admin_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function loginAdmin() {
		if(isset($_POST['login_btn'])) {
			$email = $_POST['email'];
    		$password = $_POST['password'];
    		$admin = $this->db->selectOne("SELECT * FROM account WHERE email = '$email'");
    		 if (password_verify($password, $admin['password'])) {
    		 	Session::init();
    		 	Session::set('ad',$admin);
    			header('location: http://localhost/shopmvc/admin');
    		} else {
    			header('location: http://localhost/shopmvc/admin/login');
    		}
		}
	}

}