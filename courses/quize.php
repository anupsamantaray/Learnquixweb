<?php include "header.php";
	$clid = $_REQUEST['clid'];
?>
<div class="container">
		<div class="abou aboutNew details row">
			<div class="col-md-2 leftNav" style="padding:0;">
				<h2>All Class</h2>
				<ul class="inernav">
					<?php 
						$sltqry = mysql_query("SELECT * FROM student_class WHERE id='".$clid."'");
						$resultqry = mysql_fetch_assoc($sltqry); 
						$alid = $resultqry['id'];
						$class = $resultqry['class'];
					?>
					<li><a href="index.php?clid=<?=$alid?>">Class <?=$class?></a></li>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<!--h2 class="userIDnew"><span>Welcome</span> Arindam  </h2-->
					<p class="para" style="text-align:center;">Our quiz enables students to learn at different levels of difficulty and adjust their pace of learning. Our Software Quisy would be launched soon...this software understands a students responses in the quiz and tells a student what exactly he needs to learn  </p>
					<div class="science_Div">
						<h4 class="forme_Qus">For more quizzes <a href="#a">Click Here</a></h4>
						<div class="questionDiv">
							<h5>1. Directions A person throws a ball vertically upward with an initial velocity of 15 m/s.How long the ball is in air before it comes to his hand?</h5>
						
							<div class="radio block"><label><input type="radio"> There is no force acting on it</label></div>
							<div class="radio block"><label><input checked="" type="radio">The force acting on it not in contact with it</label></div>
							<div class="radio block"><label><input type="radio">The combination of forces acting on it balances each other</label></div>
							<div class="radio block"><label><input type="radio">The body is in vacuum</label></div>
						</div>
						<div class="questionDiv">
							<h5>2. Why the dam of water reservoir is thick at the bottom -</h5>
						
							<div class="radio block"><label><input type="radio">Quantity of water increases with depth </label></div>
							<div class="radio block"><label><input checked="" type="radio">Density of water increases with depth</label></div>
							<div class="radio block"><label><input type="radio">Pressure of water increases with depth</label></div>
							<div class="radio block"><label><input type="radio">Temperature of water increases with depth</label></div>
						</div>
						<a href="#a" class="fa-btn btn-1 btn-1e">Submit</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "../common/footer.php"?>