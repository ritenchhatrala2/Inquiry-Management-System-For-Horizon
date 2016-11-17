<?php
session_start();
include("connection.php");

	$id=$_SESSION['id'];	
	$days=$_POST['days'];
	$batch=$_POST['batch'];
	$timing=$_POST['timing'];
	$fees=$_POST['fees'];
	
	$sr=mysql_query("select * from student_info where ID='$id'");
	$row=mysql_fetch_array($sr);
	$sr_no=$row[0];
	$sql="UPDATE `student_info` SET `ENROLLED` = '1' WHERE ID = '$id'";
	mysql_query($sql);
	
	$d="DELETE FROM `inquiry` WHERE SR_NO='$sr_no'";
	$r1=mysql_query($d);
	
	if($fees=='full'){
		
		$q="UPDATE `student_info` SET `FULL_FEES` = 1,`INSTALLMENT`= 0,`DAYS` = '$days',`BATCH` = '$batch',`TIMING` = '$timing' WHERE ID = '$id'";
		
		$r=mysql_query($q);
	
		if($r)
		{ 	
			//	header("Location: index.html#enroll");
			 header("Location: fullfees.php");
			
		}
		else
		{
			echo"error";
			
		}
	}
	
	
	if($fees=='installment'){
		
		$q="UPDATE `student_info` SET `FULL_FEES` = 0,`INSTALLMENT` = 1,`DAYS` = '$days',`BATCH` = '$batch',`TIMING` = '$timing' WHERE ID = '$id'";
		
		
		$r=mysql_query($q);
		
		if($r)
		{ 	
				//unset($_SESSION['id']);
				//header("Location: index.html#enroll");
			 header("Location: installment.php");
			
		}
		else
		{
			echo"error";
			
		}
	}
	

?>