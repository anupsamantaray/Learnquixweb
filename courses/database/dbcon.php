<?php 
date_default_timezone_set('asia/kolkata');
$BASE_PDF_URL = "http://localhost/Learnquixweb/courses/";
$BASE_PDF_URL_VIDEO= "http://localhost/Learnquixweb/admin/";
$host="localhost";
$user="root";
$pass="";
$db_name="learnsci_kriti";
$link = mysql_connect($host, $user, $pass);
mysql_select_db( $db_name, $link ) or die( "database connection could not be established." );
	
/*if($_SERVER['SERVER_NAME']=='localhost' || $_SERVER['SERVER_NAME']=='192.168.1.7'){
	$host="localhost";
	$user="learnquix";
	$pass="Learn@21";
	$db_name="learnquixweb";
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db( $db_name, $link ) or die( "database connection could not be established." );
}else{
	$host= "localhost"; //localhost:3306
	$user= "learnquix";
	$pass= "Learn@21";
	$db_name= "learnquixweb";
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db( $db_name, $link ) or die( "database connection could not be established." );
}*/
?>