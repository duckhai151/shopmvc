<?php

class Admin extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}

	public function index() {
		// if($_SESSION['ad']['level'] == 21) {
		$this->view->renderAdmin('backEnd/index/index');
		// }
	}

	public function login() {
		$this->view->title = 'Đăng nhập';
		$this->view->renderAdmin('backEnd/login/login', true);
	}

	public function run() {
		$this->view->admin = $this->model->loginAdmin();
		$this->view->renderAdmin('backEnd/index/index');
	}

	public function logout() {
		Session::destroy();
		$this->view->renderAdmin('backEnd/index/index');
	}
}