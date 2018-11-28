<header class="header-home">
      <nav>
            <div class="menu-icon">
                <span class="glyphicon glyphicon-align-justify"></span>
            </div>
                <a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url('assets/images/LOGO.png'); ?>"></a>
                              <ul class="menu">
                                  <li><a href="">HOME</a></li>
                                  <li><a href="#aboutus">ABOUT US</a></li>
                                  <li><a href="#contactus">CONTACT US</a></li>
                                  <li class="d-hide">|</li>
                                  <li><a data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
                              </ul>
      </nav>
</header>

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

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
  <!-- Wrapper for slides --> 
    <div class="carousel-inner" role="listbox">
      <div class="item active"> 
        <img class="img1" src="<?php echo base_url('assets/images/BG.jpg'); ?>"> 
        <img id="img2" src="<?php echo base_url('assets/images/480px.jpg'); ?>"> 
        <div class="carousel-caption">
          <h1>Start with us!</h1>
          <p>A convenient way to manage <br/> your queuing system.</p>
          <a id="btn-signup" href="<?php echo base_url(); ?>signup">SIGN UP</a>
        </div>
      </div>

      <div class="item">
        <img class="img1" src="<?php echo base_url('assets/images/BG.jpg'); ?>">
        <img id="img2" src="<?php echo base_url('assets/images/480px.jpg'); ?>"> 
      </div>

      <div class="item"> 
        <img class="img1" src="<?php echo base_url('assets/images/BG.jpg'); ?>">
        <img id="img2" src="<?php echo base_url('assets/images/480px.jpg'); ?>"> 
      </div>

    </div>  
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-s">
    <div class="border">
      <div class="modal-content">
        <div class="header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action='<?php base_url();?>login' method='post' name='process' autocomplete="off">
          <div class="modal-body">
            <div class="form-group">
              <span class="glyphicon glyphicon-user"></span>
              <input type="email" name="email" id="email" placeholder="Enter email" required />
              <br><span class="glyphicon glyphicon-lock"></span>
              <input type="password" id="password" name="password" placeholder="Enter password" required />
              <br><input class="form-check-input" type="checkbox" onclick="myFunction()" /><b>Show Password</b>
            </div>      
          </div>
          <div class="footer">
            <button  id="btn-title"  data-dismiss="modal">SIGN IN</button> 
            <button type="Submit" value="Login" id="btn-signin" data-toggle="modal" >Signin</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 


