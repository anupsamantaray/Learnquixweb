<?php include "header.php";
	$clid = isset($_REQUEST['clid'])?$_REQUEST['clid']:9;
?>
<script type="text/javascript">
$(function(){
	/*document.getElementById("myvideo").pause();
	var vid = document.getElementById("myvideo");
	vid.pause();*/
	  $('iframe').contents().find('video').each(function () 
        {
            //this.currentTime = 0;
            this.pause();
        });
});
</script>
<div class="container">
	<div class="abou aboutNew details row">
		<div class="col-md-2 leftNav" style="padding:0;">
			<h2>All Class</h2>
			<ul class="inernav">
				<?php 
					/*if($clid != 9){
						$sltqry = mysql_query("SELECT * FROM student_class WHERE id='".$clid."'");
					}else{
						$sltqry = mysql_query("SELECT * FROM student_class");
					}*/
					$sltqry = mysql_query("SELECT * FROM student_class");
					if(mysql_num_rows($sltqry)>0){
						while($resultqry = mysql_fetch_assoc($sltqry)){
							$alid = $resultqry['id'];
							$class = $resultqry['class'];
					
				?>
				<li><a href="video.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
				<?
						}
					}
				?>
			</ul>
		</div>
		<div class="col-md-10 rightNew">
			<div class="child_right">
				<!--h2 class="userIDnew"><span>Welcome</span> Arindam  </h2-->
				<? 
					$slctwrry = mysql_query("SELECT * FROM student_subject WHERE class_id = '".$clid."'");
					if(mysql_num_rows($slctwrry)>0){
						while($rrslt = mysql_fetch_assoc($slctwrry)){
					?>
				
					<div class="science_Div">
						<h3 style="width:25%;"><!--i class="fa fa-puzzle-piece myicon"></i--><?=$rrslt['subject']?></h3>
						<?php
							$slctqrry = mysql_query("SELECT * FROM student_topic WHERE class_id = '".$clid."' AND subject_id = '".$rrslt['id']."'");
							if(mysql_num_rows($slctqrry)>0){
								while($reslt = mysql_fetch_assoc($slctqrry)){
									$fet3=mysql_query("select * from `extra_detail` where `class_id` = '".$clid."' and `subject_id` = '".$rrslt['id']."' and `topic_id` = '".$reslt['id']."' AND video!=''");
									if(mysql_num_rows($fet3)>0){
										$res3 = mysql_fetch_assoc($fet3);
						?>
						<div class="col-md-6" style="padding:0">
							<p class="para myText"><i class="fa fa-hand-o-down myicon2"></i> <?=$reslt['topic']?> </p>
							<div class="videoDiv">
								<div class="col-md-4 " style="padding:0 10px 0 0">
									<!--iframe width="100%" height="50%" src="<?=$BASE_PDF_URL?><?php echo $res3['video'];?>" frameborder="0" allowfullscreen id="myvideo" class="img-thumbnail myvideo" play="false" flashvars="autoplay=false&play=false" menu="false"></iframe-->
									<a href="<?=$BASE_PDF_URL?><?php echo $res3['video'];?>" onclick="window.open('<?=$BASE_PDF_URL?><?php echo $res3['video'];?>', 'newwindow', 'width=1200, height=600'); return false;"><img src="images/vid-placeholder.jpg" alt="..." class="img-thumbnail myvideo"></a>
								</div>
								<!--div class="col-md-4 " style="padding:0 10px 0 0">
									<img src="images/vid-placeholder.jpg" alt="..." class="img-thumbnail myvideo">
								</div-->
								<div class="clearfix"></div>
							</div>
						</div>
						<?			}
								}
							}
						?>
						<div class="clearfix"></div>
					</div>
					<? } 
					} ?>
				<!--div class="row">
					<div class="col-xs-6">
						<div id="example_info" class="dataTables_info">Showing 1 to 10 of 57 entries</div>
					</div>
					<div class="col-xs-6" style="text-align:right;">
						<ul class="pagination paginationMy" style="margin: 0; font-size:12px;">
						  <li><a href="#">«</a></li>
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						  <li><a href="#">»</a></li>
						</ul>
					</div>
				</div-->
			</div>
		</div>
	</div>
</div>
</div><!-- end main -->
<?php include "footer.php"?>