<?php

class Attribute extends AdminController {
	public function __construct() {
		parent::__construct();
		Session::init();
	}

	public function index() {
		
	}

	public function add() {
		$this->view->title = 'Attribute Add';
		$this->model->add();
		$this->view->renderAdmin('backEnd/attribute/add');
	}

	public function list() {
		$this->view->title = 'Attribute ';
		$this->view->attributes = $this->model->list();
		$this->view->renderAdmin('backEnd/attribute/list');
	}
	
	
}