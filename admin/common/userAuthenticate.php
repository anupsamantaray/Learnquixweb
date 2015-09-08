<?
//session_start();
/* if(!isset($_SESSION["adminName"])){
	header("location:login.php");
}
 */
 if(!isset($_SESSION["adminName"])){
	$url='login.php';
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$url.'";';
	echo '</script>';
	echo '<noscript>';
	echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
	echo '</noscript>'; 
	exit;
}
 
?>