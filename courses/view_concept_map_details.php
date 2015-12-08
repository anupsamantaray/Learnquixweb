<?php include "header.php";
$uname = '';
if ($_SESSION['usrname']){
	$uname=$_SESSION['usrname'];
	/*if(isset($_POST['submit'])){
		
	}*/
}
if($_REQUEST['map_id']){
	$id=$_GET['map_id'];
}
$randid=rand(1,10000000);
?>
<script type="text/javascript">
  $(function(){
		$(".concept_mapcls").addClass("active");
		setInterval(function(){showtime()},5000);
		function showtime(){
			var time=document.getElementById('txttimer').value;
			var time=parseInt(time);
			time=time+5;
			document.getElementById('txttimer').value=time;
			var rid=<?=$randid?>;
			pth= document.getElementById("txtpth").value;
			eml= document.getElementById("eml").value;
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				   //alert(xmlhttp.responseText);
					//document.getElementById("txttimer").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","get_time.php?q="+time+"&rid="+rid+"&pth="+pth+"&eml="+eml,true);
			xmlhttp.send();
			if(time==2700){
				if (confirm("Do you want to appear for quiz ?") == true){
					window.location.assign('show_quizzes_part_one.php');
				} 
			}
		}
  });
</script>
	<div class="container">
		<div class="abou aboutNew details row">
			<div class="promosation2">
				<div class="child_right">
				<?php
						$fetch=mysql_query("select SCM.map_text, SCM.map_image, SC.class, ST.topic from `student_concept_maps` SCM JOIN `student_class` SC ON SCM.class_id = SC.id JOIN `student_topic` ST ON SCM.topic_id = ST.id WHERE SCM.id = '".$id."'");
						while($rslt=mysql_fetch_array($fetch)){ ?>
					<h2 class="userIDnew" style="line-height:30px;"><span>Class : <?=$rslt['class']?></span><br/>Topic : <?=$rslt['topic']?></h2>
					<p class="para"><?=$rslt['map_text']?></p>
					<div class="feedbackDiv" style="width: 100%;">
						<div class="map_view_det">
							<img src="../admin/<?=$rslt['map_image']?>" style="height: 100%; width: 100%;">
						</div>
						<a href="javascript:void(0)" class="loginbutton" style="margin-top:15px;" onClick="history.back();">Back</a>
						<input type='text' id='txttimer' value='0' style="display:none;"/>
						<input type="text" id="txtpth" value="../admin/<?=$rslt['map_image']?>" style="display:none;"/>
						<input type="text" id="eml" value="<?php echo $_SESSION['user_email']; ?>" style="display:none;"/>
					</div>
				<? } ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>