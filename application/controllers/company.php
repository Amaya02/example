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
		$data['transactions']['num_tran'] = $this->user_model->getTransactions0($data['metadata']['companyid']);
		$data['userinfo']['num_users'] = $this->user_model->getUsers0($data['metadata']['companyid']);
		$data['transactions']['num_type'] = $this->user_model->getTransactionsType0($data['metadata']['companyid']);

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/dashboard",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function accounts(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "ACCOUNTS";
		$data['transactions'] = $this->user_model->getTransactions($data['metadata']['companyid']);
		$data['type'] = $this->user_model->getTransactionsType($data['metadata']['companyid']);

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/transaction",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function transaction(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "TRANSACTIONS";
		$data['transactions'] = $this->user_model->getTransactionsType($data['metadata']['companyid']);

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/transactiontype",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function mobileusers(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "MOBILE USERS";
		$data['transactions'] = $this->user_model->getUsers($data['metadata']['companyid']);

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/mobileusers",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function setting(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "SETTING";

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/setting",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function updateaccount(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "SETTING";

		$this->load->view("template/dashboard/header",$data);
		$this->load->view("template/dashboard/updateaccount",$data);
		$this->load->view("template/dashboard/footer");	
	}

	public function savepassword(){
		$companyid = $this->session->userdata('companyid');
		$email_check=$this->user_model->pass_check($companyid);
		if($email_check){
			$this->user_model->updatepassword($companyid);
			$this->session->set_flashdata('success_msg', 'Password Updated Successfully');
			redirect('company/setting');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Incorrect password!');
			redirect('company/setting');
			}
	}

	public function saveupdateaccount(){
		$data['metadata']=$this->session->userdata();

		$check=$this->user_model->user_check1($this->input->post('username'));
		if($check){
			$check=$this->user_model->user_check($this->input->post('username'),$data['metadata']['companyid']);
			if($check){
				$email_check=$this->user_model->email_check($this->input->post('email'),$data['metadata']['companyid']);
				if($email_check){
					$email_check1=$this->user_model->email_check1($this->input->post('email'));
					if($email_check1){
						$check=$this->user_model->checkcompanyname($data['metadata']['companyid']);
						if($check){
							$this->user_model->update_user($data['metadata']['companyid']);
							$this->session->set_flashdata('success_msg', 'Updated successfully!');
							redirect('company/setting','refresh');
						}
						else{
							$this->session->set_flashdata('error_msg', 'Company Name already exist!');
							redirect('company/setting','refresh');
						}
					}
					else{
						$this->session->set_flashdata('error_msg', 'Email Address already exist!');
						redirect('company/setting','refresh');
					}
				}
				else{
					$this->session->set_flashdata('error_msg', 'Email Address already exist!');
					redirect('company/setting','refresh');
				}
			}
			else{
				$this->session->set_flashdata('error_msg', 'Username already exist!');
				redirect('company/setting','refresh');
			}
		}
		else{
			$this->session->set_flashdata('error_msg', 'Username already exist!');
			redirect('company/setting','refresh');
		}

	}

	public function addtransaction(){
		$data['metadata']=$this->session->userdata();
		$acc=$this->input->post('tranacc1').''.$this->input->post('tranacc');
		$check=$this->user_model->tranuser_check($acc);
		if($check){
			$this->user_model->addTransactions($data['metadata']['companyid']);
			redirect('company/accounts','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Account Name already Exists');
			redirect('company/accounts','refresh');
		}
	}

	public function addtransactiontype(){
		$data['metadata']=$this->session->userdata();
		$check=$this->user_model->tranuser_checktype($this->input->post('trantype'),$data['metadata']['companyid']);
		if($check){
			$this->user_model->addTransactionsType($data['metadata']['companyid']);
			redirect('company/transaction','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Transaction already Exists');
			redirect('company/transaction','refresh');
		}
	}

	public function updatetransaction(){
		$data['metadata']=$this->session->userdata();
		$acc=$this->input->post('tranacc1').''.$this->input->post('tranacc');
		$id = $this->input->post('user_id');
		$check=$this->user_model->tranuser_check1($acc,$id);
		if($check){
			$this->user_model->updateTransactions($data['metadata']['companyid']);
			$this->session->set_flashdata('success_msg', 'Updated Successfully!');
			redirect('company/accounts','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Account Name already Exists');
			redirect('company/accounts','refresh');
		}
	}

	public function deletetransaction($transacid){
		$data['metadata']=$this->session->userdata();
		$this->user_model->deleteTransactions($transacid);
		$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
		redirect('company/accounts','refresh');
	}

	public function deletetransactiontype($id){
		$data['metadata']=$this->session->userdata();
		$this->user_model->deleteTransactionsType($id);
		$this->session->set_flashdata('success_msg', 'Deleted Successfully!');
		redirect('company/transaction','refresh');
	}

	public function logout(){
		$company = array('companyid','username','companyname','email','password','address','country','cnumber',
            'tnumber');
		$this->session->set_userdata('validatedcompany',false);
		$this->session->unset_userdata($company);
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