<?php include "header.php";
	$clid = $_REQUEST['clid'];
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
						<h4 class="forme_Qus">For more quizzes <a href="#a">Click Here</a></h4>
						<form name="f" action="will_index1_action.php" method="post">
							<div class="questionDiv">
								<h5>1. Directions A person throws a ball vertically upward with an initial velocity of 15 m/s.How long the ball is in air before it comes to his hand?</h5>
							
								<div class="radio block"><label><input type="radio" name="1" value="1">2.0 s</div>
								<div class="radio block"><label><input type="radio" name="1" value="2">1.0 s</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="3">3.06 s</label></div>
								<div class="radio block"><label><input type="radio" name="1" value="4">5.01 s</label></div>
								<input type="hidden" name="h1" value="1">
							</div>
							<div class="questionDiv">
								<h5>2. A body, whose momentum is constant, must have constant-</h5>
							
								<div class="radio block"><label><input type="radio" name="2" value="1">There is no force acting on it</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="2">The force acting on it not in contact with it</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="3">The combination of forces acting on it balances each other</label></div>
								<div class="radio block"><label><input type="radio" name="2" value="4">The body is in vacuum</label></div>
								<input type="hidden" name="h2" value="2">
							</div>
							<div class="questionDiv">
								<h5>3. A fish is swimming upward at an angle of 30 deg with the horizontal. The direction of the force of gravity acting on it is -</h5>
							
								<div class="radio block"><label><input type="radio" name="3" value="1">upward</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="2">downward</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="3">horizontal</label></div>
								<div class="radio block"><label><input type="radio" name="3" value="4">at an angle upward</label></div>
								<input type="hidden" name="h3" value="3">
							</div>
							<div class="questionDiv">
								<h5>4. Condensation and evaporation are:</h5>
							
								<div class="radio block"><label><input type="radio" name="4" value="1">Irreversible change</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="2">Reversible change</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="3">Desirable change</label></div>
								<div class="radio block"><label><input type="radio" name="4" value="4">None of these</label></div>
								<input type="hidden" name="h4" value="4">
							</div>
							<div class="questionDiv">
								<h5>5. Solubility is affected by:</h5>
							
								<div class="radio block"><label><input type="radio" name="5" value="1">Temperature</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="2">Pressure</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="3">Both</label></div>
								<div class="radio block"><label><input type="radio" name="5" value="4">None of these</label></div>
								<input type="hidden" name="h5" value="4">
							</div>
							<div class="questionDiv">
								<h5>6. Schiff's reagent gives pink colour with:</h5>
							
								<div class="radio block"><label><input type="radio" name="6" value="1">Acetaldehyde</label></div>
								<div class="radio block"><label><input type="radio" name="6" value="2">Formaldehyde</label></div>
								<div class="radio block"><label><input type="radio" name="6" value="3">Acetone</label></div>
								<div class="radio block"><label><input type="radio" name="6" value="4">None of these</label></div>
								<input type="hidden" name="h6" value="3">
							</div>
							<div class="questionDiv">
								<h5>7. Why the dam of water reservoir is thick at the bottom -</h5>
							
								<div class="radio block"><label><input type="radio" name="7" value="1">Quantity of water increases with depth </label></div>
								<div class="radio block"><label><input type="radio" name="7" value="2">Density of water increases with depth</label></div>
								<div class="radio block"><label><input type="radio" name="7" value="3">Pressure of water increases with depth</label></div>
								<div class="radio block"><label><input type="radio" name="7" value="4">Temperature of water increases with depth</label></div>
								<input type="hidden" name="h7" value="2">
							</div>
							<input type="submit" class="fa-btn btn-1 btn-1e loginbutton" name="submit" value="submit">
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>