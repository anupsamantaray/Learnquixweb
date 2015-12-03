<?php
include_once("../database/dbcon.php");
$q=intval($_GET['q']);
$d=intval($_GET['d']);
$low=intval($_GET['l1']);
$up=intval($_GET['up1']);
$diff= $up-$low;
$sqlquestion="Select * from  student_question where topic_id=".$q." and difficulty=".$d." limit ".(int)($diff+1)." offset ".(int)($low-1) ;
$result_question=mysql_query($sqlquestion);
$arrquestion=array();
$i=0;
$j=0;
if(mysql_num_rows($result_question)>0){
	while($rows_question=mysql_fetch_assoc($result_question)){
		$arrquestion[$i]=$rows_question['questions'];
		$arranswer=explode("|",$rows_question['answers']);
		$arranswer2[$i][1]=$arranswer[1];
		$arranswer2[$i][2]=$arranswer[2];
		$arranswer2[$i][3]=$arranswer[3];
		$arranswer2[$i][4]=$arranswer[4];
		$correct[$i]=$arranswer2[$i][$rows_question['correct']];
		$i++;		
	}
		//echo("<input type='text' name='hidecnt' value='".$i."' style='visibility:hidden;' ><input type='submit' value='submit' name='submit'>");
		
$j=$i;
$k=1;
$l=1;
for($i=0;$i<$j;$i++){
	try{
		echo("<div class='questionDiv'>");
		echo("<h5 class='right_ans' style='border:1px solid #fff;'>".$arrquestion[$i]."</h5>");
		//echo("<h5 class='right_ans'> Question ".($i+1)." <br />".$arrquestion[$i]."</h5>");
		//echo($arrquestion[$i]);
		//echo("<br>");
		echo("<div class='radio block'><label><input type='radio' value='".$arranswer2[$i][1]."' name='radio".$i."'>".$arranswer2[$i][1]."</label></div>");
		echo("<div class='radio block'><label><input type='radio' value='".$arranswer2[$i][2]."' name='radio".$i."'>".$arranswer2[$i][2]."</label></div>");
		echo("<div class='radio block'><label><input type='radio' value='".$arranswer2[$i][3]."' name='radio".$i."'>".$arranswer2[$i][3]."</label></div>");
		echo("<div class='radio block'><label><input type='radio' value='".$arranswer2[$i][4]."' name='radio".$i."'>".$arranswer2[$i][4]."</label></div>");
		echo("<div class='radio block'><label><input type='text' value='".$correct[$i]."' name='txtc".$i."' style='display:none;'></label></div>");
		echo("</div>");
	}
	catch(Exception $e){
		
	}
	
}
echo'<input type="text" name="txtlevel" value="'.$d.'" style="display:none;">';
echo("<input type='button' class='fa-btn btn-1 btn-1e loginbutton_new' value='submit' name='result' onclick='callsubmit1();'>");
//echo("</div>");
}
else{
	echo("<h1 id='level' style='color:#e05f03;'>&nbsp;&nbsp;Questions for this level are not yet uploaded.</h1>");
}
echo("<input type='text' name='count' value='".$j."' style='display:none;'>
<input type='text' name='tid' value='".$q."' style='display:none;'>
<input type='text' name='diff' value='".$d."' style='display:none;'>");
?>