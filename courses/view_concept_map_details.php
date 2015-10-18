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
?>
<script type="text/javascript">
  $(function() {
		$(".concept_mapcls").addClass("active");
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
					<div class="feedbackDiv">
						<div class="map_view_det">
							<img src="../admin/<?=$rslt['map_image']?>" style="height: 100%; width: 100%;">
						</div>
						<a href="javascript:void(0)" class="loginbutton" style="margin-top:15px;" onClick="history.back();">Back</a>
					</div>
				<? } ?>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>