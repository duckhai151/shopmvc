<?php 
class Index extends Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->view->title = 'Trang chủ';
		$this->loadModel('category', true);
		$this->view->categories = $this->category_model->list();
		$this->loadModel('index', true);
		$this->view->products = $this->index_model->product();
		$this->view->render('frontEnd/index/index');
	}

	public function detail($id) {
		$this->view->title = 'Detail';
		$this->loadModel('category', true);
		$this->loadModel('product', true);
		$this->view->categories = $this->category_model->list();
		$this->view->product = $this->product_model->productDetail($id);
		$this->view->colors = $this->product_model->color($id);
		$this->view->sizes = $this->product_model->size($id);
		$this->view->render('frontEnd/product/index');
	}

	public function category() {
		$this->view->title = 'Sản phẩm';
		$this->view->products = $this->model->product();
		$this->loadModel('category', true);
		$this->view->categories = $this->category_model->list();
		$this->view->render('frontEnd/category/index');
	}

}