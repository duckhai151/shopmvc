<?php

class Controller {

	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
	}
	
	public function loadModel($name, $renameModel = false) {
		
		$path = 'models/'.$name.'_model.php';
		
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			$modelName = $name . '_Model';
			if($renameModel) {
				$this->{$name . '_model'} = new $modelName();
			} else {
				$this->model = new $modelName();
			}
		}		
	}

}