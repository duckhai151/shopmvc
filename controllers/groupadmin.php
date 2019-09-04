<?php 
class GroupAdmin extends AdminController {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		
	}

	public function add() {
		$this->view->title = 'AdminGroup';
		$this->model->add();
		$this->view->renderAdmin('backEnd/groupadmin/add');
	}

	public function list() {
		$this->view->title = 'AdminGroup';
		$this->model->list();
		$this->view->renderAdmin('backEnd/groupadmin/list');
	}

}