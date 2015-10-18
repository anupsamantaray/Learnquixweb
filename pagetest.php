<?php include_once('common/header2.php');
/*if(isset($_GET['err']))
{
$mess=$_GET['err'];
}*/
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".remmnmnu").addClass('active');
	});
</script>
<body>
<div class="main_bg"><!-- start main -->
	<div class="container">
		<div class="technology row">
			<h2>Memory Cards</h2>
			<div class="col-md-12 rightNew2">
				<div class="col-md-7 rightNew2">
					<p class="para">Memory cards are unique way of memorising learning items. Capturing keywords/main formulae on a Card template; the Memory Card is a handy tool while revising Chapters and preparing for exams. It also enables the transfer of subject content to long term memory for better retention by looking at it time and again. We create memory cards for students built in a way that his/her gap in memory is filled with least effort.</p>
					<div class="memory_option effect5">
						<h4>1. Force = Mass X Acceleration</h4>
						<h4>2. S = ut + 1/2 at2</h4>
						<h4>3. v2 - u2 = 2as</h4>
						
					</div>
					<!--button class="annibutton">Awesome Button</button-->
					<div class="read_more">
						<a href="javascript:void(0)" class="fa-btn btn-1 btn-1e">Memory Cards</a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="bs-example">
						<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
							<!-- Carousel indicators -->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
							</ol>   
						   <!-- Carousel items -->
							<div class="carousel-inner">
								<div class="active item item2">
									<img src="images/01.jpg" alt="" class="">
								</div>
								<div class="item item2">
									<img src="images/02.jpg" alt="" class="">
								</div>
								<div class="item item2">
									<img src="images/07.jpg" alt="" class="">
								</div>
								<div class="item item2">
									<img src="images/06.jpg" alt="" class="">
								</div>
								<div class="item item2">
									<img src="images/05.jpg" alt="" class="">
								</div>
							</div>
							<!-- Carousel nav -->
							<a class="carousel-control left" href="#myCarousel" data-slide="prev">
								<span class="fa fa-chevron-left slideleft"></span>
							</a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next">
								<span class="fa fa-chevron-right slideleft"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->

<?php
	include_once("common/footer.php");
?>
  <!--------------footer end--------->