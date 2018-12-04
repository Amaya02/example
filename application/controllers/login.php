<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
	}
	
	public function index()
	{
		$this->load->model('user_model');
		$result = $this->user_model->validateadmin();
		if(! $result){
			$this->load->model('user_model');
			$result = $this->user_model->validatecompany();
			if(! $result){
				$result = $this->user_model->validatetransaction();
				if(! $result){
					$base=base_url();
					$this->session->set_flashdata('error_msg', 'Invalid username or password');
					redirect($base);
				}
				else{
					redirect('transaction');
				}
			}
			else{
				redirect('company');
			}
		}
		else{
			redirect('admin');
		}
	}
	
	private function check_isValidated(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		if(strlen($user)==0 || strlen ($pass)==0){
			$base=base_url();
			redirect($base);
		}
	}
}

?>
	
