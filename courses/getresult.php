<?php
include "header.php";
$class=$_SESSION['class'];
$sqlcl=mysql_query("select * from `student_class` where `id`='$class'");
$rescl=mysql_fetch_array($sqlcl);
$mydate=date("Y-M-d");
$irand=rand(1,10000000);
?>
<script>
	$(document).ready(function(){
		$('#usernmm').html('<?php echo $_SESSION["name"];?>');
	});
</script>
<script>
function popup(){
	//document.getElementById("clickid").click();
}
</script>
</head>
<body>
<!--<form name='f1' method='post' action=''>-->
   <?php //include_once('header2.php');
   	$starttime = $_POST["txtstarttime"];
	$substart_time=explode(":",$starttime);
	$strhr = (int)($substart_time[0]);
	$strhr =(int)$strhr * 60 * 60;
	
	$strmin = (int)($substart_time[1]);
	$strmin =(int)$strmin * 60;
	
	$strsec = (int)($substart_time[2]);
	$strsec =(int) $strsec;
	
	$starttime1= $strhr+$strmin+$strsec;
	
	$endtime = $_POST["txtendtime"];
	$subend_time=explode(":",$endtime);
	$endhr = (int)($subend_time[0]);
	$endhr =(int)$endhr * 60 * 60;
	
	$endmin = (int)($subend_time[1]);
	$endmin =(int)$endmin * 60;
	
	$endsec = (int)($subend_time[2]);
	$endsec = (int)$endsec;
	
	$endtime1=$endhr + $endmin + $endsec;
	
	$totaltime= $starttime1 - $endtime1;
	$totaltime1=$totaltime;
	
   ?>
   <div class="container">
        <div class="abou aboutNew details row">
           <div class="col-md-2 leftNav" style="padding:0;">
				<!--div class="heading">
					<h3>All Class</h3>
				</div-->
				<ul class="inernav">
					<!--li class="list active"-->
					<li>
						<a href="javascript:void(0)">
							Class : <?php echo $rescl['class'];?>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							Subject : <?php echo $_POST['txtsubject'];?>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)">
							Topic : <?php echo $_POST['txttopic'];?>
						</a>
					</li>
					<li>
						<a href="publish.php?m=<?php echo $irand; ?>" > Publish Result</a>
					</li>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<div class="science_Div" style="border-top:none;">
<?php
	$cnt=0;
	for($i=0;$i<(int)($_POST['count']);$i++){
		if(empty($_POST['radio'.$i]))
		{
		}
		elseif($_POST['radio'.$i]==$_POST['txtc'.$i])
		{
			$cnt=$cnt+1;
		}
	}	
	//echo("<center><h1>Your Score is : ".$cnt." out of ".$_POST['count']."</h1></center>");
?>
	<center><h4 class="forme_Qus_new">Your score is <span><?php echo $cnt; ?> </span>out of <span><?=$_POST['count']?></span> </h4></center>
	<?php
	if($_POST['count']>0){
		$percent=($cnt/(float)$_POST['count'])*100;
	}else{
		$percent=0;
	}
	
	//header("location:ShowQuizes2.php?c=".$cnt);
?>
				 
             <div align="right"> <a href="publish.php?m=<?php echo $irand; ?>" >Click Here To Publish Your Result</a></div>     

                </div>
              <div>
<?php
$low=$_POST['cbouplimit'];
$up=$_POST['cbollimit'];
$minus=$up-$low;
$sqlquestion="Select * from  student_question where topic_id=".$_POST['tid']." and difficulty=".$_POST['diff']." limit ".(int)($minus+1)." offset ".(int)($low-1) ;
$result_question=mysql_query($sqlquestion);
$arrquestion=array();
$i=0;
$j=0;
if(mysql_num_rows($result_question)>0){
	while($rows_question=mysql_fetch_assoc($result_question)){
		$arrquestion[$i]=$rows_question['questions'];
		$arranswer=explode("|",$rows_question['answers']);
		$arranswer2[$i][1]=$arranswer[1];
		$arranswer2[$i][2]=$arranswer[2];
		$arranswer2[$i][3]=$arranswer[3];
		$arranswer2[$i][4]=$arranswer[4];
		$correct[$i]=$arranswer2[$i][$rows_question['correct']];
		$question_id[$i]=$rows_question['id'];
		/*print_r($arranswer2[$i]);
		die();*/
		$concept[$i]=$rows_question['concepts'];
		$i++;		
	}
}
$j=$i;
$k=1;
$l=1;
$jkl=0;
for($i=0;$i<$j;$i++){
	try{ 
	?>
	<div class="questionDiv">
		<h5 class="right_ans right_ansnew" style="border:1px solid #fff;"><?=$arrquestion[$i]?></h5>
	<?php
	/*echo("<h2 class='quentnclass'> Question ".($i+1)."</h2>");
	echo("<b>".$arrquestion[$i]."</b>");	
	echo("<br>");*/
	if($arranswer2[$i][1]==$correct[$i]){
		$answer_optn = 1;
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$correct[$i]){
				echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label><img class='rifhtwrng' src='images/right_icon.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label></div>");
		}
	}else{
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$arranswer2[$i][1]){
				echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label><img class='rifhtwrng' src='images/cross2.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][1]."</label></div>");
		}
	}
	if($arranswer2[$i][2]==$correct[$i]){
		$answer_optn = 2;
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$correct[$i]){
				echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label><img class='rifhtwrng' src='images/right_icon.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label></div>");
		}
	}else{
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$arranswer2[$i][2]){
				echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label><img class='rifhtwrng' src='images/cross2.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][2]."</label></div>");
		}
	}
	if($arranswer2[$i][3]==$correct[$i]){
		$answer_optn = 3;
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$correct[$i]){
				echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label><img class='rifhtwrng' src='images/right_icon.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label></div>");
		}
	}else{
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$arranswer2[$i][3]){
				echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label><img class='rifhtwrng' src='images/cross2.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][3]."</label></div>");
		}
	}
	if($arranswer2[$i][4]==$correct[$i]){
		$answer_optn = 4;
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$correct[$i]){
				echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label><img class='rifhtwrng' src='images/right_icon.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label></div>");
		}
	}else{
		if(!empty($_POST['radio'.$i])){
			if($_POST['radio'.$i]==$arranswer2[$i][4]){
				echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label><img class='rifhtwrng' src='images/cross2.png'></div>");
			}else{
				echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label></div>");
			}
		}else{
			echo("<div class='radio block'><label>".$arranswer2[$i][4]."</label></div>");
		}
	}	
	$mrks = 0;
	if(!empty($_POST['radio'.$i])){
		if($_POST['radio'.$i]!=$correct[$i]){
			echo("<h5 class=''>Correct Answer : ".$correct[$i]."</h5>");
			//echo("<h5 class=''>Concepts Included : ".$concept[$i]."</h5>");
			$concept1[$jkl]=explode(",",$concept[$i]);
			$jkl++;
		}else{
			$mrks = 1;
		}
	}else if(empty($_POST['radio'.$i])){
		echo("<h5 class=''>Correct Answer : ".$correct[$i]."</h5>");
		//echo("<h5 class=''>Concepts Included : ".$concept[$i]."</h5>");
		$concept1[$jkl]=explode(",",$concept[$i]);
		$jkl++;
	}
	mysql_query("insert into `select_answer` set `name`='".$_SESSION['usrname']."',`userid`='".$_SESSION['slno']."',`class`='".$class."',`subject`='".$_POST['txtsubjectid']."',`topic`='".$_POST['txttopicid']."',`question`='".$question_id[$i]."',`answer`='".$answer_optn."',`time`='".time()."', `mark`='".$mrks."',`date`='".date('Y-m-d')."'") or die(mysql_error());
	//echo("<hr><br>");
	}
	catch(Exception $e){
		
	}
}
?>
				<!--div align="center" style="padding-bottom:20px;padding-right:50px;"> <a href="publish.php?m=<?php echo $irand; ?>" style="color:rgb(0,112,176);" >Click Here To Publish Your Result</a><a class="big-link" data-reveal-id="openModal" data-animation="fade" href="#"  style="color:blue;" id="clickid"></a-->
              	<?php
					$x=0;
					for($z=0;$z<count($concept1);$z++)
					{
						for($y=0;$y<count($concept1[$z]);$y++)
						{
							if(!empty($concept1[$z][$y]))
							{
								$concept2[$x]=$concept1[$z][$y];
								$x++;
								
							}
						}	
					}
					for($w=0;$w<count($concept2);$w++)
					{
						//echo($concept2[$w].",");	
					}
					$t=0;
					for($v=0;$v<count($concept2);$v++)
					{
						$cntconcept=0;
						for($u=$v;$u>=0;$u--)
						{
							if($concept2[$u]==$concept2[$v])
							{
								$cntconcept++;	
							}	
							
						}
						if($cntconcept<=1)
						{
							$concept3[$t]=$concept2[$v];
							$t++;	
						}
						
					}
					$str="";
					//echo(count($concept3));
					for($s=0;$s<count($concept3);$s++)
					{
						//echo($concept3[$s].",");
						$str=$str.",".$concept3[$s];	
					}
					
					$str2=str_replace(" ,"," ",$str);
					//echo($str2);
					$concept4=explode(",",$str2);
					$str=implode(",",$concept4);
					// a b c d e f g h i j k l m n o p q r s t u v w x y z
				?>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php');
$sqlresult1="Select `Student_name`,`Subject_class`,`Subject` from student_result where Student_name='".$_SESSION['name']."' and 
Subject_class='".$_POST['txtclass']."' 
and Subject='".$_POST['txtsubject']."' 
and Student_topic='".$_POST['txttopic']."' and obtained_marks='".$cnt."' and Outof_marks='".$_POST['count']."' and 
Percent='".$percent."' and level='".$_POST['txtlevel']."' and 
strt_time='".$starttime."' and end_time='".$endtime."' and total_time='".$totaltime1."' and Publish='No' and Date='".$mydate."'";
$resultResult1=mysql_query($sqlresult1);
if(mysql_num_rows($resultResult1)>0){

}else{
	$sqlresult="INSERT INTO `student_result` 
	(`propic`, `Student_name`, 
	`Subject_class`, 
	`Subject`, 
	`Student_topic`, 
	`obtained_marks`, 
	`Outof_marks`,
	`Percent`, 
	`level`, 
	`strt_time`,
 	`end_time`, 
 	`total_time`, 
	 `Publish`, 
 	`Date`, 
	 `index`) 
	 VALUES ('".$_SESSION['user_pic']."', '".$_SESSION['usrname']."', 
	 '".$rescl['class']."',
 	'".$_POST['txtsubject']."', 
 	'".$_POST['txttopic']."', 
 	'".$cnt."', '".$_POST['count']."', 
	 '".$percent."', '".$_POST['txtlevel']."', '".$starttime."', '".$endtime."', '".$totaltime1."', 'No', '".$mydate."', '".$irand."');";
 	$result_sqlresult=mysql_query($sqlresult);
	
	
	 $sqlconcept="insert into tblweakcconcept(name,img,eid,class,subject,topic,date,weak_concept) values('".$_SESSION['usrname']."','".$_SESSION['user_pic']."','".$_SESSION['user_email']."','".$rescl['class']."','".$_POST['txtsubject']."','".$_POST['txttopic']."','".$mydate."','".$str."')";
  	 $resultconcept=mysql_query($sqlconcept);
	 
	 $body="You need to practice following concepts : ".$str;
	 $heading="Need to improve in...";
	 $mailheader = "From:  help@learnscience.co.in\r\n";  
$mailheader .= "Reply-To:  help@learnscience.co.in\r\n"; 
$mailheader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
	 mail($_SESSION['email'],$heading,$body,$mailheader);
  
}
 //} ?>