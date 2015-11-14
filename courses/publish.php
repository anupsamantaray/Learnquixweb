<?php
include_once("../database/dbcon.php");
$m=intval( $_GET['m']);
$sql= "UPDATE `student_result` SET `Publish` = 'Yes' WHERE `student_result`.`index` = ".$m.";";
$result= mysql_query($sql);
header("Location:show_quizzes_part_one.php");
?>