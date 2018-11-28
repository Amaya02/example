<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
  	 	$this->load->model('signup_model');
        $this->load->library('session');
	}
	
	public function index($msg = NULL)
	{
		
		$data['title'] = "SIGNUP";

		$this->load->view("template/home/header",$data);
		$this->load->view("signup");
		$this->load->view("template/home/footer");	
	}

	public function process(){

		$this->check_isValidated();

		$email_check=$this->signup_model->email_check($this->input->post('email'));
		if($email_check){
			$email_check1=$this->signup_model->email_check1($this->input->post('email'));
			if($email_check1){
				$check=$this->signup_model->checkcompanyname();
				if($check){
					$this->signup_model->register_user();
					$this->session->set_flashdata('success_msg', 'Registered successfully. Login to your account.');
					$base=base_url();
					redirect($base);
				}
				else{
					$this->session->set_flashdata('error_msg', 'Company Name already exist!');
					redirect('signup');
				}
			}
			else{
				$this->session->set_flashdata('error_msg', 'Email Address already exist!');
				redirect('signup');
			}
		}
		else{
			$this->session->set_flashdata('error_msg', 'Email Address already exist!');
			redirect('signup');
		}

	}

	private function check_isValidated(){
		$user = $this->input->post('email');
		$pass = $this->input->post('pass');

		if(strlen($user)==0 || strlen ($pass)==0){
			$base=base_url();
			redirect($base);
		}
	}
	
}

?>
	
