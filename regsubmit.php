<?php
session_start();
include "database/dbcon.php";
if(isset($_REQUEST['Register'])){
	$usrname = (isset($_REQUEST['usrname'])&&($_REQUEST['usrname']!=''))?$_REQUEST['usrname']:'';
	$usremail = (isset($_REQUEST['usremail'])&&($_REQUEST['usremail']!=''))?$_REQUEST['usremail']:'';
	$usrpass = (isset($_REQUEST['usrpass'])&&($_REQUEST['usrpass']!=''))?$_REQUEST['usrpass']:'';
	$usrcontact = (isset($_REQUEST['usrcontact'])&&($_REQUEST['usrcontact']!=''))?$_REQUEST['usrcontact']:'';
	$usrschool = (isset($_REQUEST['usrschool'])&&($_REQUEST['usrschool']!=''))?$_REQUEST['usrschool']:'';
	$usrcity = (isset($_REQUEST['usrcity'])&&($_REQUEST['usrcity']!=''))?$_REQUEST['usrcity']:'';
	mysql_query("INSERT INTO `login` (`name` ,`phone` ,`email` ,`password` ,`school` ,`city`) VALUES ('".$usrname."', '".$usrcontact."', '".$usremail."', '".md5($usrpass)."', '".$usrschool."', '".$usrcity."')");
	$_SESSION["usrname"] = $usrname;
	echo "<script>location.href='index.php';</script>";
}
if(($_REQUEST['op']) && ($_REQUEST['op']=='lgt')){
	session_destroy();
	echo "<script>location.href='index.php';</script>";
}
?>