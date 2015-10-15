<?php include "header.php";
if ($_SESSION['name']){
	$uname=$_SESSION['name'];
	/*if(isset($_POST['submit'])){
		
	}*/
}
?>
	<div class="container">
		<div class="abou aboutNew details row">
			<div class="promosation">
				<div class="child_right">
					<h2 class="userIDnew"><span>Welcome</span> <?=$uname?>  </h2>
					<div>
						<textarea name="txtarea1" id="txtarea1" cols="0" rows="5" placeholder="Enter your feedback" class="form-control"></textarea>
						<a href="javascript:void(0)" class="fa-btn btn-1 btn-1e">Send</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>