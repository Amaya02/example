<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_control extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL)
	{
		$this->load->view("template/header");
		$this->load->view("homepage");
		$this->load->view("template/footer");	
	}
	
}

?>
	
