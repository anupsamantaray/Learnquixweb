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
				<div class="col-md-12">
					<div class="child_right">
						<div class="science_Div">
							<table class="table table-striped table-bordered">
							  <thead>
								<tr>
								  <th style="width:250px;">Topic</th>
								  <th>Subject</th>
								  <th>Topic</th>
								  <th>Ebook</th>
								  <th>Video</th>
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