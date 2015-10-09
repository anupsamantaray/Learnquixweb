<?php
	session_start();
	include "database/dbcon.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learn Quix</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<script type="text/javascript">
    $(function() {
        var url = window.location.href;
        $(".navbar-nav li a").each(function() {
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
            }
        });
    }); 
</script>
<div class="header_bg1">
	<div class="container">
		<div class="row header">
			<div class="logo navbar-left">
				<h1><a href="index.php">Learn Quix</a></h1>
			</div>
			<div class="h_search navbar-right">
				<form>
					<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
					<input type="submit" value="search">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="row h_menu">
			<nav class="navbar navbar-default navbar-left" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="technology.php">Technologies</a></li>
					<li><a href="about_us.php">About</a></li>
					<li><a href="blogs.php">Blog</a></li>
					<li class="active"><a href="contact_us.php">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
				<!-- start soc_icons -->
			</nav>
			<div class="soc_icons navbar-right">
				<ul class="list-unstyled text-center">
					<!--li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li-->
					<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.youtube.com/watch?v=bwWI-mW7KsI" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<!--li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li-->
				</ul>	
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>