<?php include "header.php";
	$clid = (isset($_SESSION['class']) && ($_SESSION['class'] != ''))?$_SESSION['class']:0;
	if($clid == 0){
		$clid = (isset($_REQUEST['clid']) && ($_REQUEST['clid'] != ''))?$_REQUEST['clid']:9;
	}
	$class_id = 0;
?>
<script type="text/javascript">
	$(function() {
		$(".quizecls").addClass("active");
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
								$class_id = $resultqry['id'];
								$class = $resultqry['class'];
						
					?>
					<li><a href="show_quizzes_part_one.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
					<?
							}
						}
					?>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<h2 class="userIDnew"><span>Welcome</span> <?=$_SESSION['usrname']?></h2>
					<div class="science_Div">
						<h3><i class="fa fa-file-text myicon"></i>Subject</h3>
						<?
						$sqlsubject="Select * from student_subject where class_id=".$class_id;
						
						$result_subject=mysql_query($sqlsubject);
						if(mysql_num_rows($result_subject)>0){
							while($rows_subject=mysql_fetch_assoc($result_subject)){
								$sid = $rows_subject['id'];	?>
							<div class="panel panel-default" style="margin-top:20px;">
								<a class="mypanel" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$sid?>">
									<div class="panel-heading"><h4><?=$rows_subject['subject']?></h4></div>
								</a>
								<?
								$slct_qry = mysql_query("Select * from student_topic where class_id=".$class_id." and  subject_id=".$sid);
								if(mysql_num_rows($slct_qry)>0){ ?>
									<div style="" id="collapse<?=$sid?>" class="panel-collapse collapse in">
											<div class="panel-body">
												<div class="col-md-6 newshow_res">
													<ul class="maths_nav">
									<?
									while($rows_slct_qry=mysql_fetch_assoc($slct_qry)){ ?>
										
														<li><a href="showquizes.php?tid=<?=$rows_slct_qry['id']?>"><i class="fa fa-angle-right myicon"></i> <?=$rows_slct_qry['topic']?></a></li>
													
								<?	}
								?>
													</ul>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
								<?
								}
								?>
							</div>
						<?
							}
						}
						?>
						<!--<div class="panel panel-default" style="margin-top:20px;">
							<a class="mypanel" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<div class="panel-heading"><h4>Maths</h4></div>
							</a>
							<div style="" id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									<div class="col-md-6">
										<ul class="maths_nav">
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Number Systems</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="maths_nav">
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Areas of Parallelograms and Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Constructions</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Herons Formula</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Surface Areas and Volumes</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Statistics</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Probability</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Circles</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<div class="panel panel-default" style="margin-top:20px
							<a class="collapsed mypanel" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<div class="panel-heading"><h4>Science</h4></div>
							</a>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="col-md-6">
										<ul class="maths_nav">
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Areas of Parallelograms and Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Constructions</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Herons Formula</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Surface Areas and Volumes</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Statistics</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Probability</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Circles</a></li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul class="maths_nav">
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Areas of Parallelograms and Triangles</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Class IX Constructions</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i> Herons Formula</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Surface Areas and Volumes</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Statistics</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Class IX Probability</a></li>
											<li><a href="#a"><i class="fa fa-angle-right myicon"></i>Circles</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>-->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>