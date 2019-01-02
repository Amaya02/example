<div class="wrapper-dash">
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

   <div class="transac-content">
    <div class="container">  
        <table class="table table-borderless">
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