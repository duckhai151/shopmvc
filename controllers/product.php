<?php 
// include 'models/category_model.php';
// use models\Category_model;
class Product extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->title = 'Admin - Product';
		$this->view->renderAdmin('backEnd/product/index');
	}

	public function detail($id) {
		$this->view->title = 'Detail';
		$this->loadModel('category', true);
		$this->view->categories = $this->category_model->category();
		$this->view->product = $this->model->productDetail($id);
		$this->view->colors = $this->model->color($id);
		$this->view->sizes = $this->model->size($id);
		$this->view->render('frontEnd/product/index');
	}

	public function add() {
		$this->view->title = 'Add Product';
		$this->model->add();
		$this->view->renderAdmin('backEnd/product/add');
	}
}