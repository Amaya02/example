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
          <a class="sidebar-nav-link active" href="<?php echo base_url(); ?>company/transaction">
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

  <main class="wrapper-content">
    <div class="company-tran">
      <div class="container">
        <div class="search">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" id="myInput6" onkeyup="myFunction6()" placeholder="Search Transaction type..">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="table-container">
              <table class="table table-borderless" id="myTable3">
                <thead>
                  <tr>
                    <th>TRANSACTION</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($transactions as $post){
                    echo '  <tr>  
                      <td>'.$post['t_type'].'</td>
                      <td>
                      <a class="btn-transact pull-right" href="'.base_url('company/deleteTransactionType/'.$post['t_id']).'">
                          DELETE
                          <i class="pull-left glyphicon glyphicon-trash"></i>
                        </a>
                      </td>
                    </tr>';
                  }?>
                </tbody>
              </table>
              <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#modalAdd">
                ADD
                <i class="pull-left glyphicon glyphicon-plus"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="modal fade" id="modalAdd" role="dialog">
    <div class="modal-dialog modal-s">
      <div class="border">
        <div class="modal-content">
          <div class="header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <form action="<?php echo base_url(); ?>company/addtransactiontype" autocomplete="off" enctype="multipart/form-data" role="form" method="post">
            <div class="modal-body">
              <div class="form-group">
                <i class="glyphicon glyphicon-tasks"></i>
                <input class="TranA" type="text" placeholder="Transaction type" name="trantype" required>
              </div>
            </div>
            <div class="footer">
                <button  id="btn-title2"  data-dismiss="modal">ADD TRANSACTION</button> 
                <button type="Submit" value="submit" id="btn-transac" data-toggle="modal" >Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>