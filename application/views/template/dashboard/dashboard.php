<div class="wrapper">

<!-- Sidebar -->
  <div class="sidebar">
    <a class="sidebar-trigger" href="#0">
       <i class="glyphicon glyphicon-align-justify"></i>
    </a>

    <nav class="sidebar-nav">
       <ul>
         <li>
          <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>company/dashboard">
            <i class="glyphicon glyphicon-home"></i><em>DASHBOARD</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/transaction">
            <i class="glyphicon glyphicon-list"></i><em>TRANSACTIONS</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/accounts">
            <i class="glyphicon glyphicon-tasks"></i><em>ACCOUNTS</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>company/mobileusers">
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

  <!-- Content -->
  <main class="wrapper-content">
    <div class="company-dash">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="company-info">
              <p class="company-name"><?php echo $metadata['companyname']; ?></p>
              <p class="company-username"><b>@<?php echo $metadata['username']; ?></b></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-info">
            <div class="col-md-4">
              <i class="glyphicon glyphicon-envelope"></i><?php echo $metadata['email']; ?>
            </div>
            <div class="col-md-4">
              <i class="glyphicon glyphicon-map-marker"></i><?php echo $metadata['address']; ?>
            </div>
            <div class="col-md-4">
              <i class="glyphicon glyphicon-phone"></i><?php echo $metadata['cnumber']; ?>
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
          <div class="col-lg-4">
            <div class="dash-border">
              <div class="dash-links">
                <p class="big"><i class="glyphicon glyphicon-list"></i><?php echo $transactions['num_type']; ?></p>
                <p class="medium"><b>TRANSACTIONS</b></p>
                <a class="small" href="<?php echo base_url(); ?>company/transaction"><b><span>VIEW TRANSACTIONS</span></b></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="dash-border">
              <div class="dash-links">
                <p class="big"><i class="glyphicon glyphicon-tasks"></i><?php echo $transactions['num_tran']; ?></p>
                <p class="medium"><b>ACCOUNTS</b></p>
                <a class="small" href="<?php echo base_url(); ?>company/accounts"><b><span>VIEW ACCOUNTS</span></b></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="dash-border">
              <div class="dash-links">
                <p class="big"><i class="glyphicon glyphicon-user"></i><?php echo $userinfo['num_users']; ?></p>
                <p class="medium"><b>MOBILE USERS</b></p>
                <a class="small" href="<?php echo base_url(); ?>company/mobileusers"><b><span>VIEW MOBILE USERS</span></b></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>

</div>