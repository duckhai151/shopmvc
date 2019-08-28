<?php

class Category extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index($id = false) {
		$this->view->title = 'Sản phẩm';
		if($id) {
			$this->view->number = $id;
			$this->view->products = $this->model->product($id);
		} else {
			$this->view->products = $this->model->product();
		}
		$this->view->categories = $this->model->category();
		$this->view->render('frontEnd/category/index');
	}


}