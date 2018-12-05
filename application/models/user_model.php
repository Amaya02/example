<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();    
  }
  
  public function validateadmin(){
    $username = $this->security->xss_clean($this->input->post('username'));
    $password =  $this->security->xss_clean(sha1($this->input->post('password')));

    $this->db->where('username like binary',$username);
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
            'validatedtransac' => false,
            'validatedcompany' => false);
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }
  
  public function validatecompany(){

    $username = $this->security->xss_clean($this->input->post('username'));
    $password =  $this->security->xss_clean(sha1($this->input->post('password')));
    
    $this->db->where('username like binary',$username);
    $this->db->where('password like binary',$password);

    $query = $this->db->get('company');

    if($query->num_rows()==1){
      $row = $query->row();
      $data = array(
            'companyid' => $row->companyid,
            'username' => $row->username,
            'companyname' => $row->companyname,
            'email' => $row->email,
            'password' => $row->password,
            'address' => $row->address,
            'country' => $row->country,
            'cnumber' => $row->cnumber,
            'validatedadmin' => false,
            'validatedtransac' => false,
            'validatedcompany' => true);
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }

  public function validatetransaction(){

    $username = $this->security->xss_clean($this->input->post('username'));
    $password =  $this->security->xss_clean(sha1($this->input->post('password')));
    
    $this->db->where('tranacc like binary',$username);
    $this->db->where('tranpass like binary',$password);

    $query = $this->db->get('transaction');

    if($query->num_rows()==1){
      $row = $query->row();
      $data = array(
            'transacid' => $row->transacid,
            'tranacc' => $row->tranacc,
            'tranpass' => $row->tranpass,
            'transacname' => $row->transacname,
            'starttime' => $row->starttime,
            'endtime' => $row->endtime,
            'estimatedtime' => $row->estimatedtime,
            'validatedtransac' => true,
            'validatedadmin' => false,
            'validatedcompany' => false);
      $this->session->set_userdata($data);
      return true;
    }
    return false;
  }

  public function getTransactions($companyid){
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

  public function tranuser_check($username){
 
      $this->db->select('*');
      $this->db->from('transaction');
      $this->db->where('tranacc',$username);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function addTransactions($companyid){
    $acc=$this->input->post('tranacc1').''.$this->input->post('tranacc');

    $transaction=array(
      'companyid' => $companyid,
      'tranacc' => $acc,
      'tranpass' => sha1($this->input->post('tranpass')),
      'transacname' => $this->input->post('tranname'),
      'starttime' => $this->input->post('trantime1'),
      'endtime' => $this->input->post('trantime2'),
      'estimatedtime' =>$this->input->post('estitime')
    );
    $this->db->insert('transaction', $transaction);
  }

  public function deleteTransactions($transacid){
    $this->db->where('transacid',$transacid);
    $this->db->delete('transaction');
  }

  public function getTransactionsInfo($tranid){

      $this->db->select('*');
      $this->db->from('user_transac');
      $this->db->join('users','user_transac.userid = users.id');
      $this->db->join('transaction','user_transac.transacid = transaction.transacid');
      $this->db->where('u_tranid',$tranid);

      $query=$this->db->get();

      $r= $query->row();
      if($query->num_rows()==0){
        $t['result']=0;
      }
      else{
        $t['u_tranid']=$r->u_tranid;
        $t['username']=$r->username;
        $t['transacname']=$r->transacname;
        $t['status']=$r->status;
        $t['date_tran']=$r->date_tran;
        $t['esti_date']=$r->esti_date;
        $t['esti_start']=$r->esti_start;
        $t['esti_end']=$r->esti_end;
        $t['result']=1;
      }
      
      return $t;
  }

  public function doneTransactions($tranid,$status){
    $transac=array(
      'status'=>$status
    );
    $this->db->where('u_tranid',$tranid);
    $this->db->update('user_transac', $transac);
  }
  
}

?>
