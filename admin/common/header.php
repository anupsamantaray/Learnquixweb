<?php
	include "database/dbcon.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashbord</title>
<link href="css/service_provider.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
	<div class="allheader">
		<div class="logo">
			<div class="col-md-12 header">
				<div class="col-md-6 header">
					<div>
						<a href="javascript:void(0)">
						<img src="img/logo.png" alt="" class="mainlogo"></a>
					</div>
				</div>
				<div class="col-md-6 header"> 
					<ul>
					<li style="border-right:1px solid #c5c5c5; margin-right:15px;">Welcome,<span><?PHP echo $_SESSION["adminName"];?></span></li>

					<li class="bOne2">
						<a href="logout.php"><button type="button" class="logOutButtonfont2"> Logout </button> </a>
					</li>

					</ul>
					<div class="clr"></div>
				</div>
			</div>
		</div>
		<div class="clr">  </div>
	</div>

