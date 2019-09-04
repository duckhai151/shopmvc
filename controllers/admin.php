<?php

class Admin extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}

	public function index() {
		if(isset($_SESSION['ad'])) {
			header('location: '.URL .'dashboard');
		} else {
			Admin::login();
		}
	}

	public function login() {
		$this->view->title = 'Đăng nhập';
		$this->view->renderAdmin('backEnd/login/login', true);
	}

	public function run() {
		$this->view->admin = $this->model->loginAdmin();
		$this->view->renderAdmin('backEnd/dashboard/index');
	}

	public function logout() {
		Session::destroy();
		Admin::login();
	}

	public function add() {
		$this->loadModel('groupadmin', true);
		$this->view->permissions = $this->groupadmin_model->list();
		$this->model->add();
		$this->view->renderAdmin('backEnd/admin/add');
	}
}