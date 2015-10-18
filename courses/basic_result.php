<?php
include "header.php";
if($_GET['id']){
$id=$_GET['id'];
 }else
 {
 $id=7;
 }
?>
<body>
<?php
	$tot=0;
	if(isset($_POST['submit'])){
		if(!empty($_POST['1'])){
			$n1=$_POST['1'];
           	$nh1=$_POST['h1'];
           	if($n1==$nh1){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['2'])){
			$n2=$_POST['2'];
			$nh2=$_POST['h2'];
			if($n2==$nh2){
				$tot=$tot+1;
			}
		}
	   if(!empty($_POST['3'])){
			$n3=$_POST['3'];
			$nh3=$_POST['h3'];
			if($n3==$nh3){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['4'])){
			$n4=$_POST['4'];
			$nh4=$_POST['h4'];
			if($n4==$nh4){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['5']))
		{
			$n5=$_POST['5'];
			$nh5=$_POST['h5'];
			if($n5==$nh5){
				$tot=$tot+1;
			}
		}
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".quizecls").addClass('active');
	});
</script>
<div class="container">
		<div class="abou aboutNew details row">
			<div class="col-md-2 leftNav" style="padding:0;">
				<h2>All Class</h2>
				<ul class="inernav">
					<?php 
						$sltqry = mysql_query("SELECT * FROM student_class");
						while($resultqry = mysql_fetch_assoc($sltqry)){ 
							$alid = $resultqry['id'];
							$class = $resultqry['class'];
					?>
					<li><a href="javascript:void(0)">Class <?=$class?></a></li>
					<? } ?>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<!--h2 class="userIDnew"><span>Welcome</span> Arindam  </h2-->
					<p class="para" style="text-align:center;">Our quiz enables students to learn at different levels of difficulty and adjust their pace of learning. Our Software Quisy would be launched soon...this software understands a students responses in the quiz and tells a student what exactly he needs to learn  </p>
					<div class="science_Div">
							<!--h4 class="forme_Qus">For more quizzes <a href="#a">Click Here</a></h4-->
							<center><h4 class="forme_Qus_new">Your score is <span><?php echo $tot; ?> </span>out of <span>5</span> </h4></center>
							<div class="questionDiv questionDiv_3">
								<h5>1. A person throws a ball vertically upward with an initial velocity of 15 m/s.How high it goes?</h5>
							
								<div class="radio block"><label><input type="radio" name="1" value="1">11.5m</div>
								<div class="radio block"><label><input type="radio" name="1" value="2">12.5m</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="3">8m</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="4">6m</label></div>
								<input type="hidden" name="h1" value="1">
								<h5 class="right_ans">Correct  Answer : 11.5m
								<?php 
									if(!empty($_POST['1'])){
										if($_POST['1']=='1'){ ?>
											<img src="../right_icon.png">
									<?	}else{ ?>
										<img src="../cross2.png">
								<?		}
									}
								?>
								</h5>
							</div>
							<div class="questionDiv questionDiv_3">
								<h5>2. A body, whose momentum is constant, must have constant-</h5>
							
								<div class="radio block"><label><input type="radio" name="2" value="1">Force</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="2">Velocity</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="3">Acceleration</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="4">All of these</label></div>
								<input type="hidden" name="h2" value="2">
								<h5 class="right_ans">Correct  Answer : Velocity
								<?php 
									if(!empty($_POST['2'])){
										if($_POST['2']=='2'){ ?>
										<img src="../right_icon.png">
									<?	}else{ ?>
										<img src="../cross2.png">
								<?		}
									}
								?>
								</h5>
							</div>
							<div class="questionDiv questionDiv_3">
								<h5>3. A man getting down a running bus, falls forward because-</h5>
							
								<div class="radio block"><label><input type="radio" name="3" value="1">due to inertia of rest, road is left behind and man reaches forward</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="2">due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="3">he leans forward as a matter of habit</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="4">of the combined effect of all the three factors stated in (1), (2) and (3)</label></div>
								<input type="hidden" name="h3" value="3">
								<h5 class="right_ans">Correct  Answer : he leans forward as a matter of habit
								<?php 
									if(!empty($_POST['3'])){
										if($_POST['3']=='3'){ ?>
											<img src="../right_icon.png">
									<?	}else{ ?>
										<img src="../cross2.png">
								<?		}
									}
								?>
								</h5>
							</div>
							<div class="questionDiv questionDiv_3">
								<h5>4. Which of the following class of forces is different from others -</h5>
							
								<div class="radio block"><label><input type="radio" name="4" value="1">Pulling of a cart</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="2">Stretching of a coiled spring</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="3">Kicking of a football</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="4">Electrical force</label></div>
								<input type="hidden" name="h4" value="4">
								<h5 class="right_ans">Correct  Answer : Kicking of a football
								<?php 
									if(!empty($_POST['4'])){
										if($_POST['4']=='4'){ ?>
											<img src="../right_icon.png">
									<?	}else{ ?>
										<img src="../cross2.png">
								<?		}
									}
								?>
								</h5>
							</div>
							<div class="questionDiv questionDiv_3">
								<h5>5. The speed of a falling body increases continuously, this is because -</h5>
							
								<div class="radio block"><label><input type="radio" name="5" value="1">No force acts on it</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="2">It is very light</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="3">The air exert the frictional force</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="4">The earth attract it</label></div>
								<input type="hidden" name="h5" value="4">
								<h5 class="right_ans">Correct  Answer : The earth attract it
								<?php 
									if(!empty($_POST['5'])){
										if($_POST['5']=='4'){ ?>
											<img src="../right_icon.png">
									<?	}else{ ?>
										<img src="../cross2.png">
								<?		}
									}
								?>
								</h5>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>