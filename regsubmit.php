<?php
session_start();
include "database/dbcon.php";
include "common/thumbnail.class.php";
if(isset($_REQUEST['Register'])){
	$usrname = (isset($_REQUEST['usrname'])&&($_REQUEST['usrname']!=''))?$_REQUEST['usrname']:'';
	$usremail = (isset($_REQUEST['usremail'])&&($_REQUEST['usremail']!=''))?$_REQUEST['usremail']:'';
	$usrpass = (isset($_REQUEST['usrpass'])&&($_REQUEST['usrpass']!=''))?$_REQUEST['usrpass']:'';
	$usrcontact = (isset($_REQUEST['usrcontact'])&&($_REQUEST['usrcontact']!=''))?$_REQUEST['usrcontact']:'';
	$usrschool = (isset($_REQUEST['usrschool'])&&($_REQUEST['usrschool']!=''))?$_REQUEST['usrschool']:'';
	$usrcity = (isset($_REQUEST['usrcity'])&&($_REQUEST['usrcity']!=''))?$_REQUEST['usrcity']:'';
	$usrclass = (isset($_REQUEST['usrclass'])&&($_REQUEST['usrclass']!=''))?$_REQUEST['usrclass']:'';
	//$usrphoto = (isset($_REQUEST['usrphoto'])&&($_REQUEST['usrphoto']!=''))?$_REQUEST['usrphoto']:'';
	
	/*image upload*/
	$img_name=$_FILES['usrphoto']['name'];
	$img_type=$_FILES['usrphoto']['type'];
	//echo $img_type;
	if($img_type=='image/png' || $img_type=='image/jpeg' || $img_type=='image/gif' || $img_type=='image/bmp'){
		$image=rand(0,999).time().$img_name;
		$path="upload/student_images/".$image;
		$tmp_name=$_FILES['usrphoto']['tmp_name'];
		if(move_uploaded_file($tmp_name,$path)){
			 $pic=new Thumbnail();
			 $pic->filename="upload/student_images/".$image;
			 $pic->filename2="upload/student_images/thumb_".$image;
			 $pic->maxW=90;
			 $pic->maxH=90;
			 $pic->SetNewWH();
			 $pic->makeNew();
			 $pic->FinirPImage();
			 $image = "thumb_".$image;
		}
	}
	mysql_query("INSERT INTO `login` (`name` , `class`, `phone` ,`email` ,`password` ,`school` ,`city`, `pro_pic`) VALUES ('".$usrname."', '".$usrclass."', '".$usrcontact."', '".$usremail."', '".$usrpass."', '".$usrschool."', '".$usrcity."', '".$image."')");
	$user_id = mysql_insert_id();
	$_SESSION["user_id"] = $user_id;
	$_SESSION["usrname"] = ucfirst($usrname);
	$_SESSION["user_pic"] = $image;
	$_SESSION["class"] = $usrclass;
	echo "<script>location.href='index.php';</script>";
}
if(isset($_REQUEST['op']) && ($_REQUEST['op']=='lgt')){
	session_destroy();
	echo "<script>location.href='index.php';</script>";
}
if(isset($_REQUEST['action']) && ($_REQUEST['action']=='login')){
	$logemail = (isset($_REQUEST['logemail'])&&($_REQUEST['logemail']!=''))?$_REQUEST['logemail']:'';
	$logpass = (isset($_REQUEST['logpass'])&&($_REQUEST['logpass']!=''))?$_REQUEST['logpass']:'';
	$srch_qry = mysql_query("SELECT * FROM `login` WHERE `email` = '".$logemail."' AND `password` = '".$logpass."'");
	if(mysql_num_rows($srch_qry)>0){
		$reslt = mysql_fetch_assoc($srch_qry);
		$_SESSION["slno"] = $reslt['slno'];
		$_SESSION["usrname"] = ucfirst($reslt['name']);
		$_SESSION["user_pic"] = $reslt['pro_pic'];
		$_SESSION["class"] = $reslt['class'];
		echo "<script>location.href='index.php';</script>";
	}else{
		echo "<script>alert('Incorrect email or password! Please try again.');</script>";
		echo "<script>location.href='index.php';</script>";
	}
	
}
?>