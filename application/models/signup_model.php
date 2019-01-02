<?php

class signup_model extends CI_model{
 
	function __construct(){
		parent::__construct();
	}
    
	public function user_check($username){
 
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

  public function user_check1($username){
 
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('username',$username);
      $query=$this->db->get();
 
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

  public function email_check($email){
 
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

	public function email_check1($email){
 
  		$this->db->select('*');
  		$this->db->from('admin');
  		$this->db->where('email',$email);
  		$query=$this->db->get();
 
  		if($query->num_rows()>0){
   			return false;
  		}else{
    		return true;
  		}
 	}

	public function checkcompanyname(){

  		$companyname=$this->input->post('companyname');
  		$this->db->select('*');
  		$this->db->from('company');
  		$this->db->where('companyname',$companyname);
  		$query=$this->db->get();
 
  		if($query->num_rows()>0){
    		return false;
  		}else{
    		return true;
  		}
 	}

 	public function register_user(){

		$user=array(
        'username'=>$this->input->post('username'),
	      'email'=>$this->input->post('email'),
	      'companyname'=>$this->input->post('companyname'),
	      'password'=>sha1($this->input->post('pass')),
	      'address'=>$this->input->post('address'),
		  'country'=>$_POST['country'],
	      'cnumber'=>$this->input->post('cnumber'),
        'tnumber'=>$this->input->post('tnumber')
		);
		$this->db->insert('company', $user);
	}
        
}

?>
