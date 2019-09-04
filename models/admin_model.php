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
            $array = array();
    		 if (password_verify($password, $admin['password'])) {
    		 	Session::init();
    		 	Session::set('ad',$admin);
                $query = "SELECT permissions FROM permission JOIN account ON permission.id = account.level AND account.id =".$admin['id'];
                $permissions = $this->db->selectOne($query);
                foreach($permissions as $permission) {
                    $array = json_decode($permission);
                }
                $_SESSION['ad']['permission'] = $array;
    			header('location: http://localhost/shopmvc/admin');
    		} else {
    			header('location: http://localhost/shopmvc/admin/login');
    		}
		}
	}

    public function add() {
        if (isset($_POST['dangki'])) {
            $name= isset($_POST['name']) ? $_POST['name'] : '';
            $email= isset($_POST['email']) ? $_POST['email'] : '';
            $phone= isset($_POST['phone']) ? $_POST['phone'] : '';
            $password= isset($_POST['password']) ? $_POST['password'] : '';
            $repassword= isset($_POST['repassword']) ? $_POST['repassword'] : '';
            $address= isset($_POST['address']) ? $_POST['address'] : '';
            $level= isset($_POST['level']) ? $_POST['level'] : '';
            
            $passHash = password_hash("$password", PASSWORD_BCRYPT);
            $this->db->insert('account', array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'password' => $passHash,
                'address' => $address,
                'level' => $level
            )); 
        }
    }
}
