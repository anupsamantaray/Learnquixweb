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
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css_menu/timeTo.css" type="text/css" rel="stylesheet">
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.timeTo.js"></script>
<script type="text/javascript" src="js/jquery.timeTo.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<script type="text/javascript">
$(document).ready(function() {
	$("#owl-demo").owlCarousel({
		items : 4,
		lazyLoad : true,
		autoPlay : true,
		navigation : true,
		navigationText : ["", ""],
		rewindNav : false,
		scrollPerPage : false,
		pagination : false,
		paginationNumbers : false,
	});
	$("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
	$("#flipreg").click(function(){
        $(".popup_reg").fadeIn('slow');
    });
	$(".popclose").click(function(){
        $(".popup_reg").fadeOut('slow');
    });
	$(".loginbutton").click(function(){
		if($("#usrname").val()==''){
			$(".errorname").show();
			return false;
		}else{
			$(".errorname").hide();
		}
		if($("#usremail").val()==''){
			$(".erroremail").show();
			return false;
		}else{
			$(".erroremail").hide();
		}
		if($("#usrcontact").val()==''){
			$(".errorcontact").show();
			return false;
		}else{
			$(".errorcontact").hide();
		}
		if($("#usrclass").val()==0){
			$(".errorcls").show();
			return false;
		}else{
			$(".errorcls").hide();
		}
		if($("#usrschool").val()==''){
			$(".errorschool").show();
			return false;
		}else{
			$(".errorschool").hide();
		}
		if($("#usrcity").val()==''){
			$(".errorcity").show();
			return false;
		}else{
			$(".errorcity").hide();
		}
		if($("#pass").val()==''){
			$(".errorpassword").show();
			return false;
		}else{
			$(".errorpassword").hide();
		}
		
		if($("#pass").val() != $("#cpass").val()){
			$(".errorpass").show();
			return false;
		}else{
			$(".errorpass").hide();
		}
		return true;
	});
	$(".loginshbtn").click(function(){
		//$(".loginhdbtn").trigger('click');
		$("#loginform").submit();
	});
});

$(function(){
	var url = window.location.href;
	$(".navbar-nav li a").each(function(){
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
	$(".premsuquize").hover(function(){
		$(".remsuquize").toggle();
	});
}); 
</script>
</head>
<body>
<!--Registration_popup-->
<div class="regpopup popup_reg" style="display:none;">
	<form name="regsubmit" method="post" action="../regsubmit.php" enctype="multipart/form-data">
		<div class="subreg">
			<h2>Create Account</h2>
			<h2><a href="javascript:void(0)" class="closse popclose"><img src="images/cross.png" alt="Lazy Owl Image"></a></h2>
			<table>
				<tr>
					<td style="width:126px">Name</td>
					<td>
						<input name="usrname" class="form-control" id="usrname" validation="blank|Provide your name." type="username" placeholder="Type your name" />
						<span class="errorname" style="display:none; color:#FF5454;">Please enter your name.</span>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input name="usremail" class="form-control" id="usremail" validation="blank|Provide your name." type="email" placeholder="Type your email" />
						<span class="erroremail" style="display:none; color:#FF5454;">Please enter your email.</span>
					</td>	
				</tr>
				<tr>
					<td>Contact</td>
					<td>
						<input name="usrcontact" class="form-control" id="usrcontact" validation="blank|Provide your name." type="username" placeholder="Type your contact no.">
						<span class="errorcontact" style="display:none; color:#FF5454;">Please enter your email.</span>
					</td>
				</tr>
				<tr>
					<td>Class</td>
					<td>
						<select class="form-control" name="usrclass" id="usrclass">
							<option value="0">Select</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						<span class="errorcls" style="display:none; color:#FF5454;">Please select your class.</span>
					</td>
				</tr>
				<tr>
					<td>School</td>
					<td>
						<input name="usrschool" class="form-control" id="usrschool" validation="blank|Provide your name." type="username" placeholder="Type your school name" >
						<span class="errorschool" style="display:none; color:#FF5454;">Please enter your school name.</span>
					</td>
				</tr>
				<tr>
					<td>City</td>
					<td>
						<input name="usrcity" class="form-control" id="usrcity" validation="blank|Provide your name." type="username" placeholder="Type your city name" />
						<span class="errorcity" style="display:none; color:#FF5454;">Please enter your city name.</span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input name="usrpass" class="form-control" id="pass" validation="blank|Provide your password." type="password" placeholder="Type your password" />
						<span class="errorpassword" style="display:none; color:#FF5454;">Please enter password.</span>
					</td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>
						<input name="usrcpass" class="form-control" id="cpass" validation="blank|Provide your confirm password." type="password" placeholder="Type password again" />
						<span class="errorpass" style="display:none; color:#FF5454;">Password and confirm password should be same.</span>
					</td>
				</tr>
				<tr>
					<td>Upload Photo</td>
					<td><input name="usrphoto" class="form-control picuplode" id="usrphoto" validation="blank|Provide your photo." type="file" ></td>
				</tr>
				<tr>
					<td></td>
					<!--td><a href="javascript:void(0)" class="loginbutton">Register</a></td-->
					<td><input type="submit" name="Register" class="loginbutton"></td>
				</tr>
			</table>
		</div>
	</form>
</div>

<!--End_Registration_popup-->
<div class="header_bg1">
	<h5 class="iner_logheader">Download The App <i><a href="https://play.google.com/store/apps/details?id=androapps.schoolapp" class="objblink" id="imgnow" style="padding:0;" target="_blank"><img src="images/playstore_icon.png" alt="logout"></a></i></h5>
	<div class="container">
		<div class="row header">
			<div class="logo navbar-left">
				<h1><a href="index.php">Learn Quix</a></h1>
			</div>
			<div class="h_search navbar-right">
				<div class="logindiv popup_login">
					<?php if((isset($_SESSION['usrname'])) && ($_SESSION['usrname']!='')){?>
						<p style="background: rgba(255, 255, 255, 0.8) none repeat scroll 0% 0%; padding: 3px 8px;"><i class="userpicture"> <?php if((isset($_SESSION['user_pic'])) && ($_SESSION['user_pic']!='')){ ?> <img src="../upload/student_images/<?=$_SESSION['user_pic']?>" class="profile_pic"> <?php }else{ ?><img src="images/no-img.jpg" class="profile_pic"><?php } ?></i><!--span>welcome,</span--><?=$_SESSION['usrname']?> | <a href="../regsubmit.php?op=lgt" style="color:#ff0000; background:none;"><i><img src="images/logout.png" alt="logout image"></i> Logout</a></p>
					<?}
					else{ ?>
						<p><a href="javascript:void(0)" id="flip">Login</a>
						<a href="javascript:void(0)" id="flipreg">Registration</a></p>
					<? } ?>
					<div id="panel" class="accountId">
						<div class="toparrow">
							<img src="images/toparrow.png" alt="toparrow">
						</div>
						<form name="loginsub" method="post" id="loginform" action="../regsubmit.php?action=login">
							<table>
								<tr>
									<td><input name="logemail" type="text" placeholder="Email" required="required" class="form-control" style="width:100%;"/></td>
									<td><input name="logpass" type="password" placeholder="Password" required="required" class="form-control"/></td>
									<td><a href="javascript:void(0)" class="loginbutton loginshbtn">Login</a>
										<!--input type="submit" name="loggedin" value="submit" class="loginbutton loginhdbtn" style="display:show;"-->
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<form method="post" action="search.php">
					<input type="text" name="serval" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
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
					<? if(isset($_SESSION["usrname"]) && ($_SESSION["usrname"] != '')){ ?>
						<li class="profilecls"><a href="profile.php">My Profile</a></li>
					<? } ?>
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
					<li class="ebookcls"><a href="ebook.php">Ebook</a></li>
					<li class="videocls"><a href="video.php">Video</a></li>
					<li class="concept_mapcls"><a href="concept_map.php">Mind Map</a></li>
					<li class="sample_questionscls"><a href="sample_questions.php">Sample Question</a></li>
					<? if(isset($_SESSION["usrname"]) && ($_SESSION["usrname"] != '')){ ?>
						<li class="promotioncls"><a href="promotion.php">Promotion</a></li>
						<li class="feedbackcls"><a href="feedback.php">Feedback</a></li>
					<? }else{ ?>
					<!--li class="quizecls"><a href="quize.php">Quizes</a></li-->
					<? } ?>
					
					<?php 
					if(isset($_SESSION['usrname']) && ($_SESSION['usrname'] != '')){ ?>
						<li>
							<a href="show_quizzes_part_one.php">Quizzes</a>
						</li>
					<?
					}else{
					?>
					<li class="premsuquize"><a href="quize.php">Quizzes</a>
						<ul style="display:none;" class="remsuquize dropdown-menu mydrop">
							<li><a href="quize.php">Basic Quiz</a></li>
							<li><a href="quize_competitive.php">Competitive Quiz</a></li>
						</ul>
					</li>
					<? } ?>
				</li>
				  </ul>
				</div>
			</nav>
			<div class="soc_icons navbar-right">
				<ul class="list-unstyled text-center">
					<li><a href="https://www.youtube.com/watch?v=ct7ahMwgC-s" target="_blank"><i class="fa fa-youtube"></i></a></li>
					<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<!--li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li-->
				</ul>	
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>