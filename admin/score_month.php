<?php
include_once("function.php");
if(!isset($_SESSION['id'])){
header("location:adminlogin.php");
}
else{
$slno=$_GET['id'];
?>
<html>
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style>
  .tab{ outline: thin solid; }
  .tab th {
    background: #2c66a8;
padding: 8px;
line-height: 25px;
text-align: center;
font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
 <!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
 
<!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				<div id="left_box">
						<?php include_once("conleft_bar.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Registered User
								</div>
								<div id="content2">
										<?php
										  if(isset($_GET['msg']))
										  {
										  $mess=$_GET['msg'];
										  echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
										  }
										  $name=mysql_query("select * from `login` where `slno`='$slno'");
										  $rname=mysql_fetch_array($name);
										  echo $rname['name'];
										?>
										    <table class="tab" align="center">
											    <tr>
											      <th>Month</th>
											      <th>Overall Mark</th>
											    </tr>
											    
											  <?php
											      $fetmonth=mysql_query("SELECT DISTINCT month(date) as mont,sum(mark) as mar FROM select_answer where userid=$slno group by mont");
											      while($resmonth=mysql_fetch_array($fetmonth))
											      {
											      //$fetchmar=mysql_query("SELECT sum(mark) mar FROM select_answer where userid=$slno and month(date)=$resmonth[mont]");
											      //$resmar=mysql_fetch_array($fetchmar);
											      ?>
											    <tr>
											      <td align="center"><?php echo $resmonth['mont']; ?></td>
											      <td align="center"><?php echo $resmonth['mar']; ?></td>
											    </tr>
											    <?php }?>
											    
											</table>
										    <form name="fmonth" action="exel_month.php" method="post">
										      <table align="center">
											<tr>
											  <td><input type="submit" name="submi" value="hardcopy"></td>
											  <input type="hidden" name="id" value="<?php echo $slno;?>">
											</tr>
										      </table>
										    </form> 
											
								</div>
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->
	
<!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
				<?php include_once('footermenu.php');?>
		</div>
 </div>
  <!--------------footer end--------->                
</body>
</html>
<?php
}
?>