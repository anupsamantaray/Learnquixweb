<?php include "header.php";
	$clid = (isset($_SESSION['class']) && ($_SESSION['class'] != ''))?$_SESSION['class']:0;
	if($clid == 0){
		$clid = (isset($_REQUEST['clid']) && ($_REQUEST['clid'] != ''))?$_REQUEST['clid']:9;
	}
?>
<script type="text/javascript">
  $(function() {
		$(".ebookcls").addClass("active");
  });
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
					<li><a href="ebook.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
					<?
							}
						}
					?>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<!--h2 class="userIDnew"><span>Welcome</span> Arindam  </h2-->
					<h6>This section contains the Ebook. Additionally there is mind map and difficult questions available for references. </h6>
					
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
										$fet3=mysql_query("select * from `extra_detail` where `class_id` = '".$clid."' and `subject_id` = '".$rrslt['id']."' and `topic_id` = '".$reslt['id']."' AND ebook!=''");
										//die("select * from `extra_detail` where `class_id` = '".$clid."' and `subject_id` = '".$rrslt['id']."' and `topic_id` = '".$reslt['topic']."' AND ebook!=''");
										if(mysql_num_rows($fet3)>0){
											$res3 = mysql_fetch_assoc($fet3);
									?>
										<td class=" ">
											<a href="<?=$BASE_PDF_URL?>pdf_server_open.php?emlid=<?=$_SESSION['user_email']?>&file=<?php echo $res3['ebook'];?>" target="_blank"><?=$reslt['topic']?></a>
											<a href="<?=$BASE_PDF_URL?>pdf_server_open.php?emlid=<?=$_SESSION['user_email']?>&file=<?php echo $res3['ebook'];?>" target="_blank">
												<a href="<?=$BASE_PDF_URL?>pdf_server_open.php?emlid=<?=$_SESSION['user_email']?>&file=<?php echo $res3['ebook'];?>" target="_blank" class="btn-label">
													<img src="images/pdf_icon.png" alt="Lazy Owl Image" class="pdf_icon">
												</a>
												<!--button class="btn btn-success btn-label"><i class="fa fa-globe" style="margin-right:8px;"></i> View Pdf</button-->
											</a>
										</td>
										<td style ="width: 228px;" class="center">
										<?php
										$fet33=mysql_query("select * from `student_concept_maps` where `class_id` = '".$clid."' and `subject_id` = '".$rrslt['id']."' and `topic_id` = '".$reslt['id']."'");
										if(mysql_num_rows($fet33)>0){
											$res33 = mysql_fetch_assoc($fet33);
										?>
											<a href="view_concept_map_details.php?map_id=<?php echo $res33['id'];?>" style="float:left; margin-right:4px; padding:0 !important;">
												<button class="btn btn-success btn-label"><i class="fa fa-globe" style="margin-right:8px;"></i> Mind map</button>
											</a>
										<? }else{ ?>
										<button class="btn btn-success btn-label"><i class="fa fa-globe" style="margin-right:8px;"></i> Mind map</button>
										<? } ?>
										<button class="btn btn-success btn-label"><i class="fa fa-question" style="margin-right:8px;"></i> Difficult qusetion</button>
										<div class="clearfix"></div>
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
</div><!-- end main -->
<?php include "footer.php"?>