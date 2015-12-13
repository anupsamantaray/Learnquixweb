<?php
session_start();
include "database/dbcon.php";
	
$query = "SELECT * FROM `ajaxsearch_table`";
$query_where1 = "";
$query_where2 = "";
$query_where3 = "";

if(isset($_REQUEST['year']) && ($_REQUEST['year'] != '')){
	$query_where1 = " WHERE year = '".$_REQUEST['year']."'";
}
if(isset($_REQUEST['car_name']) && ($_REQUEST['car_name'] != '')){
	if($query_where1 != ""){
		$query_where2 = " AND car_name = '".$_REQUEST['car_name']."'";
	}else{
		$query_where2 = " WHERE car_name = '".$_REQUEST['car_name']."'";
	}
}
if(isset($_REQUEST['model']) && ($_REQUEST['model'] != '')){
	if(($query_where1 != "") || ($query_where2 != "")){
		$query_where3 = " AND model = '".$_REQUEST['model']."'";
	}else{
		$query_where3 = " WHERE model = '".$_REQUEST['model']."'";
	}
}

$search_query = $query.$query_where1.$query_where2.$query_where3." ORDER BY id DESC";
$search_result = mysql_query($search_query);
$res_arr = array();
while($fetch_res = mysql_fetch_assoc($search_result)){
	array_push($res_arr,$fetch_res);
}
die(json_encode(array("status"=>"1","res_arr"=>$res_arr,"search_query"=>$search_query)));
?>