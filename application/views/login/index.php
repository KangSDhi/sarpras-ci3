<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>adminlogin</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Awesome Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/login_style.css');?>" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="<?php echo base_url('assets///fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,vietnamese');?>" rel="stylesheet">
<!-- //web-fonts -->

</script>
</head>
<body>
<div data-vide-bg="<?php echo base_url('assets/video/social2');?>">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>SISTEM INFORMASI SARANA DAN PRASARANA </h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Login Now</h2>
			</div>
			<div class="sub-main-w3">
				
				<form action="<?php echo base_url('postlogin');?>" method="post" >
					<input placeholder="E-mail" name="email" id="email" type="email" required="">
					<span ><i class="fa fa-user" aria-hidden="true"></i></span>
					<input  placeholder="Password" name="password" id="password" type="password" required="">
					<span ><i class="fa fa-unlock" aria-hidden="true"></i></span>
					
					<div class="rem-w3">
						<a><?php
    				$data=$this->session->flashdata('sukses');
   					 if($data!=""){ ?>
   				   	 <div class="alert alert-success"><strong>Sukses </strong> <?=$data;?></div>
      				 <?php
    				 } ?>
   					 <?php
  					  $data2=$this->session->flashdata('error');
  					  if($data2!=""){ ?>
    				  <div class="alert alert-danger"><?=$data2;?></div>
    				  <?php
   				 } ?> </a>
						
					</div>
					
					<input type="submit" value="Login">
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2022 Awesome Login Form. All rights reserved | By SI Sarana Prasarana</a></p>
		</div>
		<!--//footer-->
	</div>
</div>
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.vide.min.js');?>"></script>
<!-- //js -->
</body>
</html>