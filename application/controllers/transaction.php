<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaction extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->check_isValidated();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	
	public function queue(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "QUEUE";
		$data['traninfo']['fname']="";
		$data['traninfo']['lname']="";
		$data['traninfo']['status']="";
		$data['traninfo']['date_tran']="";
		$data['traninfo']['esti_date']="";
		$data['traninfo']['esti_start']="";
		$data['traninfo']['u_tranid']="";

		$this->load->view("template/transaction/header",$data);
		$this->load->view("template/transaction/queue",$data);
		$this->load->view("template/transaction/footer");	
	}

	public function mobileusers(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "MOBILE USERS";
		$data['transactions'] = $this->user_model->getUsers2($data['metadata']['transacid']);

		$this->load->view("template/transaction/header",$data);
		$this->load->view("template/transaction/mobileusers",$data);
		$this->load->view("template/transaction/footer");
	}

	public function getTranInfo(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "QUEUE";
		$data['traninfo']=$this->user_model->getTransactionsInfo($this->input->post('tranid'),$data['metadata']['transacid']);
		if($data['traninfo']['result']==0){
			redirect('transaction/queue','refresh');
		}
		else{
			$this->load->view("template/transaction/header",$data);
			$this->load->view("template/transaction/queue",$data);
			$this->load->view("template/transaction/footer");
		}
	}

	public function TranDone($tranid){
		if($tranid==""){
			$this->session->set_flashdata('error_msg', 'Invalid ID');
			redirect('transaction/queue','refresh');
		}
		else{
			$this->user_model->doneTransactions($tranid,"Expired");
			$this->session->set_flashdata('success_msg', 'Done!');
			redirect('transaction/queue','refresh');
		}
		
		
	}

	public function logout(){
		$this->session->set_userdata('validatedtransac',false);
		$base=base_url();
		redirect($base);
	}

	private function check_isValidated(){
		if(! $this->session->userdata('validatedtransac')){
			redirect('404_override');
		}
	}

}

?>