<?php

class View {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/frontEnd/header.php';
			require 'views/' . $name . '.php';
			require 'views/frontEnd/footer.php';	
		}
	}

	public function renderAdmin($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'views/' . $name . '.php';	
		}
		else {
			require 'views/backEnd/header.php';
			require 'views/' . $name . '.php';
			require 'views/backEnd/footer.php';	
		}
	}



}