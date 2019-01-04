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
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/dashboard">
            <i class="glyphicon glyphicon-home"></i><em>DASHBOARD</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/transaction">
            <i class="glyphicon glyphicon-tasks"></i><em>TRANSACTION</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>company/mobileusers">
            <i class="glyphicon glyphicon-user"></i><em>MOBILE USERS</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/setting">
            <i class="glyphicon glyphicon-cog"></i><em>SETTING</em>
          </a>
        </li>
       </ul>
    </nav>
  </div>

  <main class="wrapper-content">
    <div class="company-user">
      <div class="container">
        <div class="search">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Name..">
            </div>
            <div class="col-lg-6">
              <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search Status..">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search Date of Transaction..">
            </div>
            <div class="col-lg-6">
              <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Search Transaction ID..">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-container">
              <table class="table table-borderless" id="myTable">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Contact No.</th>
                    <th>Email Address</th>
                    <th>Transaction ID</th>
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
                      <td>'.$post['transacid'].'</td>
                      <td>'.$post['date_tran'].'</td>
                      <td>'.$post['esti_date'].' - '.$post['esti_start'].'</td>
                      <td>'.$post['status'].'</td>
                    </tr>';
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</div>