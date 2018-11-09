<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_control extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL)
	{
		$this->load->view("template/dashboard/header");
		$this->load->view("template/dashboard/transaction");
		$this->load->view("template/dashboard/footer");	
	}
	
}

?>
	
