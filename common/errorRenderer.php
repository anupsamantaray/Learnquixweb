<ul class="errorholder">
<!-- Error Message-->
<?PHP
if( count($errorData)>0) {
	foreach ($errorData as $error) {
?>
<span class="errorMessage"><img src="img/right_icon.png" />&nbsp;&nbsp;<?PHP echo $error;?>	</span>
<?
	}
}
?>
<!-- Success Message-->
<?PHP
if( count($successData)>0) {
	foreach ($successData as $success) {
?>
<span id="error-message2">&nbsp;&nbsp;<?PHP echo $success;?>	</span>
<?
	}
}
?>

</ul>