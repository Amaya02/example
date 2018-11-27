<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL)
	{
		$data['title'] = "SIGNUP";

		$this->load->view("template/home/header",$data);
		$this->load->view("signup");
		$this->load->view("template/home/footer");	
	}
	
}

?>
	
