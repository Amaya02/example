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
			redirect('company/transaction','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Account Name already Exists');
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