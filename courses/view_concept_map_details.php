<?php include "header.php";
$uname = '';
if ($_SESSION['usrname']){
	$uname=$_SESSION['usrname'];
	/*if(isset($_POST['submit'])){
		
	}*/
}
?>
	<div class="container">
		<div class="abou aboutNew details row">
			<div class="promosation2">
				<div class="child_right">
					<h2 class="userIDnew" style="line-height:30px;"><span>Class : IX</span><br/>Topic : Number Systems</h2>
					<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus non felis id malesuada. Praesent eget iaculis massa. Morbi faucibus leo in nisi pellentesque imperdiet. Nullam eu mi at tellus vulputate vulputate non nec tellus.</p>
					<div class="feedbackDiv">
						<div class="map_view_det">
							<img src="images/03.jpg" style="width:100%;">
						</div>
						<a href="courses/sample_questions.php" class="loginbutton" style="margin-top:15px;">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>