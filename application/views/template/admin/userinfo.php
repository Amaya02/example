<div class="wrapper">

<!-- Sidebar -->
  <div class="sidebar">
    <a class="sidebar-trigger" href="#0">
       <i class="glyphicon glyphicon-align-justify"></i>
    </a>

    <nav class="sidebar-nav">
       <ul>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>admin/dashboard">
            <i class="pull-left glyphicon glyphicon-home"></i><em>DASHBOARD</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>admin/companies">
            <i class="pull-left glyphicon glyphicon-home"></i><em>COMPANIES</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>admin/mobileusers">
            <i class="pull-left glyphicon glyphicon-home"></i><em>MOBILE USERS</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>admin/setting">
            <i class="pull-left glyphicon glyphicon-home"></i><em>SETTING</em>
          </a>
        </li>
       </ul>
    </nav>
  </div>

  <!-- Content -->
  <main class="wrapper-content">
    <div class="company-dash">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="company-info">
              <p class="company-name"><?php echo $user['fname']; ?> <?php echo $user['lname']; ?></p>
              <p class="company-username"><b>@<?php echo $user['username']; ?></b></p>
              <p class="company-username"><b>User ID: <?php echo $user['id']; ?></b></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-info">
            <div class="col-md-6">
              <i class="glyphicon glyphicon-envelope"></i><?php echo $user['email']; ?>
            </div>
            <div class="col-md-6">
              <i class="glyphicon glyphicon-phone"></i><?php echo $user['num']; ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="divider">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p class="tran-name">User Transactions</p>
            <div class="table-container">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>USER TRANSACTION ID</th>
                    <th>TRANSACTION ID</th>
                    <th>ACCOUNT NAME</th>
                    <th>TRANSACTION</th>
                    <th>COMPANY NAME</th>
                    <th>DATE & TIME OF TRANSACTION</th>
                    <th>STATUS</th>
                    <th>DATE GENERATED</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                          foreach($transactions as $post){
                          echo '  <tr>  
                            <td>'.$post['u_tranid'].'</td>
                            <td>'.$post['transacid'].'</td>
                            <td>'.$post['tranacc'].'</td>
                            <td>'.$post['transacname'].'</td>
                            <td>'.$post['companyname'].'</td>
                            <td>'.$post['esti_date'].' - '.$post['esti_start'].'</td>
                            <td>'.$post['status'].'</td>
                            <td>'.$post['date_tran'].'</td>
                          </tr>
                          ';
                          }
                        ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</div>