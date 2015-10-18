<?php
try
{
session_start();
}
catch(Exception $e)
{
	
}
	$con=mysql_connect("localhost","learnquix","Learn@21") or die(mysql_error());
	$db=mysql_select_db("learnsci_kriti",$con)or die(mysql_error());
?>
