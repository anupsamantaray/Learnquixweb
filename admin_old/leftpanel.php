<?PHP
include "common/userAuthenticate.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<div class="col-md-2 left_pert" >
	<img src="img/logo_iner.png" class="inerLogo" alt="" />
	<div class="logoutDiv">
		<p>Welcome,<span> <?PHP echo $_SESSION["adminName"];?></span></p>
		<p><a href="logout.php">Logout</a></p>
	</div>
	<div class="navisation">
		<div class="scroll">
			<ul>
				<li><a href="javascript:void(0);"><i><img src="img/book_icon.png" alt="" class="smIcon" /></i>Dashboard</a></li>
				<li><a href="class_add.php"><i><img src="img/chat_icon.png" alt="" class="smIcon" /></i>Add Classes</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/report_icon.png" alt="" class="smIcon" /></i>Add subject</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/discount_icon.png" alt="" class="smIcon" /></i>Add topic</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/review_icon.png" alt="" class="smIcon" /></i>Add Concept Notes</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Add question</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Edit answer</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Add oldquestion</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Add Ebook</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Add Video</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Add time & mark</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>News</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Change Password</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Casual User</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Registered User</a></li>
				<li><a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1" target="_blank"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Email</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Data</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>feedback</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Upload(Hall of fame)</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>About Us Content</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>All Display</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Display Results</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Track Study</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Weak Concept</a></li>
				
				
			</ul>
		</div>
	</div>
</div>
