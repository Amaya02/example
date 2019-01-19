<!-- LOADING PAGE -->
<div class="loader">
    <div class="section-out" id="section-out"></div>
</div>


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
          <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>admin/companies">
            <i class="pull-left glyphicon glyphicon-briefcase"></i><em>COMPANIES</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>admin/mobileusers">
            <i class="pull-left glyphicon glyphicon-user"></i><em>MOBILE USERS</em>
          </a>
        </li>
        <li>
          <a class="sidebar-nav-link" href="<?php echo base_url(); ?>admin/setting">
            <i class="pull-left glyphicon glyphicon-cog"></i><em>SETTING</em>
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
              <p class="company-name"><?php echo $company['companyname']; ?></p>
              <p class="company-username"><b>@<?php echo $company['username']; ?></b></p>
              <p class="company-username"><b>Company ID: <?php echo $company['companyid']; ?></b></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-info">
            <div class="col-md-4">
              <i class="glyphicon glyphicon-envelope"></i><?php echo $company['email']; ?>
            </div>
            <div class="col-md-4">
              <i class="glyphicon glyphicon-map-marker"></i><?php echo $company['address']; ?>
            </div>
            <div class="col-md-4">
              <i class="glyphicon glyphicon-phone"></i><?php echo $company['cnumber']; ?>
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
            <p class="tran-name">Available Transactions</p>
            <div class="table-container">
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
      </div>
    </div>
  </main>

</div>


<script>
  window.addEventListener("load",function() {
    const loader = document.querySelector(".loader");
    loader.className += " hidden";
  });

</script>