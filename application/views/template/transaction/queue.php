<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
       <li>
        <a class="active" href="<?php echo base_url(); ?>transaction/queue">
          <i class="pull-left glyphicon glyphicon-list"></i>QUEUE
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>transaction/mobileusers">
          <i class="pull-left glyphicon glyphicon-user"></i>MOBILE USERS
        </a>
      </li>
    </ul>
  </nav>


<!-- QUEUE -->
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

<div class="container queue-container">
  <div class="queue-title"><?php echo $metadata['tranacc']; ?> - <?php echo $metadata['transacname']; ?></div>
  <form name="form" action="<?php echo base_url(); ?>transaction/getTranInfo" method="post">
    <div class="queue-main">
      <input type="text" value="<?php echo $traninfo['u_tranid']; ?>" class="id" name="tranid" onmouseover="focus(this);">
    </div>
    <div class="info">
      <div class="row">
        <div class="col-sm-6">
          <p>Customer Name: <?php echo $traninfo['fname']; ?> <?php echo $traninfo['lname']; ?></p>
          <p>Appointment Date: <?php echo $traninfo['esti_date']; ?> <?php echo $traninfo['esti_start']; ?> </p>
        </div>
        <div class="col-sm-6">
          <p>Status: <?php echo $traninfo['status']; ?></p>
          <p>Date Generated: <?php echo $traninfo['date_tran']; ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="queue-btn-toolbar">
            <a href="<?php echo base_url('transaction/TranDone/'.$traninfo['u_tranid2']); ?>" class="queue-next">DONE</a>
          </div>
        </div>
      </div>
    </div>
  </form>
    
    
</div>

</div>