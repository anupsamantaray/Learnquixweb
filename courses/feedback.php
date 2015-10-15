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
			<div class="promosation">
				<div class="child_right">
					<h2 class="userIDnew"><span>Welcome</span> <?=$uname?>  </h2>
					<div class="feedbackDiv">
						<form name="f1" method="post" action="feedback_action.php" style="padding-top:30px;">
							<textarea name="txtfeedback" id="txtarea1" cols="0" rows="5" placeholder="Enter your feedback" class="form-control"></textarea>
							<!--a href="javascript:void(0)" class="fa-btn btn-1 btn-1e">Send</a-->
							<input type="submit" name="submit" class="loginbutton" value="Send" style="margin-top:15px;">
							<span style="font-weight:bold;color:#58af58;">
								<?php if($_GET['msg']){ echo ($_GET['msg']); } ?>
							</span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>