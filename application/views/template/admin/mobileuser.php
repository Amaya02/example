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

  <main class="wrapper-content">
    <div class="admin">
      <div class="container">
        <div class="search">
          <div class="row">
            <div class="col-lg-12">
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Company Name..">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-container">
              <table class="table table-borderless" id="myTable">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($company as $post){
                      echo '  <tr>  
                        <td>'.$post['id'].'</td>
                        <td>'.$post['fname'].' '.$post['lname'].'</td>
                        <td>
                          <a class="btn-transact pull-right" href="'.base_url('admin/getUserInfo/'.$post['id']).'">
                           VIEW DETAILS
                        </a>
                        </td>
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