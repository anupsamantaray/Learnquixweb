<?php include "header.php";
	$clid = isset($_REQUEST['clid'])?$_REQUEST['clid']:9;
?>
<script type="text/javascript">
$(function(){
	$('.sp').click(function(){
	$('.sp').css("color","#666");
	$(this).css("color","#0070B0");
	
	});
});
function play(video){
	$.ajax({url:"start_play.php?vid="+video,success:function(result){
		$(".vide").show();
		document.getElementsByClassName("vide")[0].innerHTML=result;
		}
	});
}
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
						<table aria-describedby="example_info" class="table table-striped table-bordered datatables dataTable" id="example" border="0" cellpadding="0" cellspacing="0">  
							<tbody aria-relevant="all" aria-live="polite" role="alert">
								<?php
									$slctqrry = mysql_query("SELECT * FROM student_topic WHERE class_id = '".$clid."' AND subject_id = '".$rrslt['id']."'");
									if(mysql_num_rows($slctqrry)>0){
										while($reslt = mysql_fetch_assoc($slctqrry)){
								?>
								<tr class="gradeA even">
								<?php
									$fet3=mysql_query("select * from `extra_detail` where `class_id` = '".$clid."' and `subject_id` = '".$rrslt['id']."' and `topic_id` = '".$reslt['id']."' AND video!=''");
									if(mysql_num_rows($fet3)>0){
										$res3 = mysql_fetch_assoc($fet3);
								?>
									<td class=" "><a href="javascript:void(0)"><?=$reslt['topic']?></a></td>
									<td style ="width: 10%;" class="center">
									<!--a class="btn btn-success btn-label" href="<?=$BASE_PDF_URL?><?php echo $res3['video'];?>" target="_blank"><i class="fa fa-globe" style="margin-right:8px;"></i>Download</a-->
									<div class="videobox" style="margin-left:0px;">
										<a href="#" class="big-link" data-reveal-id="myModal" data-animation="fade">
											<img src="images/play_video.jpg" onclick="play('<?php echo $res3['id'];?>')" style="width:100%; float:left;">
										</a>
									</div>
									</td>
								</tr>
									<?		}
										}
									}
								?>
							</tbody>
						</table>
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
<div id="myModal" class="reveal-modal">
	<div class="vide"></div>
	<a class="close-reveal-modal">&#215;</a>
</div>
</div><!-- end main -->
<?php include "footer.php"?>