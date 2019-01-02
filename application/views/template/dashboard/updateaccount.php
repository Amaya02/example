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
        <a href="<?php echo base_url(); ?>company/mobileusers">MOBILE USERS
          <i class="pull-left glyphicon glyphicon-user"></i>
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
                <form class="form-class1" autocomplete="off" enctype="multipart/form-data" role="form" method="post" action='<?php base_url();?>saveupdateaccount'>
                  <div class="col-sm-6 setting-form">
                  <input required type="text" name="username" placeholder="Username" value="<?php echo $metadata['username'];?>" />
                </div>
                <div class="col-sm-6 setting-form">
                  <input required type="email" name="email" placeholder="Email Address" value="<?php echo $metadata['email'];?>"/>
                </div>
                <div class="col-sm-6 setting-form">
                  <input required type="text" name="companyname" placeholder="Company Name" value="<?php echo $metadata['companyname'];?>"/>
                </div>
              <div class="col-sm-6 setting-form">
                  <?php 
                  $country = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
                    echo '<select name="country" id="country" required>';
                    foreach($country as $sta){
                      echo "<option value='".$sta."'"; if (!empty($metadata['country']) && $metadata['country'] == $sta)  echo 'selected = "selected"'; echo">{$sta}</option>";
                    }
                    echo '</select>';?>
                  </select>
              </div>
              <div class="col-sm-12 setting-form2">
                  <input required type="text" name="address" placeholder="Address" value="<?php echo $metadata['address'];?>" />
              </div>
              <div class="col-sm-6 setting-form">
                  <input required type="text" name="cnumber" placeholder="Phone Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo $metadata['cnumber'];?>" />
              </div>
              <div class="col-sm-6 setting-form">
                  <input required type="text" name="tnumber" placeholder="TIN Number" value="<?php echo $metadata['tnumber'];?>" />
              </div>
              <div class="col-sm-12 setting-form">
                  <a href="<?php echo base_url(); ?>company/setting" class="setting-pass"><b>Back</b></a>
                  <button type="submit" class="setting-acc">Save</button>
              </div>
            </form>        
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