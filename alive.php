<?php
	session_start();
	include("connection.php");
	
	$sr_no=$_GET['sr_no'];
	$sql = "UPDATE `horizon_career`.`inquiry` SET `DEAD` = '0',`ALIVE` = '1' WHERE `inquiry`.`SR_NO` ='$sr_no';";
	$r=mysql_query($sql);
	if($r)
	{
		
		header("Location: index.html#search");
	}
	else
	{
		echo "Error";
	}
	?>
	