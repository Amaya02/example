<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_control extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL)
	{
		$data['title'] = "HOME";

		$this->load->view("template/home/header",$data);
		$this->load->view("homepage");
		$this->load->view("template/home/footer");	
	}
	
}

?>
	
