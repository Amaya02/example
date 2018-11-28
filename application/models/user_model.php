<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();    
  }
  
  public function validateadmin(){
    $email = $this->security->xss_clean($this->input->post('email'));
    $password =  $this->security->xss_clean(sha1($this->input->post('password')));

    $this->db->where('email like binary',$email);
    $this->db->where('password like binary',$password);

    $query = $this->db->get('admin');
    
    if($query->num_rows()==1){
      $row = $query->row();
      $data = array(
            'adminid' => $row->adminid,
            'username' => $row->username,
            'email' => $row->email,
            'password' => $row->password,
            'fname' => $row->fname,
            'lname' => $row->lname,
            'address' => $row->address,
            'country' => $row->country,
            'cnum' => $row->cnum,
            'validatedadmin' => true,
            'validatedcompany' => false);
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }
  
  public function validatecompany(){

    $email = $this->security->xss_clean($this->input->post('email'));
    $password =  $this->security->xss_clean(sha1($this->input->post('password')));
    
    $this->db->where('email like binary',$email);
    $this->db->where('password like binary',$password);

    $query = $this->db->get('company');

    if($query->num_rows()==1){
      $row = $query->row();
      $data = array(
            'companyid' => $row->companyid,
            'companyname' => $row->companyname,
            'email' => $row->email,
            'password' => $row->password,
            'address' => $row->address,
            'country' => $row->country,
            'cnumber' => $row->cnumber,
            'validatedadmin' => false,
            'validatedcompany' => true);
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }
  
}

?>
