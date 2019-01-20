<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GENGU3 | 404 Page Not Found</title>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>ICON.png" />
<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
<style type="text/css">

.navigation-bar {
    width: 100%;  
    height: 105px; 
    background-color: #000000; 
    border-bottom: 10px solid #f8a513;
    overflow: hidden;
}
.logo {
    display: inline-block;
    width: 300px;
    height: 70px;
    margin-right: 20px;
    margin-top: 25px;    
}

.error {
	text-align: center;
	font-size: 150px;
}

.error2 {
	text-align: center;
	font-size: 50px;
	margin-bottom:40px;
}

.but-home{
	text-align: center;
	background: #f8a513;
	padding: 10px;
	border-radius: 3px;
	color: #fff;
	font-size: 20px;
}

.but-home:hover{
	background-color: #ddd;
	text-decoration: none;
	color: #000;
}

.container {
	text-align: center;
}

</style>
</head>
<body>
	<header>
	  <nav class="navigation-bar">
	      <a href=""><img class="logo" src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo"></a>
	  </nav>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="error">404</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="error2">PAGE NOT FOUND!</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a class="but-home" href="<?php echo base_url(); ?>">Back to Home</a>
			</div>
		</div>
	</div>
</body>
</html>