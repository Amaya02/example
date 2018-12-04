<div class="wrapper-dash">
  <nav>
    <ul class="sidenav">
      <li>
        <a href="<?php echo base_url(); ?>company/dashboard">
          <i class="pull-left glyphicon glyphicon-home"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>company/transaction">TRANSACTION
          <i class="pull-left glyphicon glyphicon-tasks"></i>
        </a>
      </li>
      <li>
        <a class="active" href="<?php echo base_url(); ?>company/setting">SETTING
          <i class="pull-left glyphicon glyphicon-cog"></i>
        </a>
      </li>
    </ul>
  </nav>


<!-- SETTING -->
 <div class="content">
  <div class="container">
    <div class="row">
      <div class="main-wrap">
        <div class="setting-main">
                <form class="form-class1">
                <div class="col-sm-6 setting-form">
                  <input type="text" id="fname" name="email" placeholder="Email Address" disabled>
                </div>
                <div class="col-sm-6 setting-form">
                  <input type="text" id="ps" name="password" placeholder="Password" disabled>
                </div>
                <div class="col-sm-6 setting-form">
                  <input type="text" id="ps" name="company" placeholder="Company Name" disabled>
                </div>
              <div class="col-sm-6 setting-form">
                  <select id="country" name="country" >
                  <option value="Choose"hidden>Choose Country</option>
                  <option value="AFG">Afghanistan</option>
                  <option value="ALA">Åland Islands</option>
                
                  </select>
              </div>
              <div class="col-sm-12 setting-form2">
                  <input type="text" id="add" name="address" placeholder="Address" disabled>
              </div>
              <div class="col-sm-6 setting-form">
                  <input type="text" id="contact" name="contact" placeholder="Contact No." disabled>
              </div>
            </form>        
        </div>  

        <div class="setting-btn-toolbar">
              <button type="button" class="setting-pass" data-toggle="modal" data-target="#myModal"><b>change password</b></button>
              <button type="button" class="setting-acc"><b>edit account</b></button>
        </div>

                <!-- SETTING MODAL -->
                <div class="setting modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-s setting-mod-dias">
                     <div class="setting-border">
                    <div class="modal-content setting-mod-content">
                      <div class="setting-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                    <div class="modal-body setting-mod-body">
                     <form>
                        <div class="form-group setting-form-grp">
                        <input class="show-pass" type="password" placeholder="Current Password" name="currentpass" required>
                        </div>
                        <div class="form-group setting-form-grp">
                        <input class="show-pass"  type="password" placeholder="New Password" name="newpass" required>
                        </div>
                         <div class="form-check setting-form-chck">
                        <input type="checkbox" class="form-check-input" id="remember" onchange="tick(this)"> 
                        <label class="form-check-input" for="remember">SHOW PASSWORD</label>
                        </div>
                      </form>       
                    </div>
                      <div class="setting-footer">
                        <div id="setting-title"  data-dismiss="modal"><b>CHANGE PASSWORD</b></div> 
                        <button class="setting-btn-save" id="btn-save" data-dismiss="modal"><b>SAVE</b></button>
                      </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
          </div>


      </div>
    </div>
  </div>
</div>



<script>
function tick(el){
      $(".show-pass").attr('type', el.checked ? 'text':'password');
      }
</script>