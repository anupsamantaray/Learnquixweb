<?php include "header.php";
if($_SESSION['usrname']){
	$uname=$_SESSION['usrname'];
	if(isset($_POST['submit'])){
		$fet=mysql_query("select * from `login` where `name`='$uname'");
		$res=mysql_fetch_array($fet);
		$email=$res['email'];
		$message="click this link"."http//www.learnquixweb.co.in/vpromote.php?uid=$uname";
		$subject="email verification";
		$from="noreply@learnquixweb.co.in";
			mail($email,$subject,$message,"From: $from\n");
		$msg="check your mail";
	}
}
?>
	<div class="container">
		<div class="abou aboutNew details row">
			<div class="promosation">
				<div class="child_right">
					<div class="science_Div" style="border-top:none;">
						<div class="child_promo">
							<h2 class="promotext">Promotion</h2>
							<div style="padding:15px;">
								<form name="f1" action="promotion.php" method="post">
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label lableText">User Id :</label>
										<div class="col-sm-8">
										  <input class="form-control" id="focusedinput" value="<?php echo $uname;?>" type="text" readonly="true">
										</div>
										<div class="col-sm-2" style="padding:0;">
											 <?php if($msg!=""){?><p class="help-block"><?php echo $msg;?></p><?php }?>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="btn-toolbar promo_button">
										<input type="submit" class="btn-primary btn newbutton" name="submit" value="Promote">
										<button class="btn-default btn newbutton2">Cancel</button>
									</div>
								</form>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php";
?>