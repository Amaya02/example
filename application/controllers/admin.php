<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
		$this->load->model('admin_model');
		$this->load->library('session');
	}

	public function dashboard(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "DASHBOARD";

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/dashboard",$data);
		$this->load->view("template/admin/footer");	
	}

	public function logout(){
		$this->session->set_userdata('validatedadmin',false);
		$base=base_url();
		redirect($base);
	}

	private function check_isValidated(){
		if(! $this->session->userdata('validatedadmin')){
			redirect('404_override');
		}
	}
}

?>