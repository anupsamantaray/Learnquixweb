<?php include "header.php";
	//$clid = isset($_REQUEST['clid'])?$_REQUEST['clid']:9;
	/*$sltqry = mysql_query("SELECT student_class.class FROM login JOIN student_class ON login.class = student_class.id WHERE login.slno = '".$_SESSION['user_id']."'");
	$reslut = mysql_fetch_assoc($sltqry);
	$clid = $reslut['class'];*/
	$clid = (isset($_SESSION['class']) && ($_SESSION['class'] != ''))?$_SESSION['class']:0;
?>
<script type="text/javascript">
/*$(function(){
	$(".coursecls").addClass("active");
});
function callsubmit1(){
	document.forms["f1"].submit();
}*/
function ldlimit(){
	document.getElementById("cbollimit").options.length = 0;
	var up=document.getElementById("txtuplimit").value;
	var low=document.getElementById("cbouplimit").value;
	up=parseInt(up);
	low=parseInt(low);
	var x = document.getElementById("cbollimit");
	for(i=low;i<=up;i++){
		var option = document.createElement("option");
		option.text = i;
		option.value=i;
		x.add(option);
	}
}
</script>
<?php 
$time1=0;
$time2=0;
$time3=0;
$tid=$_GET['tid'];
$sqlgettopic="Select * from  student_topic where id=".$tid;
$resultgettopic=mysql_query($sqlgettopic);
if(mysql_num_rows($resultgettopic)>0){
	while($rows_gettopic=mysql_fetch_assoc($resultgettopic)){
		$topic=$rows_gettopic['topic'];
		$subject_id=$rows_gettopic['subject_id'];
	}
}
$sqlgetsubject="Select * from  student_subject where id=".$subject_id;
$resultgetsubject=mysql_query($sqlgetsubject);
$subject1 = '';
if(mysql_num_rows($resultgetsubject)>0){
	while($rows_getsubject=mysql_fetch_assoc($resultgetsubject)){
		$subject1=$rows_getsubject['subject'];
	}
}
$sqlgettime="select * from time where Topic='".$topic."'";
$result_gettime=mysql_query($sqlgettime);
if(mysql_num_rows($result_gettime)>0){
	while($rows_gettime=mysql_fetch_assoc($result_gettime)){
		$time1=$rows_gettime['time'];
		$time2=$rows_gettime['time1'];
		$time3=$rows_gettime['time2'];
	}
}
/*if($time1==NULL){
	$time1=1;
}
if($time2==NULL){
	$time2=1;
}
if($time3==NULL){
	$time3=1;
}*/
if($subject1 == 'Maths'){
	$time1=60;
	$time2=90;
	$time3=120;
}else if($subject1 == 'Science'){
	$time1=30;
	$time2=45;
	$time3=60;
}else{
	$time1=10;
	$time2=10;
	$time3=10;
}
echo("<script>
function showtime(){
	var low1=document.getElementById('cbouplimit').value;
	var up1=document.getElementById('cbollimit').value;
	if(low1 != '' && up1 != ''){
		var difftime1 = parseInt((up1-low1)+1);
		document.getElementById('btnlow').style.display='none'; 
		document.getElementById('btnmid').style.display='none'; 
		document.getElementById('btnhigh').style.display='none'; 
		document.getElementById('level').align='left';
		document.getElementById('level').innerHTML='Quiz Started...';
		document.getElementById('txtstarttime').value=difftime1*".$time1.";
		if(window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}else{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=0&l1='+low1+'&up1='+up1,true);
		xmlhttp.send();
		
		$('#countdown-1').timeTo((difftime1*".$time1."), function(){
			var time=difftime1*".$time1.";
			if(time==1){
				callsubmit1();
			}else{
				alert('Countdown finished');
				callsubmit1();
			}
		});
		
		$('#countdown-2').timeTo(
		{
			timeTo: new Date('Jul 10 2014 00:00:00')
		});
		
		/**
		 * Set theme and captions
		 */
		$('#countdown-3').timeTo({
			timeTo: new Date('Jul 27 2014 12:00:00'),
			theme: 'black',
			displayCaptions: true,
			fontSize: 48,
			captionSize: 14
		});
	}else{
		alert('Please select The Question to start and the Question to End');
	}
}
</script>");

echo("<script>
function showtime2(){
	var low1=document.getElementById('cbouplimit').value; 
	var up1=document.getElementById('cbollimit').value;
	if(low1!='' && up1!=''){
		var difftime1 = parseInt((up1-low1)+1);
		document.getElementById('btnlow').style.display='none'; 
		document.getElementById('btnmid').style.display='none'; 
		document.getElementById('btnhigh').style.display='none'; 
		document.getElementById('level').align='left';
		document.getElementById('level').innerHTML='Quiz Started...';
		document.getElementById('txtstarttime').value=difftime1*".$time2.";
		if (window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}else{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function() {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=1&l1='+low1+'&up1='+up1',true);
		xmlhttp.send();
		
		$('#countdown-1').timeTo((difftime1*".$time2."), function(){
			var time=difftime1*".$time2.";
			if(time==1){
				callsubmit1();
			}else{
				alert('Countdown finished');
				callsubmit1();
			}
			
		});

		/**
		 * Set timer countdown to specified date
		 */
		$('#countdown-2').timeTo({
			timeTo: new Date('Jul 10 2014 00:00:00')
		});
		
		/**
		 * Set theme and captions
		 */
		$('#countdown-3').timeTo({
			timeTo: new Date('Jul 27 2014 12:00:00'),
			theme: 'black',
			displayCaptions: true,
			fontSize: 48,
			captionSize: 14
		});
	}else{
		alert('Please select The Question to start and the Question to End');
	}
}
</script>");

echo("<script>
function showtime3(){
	var low1=document.getElementById('cbouplimit').value;
	var up1=document.getElementById('cbollimit').value;
	if(low1!='' && up1!=''){
		var difftime1 = parseInt((up1-low1)+1);
		document.getElementById('btnlow').style.display='none'; 
		document.getElementById('btnmid').style.display='none'; 
		document.getElementById('btnhigh').style.display='none'; 
		document.getElementById('level').align='left';
		document.getElementById('level').innerHTML='Quiz Started...';
		document.getElementById('txtstarttime').value=difftime1*".$time3."; 
		if(window.XMLHttpRequest){
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}else{
			// code for IE6, IE5
			xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
		}
		xmlhttp.onreadystatechange = function(){
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
				document.getElementById('showquestions').innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET','getquestion2.php?q=+".$tid."&d=2&l1='+low1+'&up1='+up1',true);
		xmlhttp.send();
			
		$('#countdown-1').timeTo((difftime1*".$time3."), function(){
			var time=difftime1*".$time3.";
			if(time==1){
				callsubmit1();
			}else{
				alert('Countdown finished');
				callsubmit1();
			}
			
		});
		/**
		 * Set timer countdown to specified date
		 */
		$('#countdown-2').timeTo({
			timeTo: new Date('Jul 10 2014 00:00:00')
		});
		
		/**
		 * Set theme and captions
		 */
		$('#countdown-3').timeTo({
			timeTo: new Date('Jul 27 2014 12:00:00'),
			theme: 'black',
			displayCaptions: true,
			fontSize: 48,
			captionSize: 14
		});
	}else{
		alert('Please select The Question to start and the Question to End');
	}
}
</script>");
?>
<script>
function blankfun(){
}
function callsubmit1(){
	var e11=document.getElementById("countdown-1").firstChild.firstChild.firstChild.innerHTML;
	e11=parseInt(e11);
	var e12=document.getElementById("countdown-1").childNodes[1].firstChild.firstChild.innerHTML;
	e12=parseInt(e12);
	var colon1=document.getElementById("countdown-1").childNodes[2].innerHTML;
	var e21=document.getElementById("countdown-1").childNodes[3].firstChild.firstChild.innerHTML;
	e11=parseInt(e21);
	var e22=document.getElementById("countdown-1").childNodes[4].firstChild.firstChild.innerHTML;
	e12=parseInt(e22);
	var colon2=document.getElementById("countdown-1").childNodes[5].innerHTML;
	var e31=document.getElementById("countdown-1").childNodes[6].firstChild.firstChild.innerHTML;
	e31=parseInt(e31);
	var e32=document.getElementById("countdown-1").childNodes[7].firstChild.firstChild.innerHTML;
	e32=parseInt(e32);
	document.getElementById("txtendtime").value=e11+e12+colon1+e21+e22+colon2+e31+e32;
	document.forms["f1"].submit();
}
</script>
<div class="container">
		<div class="abou aboutNew details row">
			<div class="col-md-2 leftNav" style="padding:0;">
				<h2>All Class</h2>
				<ul class="inernav">
					<?php 
						if(isset($_SESSION['class']) && ($_SESSION['class'] != '')){
							$sltqry = mysql_query("SELECT * FROM student_class WHERE id='".$clid."'");
						}else{
							$sltqry = mysql_query("SELECT * FROM student_class");
						}
						if(mysql_num_rows($sltqry)>0){
							while($resultqry = mysql_fetch_assoc($sltqry)){
								$alid = $resultqry['id'];
								$class = $resultqry['class'];
					?>
					<li><a href="index.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
					<?
							}
						}
					?>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<form name='f1' method='post' id="rgtfrm" action='getresult.php'>
						<!--h2 class="userIDnew"><span>Welcome</span> Arindam Chakraborty</h2-->
						<div class="feedbackDiv form-horizontal" style="margin:15px 0 0 0;">
							<div class="form-group">
								<?php $tid=$_GET['tid'];?>
								<label for="selector1" class="col-sm-6 control-label lableText" style="font-size:14px;">Start With the Question Number : </label>
								<div class="col-sm-3">
									<select name="cbouplimit" class="form-control" id="cbouplimit" onclick="ldlimit()" onchange="ldlimit()">
										<option></option>
										<?php
											$sql_uplimit="Select * from student_question where topic_id = ".(int)$tid;
											$result_uplimit=mysql_query($sql_uplimit);
											$iup=0;
											if(mysql_num_rows($result_uplimit)>0){
												while($rows_uplimit=mysql_fetch_assoc($result_uplimit)){
													$iup++;
													echo("<option value='".$iup."'>".$iup."</option>");	
												}
											}
										?>
									</select>
									<input style="display:none;" type='text' name='txtuplimit' id="txtuplimit" value="<?php echo($iup); ?>" />
								</div>
								<!--<div class="col-sm-3">
									<p class="help-block">Your help text!</p>
								</div>-->
							  </div>
							  <div class="form-group">
								<label for="selector1" class="col-sm-6 control-label lableText" style="font-size:14px;">End  With the Question Number : </label>
								<div class="col-sm-3">
									<select name="cbollimit" id="cbollimit" class="form-control">
										
									</select>
								</div>
								<!--<div class="col-sm-3">
									<p class="help-block">Your help text!</p>
								</div>-->
							  </div>
							  <div class="clearfix"></div>
						</div>
						<div>
							<h2 id="level"> Levels</h2>
							<ul class="maths_nav">
								<li>
									<a href="#" name="btnlow" id="btnlow" value="0" onclick="showtime()"><i class="fa fa-angle-right myicon"></i>Low</a>
								</li>
								<li>
									<a href="#" name="btnmid" value="1" id="btnmid" onclick="showtime2()"><i class="fa fa-angle-right myicon"></i>Middle</a>
								</li>
								<li>
									<a href="#" name="btnhigh" value="2" id="btnhigh" onclick="showtime3()"><i class="fa fa-angle-right myicon"></i>High</a>
								</li>
							</ul>
							<div id="clockcontainer" style="position:fixed; left:70%;"><div id="countdown-1"></div></div>
							<!--<form name='f1' method='post' action='getresult.php'>-->
							   <input type="text" name="txtname" id="txtname" value="<?php if($_SESSION['name']){echo $_SESSION['name'];} ?>" style="display:none;"/>
								<input type="text" name="txtclass" id="txtclass" value="<?php echo $rescl['class'];?>" style="display:none;"/>
								 <input type="text" name="txtsubject" id="txtsubject" value="<?php echo $subject1;?>" style="display:none;"/>
								 <input type="text" name="txtsubjectid" id="txtsubjectid" value="<?php echo $subject_id;?>" style="display:none;"/>
								  <input type="text" name="txttopic" id="txttopic" value="<?php echo $topic;?>" style="display:none;"/>
								  <input type="text" name="txttopicid" id="txttopicid" value="<?php echo $tid;?>" style="display:none;"/>
							  <input type="text" name="txtendtime" id="txtendtime" style="display:none;"/>
							  <input type="text" name="txtstarttime" id="txtstarttime" style="display:none;" /> 
							  <div id='showquestions' height="100%" >
							  </div>
							 <!--/form-->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>