<?php
include "../database/dbcon.php";
$randid=rand(1,10000000);
$filejj = explode("/",$_GET["file"]);
$file=$filejj[1];
$filepath='../admin/'.$_GET["file"];
?>
<!--script type="text/javascript" src="js/jquery.min.js"></script-->
<script type="text/javascript">

function starttimer(){
	/*var videopath="<?=$filepath?>";
	$('#divId').load(videopath);*/
	setInterval(function(){showtime()},5000);
}
function showtime(){
	var time=document.getElementById('txttimer').value;
	var time=parseInt(time);
	time=time+5;
	document.getElementById('txttimer').value=time;
	var rid=<?=$randid?>;
	pth= document.getElementById("txtpth").value;
	eml= document.getElementById("eml").value;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		   //alert(xmlhttp.responseText);
			//document.getElementById("txttimer").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","get_time.php?q="+time+"&rid="+rid+"&pth="+pth+"&eml="+eml,true);
	xmlhttp.send();
	if(time==2700){
		if (confirm("Do you want to appear for quiz ?") == true){
			window.location.assign('show_quizzes_part_one.php');
		} 
	}
}

</script>
<body onload="starttimer();">
	<form method='post' style="display:none;" >
		<input type='text' id='txttimer' value='0' />
		<input type="text" id="txtpth" value="<?php echo $filepath; ?>"/>
		<input type="text" id="eml" value="<?php echo $_REQUEST['emlid']; ?>"/>
	</form>
	<iframe src="<?php echo $filepath;?>" autoplay="off" style="width:100%; height:97%;"></iframe>
	<!--<div id="divId" style="width:100%; height:97%;"></div>-->
</body>