<?php 

class Index extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->title = 'Trang chủ';
		$this->view->products = $this->model->product();
		$this->view->render('frontEnd/index/index');
	}

}