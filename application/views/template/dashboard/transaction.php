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
        <a href="<?php echo base_url(); ?>company/setting">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
        </a>
      </li>
    </ul>
  </nav>

   <div class="transac-content">
    <div class="container">  
        <table class="table table-borderless">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>ACCOUNT NAME</th>
                  <th>TRANSACTION</th>
                  <th>TIME</th>
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
                        <td>'.$post['transactime'].'</td>
                        <td>
                          <a class="btn-transact pull-right" href="" data-toggle="modal" data-target="#modalUpdate">
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
        <form>
          <div class="modal-body">
            <div class="form-group">
              <i class="glyphicon glyphicon-user"></i>
              <input class="TranA" type="text" value="<?php echo $metadata['username']; ?>@"" name="tranacc1" readonly>
              <input class="TranA" type="text" placeholder="Account name" name="tranacc" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-lock"></i>
                <input type="password" placeholder="password" name="acpass" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-tasks"></i>
              <input type="text" placeholder="Transaction Name" name="tname" required>
            </div>
            <div class="form-group">
              <i class="glyphicon glyphicon-time"></i>
              <input class="time" type="time" class="time"/>
              <label>TO</label> 
              <input class="time" type="time" class="time"/>
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

<script type="text/javascript">
  $('#btn-title').attr('disabled', 'disabled');
</script>