<?php 
// include 'models/category_model.php';
// use models\Category_model;
class Product extends AdminController {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		
	}

	public function add() {
		$this->view->title = 'Add Product';
		$this->loadModel('category', true);
		$this->view->categories = $this->category_model->list();
		$this->loadModel('attribute', true);
		$this->view->sizes = $this->attribute_model->size();
		$this->view->colors = $this->attribute_model->color();
		$this->model->add();
		$this->view->renderAdmin('backEnd/product/add');
	}

	public function list() {
		$this->view->title = 'Admin - Product';
		$this->view->products = $this->model->product();
		$this->view->renderAdmin('backEnd/product/index');
	}
}