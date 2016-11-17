<?php
session_start();
include("connection.php");
$srno=$_POST['sr_no'];
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
$category=$_POST['category'];
$grad_school=$_POST['grad_school'];
$grad_year=$_POST['grad_year'];
$pgrad_school=$_POST['pgrad_school'];
$pgrad_year=$_POST['pgrad_year'];
$response=$_POST['response'];
$remarks=$_POST['remarks'];
$follow_date=$_POST['follow_date'];

$sql = "UPDATE `inquiry` SET `DATE` = '$date', `COURSE` = '$course', `YEAR` = '$year', `NAME` = '$name', `EMAIL` = '$email', `GENDER` = '$gender', `P_ADDR` = '$p_addr', `P_CITY` = '$p_city', `P_PIN` = '$p_pin', `L_ADDR` = '$l_addr', `L_CITY` = '$l_city', `L_PIN` = '$l_pin', `CONTACT` = '$contact', `R_CONTACT` = '$r_contact', `CATEGORY` = '$category', `GRAD_SCHOOL` = '$grad_school', `GRAD_YEAR` = '$grad_year', `PGRAD_SCHOOL` = '$pgrad_school', `PGRAD_YEAR` = '$pgrad_year', `RESPONSE` = '$response', `REMARKS` = '$remarks', `FOLLOW_UP` = '$follow_date' WHERE `inquiry`.`SR_NO` = '$srno';";

$r=mysql_query($sql);

if($r)
{ 
	 	header("Location: index.html#inquiry");
}
else
{
	echo"error";
	
}
?>

?>
