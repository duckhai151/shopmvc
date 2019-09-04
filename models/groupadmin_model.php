<?php

class GroupAdmin_Model extends Model {
	public function __construct() {
		parent::__construct();
	}

	public function add() {
		if (isset($_POST['btn-add-group'])) {
    		$name= isset($_POST['name']) ? $_POST['name'] : '';
    		$permissions= isset($_POST['permissions']) ? $_POST['permissions'] : '';
    		$json=json_encode($permissions);
    		$this->db->insert('permission', array(
    			'name' => $name,
    			'permissions' => $json
    		));
    	} 
	}

    public function list() {
        return $this->db->selectAll("SELECT * FROM permission");
    }

    public function permission($id) {
        
    }
}