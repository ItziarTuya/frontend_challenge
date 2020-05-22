<?php 

class Help extends Controller {

	function __construct(){
		parent::__construct();
	}

	function index() {
		$this->view->render('help/index');
	}

	public function other( $arg = false ){
		echo "we are on other. <br />";
		echo "optional: {$arg} <br />";

		require 'Models/HelpModel.php';
		$model = new HelpModel();
	}
}