<?php
session_start();
include("connection.php");

	$id=$_POST['id'];	
	$t_amount=$_POST['t_amount'];
	$scholarship=$_POST['scholarship'];
	$f_amount=$_POST['f_amount'];
	$reg=$_POST['reg'];
	$reg_date=$_POST['reg_date'];
	$reg_status=$_POST['reg_status'];
	$rem=$_POST['rem'];
	$rem_date=$_POST['rem_date'];
	$rem_status=$_POST['rem_status'];
	
	$si=mysql_query("select * from student_info where ID='$id'");
	$row=mysql_fetch_array($si);
	
	$r=mysql_query("select * from fee where ID='$id'");
	$no=mysql_num_rows($r);
	
	if($no>=1)
	{
		$q = "UPDATE `fee` SET `SR_NO` = '$row[0]', `ID` = '$id',`NAME` = '$row[4]', `TOTAL` = '$t_amount', `SCHOLARSHIP` = '$scholarship',`F_AMOUNT` = '$f_amount', `REMAINING` = '$rem', `R_DATE` = '$rem_date', `R_STATUS` = '$rem_status', `REGISTRATION` = '$reg', `REG_DATE` = '$reg_date', `REG_STATUS` = '$reg_status' WHERE `fee`.`ID` = '$id';";
	}
	else
	{
$q = "INSERT INTO `fee` (`SR_NO`, `ID`, `NAME`, `TOTAL`, `SCHOLARSHIP`,`F_AMOUNT`, `REMAINING`, `R_DATE`, `R_STATUS`, `REGISTRATION`, `REG_DATE`, `REG_STATUS`, `1ST_INSTALL`, `1ST_DATE`, `1ST_STATUS`, `2ND_INSTALL`, `2ND_DATE`, `2ND_STATUS`, `3RD_INSTALL`, `3RD_DATE`, `3RD_STATUS`) VALUES ('$row[0]', '$id', '$row[4]', '$t_amount', '$scholarship','$f_amount', '$rem', '$rem_date', '$rem_ststus', '$reg', '$reg_date', '$reg_status', '', '', '', '', '', '', '', '', '');";
	}
		
	//$q="UPDATE `student_info` SET `TOTAL`='$t_amount', `DISCOUNT`='$scholarship' ,`FINAL`='$f_amount' WHERE ID = '$id'";
		
		
	$r=mysql_query($q);
		
		if($r)
		{ 	
				unset($_SESSION['id']);
				header("Location: index.html#enroll");
			
		}
		else
		{
			echo"error";
			
		}
	

?>