<div class="wrapper-admin">
  <nav>
    <ul class="sidenav">
       <li>
        <a href="<?php echo base_url(); ?>admin/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>admin/companies">
          <i class="pull-left glyphicon glyphicon-home"></i>COMPANIES
        </a>
      </li>
      <li>
        <a class="active" href="<?php echo base_url(); ?>admin/mobileusers">
          <i class="pull-left glyphicon glyphicon-home"></i>MOBILE USERS
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>admin/setting">
          <i class="pull-left glyphicon glyphicon-home"></i>SETTING
        </a>
      </li>
    </ul>
  </nav>

    <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="company-name"><?php echo $user['fname']; ?> <?php echo $user['lname']; ?></p>
        </div>
      </div>
      <div class="row company-info">
        <div class="col-lg-6">
            <p><b>User ID: </b><?php echo $user['id']; ?></p>
            <p><b>Username: </b><?php echo $user['username']; ?></p>
            <p><b>Email Address: </b><?php echo $user['email']; ?></p>
        </div>
        <div class="col-lg-6">
            <p><b>Contact No: </b><?php echo $user['num']; ?></p>
            <p><b>Created At: </b><?php echo $user['created_at']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="transac-content">
    <div class="container">  
      <p class="tran-info">User Transactions</p>
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