<?php
// namespace models;
class Category_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function product($id = false) {
		if($id) {
			return $this->db->selectAll("SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1 AND product.id = '$id' ");
		} else {
			return $this->db->selectAll('SELECT * FROM product JOIN product_description ON product.id = product_description.product_id AND product_description.language_id = 1');
		}
	}

	public function category() {
		return $this->db->selectAll('SELECT * FROM category');
	}

	
	// public function dequy() {

	// }
}