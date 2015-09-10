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
				<li><a href="javascript:void(0);"><i><img src="img/book_icon.png" alt="" class="smIcon" /></i>Bookings</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/chat_icon.png" alt="" class="smIcon" /></i>Chat history</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/report_icon.png" alt="" class="smIcon" /></i>Reports</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/discount_icon.png" alt="" class="smIcon" /></i>Discounts</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/review_icon.png" alt="" class="smIcon" /></i>Reviews</a></li>
				<li><a href="javascript:void(0);"><i><img src="img/photo_icon.png" alt="" class="smIcon" /></i>Photos</a></li>
			</ul>
		</div>
	</div>
</div>
