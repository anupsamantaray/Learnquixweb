<?php include "common/header2.php";
	$clid = (isset($_SESSION['class']) && ($_SESSION['class'] != ''))?$_SESSION['class']:0;
	if($clid == 0){
		$clid = (isset($_REQUEST['clid']) && ($_REQUEST['clid'] != ''))?$_REQUEST['clid']:9;
	}
	if(isset($_SESSION['msg']) && ($_SESSION['msg'] != '')){
		echo "<script>alert(".$_SESSION['msg'].");</script>";
	}
	if(isset($_GET['err'])){
		$mess=$_GET['err'];
	}

?>
<script type="text/javascript">
  $(function() {
		$(".profilecls").addClass("active");
  });
  
<?php
if($mess){
?>
alert('<?= $mess ?>');
<?php
}
?>
var message="Function Disabled!";
function clickIE4(){
	if (event.button==2){
		alert(message);
		return false;
	}
}
function clickNS4(e){
	if (document.layers||document.getElementById&&!document.all){
		if (e.which==2||e.which==3){
			alert(message);
			return false;
		}
	}
}
if (document.layers){
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
	document.onmousedown=clickIE4;
}
//document.oncontextmenu=new Function("alert(message);return false");
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
								  $sql_srch="select * from tbltemp where Topic like '%".$_POST['serval']."%'";
									$result_srch=mysql_query($sql_srch);
									if(mysql_num_rows($result_srch)>0)
									{
										while($rows_srch=mysql_fetch_assoc($result_srch))
										{
											$sql_getid="Select id from student_topic where topic='".$rows_srch['Topic']."'";
											$result_getid=mysql_query($sql_getid);
											if(mysql_num_rows($result_getid)>0)
											{
												while($rows_getid=mysql_fetch_assoc($result_getid))
												{
													$sql_getextra_details="Select ebook,video from extra_detail where topic_id=".$rows_getid['id'];
													$result_getextradetails=mysql_query($sql_getextra_details);
													if(mysql_num_rows($result_getextradetails)>0)
													{
														while($rows_getextradetails=mysql_fetch_assoc($result_getextradetails))
														{
															$arrebook=explode("/",$rows_getextradetails['ebook']);
															$arrvideo=explode("/",$rows_getextradetails['video']);
															?>
											<tr>
												<td align='center'><?=$rows_srch['class']?></td>
												<td align='center'><?=$rows_srch['subject']?></td>
												<td align='center'><?=$rows_srch['Topic']?></td>
												<td align='center'>
													<a href='admin/<?=$rows_getextradetails['ebook']?>' target="_blank"><?=$arrebook[count($arrebook)-1]?></a>
												</td>
												<td align='center'>
												<? if($rows_getextradetails['video']!=''){?>
													<a href="admin/<?=$rows_getextradetails['video']?>" onclick="window.open('admin/<?=$rows_getextradetails["video"]?>', 'newwindow', width=1200, height=600); return false;">
														<!--img src='images/vid-placeholder.jpg' alt='...' class='img-thumbnail myvideo'><i class='fa fa-caret-right vediosPlay'></i-->
														<?=$rows_getextradetails['video']?>
													</a>
												<? } ?>
													<!--a href='admin/".$rows_getextradetails['video']."'>".$arrvideo[count($arrvideo)-1]."</a-->
												</td>
											</tr>
													<?	}
													}
												}
											}
										}
									} ?>
                          </tbody>
                        </table>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- end main -->
<?php include "common/footer.php"?>