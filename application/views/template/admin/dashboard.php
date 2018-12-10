<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
       <li>
        <a class="active" href="<?php echo base_url(); ?>admin/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>admin/companies">
          <i class="pull-left glyphicon glyphicon-home"></i>COMPANIES
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>admin/users">
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
        <div class="col-lg-8 col-md-8">
          <div class="main-wrap">
                    <div class="main">
                        <p><b>Username: </b><?php echo $metadata['fname']; ?> <?php echo $metadata['lname']; ?></p>
                        <p><b>Email Address: </b><?php echo $metadata['email']; ?></p>
                        <p><b>Country: </b><?php echo $metadata['country']; ?></p>
                        <p><b>Address: </b><?php echo $metadata['address']; ?></p>
                        <p><b>Contact No: </b><?php echo $metadata['cnumber']; ?></p>
                    </div>
                    <div class="com-name">
                        <p class="company"><b><?php echo $metadata['username']; ?></b></p>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="but-wrap">
                    <div class="main-trans">
                        <div class="trans-in">
                            <p class="big"><b>COMPANIES</b></p>
                            <a class="small" href="<?php echo base_url(); ?>admin/companies"><b>VIEW COMPANIES ></b></a>
                        </div>
                    </div>
                    <div class="main-queue">
                        <div class="queue-in">
                            <p class="big"><b>MOBILE USERS</b></p>
                            <a class="small" href="<?php echo base_url(); ?>admin/users"><b>VIEW MOBILE USERS ></b></a>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
    
</div>