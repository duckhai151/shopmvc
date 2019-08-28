<?php 
class Index extends Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->title = 'Trang chủ';
		$this->loadModel('category', true);
		$this->view->categories = $this->category_model->category();
		$this->loadModel('index', true);
		$this->view->products = $this->index_model->product();
		$this->view->render('frontEnd/index/index');
	}

}