<?php include "header.php";
	$clid = (isset($_SESSION['class']) && ($_SESSION['class'] != ''))?$_SESSION['class']:0;
	if($clid == 0){
		$clid = (isset($_REQUEST['clid']) && ($_REQUEST['clid'] != ''))?$_REQUEST['clid']:9;
	}
	if(isset($_SESSION['msg']) && ($_SESSION['msg'] != '')){
		echo "<script>alert(".$_SESSION['msg'].");</script>";
	}
?>
<script type="text/javascript">
  $(function() {
		$(".profilecls").addClass("active");
  });
</script>
<div class="container">
		<div class="abou aboutNew details row">
			<div class="col-md-2 leftNav" style="padding:0;">
				<h2>All Class</h2>
				<ul class="inernav">
					<?php 
						if(isset($_SESSION['class']) && ($_SESSION['class'] != '')){
							$sltqry = mysql_query("SELECT * FROM student_class WHERE id='".$clid."'");
						}else{
							$sltqry = mysql_query("SELECT * FROM student_class");
						}
						if(mysql_num_rows($sltqry)>0){
							while($resultqry = mysql_fetch_assoc($sltqry)){
								$alid = $resultqry['id'];
								$class = $resultqry['class'];
						
					?>
					<li><a href="ebook.php?clid=<?=$alid?>" <?if($clid==$alid){echo "class='active'";}?>>Class <?=$class?></a></li>
					<?
							}
						}
					?>
				</ul>
			</div>
				<div class="col-md-10 rightNew">
				<div class="child_right">
					<h2 class="userIDnew"><span>Welcome </span> <?php if($_SESSION['usrname']){echo $_SESSION['usrname'];} ?> </h2>
					<div class="science_Div">
							<form name="student" class="form-horizontal" action="student_action.php" method="post">
							<?php
								  $fetchdetail=mysql_query("select * from `login` where `slno`='$_SESSION[slno]'");
								  $resdetail=mysql_fetch_array($fetchdetail);
								  
								  $fetchclass2=mysql_query("select * from `student_class` where `id`='$resdetail[class]'");
								  $resclass2=mysql_fetch_array($fetchclass2);
							 ?>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> Name :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter name" type="text" readonly="readonly" value="<?php echo $resdetail['name'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> Class :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter class" type="text" readonly="readonly" value="<?php echo $resclass2['class'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> Email :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter email" type="text" readonly="readonly" value="<?php echo $resdetail['email'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> School :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter school" type="text" readonly="readonly" value="<?php echo $resdetail['school'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> City :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter city" type="text" readonly="readonly" value="<?php echo $resdetail['city'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText"> Mobile no. :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter contact no." type="text" value="<?php echo $resdetail['phone'];?>">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText">Current  Password :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter current password" type="password">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText">Password :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Enter new password" type="password">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label lableText">Confirm Password :</label>
									<div class="col-sm-6">
									  <input class="form-control" id="focusedinput" placeholder="Confirm new password" type="password">
									</div>
									<!--div class="col-sm-3">
										<p class="help-block">Your help text!</p>
									</div-->
								</div>
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label lableText">Level :</label>
									<div class="col-sm-6"><select name="selector1" id="selector1" class="form-control">
										<option>Easy</option>
										<option>Moderate</option>
										<option>Hard</option>
									</select></div>
							  </div>
							    <div class="row">
									<div class="col-sm-6 col-sm-offset-2">
										<div class="btn-toolbar">
											<button class="btn-primary btn newbutton">Submit</button>
											<button class="btn-default btn newbutton2">Cancel</button>
										</div>
									</div>
							    </div>
							</form>
						<div class="clearfix"></div>
					</div>
					
					<div class="science_Div table-responsive">
						<table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th style="width:320px;">Topic</th>
                              <th>Question attend</th>
                              <th>Wrong answer</th>
                              <th>Correct answer</th>
							  <th>Mark</th>
							  <th style="width:140px;">Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
								  $fetch=mysql_query("SELECT DISTINCT `time` FROM `select_answer` where `userid`='$_SESSION[slno]'");
								  while($res=mysql_fetch_array($fetch))
								  { $uid=$res['time'];
								  $fetchdetail=mysql_query("select * from `select_answer` where `time`='$uid'");
								  $resdetail=mysql_fetch_array($fetchdetail);
								  $fetchmark=mysql_query("select sum(mark) as smark from `select_answer` where `time`='$uid'");
								  $resmark=mysql_fetch_array($fetchmark);
								  $fetchsubject=mysql_query("select * from `student_subject` where `id`='$resdetail[subject]'");
								  $ressubject=mysql_fetch_array($fetchsubject);
								  $fetchtopic=mysql_query("select * from `student_topic` where `id`='$resdetail[topic]'");
								  $restopic=mysql_fetch_array($fetchtopic);
								  
								  $fetchwrong=mysql_query("select * from `select_answer` where `time`='$uid' and `mark`='0'");
								  $fetchright=mysql_query("select * from `select_answer` where `time`='$uid' and `mark`='1'");
								  $wrong=mysql_num_rows($fetchwrong);
								  $right=mysql_num_rows($fetchright);
								  $qatten=mysql_num_rows($fetchdetail);
								  ?>
								  <tr>
									<td>
									<!--a href="student_examque.php?ti=<?php echo $uid;?>&s=<?php echo $resdetail['subject'];?>&t=<?php echo $resdetail['topic'];?>" style="color: black;"><?php echo $restopic['topic'];?></a-->
									<?php echo $restopic['topic'];?>
									</td>
									<td align="center"><?php echo $qatten;?></td>
									<td align="center"><?php echo $wrong;?></td>
									<td align="center"><?php echo $right;?></td>
									<td align="center"><?php echo $resmark['smark'];?></td>
									<td><?php echo $resdetail['date'];?></td>
								  </tr>
								  <?php }?>
								</table>
                          </tbody>
                        </table>
						
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "footer.php"?>