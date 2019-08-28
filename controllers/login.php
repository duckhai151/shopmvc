<?php 

class Login extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->title = 'Đăng nhập';
		$this->view->render('frontEnd/login/login', true);
	}

	
}