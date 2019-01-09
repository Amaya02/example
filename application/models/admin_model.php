<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();    
  }

  public function getCompany(){
  	$company = array();
    $this->db->select('*');
    $this->db->from('company');
    //run the query
    $query = $this->db->get();
    $rs=$query->result_array();
    foreach($rs as $r){
      $info = array(
        'companyid' => $r['companyid'],
        'email' => $r['email'],
        'username' => $r['username'],
        'address' => $r['address'],
        'country' => $r['country'],
        'cnumber' => $r['cnumber'],
        'tnumber' => $r['tnumber'],
        'companyname' => $r['companyname']
      );
      $company[] = $info;
    }
    return $company;
  }

  public function getCompany2(){
    $company = array();
    $this->db->select('*');
    $this->db->from('company');
    //run the query
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function getUsers(){
  	$company = array();
    $this->db->select('*');
    $this->db->from('users');
    //run the query
    $query = $this->db->get();
    $rs=$query->result_array();
    foreach($rs as $r){
      $info = array(
        'id' => $r['id'],
        'username' => $r['username'],
        'fname' => $r['fname'],
        'lname' => $r['lname'],
        'num' => $r['num'],
        'email' => $r['email'],
        'created_at' => $r['created_at']
      );
      $company[] = $info;
    }
    return $company;
  }

  public function getUsers2(){
    $company = array();
    $this->db->select('*');
    $this->db->from('users');
    //run the query
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function getcompanyInfo($companyid){

    $this->db->select('*');
    $this->db->from('company');
    $this->db->where('companyid',$companyid);
    //run the query
    $query = $this->db->get();
    $r= $query->row();

    $company['companyid']=$r->companyid;
    $company['email']=$r->email;
    $company['username']=$r->username;
    $company['address'] =$r->address;
    $company['country'] =$r->country;
    $company['cnumber'] =$r->cnumber;
    $company['tnumber'] =$r->tnumber;
    $company['companyname'] =$r->companyname;
    return $company;
  }

  public function getuserInfo($id){

    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('id',$id);
    //run the query
    $query = $this->db->get();
    $r= $query->row();

    $user['id']=$r->id;
    $user['email']=$r->email;
    $user['username']=$r->username;
    $user['lname'] =$r->lname;
    $user['fname'] =$r->fname;
    $user['num'] =$r->num;
    $user['created_at'] =$r->created_at;
    return $user;
  }

  public function getcompanyTransactions($companyid){
	$transaction = array();
    $this->db->select('*');
    $this->db->from('transaction');
    $this->db->where('companyid',$companyid);
    //run the query
    $query = $this->db->get();
    $rs=$query->result_array();
    foreach($rs as $r){
      $info = array(
        'transacid' => $r['transacid'],
        'tranacc' => $r['tranacc'],
        'tranpass' => $r['tranpass'],
        'transacname' => $r['transacname'],
        'starttime' => $r['starttime'],
        'endtime' => $r['endtime'],
        'estimatedtime' => $r['estimatedtime'],
      );
      $transaction[] = $info;
    }
    return $transaction;
  }

  public function getuserTransactions($id){
  	$users = array();
    $this->db->select('*');
    $this->db->from('user_transac');
    $this->db->join('transaction','user_transac.transacid = transaction.transacid');
    $this->db->join('company','transaction.companyid = company.companyid');
    $this->db->where('userid',$id);
    //run the query
    $query = $this->db->get();
    $rs=$query->result_array();
    foreach($rs as $r){
      $info = array(
        'esti_date' => $r['esti_date'],
        'esti_start' => $r['esti_start'],
        'date_tran' => $r['date_tran'],
        'transacid' => $r['transacid'],
        'tranacc' => $r['tranacc'],
        'transacname' => $r['transacname'],
        'companyname' => $r['companyname'],
        'u_tranid' => $r['u_tranid'],
        'status' => $r['status']
      );
      $users[] = $info;
    }
    return $users;
  }

  public function user_check1($username){
 
      $this->db->select('*');
      $this->db->from('company');
      $this->db->where('username',$username);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function user_check($username,$id){
 
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('username',$username);
      $this->db->where_not_in('adminid',$id);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function email_check($email,$id){
 
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('email',$email);
      $this->db->where_not_in('adminid',$id);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function email_check1($email){
 
      $this->db->select('*');
      $this->db->from('company');
      $this->db->where('email',$email);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function update_user($id){

    $user=array(
        'username'=>$this->input->post('username'),
        'email'=>$this->input->post('email'),
        'fname'=>$this->input->post('fname'),
        'lname'=>$this->input->post('lname'),
        'address'=>$this->input->post('address'),
        'country'=>$_POST['country'],
        'cnum'=>$this->input->post('cnum')
    );
    $this->session->set_userdata($user);
    $this->db->where('adminid',$id);
    $this->db->update('admin', $user);
  }

  public function pass_check($id){
 
    $this->db->select('*');
    $this->db->from('admin');
    $pass=sha1($this->input->post('currentpass'));
    $this->db->where('adminid',$id);
    $this->db->where('password',$pass);
    $query=$this->db->get();
    if($query->num_rows()>0){
    return true;
    }else{
    return false;
    }
   
  }

  public function updatepassword($id){
    $user=array(
      'password'=>sha1($this->input->post('newpass')),
    );
    $this->session->set_userdata($user);
    $this->db->where('adminid',$id);
    $this->db->update('admin', $user);
  }



}

?>