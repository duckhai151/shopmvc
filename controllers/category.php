<?php

class Category extends AdminController {
	public function __construct() {
		parent::__construct();
	}

	public function add() {
		$this->view->title = 'Add Category';
		$this->view->categories = $this->model->list();
		$this->model->add();
		$this->view->renderAdmin('backEnd/category/add');
	}

	public function list() {
		$this->view->title = 'List Category';
		$this->view->categories = $this->model->list();
		$this->view->renderAdmin('backEnd/category/list');
	}

}