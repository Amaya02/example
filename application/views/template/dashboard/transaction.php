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
<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
      <li>
        <a href="<?php echo base_url(); ?>company/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a class="active" href="<?php echo base_url(); ?>company/transaction">TRANSACTION
          <i class="pull-left glyphicon glyphicon-tasks"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/mobileusers">MOBILE USERS
          <i class="pull-left glyphicon glyphicon-user"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/setting">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
        </a>
      </li>
    </ul>
  </nav>

   <div class="transac-content">
    <div class="container">  
      <div class="search">
        <div class="row">
          <div class="col-lg-6">
            <input type="text" id="myInput4" onkeyup="myFunction4()" placeholder="Search Account Name..">
          </div>
          <div class="col-lg-6">
            <input type="text" id="myInput5" onkeyup="myFunction5()" placeholder="Search Transaction..">
          </div>
        </div>
      </div>
        <table class="table table-borderless" id="myTable2">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>ACCOUNT NAME</th>
                  <th>TRANSACTION</th>
                  <th>TIME</th>
                  <th>TRANSACTION TIME</th>
                  <th></th>
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
                        <td>
                          <a href="#modalUpdate" class="btn-transact pull-right" data-toggle="modal" data-userid="'.$post['transacid'].'" data-name="'.$post['transacname'].'" data-stime="'.$post['starttime'].'" data-etime="'.$post['endtime'].'" data-estime="'.$post['estimatedtime'].'">
                          UPDATE
                          <i class="pull-left glyphicon glyphicon-edit"></i>
                        </a>
                        <a class="btn-transact pull-right" href="'.base_url('company/deleteTransaction/'.$post['transacid']).'">
                          DELETE
                          <i class="pull-left glyphicon glyphicon-trash"></i>
                       </a>
                        </td>
                      </tr>
                      ';
                      }
                    ?>
              </tbody>
        </table>
        <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#modalAdd">
          ADD
          <i class="pull-left glyphicon glyphicon-plus"></i>
        </a>
   </div>
  </div> 

<div class="modal fade" id="modalAdd" role="dialog">
  <div class="modal-dialog modal-s">
    <div class="border">
      <div class="modal-content">
        <div class="header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="<?php echo base_url(); ?>company/addtransaction" autocomplete="off" enctype="multipart/form-data" role="form" method="post">
          <div class="modal-body">
            <div class="form-group">
              <i class="glyphicon glyphicon-user"></i>
              <input class="TranA" type="text" value="<?php echo $metadata['username']; ?>@"" name="tranacc1" readonly>
              <input class="TranA" type="text" placeholder="Account name" name="tranacc" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-lock"></i>
              <input type="password" placeholder="Password" name="tranpass" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-tasks"></i>
              <input type="text" placeholder="Transaction Name" name="tranname" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-time"></i>
              <input type="text" placeholder="Estimated Time (minutes)" name="estitime" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-time"></i>
              <input class="time" type="time" name="trantime1" required="" />
              <label>TO</label> 
              <input class="time" type="time" name="trantime2" required="" />
            </div>
          </div>
          <div class="footer">
              <button  id="btn-title"  data-dismiss="modal">ADD TRANSACTION</button> 
              <button type="Submit" value="submit" id="btn-transac" data-toggle="modal" >Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalUpdate" role="dialog">
  <div class="modal-dialog modal-s">
    <div class="border">
      <div class="modal-content">
        <div class="header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="<?php echo base_url(); ?>company/updatetransaction" autocomplete="off" enctype="multipart/form-data" role="form" method="post">
          <div class="modal-body">
            <div class="form-group">
                <input type="hidden" name="user_id" id="user_id" value="" />
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-user"></i>
              <input class="TranA" type="text" value="<?php echo $metadata['username']; ?>@"" name="tranacc1" readonly>
              <input class="TranA" type="text" placeholder="Account name" name="tranacc" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-lock"></i>
              <input type="password" placeholder="Password" name="tranpass" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-tasks"></i>
              <input type="text" placeholder="Transaction Name" name="tranname" id="tranname" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-time"></i>
              <input type="text" placeholder="Estimated Time (minutes)" id="estitime" name="estitime" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-time"></i>
              <input class="time" type="time" name="trantime1" id="trantime1" required="" />
              <label>TO</label> 
              <input class="time" type="time" name="trantime2" id="trantime2" required="" />
            </div>
          </div>
          <div class="footer">
            <button  id="btn-title-up"  data-dismiss="modal">UPDATE TRANSACTION</button> 
            <button type="Submit" value="submit" id="btn-transac-up" data-toogle="modal">UPDATE</button>
          </div>
        </form>       
      </div>
    </div>
  </div>
</div>

</div>