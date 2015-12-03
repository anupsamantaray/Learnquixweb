<?php
include "../database/dbcon.php";
$q=(int)$_GET['q'];
$rid=(int)$_GET['rid'];
if($_REQUEST['eml'])
{
	if($q==15)
	{
		$sql="insert into tblstudy(id,eid,notes,time,date)values(".$_GET['rid'].",'".$_REQUEST['eml']."','".$_GET['pth']."',".$q.",'".date("Y-M-d")."')";
		$result=mysql_query($sql);
	}
	else
	{
		$sqlupdate="update tblstudy set time=".$q." where id=".$rid;
		$resultupdate=mysql_query($sqlupdate);
	}
}
?>