<?php

class Attribute_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function add() {
		if(isset($_POST['submit'])){
          $name = $_POST['name'];
          $value=$_POST['value'];
          $type=$_POST['type'];
          $this->db->insert('attribute', array(
          	'name' => $name,
          	'value' => $value,
          	'type' => $type
          ));
        }

	}

	public function list() {
		return $this->db->selectAll("SELECT * FROM attribute");
	}

	public function color() {
		return $this->db->selectAll("SELECT * FROM attribute WHERE type = 'color'");
	}	
	
	public function size() {
		return $this->db->selectAll("SELECT * FROM attribute WHERE type = 'size'");
	}	
}