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
	$installment_1=$_POST['installment_1'];
	$date_1=$_POST['date_1'];
	$fst_s=$_POST['1st_status'];
	$installment_2=$_POST['installment_2'];
	$date_2=$_POST['date_2'];
	$snd_s=$_POST['2nd_status'];
	$installment_3=$_POST['installment_3'];
	$date_3=$_POST['date_3'];
	$trd_s=$_POST['3rd_status'];
	
	$si=mysql_query("select * from student_info where ID='$id'");
	$row=mysql_fetch_array($si);
	
	$r=mysql_query("select * from fee where ID='$id'");
	$no=mysql_num_rows($r);
	
	if($no>=1)
	{
		$q = "UPDATE `fee` SET `SR_NO` = '$row[0]', `ID` = '$id',`NAME` = '$row[4]', `TOTAL` = '$t_amount', `SCHOLARSHIP` = '$scholarship',`F_AMOUNT` = '$f_amount',  `REGISTRATION` = '$reg', `REG_DATE` = '$reg_date', `REG_STATUS` = '$reg_status',`1ST_INSTALL` = '$installment_1', `1ST_DATE` = '$date_1', `1ST_STATUS` = '$fst_s', `2ND_INSTALL` = '$installment_2', `2ND_DATE` = '$date_2', `2ND_STATUS` = '$snd_s', `3RD_INSTALL` = '$installment_3', `3RD_DATE` = '$date_3', `3RD_STATUS` = '$trd_s' WHERE `fee`.`ID` = '$id';";
	}
	else
	{
$q = "INSERT INTO `fee` (`SR_NO`, `ID`, `NAME`, `TOTAL`, `SCHOLARSHIP`,`F_AMOUNT`, `REMAINING`, `R_DATE`, `R_STATUS`, `REGISTRATION`, `REG_DATE`, `REG_STATUS`, `1ST_INSTALL`, `1ST_DATE`, `1ST_STATUS`, `2ND_INSTALL`, `2ND_DATE`, `2ND_STATUS`, `3RD_INSTALL`, `3RD_DATE`, `3RD_STATUS`) VALUES ('$row[0]', '$id', '$row[4]', '$t_amount', '$scholarship','$f_amount', '', '', '', '$reg', '$reg_date', '$reg_status', '$installment_1', '$date_1', '$fst_s', '$installment_2', '$date_2', '$snd_s', '$installment_3', '$date_3', '$trd_s');";
	}
	
		
	//$q="UPDATE `student_info` SET `TOTAL`='$t_amount', `INSTALLMENT_1`='$installment_1', `DATE_1`='$date_1', `INSTALLMENT_2`='$installment_2', `DATE_2`='$date_2', `INSTALLMENT_3`='$installment_3', `DATE_3`='$date_3' WHERE ID = '$id'";
		
		
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