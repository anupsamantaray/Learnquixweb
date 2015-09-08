<?PHP
if( $_POST ) {
	// if some post method is invoked
	$username = $_POST["txtUserName"];
	$password = $_POST["txtPassword"];
	$isBlank = false;
	$invalid='';
	if( !$username ) {
		$euser="Username field can not be blank.";
		$isBlank = true;
	}
	if( !$password ) {
		$epass="Password field can not be left blank.";
		$isBlank = true;
	}
	// if the fields are not left blank then validate the credentials with the database
	if( !$isBlank ) {
		// validating with database
		$qry = "SELECT * FROM lq_admin WHERE adminName='".mysql_real_escape_string($username)."' AND password='".md5($password)."'";
		$query_login = mysql_query( $qry ) or die("validation query failed.");
		
		// validating whether successful logged in or not
		if(mysql_num_rows($query_login)>0){
			//session_start();
			$result_data = mysql_fetch_array( $query_login );
			
			$_SESSION['adminName']=$result_data['adminName'];
			$_SESSION['adminEmail']=$result_data['adminEmail'];
			// setting cookies
			$year = time() + 31536000;
			if($_POST['remember']) {
				setcookie('remember', $_POST['remember'], $year);
				setcookie('remember_me', $_POST['txtUserName'], $year);
				setcookie('remember_pass', $_POST['txtPassword'], $year);
			}elseif(!$_POST['remember']) {
				if(isset($_COOKIE['remember_me']) && isset($_COOKIE['remember_pass'])) {
					$past = time() - 100;
					setcookie(remember, gone, $past);
					setcookie(remember_me, gone, $past);
					setcookie(remember_pass, gone, $past);
				}
			} 
			//header("location:index.php");
			//die();
			echo "<script>window.location.href='index.php';</script>";
			exit();
		} else {
			$invalid = "Username password given is invalid.";
		}
	}
}

?>