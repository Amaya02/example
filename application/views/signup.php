<header class="header-home">
      <nav>
            <div class="menu-icon">
                <span class="glyphicon glyphicon-align-justify"></span>
            </div>
                <a href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url('assets/images/LOGO.png'); ?>"></a>
                              <ul class="menu">
                                  <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                                  <li class="d-hide">|</li>
                                  <li><a data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
                              </ul>
      </nav>
</header>

<?php
    $error_msg=$this->session->flashdata('error_msg');
    if($error_msg){
        echo "<script type='text/javascript'>alert('$error_msg');</script>";
    }
?>

<div class="bg-signup">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-top"><b>Create an Account</b></div>
                <div class="border">
                    <div class="bgwhite">
                        <div class="row">
                            <div class="col-sm-4 add-side">
                                W E L C O M E ! ! !
                            </div>
                            <div class="col-sm-8 sign-form">
                                <form autocomplete="off" enctype="multipart/form-data" role="form" method="post" action='<?php base_url();?>signup/process'>
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <input required type="text" name="username" placeholder="Username" />
                                      </div>
                                      <div class="col-sm-4">
                                        <input required type="email" name="email" placeholder="Email Address" />
                                      </div>
                                      <div class="col-sm-4">
                                        <input required type="password" name="pass" id="pass" placeholder="Password" pattern=".{6,15}" title="Minimum of 6 characters, maximum of 20 characters" />
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-6">
                                        <input required type="text" name="companyname" placeholder="Company Name" />
                                      </div>
                                      <div class="col-sm-6">
                                        <?php 
                                        $country = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                                        echo '<select name="country" id="country" required>';
                                        foreach($country as $coun){
                                            echo '<option value="'.$coun.'">'.$coun.'</option>';
                                        }
                                        echo '</select>';?>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <input required type="text" name="address" placeholder="Address" />
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input required type="text" name="cnumber" placeholder="Phone Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' />
                                        </div>
                                        <div class="col-sm-6">
                                            <input required type="text" name="tnumber" placeholder="TIN Number" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn-submit" >Register</button>
                                        <a class="back" href="<?php echo base_url(); ?>">BACK</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="border1">
      <div class="modal-content">
        <div class="header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <button  id="btn-title"  class="title" data-dismiss="modal">SIGN IN</button> 
        </div>
        <form action='<?php base_url();?>login' method='post' name='process' autocomplete="off">
          <div class="body">
            <div class="form-group">
              <span class="glyphicon glyphicon-user"></span>
              <input type="text" name="username" id="username" placeholder="Enter Username" required />
              <br><span class="glyphicon glyphicon-lock"></span>
              <input type="password" id="password" name="password" placeholder="Enter password" required />
              <br><input class="form-check-input" type="checkbox" onclick="myFunction()" /><b>Show Password</b>
            </div>      
          </div>
          <div class="footer">
            <button type="Submit" value="Login" id="btn-signin" data-toggle="modal" >Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="footer-home">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; GENQU3 2018</span>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
          </div>
        </div>
    </div>
</footer>