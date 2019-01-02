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

	public function companies(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "COMPANIES";
		$data['company'] = $this->admin_model->getCompany();

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/company",$data);
		$this->load->view("template/admin/footer");	
	}

	public function mobileusers(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "MOBILE USERS";
		$data['company'] = $this->admin_model->getUsers();

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/mobileuser",$data);
		$this->load->view("template/admin/footer");	
	}

	public function getCompanyInfo($companyid){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "COMPANY INFO";
		$data['company'] = $this->admin_model->getcompanyInfo($companyid);
		$data['transactions'] = $this->admin_model->getcompanyTransactions($companyid);

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/companyinfo",$data);
		$this->load->view("template/admin/footer");	
	}

	public function getUserInfo($id){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "USER INFO";
		$data['user'] = $this->admin_model->getuserInfo($id);
		$data['transactions'] = $this->admin_model->getuserTransactions($id);

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/userinfo",$data);
		$this->load->view("template/admin/footer");	
	}

	public function setting(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "SETTING";

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/setting",$data);
		$this->load->view("template/admin/footer");	
	}

	public function updateaccount(){
		$data['metadata']=$this->session->userdata();
		$data['title'] = "SETTING";

		$this->load->view("template/admin/header",$data);
		$this->load->view("template/admin/updateaccount",$data);
		$this->load->view("template/admin/footer");
	}

	public function saveupdateaccount(){
		$data['metadata']=$this->session->userdata();

		$check=$this->admin_model->user_check1($this->input->post('username'));
		if($check){
			$check=$this->admin_model->user_check($this->input->post('username'),$data['metadata']['adminid']);
			if($check){
				$email_check=$this->admin_model->email_check($this->input->post('email'),$data['metadata']['adminid']);
				if($email_check){
					$email_check1=$this->admin_model->email_check1($this->input->post('email'));
					if($email_check1){
						$this->admin_model->update_user($data['metadata']['adminid']);
						$this->session->set_flashdata('success_msg', 'Updated successfully!');
						redirect('admin/setting','refresh');
						
					}
					else{
						$this->session->set_flashdata('error_msg', 'Email Address already exist!');
						redirect('admin/setting','refresh');
					}
				}
				else{
					$this->session->set_flashdata('error_msg', 'Email Address already exist!');
					redirect('admin/setting','refresh');
				}
			}
			else{
				$this->session->set_flashdata('error_msg', 'Username already exist!');
				redirect('admin/setting','refresh');
			}
		}
		else{
			$this->session->set_flashdata('error_msg', 'Username already exist!');
			redirect('admin/setting','refresh');
		}

	}

	public function savepassword(){
		$data['metadata']=$this->session->userdata();
		$email_check=$this->admin_model->pass_check($data['metadata']['adminid']);
		if($email_check){
			$this->admin_model->updatepassword($data['metadata']['adminid']);
			$this->session->set_flashdata('success_msg', 'Password Updated Successfully');
			redirect('admin/setting');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Incorrect password!');
			redirect('admin/setting');
			}
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