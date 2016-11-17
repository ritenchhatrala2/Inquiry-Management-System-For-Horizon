<?php
session_start();
include("connection.php");
$date=$_POST['date'];
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
$grad_school=$_POST['grad_school'];
$grad_year=$_POST['grad_year'];
$pgrad_school=$_POST['pgrad_school'];
$pgrad_year=$_POST['pgrad_year'];
$response=$_POST['response'];
$remarks=$_POST['remarks'];
$follow_date=$_POST['follow_date'];

$q="INSERT INTO `inquiry`(`SR_NO`, `DATE`, `COURSE`, `YEAR`, `NAME`, `EMAIL`, `GENDER`, `P_ADDR`, `P_CITY`, `P_PIN`, `L_ADDR`, `L_CITY`, `L_PIN`, `CONTACT`, `R_CONTACT`, `P_NAME`, `P_CONTACT`, `DOB`, `CATEGORY`, `GRAD_SCHOOL`, `GRAD_YEAR`, `PGRAD_SCHOOL`, `PGRAD_YEAR`, `RESPONSE`, `REMARKS`, `ALIVE`, `DEAD`, `ENROLLED`, `FOLLOW_UP`)  VALUES ('','$date','$course','$year','$name','$email','$gender','$p_addr','$p_city','$p_pin','$l_addr','$l_city','$l_pin','$contact','$r_contact','$p_name','$p_contact','$dob','$category','$grad_school','$grad_year','$pgrad_school','$pgrad_year','$response','$remarks',1,0,0,'$follow_date');";

$r=mysql_query($q);

if($r)
{ 
	 	header("Location: index.html#enroll");
}
else
{
	echo"error";
	
}
?>