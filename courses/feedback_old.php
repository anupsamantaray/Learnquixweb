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
					<h2 class="userIDnew"><span>Welcome</span> Arindam  </h2>
					<p class="para" style="text-align:center;">This section contains the Ebook and Revision notes. Revision notes are very helpful in quick preparation for exam. </p>
					<div class="feedbackDiv">
						<textarea name="txtarea1" id="txtarea1" cols="0" rows="5" placeholder="Enter some text your feedback" class="form-control"></textarea>
						<a href="#a" class="fa-btn btn-1 btn-1e">Send</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>