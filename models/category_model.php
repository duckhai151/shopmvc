<?php
// namespace models;
class Category_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function product($id = false) {
		// if($id) {
		// 	return $this->db->selectAll("SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1 AND product.id = '$id' ");
		// } else {
		// 	return $this->db->selectAll('SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1');
		// }
	}

	public function add() {
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
        	$parent_id = $_POST['parent_id'];
        	$ordering = $_POST['ordering'];
        	$status = $_POST['status'];
        	$this->db->insert('category', array(
        		'name' => $name,
        		'parent_id' => $parent_id,
        		'ordering' => $ordering,
        		'status' => $status
        	));
		}
	}

	public function list() {
		return $this->db->selectAll('SELECT * FROM category');
	}

	
}