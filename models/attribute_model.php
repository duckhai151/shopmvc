<?php

class Attribute_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function color() {
		return $this->db->selectAll("SELECT * FROM attribute WHERE type = 'color'");
	}	
	
	public function size() {
		return $this->db->selectAll("SELECT * FROM attribute WHERE type = 'size'");
	}	
}