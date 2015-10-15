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
					<!--p class="para" style="text-align:center;">This section contains the Ebook and Revision notes. Revision notes are very helpful in quick preparation for exam. </p-->
					<div class="feedbackDiv form-horizontal" style="margin:15px 0 0 0;">
						<div class="form-group">
						  	<label for="selector1" class="col-sm-6 control-label lableText" style="font-size:14px;">Start With the Question Number : </label>
						  	<div class="col-sm-3">
								<select name="selector1" id="selector1" class="form-control">
									<option>Lorem ipsum dolor sit amet.</option>
									<option>Dolore, ab unde modi est!</option>
									<option>Illum, fuga minus sit eaque.</option>
									<option>Consequatur ducimus maiores voluptatum minima.</option>
								</select>
							</div>
							<div class="col-sm-3">
								<p class="help-block">Your help text!</p>
							</div>
						  </div>
						  <div class="form-group">
						  	<label for="selector1" class="col-sm-6 control-label lableText" style="font-size:14px;">End  With the Question Number : </label>
						  	<div class="col-sm-3">
								<select name="selector1" id="selector1" class="form-control">
									<option>Lorem ipsum dolor sit amet.</option>
									<option>Dolore, ab unde modi est!</option>
									<option>Illum, fuga minus sit eaque.</option>
									<option>Consequatur ducimus maiores voluptatum minima.</option>
								</select>
							</div>
							<div class="col-sm-3">
								<p class="help-block">Your help text!</p>
							</div>
						  </div>
						  <div class="clearfix"></div>
					</div>
					<div>
						<h2> Levels</h2>
						<ul class="maths_nav">
							<li>
								<a href="#a"><i class="fa fa-angle-right myicon"></i>Low</a>
							</li>
							<li>
								<a href="#a"><i class="fa fa-angle-right myicon"></i>Middle</a>
							</li>
							<li>
								<a href="#a"><i class="fa fa-angle-right myicon"></i>High</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>