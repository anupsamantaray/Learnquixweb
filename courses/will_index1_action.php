<?php
include "header.php";
if($_GET['id']){
$id=$_GET['id'];
 }else
 {
 $id=7;
 }
?>
<body>
<?php
	$tot=0;
	if(isset($_POST['submit'])){
		if(!empty($_POST['1'])){
			$n1=$_POST['1'];
           	$nh1=$_POST['h1'];
           	if($n1==$nh1){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['2'])){
			$n2=$_POST['2'];
			$nh2=$_POST['h2'];
			if($n2==$nh2){
				$tot=$tot+1;
			}
		}
	   if(!empty($_POST['3'])){
			$n3=$_POST['3'];
			$nh3=$_POST['h3'];
			if($n3==$nh3){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['4'])){
			$n4=$_POST['4'];
			$nh4=$_POST['h4'];
			if($n4==$nh4){
				$tot=$tot+1;
			}
		}
		if(!empty($_POST['5']))
		{
			$n5=$_POST['5'];
			$nh5=$_POST['h5'];
			if($n5==$nh5){
				$tot=$tot+1;
			}
		}
	}
?>
<div id="container">
	<div id="container_content">
		<div id="page">
			<div id="container_right" class="t1">
				<div id='cssmenu'>
					<a href="#openModal" style="color:blue;" id="clickid"></a>
					<table>
						<tr>
                    		<td align="center">
                            	<h1> 
                                	Your score is <?php echo($tot); ?> out of 5
                                </h1>
							</td>
						</tr>
						<tr>
							<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 1</span></td>
						</tr>
						<tr>
							<td><b> A person throws a ball vertically upward with an initial velocity of 15 m/s.How high it goes?</b></td>
						</tr>
						<tr>
							<td style="padding-left:15px;">
							 <?php 
								if(!empty($_POST['1'])){
									if($_POST['1']=='1'){
							 ?>
										1.) 11.5m &nbsp;&nbsp;&nbsp;<img src='../correct.jpg'>
							 <?php
									}
									else{
							 ?>
										1.)11.5m	
							 <?php
									}
								}
								else{
									echo("1.) 11.5m");
								}
							 ?>
							</td>
						</tr>
						<tr>
							<td style="padding-left:15px;">
						  <?php 
							if(!empty($_POST['1']))	{
									if($_POST['1']=='2')
								{
						 ?>
									2.) 12.5m &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
						  <?php
								}
								else{
						  ?> 
									2.) 12.5m
						  <?php
								}
							}
							else{
								echo("2.) 12.5m");
							}
						  ?> 
							</td>
						</tr>
					<tr>
						<td style="padding-left:15px;">
							 <?php 
							if(!empty($_POST['1'])){
									if($_POST['1']=='3'){
								?>
										  3.)  8m &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
							  <?php
									}
									else{
							  ?> 
										 3.) 8m
							  <?php
									}
							}
							else{
									echo("3.) 8m");
							}
								?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
						  <?php 
							if(!empty($_POST['1'])){
								if($_POST['1']=='4'){
						 ?>
								 4.) 6m &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
						 <?php
								}
								else{
						  ?>
									 4.) 6m
						  <?php
								}
							}
							else{
									echo("4.) 6m");	
							}
							?> 
						</td>
					</tr>
                     
                     <?php
					if(!empty($_POST['1'])){
					 		if($_POST['1']!='1'){
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>11.5m</b></td></tr>');
							}
						}
						else{
							echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>11.5m</b></td></tr>');
						}	
					 ?>
                     <tr><td><hr></td></tr>
                     <tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 2</span></td>
                    </tr>
					<tr><td><b> A body, whose momentum is constant, must have constant-</b></td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
						 <?php
						   if(!empty($_POST['2'])){
								if($_POST['2']=='1'){
						 ?>
								1.) Force &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
						 <?php
								}
								else{
							?>
								  1.)  Force 
							<?php
								}
							}
							else{
								echo("1.)  Force ");
							}
							?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
						  <?php
						   if(!empty($_POST['2'])){ 
								if($_POST['2']=='2'){
						 ?>
									2.) Velocity&nbsp;&nbsp;&nbsp;<img src='../correct.jpg'>
						 <?php
								}
								else{
						 ?>
									2.) Velocity
						 <?php
								}
							}
							else{
								echo("2.) Velocity");
							}
							?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
							 <?php
							 if(!empty($_POST['2']))
								{ 
									if($_POST['2']=='3')
									{
								 ?>
										3.) Acceleration &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
							 <?php
									}
									else{
							 ?>
										3.) Acceleration
							 <?php
									}
								}
								else{
									echo("3.) Accelaration");
								}
							 ?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
							<?php
							if(!empty($_POST['2'])){ 
								if($_POST['2']=='4'){
									?>
										4.) All of these &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
									<?php
									}
									else{
								 ?>		4.) All of these
								 <?php
									}
								}
								else{
									echo("4.) All of these");	
								}
							 ?>
						</td>
					</tr>
					<?php
					if(!empty($_POST['2'])){ 
					 		if($_POST['2']!='2'){
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Velocity</b></td></tr>');
							}
						}
						else{
							echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Velocity</b></td></tr>');
						}
					 ?>
						<tr><td><hr></td></tr>
						<tr>
							<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 3</span></td>
						</tr>
						<tr>
							<td><b> A man getting down a running bus, falls forward because-</b></td>
						</tr>
						<tr>
							<td style="padding-left:15px;">
								 <?php
								 if(!empty($_POST['3'])){ 
										if($_POST['3']=='1'){
											?>1.) due to inertia of rest, road is left behind and man reaches forward &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
										<?php
										 }
										else{
									 ?>
											1.) due to inertia of rest, road is left behind and man reaches forward
									 <?php
										 }
									}
									else{
										echo("1.) due to inertia of rest, road is left behind and man reaches forward");
									}
								?>
							</td>
						</tr>
						<tr>
							<td style="padding-left:15px;">
								 <?php
								 if(!empty($_POST['3'])){ 
										if($_POST['3']=='2'){
									 ?>
											2.) due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
								 <?php
										}
										else{
								 ?>
											2.) due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road
								 <?php
										}
								}
								else{
									echo("2.) due to inertia of motion upper part of body continues to be in motion in forward direction while feet come to rest as soon as they touch the road");
								}?>
							</td>
						</tr>
						<tr>
							<td style="padding-left:15px;">
								<?php
								if(!empty($_POST['3'])){
									 if($_POST['3']=='3'){
								 ?>		3.) he leans forward as a matter of habit &nbsp;&nbsp;&nbsp;<img src='../correct.jpg'>
								 <?php
									}
									else{
								 ?>
									3.) he leans forward as a matter of habit
								 <?php
										}
									}
									else{
										echo("3.) he leans forward as a matter of habit");
									}
								 ?>
							</td>
						</tr>
                     <tr>
						<td style="padding-left:15px;">
						  <?php
						  if(!empty($_POST['3'])){
								if($_POST['3']=='4'){
							 ?>		4.) of the combined effect of all the three factors stated in (1), (2) and (3)&nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
							 <?php
								}
								else{
							 ?>		4.) of the combined effect of all the three factors stated in (1), (2) and (3)
							 <?php
								}
							}
							else{
									echo("4.) of the combined effect of all the three factors stated in (1), (2) and (3)");
							}
						 ?>
						</td>
					</tr>
                      <?php
					   if(!empty($_POST['3'])){
					 		if($_POST['3']!='3'){
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>he leans forward as a matter of habit</b></td></tr>');
							}
						}
						else{
							echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>he leans forward as a matter of habit</b></td></tr>');
						}
					 ?>
					<tr><td><hr></td></tr>
					<tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 4</span></td>
                    </tr>
					<tr>
                      <td><b>Which of the following class of forces is different from others -</b></td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
						  <?php
						   if(!empty($_POST['4'])){
								 if($_POST['4']=='1'){
							 ?>		1.) Pulling of a cart &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
							 <?php 
								}
								else{
							?>		1.) Pulling of a cart
							<?php
								 }
							}
							else{
								echo("1.) Pulling of a cart");	
							}
						?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
							 <?php
							 if(!empty($_POST['4'])){
									if($_POST['4']=='2'){
								 ?>
										2.) Stretching of a coiled spring &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
							  <?php 
									}
									else{
								?>		2.) Stretching of a coiled spring
								 <?php
									}
								}
								else{
									echo("2.) Stretching of a coiled spring");	
								}
							?>
						</td>
					</tr>
					<tr>
						<td style="padding-left:15px;">
							<?php
							if(!empty($_POST['4'])){
									if($_POST['4']=='3'){
								 ?>		3.) Kicking of a football &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
								 <?php 
									}
									else{
								?>		3.) Kicking of a football
								 <?php
									}
								}
								else{
									echo("3.) Kicking of a football");
								}
							?>
						 </td>
					 </tr>
					<tr>
						<td style="padding-left:15px;">
						<?php
							if(!empty($_POST['4'])){
								if($_POST['4']=='4'){
							 ?>
									4.) Electrical force &nbsp;&nbsp;&nbsp;<img src='../correct.jpg'>
						  <?php 
								}
								else{
							?>
									4.) Electrical force
							<?php
								}
							}
							else{
								echo("4.) Electrical force");
							}
						?>
						</td>
					</tr>
                      <?php
					   if(!empty($_POST['4'])){
					 		if($_POST['4']!='4'){
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Electrical force</b></td></tr>');
							}
						}
						else{
							echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>Electrical force</b></td></tr>');
						}
					 ?>
                     <tr><td><hr></td></tr>
					<tr>
                    	<td style="background-color:#efefef;"><span style="font-size:22px;font-weight:bold;padding-left:10px;">Question 5</span></td>
                    </tr>
					<tr>
						<td><b>The speed of a falling body increases continuously, this is because -</b></td>
					</tr>
					<tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['5'])){
							 if($_POST['5']=='1'){
						 ?>		1.) No force acts on it &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
                        <?php 
							}
							else{
						?>		1.) No force acts on it
                        <?php
							}
						}
						else{
								echo("1.) No force acts on it");
						}
						?></td>
					</tr>
					<tr><td style="padding-left:15px;">
                     <?php
					 if(!empty($_POST['5']))
						{
							 if($_POST['5']=='2')
					 		{
						 ?>
                        		 2.) It is very light &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
                         <?php 
							}
							else
							{
						?>		2.)  It is very light
                        <?php
							}
						}
						else
						{
								echo("2.)  It is very light");	
						}
					?>
					</td></tr>
					<tr><td style="padding-left:15px;">
					<?php
					if(!empty($_POST['5'])){
					 		if($_POST['5']=='3'){
						 ?>
							3.) The air exert the frictional force &nbsp;&nbsp;&nbsp;<img src='../wrong.jpg'>
                          <?php 
							}
							else{
						?>
							3.) The air exert the frictional force
                        <?php
							}
						}
						else{
							echo("3.) The air exert the frictional force");	
						}
					?></td></tr>
					<tr><td style="padding-left:15px;">
                      <?php
					  if(!empty($_POST['5'])){
					 		if($_POST['5']=='4'){
						 ?>		4.) The earth attract it &nbsp;&nbsp;&nbsp;<img src='../correct.jpg'>
                         <?php 
							}
							else{
						?>
								4.) The earth attract it
                        <?php
							}
						}
						else{
							echo("4.) The earth attract it");	
						}
					?></td></tr>
                     <?php
					  if(!empty($_POST['5'])){
					 		if($_POST['5']!='4'){
								echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>The earth attract it  </b></td></tr>');
							}
						}
						else{
							echo('<tr><td style="padding-left:15px;"><b><span style="color:blue">Correct&nbsp; Answer&nbsp;&nbsp;&nbsp; : </span>The earth attract it  </b></td></tr>');
						}
					 ?>
                    <tr><td><hr></td></tr>
                     </table>
				</div>
			</div>
		 </div>
	</div>
</div>
<?php include_once('footer.php');
?>