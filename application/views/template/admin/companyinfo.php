<div class="wrapper-admin">
  <nav>
    <ul class="sidenav">
       <li>
        <a href="<?php echo base_url(); ?>admin/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a class="active" href="<?php echo base_url(); ?>admin/companies">
          <i class="pull-left glyphicon glyphicon-home"></i>COMPANIES
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>admin/mobileusers">
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
          <p class="company-name"><?php echo $company['companyname']; ?></p>
        </div>
      </div>
      <div class="row company-info">
        <div class="col-lg-6">
            <p><b>Company ID: </b><?php echo $company['companyid']; ?></p>
            <p><b>Username: </b><?php echo $company['username']; ?></p>
            <p><b>Email Address: </b><?php echo $company['email']; ?></p>
            <p><b>Country: </b><?php echo $company['country']; ?></p>
        </div>
        <div class="col-lg-6">
            <p><b>Address: </b><?php echo $company['address']; ?></p>
            <p><b>Contact No: </b><?php echo $company['cnumber']; ?></p>
            <p><b>TIN No: </b><?php echo $company['tnumber']; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="transac-content">
    <div class="container">  
      <p class="tran-info">Available Transactions</p>
        <table class="table table-borderless">
            <thead>
              <tr>
                  <th>TRANSACTION ID</th>
                  <th>ACCOUNT NAME</th>
                  <th>TRANSACTION</th>
                  <th>TIME</th>
                  <th>TRANSACTION TIME</th>
              </tr>
              </thead>
              <tbody>
                <?php
                      foreach($transactions as $post){
                      echo '  <tr>  
                        <td>'.$post['transacid'].'</td>
                        <td>'.$post['tranacc'].'</td>
                        <td>'.$post['transacname'].'</td>
                        <td>'.$post['starttime'].' - '.$post['endtime'].'</td>
                        <td>'.$post['estimatedtime'].' Minutes </td>
                      </tr>
                      ';
                      }
                    ?>
              </tbody>
        </table>
   </div>
  </div> 
    
</div>