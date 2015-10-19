<?PHP
include "database/dbcon.php";
include "common/validate_login.php";

$user = '';
$password = '';

if(isset($_COOKIE['remember'])){
	$user = isset($_COOKIE['remember_me'])?$_COOKIE['remember_me']:'';
	$password = isset($_COOKIE['remember_pass'])?$_COOKIE['remember_pass']:''; 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/service_provider.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../img/fabicon_icon.png" type="image/png">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<title>LearnQuix -Admin pannel</title>
	<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/validation.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper">
	<div class="allheader allheader2">
		<div class="logo">
			<div class="col-md-12 header">
				<div class="col-md-6 header">
					<div>
						<a href="<?=BASE_URL?>">
						<img src="img/logo.png" alt="LearnQuix App" class="mainlogo"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="body_content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="login">
						<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
							<div class="login_child">
								<h1>Admin Login</h1>
								<div style="position:relative;">
									<div class="errorDiv">
										<div class="errorMessageAdmin" style="position: absolute; top: -21px;"><?=$invalid?></div>
										<input type="username" name="txtUserName" placeholder="User Name" class="textnewinput" id="txtUserName" value="<?php echo $user ?>"/>
										<div class="childError">
											<?php if($euser){?>
												<div class="errorMessageAdmin"><?=$euser?> </div>
											<?php }?>
										</div>
									</div>
									<div class="errorDiv">
										<input type="password" name="txtPassword" placeholder="Passwod" class="textnewinput" id="txtPassword" value="<?php echo $password; ?>">
										<div class="childError">
											<?php if($epass){?>
												<div class="errorMessageAdmin"><?=$epass?> </div>
											<?php }?>
										</div>
									</div>
									<div class="logHolTwo">
										<label class="remember">
											<input type="checkbox" name="remember" <?php if(isset($_COOKIE['remember']))echo "checked"; ?> /> <span style="font-weight: 300;">Remember me</span></label>
											<button class="loginbutton" id="btnsubmit" name="btnsubmit" /> Login  </button>
										<div class="clr"></div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<body>
</body>
</html>

	