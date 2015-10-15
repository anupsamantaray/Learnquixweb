<?php include "header.php";
	$clid = isset($_REQUEST['clid'])?$_REQUEST['clid']:9;
?>
<script type="text/javascript">
  $(function() {
		$(".coursecls").addClass("active");
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
					<li><a href="index.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
					<?
							}
						}
					?>
				</ul>
			</div>
			<div class="col-md-10 rightNew">
				<div class="child_right">
					<h2 class="userIDnew"><span>Welcome</span> Arindam Chakraborty</h2>
					<p class="para" style="text-align:center;">This section contains the Ebook and Revision notes. Revision notes are very helpful in quick preparation for exam. </p>
					
					<div class="science_Div">
						<div class="coundown">
							20 : 30 : 39
						</div>
						<div>
							<h3 style="width:15%; margin-bottom:20px;">Question 1</h3>
							<div class="questionDiv">
								<h5>1. Directions A person throws a ball vertically upward with an initial velocity of 15 m/s.How long the ball is in air before it comes to his hand?</h5>
							
								<div class="radio block"><label><input type="radio"> There is no force acting on it</label></div>
								<div class="radio block"><label><input checked="" type="radio">The force acting on it not in contact with it</label></div>
								<div class="radio block"><label><input type="radio">The combination of forces acting on it balances each other</label></div>
								<div class="radio block"><label><input type="radio">The body is in vacuum</label></div>
							</div>
						</div>
						<div>
							<h3 style="width:15%; margin-bottom:20px;">Question 2</h3>
							<div class="questionDiv">
								<h5>2. Why the dam of water reservoir is thick at the bottom -</h5>
							
								<div class="radio block"><label><input type="radio">Quantity of water increases with depth </label></div>
								<div class="radio block"><label><input checked="" type="radio">Density of water increases with depth</label></div>
								<div class="radio block"><label><input type="radio">Pressure of water increases with depth</label></div>
								<div class="radio block"><label><input type="radio">Temperature of water increases with depth</label></div>
							</div>
						</div>
						<a href="#a" class="fa-btn btn-1 btn-1e">Submit</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>