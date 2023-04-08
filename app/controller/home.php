<?php 

class home extends controller {
	public function __construct() {

		parent::__construct();

		$this->view->header = "app/view/header.php";
		$this->view->footer = "app/view/footer.php";
	}

	public function index() {
	 
		$this->view->render("home/index");
	}
	
	
	function check(){
	
	$this->dashboard_model = $this->model->load("dashboard_model");
	
	$this->dashboard_model->check();
	
	
	}
}


?>
