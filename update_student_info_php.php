<?php
session_start();
include("connection.php");

$id=$_POST['id'];
$course=$_POST['course'];
$year=$_POST['year'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$p_addr=$_POST['p_addr'];
$p_city=$_POST['p_city'];
$p_pin=$_POST['p_pin'];
$l_addr=$_POST['l_addr'];
$l_city=$_POST['l_city'];
$l_pin=$_POST['l_pin'];
$contact=$_POST['contact'];
$r_contact=$_POST['r_contact'];
$p_name=$_POST['p_name'];
$p_contact=$_POST['p_contact'];
$dob=$_POST['dob'];
$category=$_POST['category'];
$ssc_school=$_POST['ssc_school'];
$ssc_stream=$_POST['ssc_stream'];
$ssc_year=$_POST['ssc_year'];
$ssc_per=$_POST['ssc_per'];
$hsc_school=$_POST['hsc_school'];
$hsc_stream=$_POST['hsc_stream'];
$hsc_year=$_POST['hsc_year'];
$hsc_per=$_POST['hsc_per'];
$grad_school=$_POST['grad_school'];
$grad_stream=$_POST['grad_stream'];
$grad_year=$_POST['grad_year'];
$grad_per=$_POST['grad_per'];
$pgrad_school=$_POST['pgrad_school'];
$pgrad_stream=$_POST['pgrad_stream'];
$pgrad_year=$_POST['pgrad_year'];
$pgrad_per=$_POST['pgrad_per'];
$company_1=$_POST['company_1'];
$designation_1=$_POST['designation_1'];
$profile_1=$_POST['profile_1'];
$from_1=$_POST['from_1'];
$to_1=$_POST['to_1'];
$company_2=$_POST['company_2'];
$designation_2=$_POST['designation_2'];
$profile_2=$_POST['profile_2'];
$from_2=$_POST['from_2'];
$to_2=$_POST['to_2'];

$days=$_POST['days'];
$batch=$_POST['batch'];
$timing=$_POST['timing'];
	

$q="UPDATE `student_info` SET `ID` = '$id', `COURSE` = '$course', `YEAR` = '$year', `NAME` = '$name', `EMAIL` = '$email', `GENDER` = '$gender', `P_ADDR` = '$p_addr', `P_CITY` = '$p_city', `P_PIN` = '$p_pin', `L_ADDR` = '$l_addr', `L_CITY` = '$l_city', `L_PIN` = '$l_pin', `CONTACT` = '$contact', `R_CONTACT` = '$r_contact', `P_NAME` = '$p_name', `P_CONTACT` = '$p_contact', `DOB` = '$dob', `CATEGORY` = '$category', `SSC_SCHOOL` = '$ssc_school', `SSC_STREAM` = '$ssc_stream', `SSC_YEAR` = '$ssc_year', `SSC_PER` = '$ssc_per', `HSC_SCHOOL` = '$hsc_school', `HSC_STREAM` = '$hsc_stream', `HSC_YEAR` = '$hsc_year', `HSC_PER` = '$hsc_per', `GRAD_SCHOOL` = '$grad_school', `GRAD_STREAM` = '$grad_stream', `GRAD_YEAR` = '$grad_year', `GRAD_PER` = '$grad_year', `PGRAD_SCHOOL` = '$pgrad_school', `PGRAD_STREAM` = '$pgrad_stream', `PGRAD_YEAR` = '$pgrad_year', `PGRAD_PER` = '$pgrad_per', `COMPANY_1` = '$company_1', `DESIGNATION_1` = '$designation_1', `PROFILE_1` = '$profile_1', `FROM_1` = '$from_1', `TO_1` = '$to_1', `COMPANY_2` = '$company_2', `DESIGNATION_2` = '$designation_2', `PROFILE_2` = '$profile_2', `FROM_2` = '$from_2', `TO_2` = '$to_2', `DAYS` = '$days', `BATCH` = '$batch', `TIMING` = '$timing' WHERE `student_info`.`ID` = '$id';";	
	
	$r=mysql_query($q);
	
	if($r)
	{
		header('location: index.html');
	}
	else
	{
		echo "error";
	}
	
	?>