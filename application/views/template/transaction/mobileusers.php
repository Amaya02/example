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

<div class="wrapper">

  <!-- Sidebar -->
  <div class="sidebar">
    <a class="sidebar-trigger" href="#0">
       <i class="glyphicon glyphicon-align-justify"></i>
    </a>

    <nav class="sidebar-nav">
       <ul>
          <li>
            <a class="sidebar-nav-link" href="<?php echo base_url(); ?>transaction/queue">
              <i class="pull-left glyphicon glyphicon-list"></i><em>QUEUE</em>
            </a>
          </li>
          <li>
            <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>transaction/mobileusers">
              <i class="pull-left glyphicon glyphicon-user"></i><em>MOBILE USERS</em>
            </a>
          </li>
       </ul>
    </nav>
  </div>

  <main class="wrapper-content">
    <div class="transac-user">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p class="date-info"><b>Pending Transactions ( <?php echo $traninfo['date'] ?> )</b></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-container">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Contact No.</th>
                    <th>Email Address</th>
                    <th>Date Generated</th>
                    <th>Date & Time of Transaction</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($transactions as $post){
                    echo '  <tr>  
                      <td>'.$post['fname'].' '.$post['lname'].'</td>
                      <td>'.$post['num'].'</td>
                      <td>'.$post['email'].'</td>
                      <td>'.$post['date_tran'].'</td>
                      <td>'.$post['esti_date'].' - '.$post['esti_start'].'</td>
                      <td>'.$post['status'].'</td>
                    </tr> ';
                  } ?>
                </tbody>
              </table>
              <a class="btn-submit" href="<?php echo base_url('transaction/TranClose/'.$traninfo['date']); ?>">Close All Transaction </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</div>