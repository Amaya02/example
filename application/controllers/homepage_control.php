<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage_control extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL)
	{
		if($this->session->userdata('validatedcompany')){
			redirect('company/dashboard');
		}
		else if($this->session->userdata('validatedadmin')){
			redirect('admin/dashboard');
		}
		else if($this->session->userdata('validatedtransac')){
			redirect('transaction/queue');
		}
		else{
			$data['title'] = "HOME";

			$this->load->view("template/home/header",$data);
			$this->load->view("homepage");
			$this->load->view("template/home/footer");
		}
	}

	public function er404() {
		 $this->output->set_status_header('404'); 
		$this->load->view('errors/html/error_404');//loading in custom error view
	}
	
}

?>
	
