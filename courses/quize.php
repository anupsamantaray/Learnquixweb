<?php include "header.php";
	$clid = $_REQUEST['clid'];
?>
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
						<h4 class="forme_Qus">For more quizzes <a href="#a">Click Here</a></h4>
						<form name="f" action="will_index1_action.php" method="post">
							<div class="questionDiv">
								<h5>1. A person throws a ball vertically upward with an initial velocity of 15 m/s.How high it goes?</h5>
							
								<div class="radio block"><label><input type="radio" name="1" value="1">11.5m</div>
								<div class="radio block"><label><input type="radio" name="1" value="2">12.5m</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="3">8m</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="4">6m</label></div>
								<input type="hidden" name="h1" value="1">
							</div>
							<div class="questionDiv">
								<h5>2. A body, whose momentum is constant, must have constant-</h5>
							
								<div class="radio block"><label><input type="radio" name="2" value="1">Force</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="2">Velocity</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="3">Acceleration</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="4">All of these</label></div>
								<input type="hidden" name="h2" value="2">
							</div>
							<div class="questionDiv">
								<h5>3. A man getting down a running bus, falls forward because-</h5>
							
								<div class="radio block"><label><input type="radio" name="3" value="1">due to inertia of rest, road is left behind and man reaches forward</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="2">due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="3">he leans forward as a matter of habit</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="4">of the combined effect of all the three factors stated in (1), (2) and (3)</label></div>
								<input type="hidden" name="h3" value="3">
							</div>
							<div class="questionDiv">
								<h5>4. Which of the following class of forces is different from others -</h5>
							
								<div class="radio block"><label><input type="radio" name="4" value="1">Pulling of a cart</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="2">Stretching of a coiled spring</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="3">Kicking of a football</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="4">Electrical force</label></div>
								<input type="hidden" name="h4" value="4">
							</div>
							<div class="questionDiv">
								<h5>5. The speed of a falling body increases continuously, this is because -</h5>
							
								<div class="radio block"><label><input type="radio" name="5" value="1">No force acts on it</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="2">It is very light</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="3">The air exert the frictional force</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="4">The earth attract it</label></div>
								<input type="hidden" name="h5" value="4">
							</div>
							<input type="submit" class="fa-btn btn-1 btn-1e" name="submit" value="submit">
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "../common/footer.php"?>