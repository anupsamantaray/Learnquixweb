<?php include "common/header2.php"?>
<?php	
	$errorData = array();
	$successData=array();
	
		if( $_POST["emails"] ) {
			$txtname	= $_POST["texname"];
			$contact	= $_POST["contact"];
			$email		= $_POST["emails"];
			$message	= $_POST["userMsg"];
			
			$insert="INSERT INTO lq_contactus(name,emails,contactno,message) VALUES ('".$txtname."','".$email."','".$contact."','".$message."')";
			$result=mysql_query($insert);
			
		// Client copy of email
			$subject= 'Thanks for your request.';
			$to = $email;
			$body = 'Hi There<br/><br/>
					<p>Thanks for showing interest in our organization. Our team will get back to you shortly.</p>
					<br/>
					<p>
						Thanks,<br/>
						Team LearnQuix<br/>
						www.learnquix.com<br/>
					</p>
					';
			
			$from = 'anup.bapu@gmail.com';
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: LearnQuix<'.$from.'>'."\r\n";

			@mail( $to, $subject, $body, $headers );
				
			 // Admin copy of email
			$subject= 'You have a contact request.';
			$to = 'anup.bapu@gmail.com';
			$body = 'Hello Admin<br/><br/>
					<p>Following user have tried to contact you.</p>
					<p>
						Name : '.$txtname.'
					</p>
					<p>
						Contact No : '.$contact.'
					</p>
					<p>
						Email : '.$email.'
					</p>
					<p>
						Message : '.$message.'
					</p>
					
					<br/><br/>
					<p>
						Thanks,<br/>
						'.$txtname.'
					</p>
					';
			
					$from = $email;
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: <'.$from.'>' . "\r\n";
					
					@mail( $to, $subject, $body, $headers );
		
			//print("<script>window.location='contact_us.php'</script>");
		}
	
		if( isset($_REQUEST["sv"]) && $_REQUEST["sv"]=='1' ) {
			array_push($errorData,"Thank you for contacting Learn Quix. Our team will get back to you very soon.");
		}	
	
?>

<script>
$(document).ready(function(){
	$("#form1").validation();
	$("#btnsubmit").bind( "click", submitButtonClickHandler );
	$(".contctusact").addClass('active');
	
});
function submitButtonClickHandler( e ) {
	if( $("#form1").validation( {errorClass:'validationErr'} ) ) {
		return true;
	} else {
		return false;
	}
}


function ValidationFunction(){
    //validate the form here
    if(valid == true){
        document.getElementById('form1').submit();
    }
}
</script>


<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="main row">
			
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1843.4348796020827!2d88.39136579234118!3d22.47152806610946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02717831684605%3A0xe108c6389636b6f0!2sLearnQuix!5e0!3m2!1sen!2sin!4v1446835672991"></iframe><br><small><a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1843.4348796020827!2d88.39136579234118!3d22.47152806610946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02717831684605%3A0xe108c6389636b6f0!2sLearnQuix!5e0!3m2!1sen!2sin!4v1446835672991" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
			
		</div>
	</div>
</div><!-- end main -->	
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
			<div class="col-md-4 company_ad">
				<h2>Find Address :</h2>
				<address>
					<p>270,Block - N,</p>
					<p>BP Township, Patuli</p>
					<p>Kolkata, 700094</p>
					<p>INDIA</p>
					<p>Phone:(00) 000 000 000</p>
					<p>Mobile:(+91) 900 465 3799, 900 701 2732</p>
					<p>Fax: (000) 000 00 00 0</p>
					<p>Email: <a href="mailto:help@learnscience.co.in ">help@learnscience.co.in </a></p>
					
					
					<p>Follow on: <a href="https://www.facebook.com/" target="_blank">Facebook</a>, <a href="https://twitter.com/" target="_blank">Twitter</a></p>
				</address>
			</div>
			<div class="col-md-8">
			  <div class="contact-form">
				<h2>Contact Us</h2>
				<span style="color:#009900"><?PHP include "common/errorRenderer.php"; ?></span>	
					<form method="post" name="form1"  id="form1" action="<?PHP echo $_SERVER["PHP_SELF"]?>?sv=1">
						<div style="position: relative;">
							<span>name</span>
							<span><input type="username"  name="texname" class="form-control" id="texname" validation="blank|Provide your name."></span>
							<div e_rel="texname" class="error_msgs"></div>
						</div>
						<div style="position: relative;">
							<span>e-mail</span>
							<span><input type="email" name="emails" class="form-control" id="email10" validation="email|Provide your email ."></span>
							<div e_rel="email10" class="error_msgs"></div>
						</div>
						<div style="position: relative;">
							<span>contact no</span>
							<span><input type="text" name="contact" class="form-control" id="texphone" validation="blank|Provide contact no.*number|Provide contact no."></span>
							<div e_rel="texphone" class="error_msgs"></div>
						</div>
						<div style="position: relative;">
							<span>messages</span>
							<span><textarea name="userMsg" id="messags" validation="blank|Provide your message."></textarea></span>
							<div e_rel="messags" class="error_msgs"></div>
						</div>
						<div>
							<label class="fa-btn btn-1 btn-1e">
								<input type="submit" value="submit us" id="btnsubmit">
							</label>
						</div>
					</form>
				</div>
			</div>		
  			<div class="clearfix"></div>		
		</div> 
	</div>
</div>
<?php include "common/footer.php"?>