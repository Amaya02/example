<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class company extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	
	public function dashboard(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "DASHBOARD";

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/dashboard",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function transaction(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "TRANSACTION";
		$data['transactions'] = $this->user_model->getTransactions($data['metadata']['companyid']);

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/transaction",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function setting(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "SETTING";

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/setting",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function addtransaction(){
		$data['metadata']=$this->session->userdata();
		$acc=$this->input->post('tranacc1').''.$this->input->post('tranacc');
		$check=$this->user_model->tranuser_check($acc);
		if($check){
			$this->user_model->addTransactions($data['metadata']['companyid']);
			redirect('company/transaction','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Account Name already Exists');
			redirect('company/transaction','refresh');
		}
	}

	public function deletetransaction($transacid){
		$data['metadata']=$this->session->userdata();
		$this->user_model->deleteTransactions($transacid);
		redirect('company/transaction','refresh');
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