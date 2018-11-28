<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class company extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
		$this->load->model('user_model');
	}
	
	public function dashboard(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "DASHBOARD";

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/dashboard",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function logout(){
		$this->session->set_userdata('validatedcompany',false);
		$base=base_url();
		redirect($base);
	}

	private function check_isValidated(){
		if(! $this->session->userdata('validatedcompany')){
			redirect('404_override');
		}
	}

}

?>