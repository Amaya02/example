<?php
  $success_msg= $this->session->flashdata('success_msg');
  $error_msg= $this->session->flashdata('error_msg');
 
  if($success_msg){
    echo "<script type='text/javascript'>alert('$success_msg');</script>";
  }
  if($error_msg){
    echo "<script type='text/javascript'>alert('$error_msg');</script>";
  }
 ?>
<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
      <li>
        <a href="<?php echo base_url(); ?>company/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/transaction">TRANSACTION
          <i class="pull-left glyphicon glyphicon-tasks"></i>
        </a>
      </li>
      <li>
        <a class="active" href="<?php echo base_url(); ?>company/mobileusers">MOBILE USERS
          <i class="pull-left glyphicon glyphicon-user"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/setting">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
        </a>
      </li>
    </ul>
  </nav>

   <div class="transac-content">
    <div class="container">  
        <table class="table table-borderless">
            <thead>
              <tr>
                  <th>Name</th>
                  <th>Contact No.</th>
                  <th>Email Address</th>
                  <th>Transaction ID</th>
                  <th>Date & Time</th>
                  <th>Status</th>
              </tr>
              </thead>
              <tbody>
                <?php
                      foreach($transactions as $post){
                      echo '  <tr>  
                        <td>'.$post['fname'].' '.$post['lname'].'</td>
                        <td>'.$post['num'].'</td>
                        <td>'.$post['email'].'</td>
                        <td>'.$post['transacid'].'</td>
                        <td>'.$post['esti_date'].' - '.$post['esti_start'].'</td>
                        <td>'.$post['status'].'</td>
                      </tr>
                      ';
                      }
                    ?>
              </tbody>
        </table>
   </div>
  </div> 


</div>