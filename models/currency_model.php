<?php 

class Currency_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function currency() {
		return $this->db->selectAll("SELECT * FROM currency");
	}
}