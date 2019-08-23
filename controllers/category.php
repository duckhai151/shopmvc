<?php

class Category extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->title = 'Sản phẩm';
		$this->view->products = $this->model->product();
		$this->view->categories = $this->model->category();
		$this->view->render('frontEnd/category/index');
	}


}