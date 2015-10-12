<?php
	session_start();
	include "../database/dbcon.php";
	$slct_qry = mysql_query("SELECT * FROM student_class");
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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script

<!--link rel="stylesheet" href="css/reveal.css">	
<script type="text/javascript" src="js/jquery.reveal.js"></script-->
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
		$(".remmnmnu").hover(function(){
			$(".remsubmnu").toggle();
		});
		$(".coursecls").hover(function(){
			$(".remsucrse").toggle();
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
					<li><a href="../index.php">Home</a></li>
					<li class="coursecls"><a href="javascript:void(0)">Courses</a>
						<ul style="display:none;" class="remsucrse dropdown-menu mydrop">
						<?
							if(mysql_num_rows($slct_qry)>0){
								while($rslt = mysql_fetch_assoc($slct_qry)){
									echo "<li><a href='index.php?clid=".$rslt['id']."'>".$rslt['class']."</a></li>";
								}
							}
						?>
						</ul>
					</li>
					<li><a href="ebook.php">Ebook</a></li>
					<li><a href="video.php">Video</a></li>
					<li><a href="sample_questions.php">Sample Question</a></li>
				  </ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>