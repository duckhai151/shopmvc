<?php

class Dashboard extends Controller {
	public function __construct() {
		parent::__construct();
		Session::init();
	}

	public function index() {
		$this->view->renderAdmin('backEnd/dashboard/index');
	}

}