<?php
include_once("function.php");
include_once("Classes/PHPExcel/IOFactory.php");

if(isset($_POST['submit1'])){
	$errors = "";
	$classid=htmlentities($_POST['selcls'],ENT_QUOTES);
	$subjectid=htmlentities($_POST['sub'],ENT_QUOTES);
	$topid=htmlentities($_POST['topicname'],ENT_QUOTES);
	if(($classid == '') || ($subjectid == '') || ($topid == '')){
		$errors='Please give all the details.';
	}
	if(empty($errors)==true){
		$i=0;
		foreach($_POST['quesname'] as $qu => $quess){
			$i++;
			$anss='ans'.$i;
			$an=$_POST[$anss];
			$answer='';
			foreach($an as $answ){
				$answer.="|".$answ;
			}
			$crtt='';
			$x=$_POST['corrClassesect'][$qu];
			$level=$_POST['difficulty'][$qu];
			$fet=mysql_query("select * from `student_question` where `class_id`='$classid' and `subject_id`='$subjectid' and `topic_id`='$topid' and `questions`='$quess' and `answers`='$answer' and `correct`='$x'")or die(mysql_error());
			$res=mysql_numrows($fet);
			if($res==0){
				mysql_query("insert into `student_question` set `class_id`='$classid',`subject_id`='$subjectid',`topic_id`='$topid',`questions`='$quess',`answers`='$answer',`correct`='$x',`difficulty`='$level'")or die(mysql_error());
			}
		}
		$msg="successfully added";
	}else{
		$msg=$errors;
	}
}
if(isset($_POST['submit2'])){
	$classid=htmlentities($_POST['selcls'],ENT_QUOTES);
	$subjectid=htmlentities($_POST['sub'],ENT_QUOTES);
	$topid=htmlentities($_POST['topicname'],ENT_QUOTES);
	if(($classid == '') || ($subjectid == '') || ($topid == '')){
		$errors='Please give all the details.';
	}else{
		if(isset($_FILES['questn_excel'])){
			//$errors= array();
			$errors= "";
			$file_name = time().$_FILES['questn_excel']['name'];
			$file_size =$_FILES['questn_excel']['size'];
			$file_tmp =$_FILES['questn_excel']['tmp_name'];
			$file_type=$_FILES['questn_excel']['type'];
			$file_ext=strtolower(end(explode('.',$_FILES['questn_excel']['name'])));
			$expensions= array("xls", "xlb", "xlt", "xlam", "xlsb", "xlsm", "xltm", "xlsx");
			if(in_array($file_ext,$expensions)=== false){
				$errors="extension not allowed, please choose a EXCEL file.";
			}
			if($file_size > 5142880){
				$errors='File size must be less than 5 MB';
			}
			if(empty($errors)==true){
				 if(move_uploaded_file($file_tmp,"uploads/question_excel/".$file_name)){
					//excel code starts
					$inputFileName = "uploads/question_excel/".$file_name;
					//  Read your Excel workbook
					try {
						$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
						$objReader = PHPExcel_IOFactory::createReader($inputFileType);
						$objPHPExcel = $objReader->load($inputFileName);
					} catch(Exception $e) {
						die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
					}
					//  Get worksheet dimensions
					$sheet = $objPHPExcel->getSheet(0); 
					$highestRow = $sheet->getHighestRow(); 
					$highestColumn = $sheet->getHighestColumn();
					//  Loop through each row of the worksheet in turn
					for ($row = 2; $row <= $highestRow; $row++){ 
						//  Read a row of data into an array
						$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,NULL,TRUE,FALSE);
						//  Insert row data array into your database of choice here
						foreach($rowData AS $rawdtta){
							
							$stu_qutn = str_replace(chr(194)," ",$rawdtta[1]);
							$option1 = trim(str_replace(chr(194)," ",$rawdtta[2]));
							$option2 = trim(str_replace(chr(194)," ",$rawdtta[3]));
							$option3 = trim(str_replace(chr(194)," ",$rawdtta[4]));
							$option4 = trim(str_replace(chr(194)," ",$rawdtta[5]));
							$question = '<p>'.$stu_qutn.'</p>';
							$answers = '|'.trim($option1).'|'.trim($option2).'|'.trim($option3).'|'.trim($option4);
							$correctn = str_replace(chr(194)," ",$rawdtta[6]);
							//$correct_ans = 0;
							/*if(trim($correctn) == trim($option1)){
								$correct_ans = 1;
							}else if(trim($correctn) == trim($option2)){
								$correct_ans = 2;
							}else if(trim($correctn) == trim($option3)){
								$correct_ans = 3;
							}else{
								$correct_ans = 4;
							}*/
							/*else if(trim($correctn) == trim($option4)){
								$correct_ans = 4;
							}*/
							$correct_ans = $correctn;
							$levels = str_replace(chr(194)," ",$rawdtta[7]);
							if($levels == 'HIGH'){
								$level = 2;
							}else if($levels == 'MEDIUM'){
								$level = 1;
							}else{
								$level = 0;
							}
							if($stu_qutn != ''){
								$fet=mysql_query("select * from `student_question` where `class_id`='$classid' and `subject_id`='$subjectid' and `topic_id`='$topid' and `questions`='$question' and `answers`='$answers' and `correct`='$correct_ans'") or die(mysql_error());
								$res=mysql_num_rows($fet);
								if($res==0){
									mysql_query("insert into `student_question` set `class_id`='$classid',`subject_id`='$subjectid',`topic_id`='$topid',`questions`='$question',`answers`='$answers',`correct`='$correct_ans',`difficulty`='$level'") or die(mysql_error());
								}
							}
							
							/*echo "<pre>";
							print_r($rawdtta);
							echo "</pre>";*/
						}
					}
					//die();
					//excel code ends
					$msg="questions successfully added"; 
				 }
			}else{
				$msg=$errors;
			}
		}
	}
	$msg=$errors;
}
header("location:question_add.php?msg=$msg");
?>