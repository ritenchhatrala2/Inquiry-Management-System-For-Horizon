<?php
	session_start();
	include("connection.php");
	
	$sr_no=$_POST['sr_no'];
	$follow_up=$_POST['follow_up'];
	$remarks=$_POST['remarks'];

	$sql = "UPDATE `inquiry` SET `FOLLOW_UP` = '$follow_up',`REMARKS` = '$remarks' WHERE `inquiry`.`SR_NO` ='$sr_no';";
	$r=mysql_query($sql);
	
	if($r)
	{
	
		header("Location: index.html#followup");
	}
	else
	{
		echo "Error";
	}
	?>
	