<?php
include_once("function.php");
include "common/thumbnail.class.php";

/*image upload*/
$img_name=$_FILES['image']['name'];
$img_type=$_FILES['image']['type'];
//echo $img_type;
if($img_type=='image/png' || $img_type=='image/jpeg' || $img_type=='image/gif' || $img_type=='image/bmp'){
	$image=rand(0,999).time().$img_name;
	$path="../courses/uploads/question_images/".$image;
	$tmp_name=$_FILES['image']['tmp_name'];
	if(move_uploaded_file($tmp_name,$path)){
		 $pic=new Thumbnail();
		 $pic->filename="../courses/uploads/question_images/".$image;
		 $pic->filename2="../courses/uploads/question_images/question_images_thumb/thumb_".$image;
		 $pic->maxW=90;
		 $pic->maxH=90;
		 $pic->SetNewWH();
		 $pic->makeNew();
		 $pic->FinirPImage();
		 $image1 = "thumb_".$image;
		 
		 $httphost = $_SERVER['HTTP_ORIGIN'];
		 if($_SERVER['HTTP_ORIGIN'] == 'http://localhost'){
			 $httphost = $_SERVER['HTTP_ORIGIN'].'/Learnquixweb/';
		 }
		 die(json_encode(array("status"=>"1","server"=>$httphost,"img_path"=>$httphost."courses/uploads/question_images/question_images_thumb/".$image1)));
	}
}
die(json_encode(array("status"=>"0")));
?>