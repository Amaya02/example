<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
      <li>
        <a class="active" href="<?php echo base_url(); ?>company/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/transaction">TRANSACTION
          <i class="pull-left glyphicon glyphicon-tasks"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/setting">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
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
                        <p><b>Username: </b><?php echo $metadata['username']; ?></p>
                        <p><b>Email Address: </b><?php echo $metadata['email']; ?></p>
                        <p><b>Country: </b><?php echo $metadata['country']; ?></p>
                        <p><b>Address: </b><?php echo $metadata['address']; ?></p>
                        <p><b>Contact No: </b><?php echo $metadata['cnumber']; ?></p>
                    </div>
                    <div class="com-name">
                        <p class="company"><b><?php echo $metadata['companyname']; ?></b></p>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="but-wrap">
                    <div class="main-trans">
                        <div class="trans-in">
                            <p class="big"><b>TRANSACTION</b></p>
                            <a class="small" href="<?php echo base_url(); ?>company/transaction"><b>VIEW TRANSACTION ></b></a>
                        </div>
                    </div>
                    <div class="main-queue">
                        <div class="queue-in">
                            <p class="big"><b>SETTING</b></p>
                            <a class="small" href="<?php echo base_url(); ?>company/setting"><b>UPDATE PROFILE ></b></a>
                        </div>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
</div>