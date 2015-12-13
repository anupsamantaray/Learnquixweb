<?php
	session_start();
	include "database/dbcon.php";
?>
<html>
	<head>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				ajaxCallToService();
			});
			function ajaxCallToService(){
				var year = $("#slctyear").val();
				var car = $("#slctcar").val();
				var model = $("#slctmodel").val();
				var data = new FormData();
				if(year != ""){
					data.append('year',year);
					console.log(year);
				}
				if(car != ""){
					data.append('car_name',car);
				}
				if(model != ""){
					data.append('model',model);
				}
				$.ajax({
					url: 'ajax_search_services.php',
					type:'POST',
					dataType:'json',
					data: data,
					contentType: false,
					cache: false,
					processData:false,
					success : function(response){
						//console.log(response.status);
						var appendView = '<tr>\
											<th>\
												Year\
											</th>\
											<th>\
												Car Name\
											</th>\
											<th>\
												Model\
											</th>\
										</tr>';
						for(var i=0;i<response.res_arr.length;i++){
							appendView += '<tr>\
											<td>'+response.res_arr[i].year+'</td>\
											<td>'+response.res_arr[i].car_name+'</td>\
											<td>'+response.res_arr[i].model+'</td>\
										</tr>';
						}
						$("#renderRes").html(appendView);
					},
					error : function(){
						console.log("Error occured!");
					}
				});
			}
		</script>
	</head>
	<body>
		<h1>Ajax Search Sample</h1>
		<table>
			<tr>
				<td>
					<select name="slctyear" class="form-control" id="slctyear" onchange="ajaxCallToService()">
						<option value="">Select Year</option>
						<?php
							$sql_data="SELECT year FROM `ajaxsearch_table` GROUP BY year";
							$result_data=mysql_query($sql_data);
							if(mysql_num_rows($result_data)>0){
								while($fetch_data=mysql_fetch_assoc($result_data)){
									echo("<option value='".$fetch_data['year']."'>".$fetch_data['year']."</option>");	
								}
							}
						?>
					</select>
				</td>
				<td>
					<select name="slctcar" class="form-control" id="slctcar" onchange="ajaxCallToService()">
						<option value="">Select Car Name</option>
						<?php
							$sql_data="SELECT car_name FROM `ajaxsearch_table` GROUP BY car_name";
							$result_data=mysql_query($sql_data);
							if(mysql_num_rows($result_data)>0){
								while($fetch_datas=mysql_fetch_assoc($result_data)){
									echo("<option value='".$fetch_datas['car_name']."'>".$fetch_datas['car_name']."</option>");	
								}
							}
						?>
					</select>
				</td>
				<td>
					<select name="slctmodel" class="form-control" id="slctmodel" onchange="ajaxCallToService()">
						<option value="">Select Model</option>
						<?php
							$sql_data="SELECT model FROM `ajaxsearch_table` GROUP BY model";
							$result_data=mysql_query($sql_data);
							if(mysql_num_rows($result_data)>0){
								while($fetch_data=mysql_fetch_assoc($result_data)){
									echo("<option value='".$fetch_data['model']."'>".$fetch_data['model']."</option>");	
								}
							}
						?>
					</select>
				</td>
			</tr>
		</table>
		<table border="1" width="80%" id="renderRes">
			
		</table>
	</body>
</html>