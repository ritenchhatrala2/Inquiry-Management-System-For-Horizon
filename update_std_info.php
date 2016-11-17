<?php
	session_start();
	include("connection.php");
	
	$id=$_GET['id'];
	//$_SESSION['sr_no']=$sr_no;
	
	$sql="select * from student_info where ID='$id';";
	$r=mysql_query($sql);
	$row=mysql_fetch_array($r);
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Horizon Career Solutions</title>
</head>

<body bgcolor="#CCCCCC">


	<form action="update_student_info_php.php" name="student" method="post">
   
    <fieldset>
    <legend>Student Info : </legend>
    
    <table align="center">
       
    <tr>
	<td width="170">ID:</td>
	<td><input type="text" id="id" name="id" size="62"  value="<?php echo $row[1]; ?>" /></td>
	</tr>
       
    <tr>
    <td width="170">Inquiry Course:</td>
    <td><input type="text" id="course"  value="<?php echo $row[2]; ?>" name="course" size="22px" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    Year: <input type="text" id="year"  value="<?php echo $row[3]; ?>" name="year" size="22px" />
    </td>
    </tr>
    
    <tr>
	<td width="170">Name:</td>
	<td><input type="text" id="name" name="name" value="<?php echo $row[4]; ?>" size="62" /></td>
	</tr>
    
    <tr>
	<td width="170">Email Id:</td>
    <td><input type="email" id="email"  name="email" value="<?php echo $row[5]; ?>" size="62" /></td>
	</tr>
    
    <tr>
	<td width="170">Gender:</td>
    <td>
    <input type="radio" id ="gender" name="gender" value="Male" <?php if($row[6]=='Male') echo 'checked';  ?> />Male
    <input type="radio" id="gender" name="gender"  value="Female" <?php if($row[6]=='Female') echo 'checked';  ?> />Female
    </td>
    </tr>
    
    <tr>
	<td width="170">Permanent Address: </td>
    <td><textarea name="p_addr" rows="4" cols="47" ><?php echo $row[7]; ?> </textarea></td>
    </tr>
    
    <tr>
    <td width="170">City:</td>
    <td><input type="text" id="p_city" name="p_city" value="<?php echo $row[8]; ?>" size="22" />
    &nbsp;&nbsp;
    Pincode:
    <input type="text" name="p_pin" value="<?php echo $row[9]; ?>" size="20" readonly/></td>
    </tr>
    
 	<tr>
    <td width="170">Local Address:</td>
    <td><textarea name="l_addr" rows="4" cols="47" ><?php echo $row[10]; ?></textarea></td>
    </tr>
    
    <tr>
    <td width="170">City:</td>
    <td><input type="text" id="l_city" name="l_city" value="<?php echo $row[11]; ?>" size="22" />
    &nbsp;&nbsp;
    Pincode:
    <input type="text" name="l_pin" value="<?php echo $row[12]; ?>" size="20" /></td>
    </tr>
    
    <tr>
    <td width="170">Contact No: </td>
    <td><input type="text" id="contact" name="contact" value="<?php echo $row[13]; ?>" size="22" />
    &nbsp;&nbsp;
    Resi No:
    <input type="text" id="r_contact" name="r_contact" value="<?php echo $row[14]; ?>" size="20" /></td>
    </tr>
    
    <tr>
    <td width="170">Parents Name:</td>
    <td><input type="text" id="p_name" name="p_name" value="<?php echo $row[15]; ?>" size="62" /></td>
    </tr>
    
    <tr>
    <td width="170">Mobile No:</td>
    <td><input type="text" id="P_contact" name="p_contact" value="<?php echo $row[16]; ?>" size="22" /></td>
    </tr>
    
    <tr>
    <td width="170">Date of Birth:</td>
    <td><input type="date" id="dob" name="dob" value="<?php echo $row[17]; ?>" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    Category:
    <input type="text"  id="category" name="category" value="<?php echo $row[18]; ?>" />
    </td>
	</tr>
    
    
    </table>
    </fieldset>
    
    
        
    <fieldset> 
    <legend>Educational Qualification :</legend>
    <table border="1" cellpadding="4"  align="center">
    <tr>
    <td width="110">Academics</td>
    <td width="110">School/College</td>
    <td width="110">Stream</td>
    <td width="110">Year of complition</td>
    <td width="110">Percentage/Grade</td>
    
    </tr>
    <tr>
    <td width="110">SSC</td>
    <td><input type="text" id="ssc_school" name="ssc_school"  value="<?php echo $row[19]; ?>" /></td>
    <td><input type="text" id="ssc_stream" name="ssc_stream"  value="<?php echo $row[20]; ?>" /></td>
    <td><input type="text" id="ssc_year" name="ssc_year"  value="<?php echo $row[21]; ?>"/></td>
    <td><input type="text" id="ssc_per" name="ssc_per"  value="<?php echo $row[22]; ?>" /></td>
    </tr>
    <tr>
    <td width="110">HSC</td>
    <td><input type="text" id="hsc_school" name="hsc_school"  value="<?php echo $row[23]; ?>" /></td>
    <td><input type="text" id="hsc_stream" name="hsc_stream"  value="<?php echo $row[24]; ?>" /></td>
    <td><input type="text" id="hsc_year" name="hsc_year"  value="<?php echo $row[25]; ?>" /></td>
    <td><input type="text" id="hsc_per" name="hsc_per"  value="<?php echo $row[26]; ?>" /></td>
    </tr>
    <tr>
    <td width="110">Graduation</td>
	<td><input type="text" id="grad_school" name="grad_school" value="<?php echo $row[27]; ?>" /></td>
    <td><input type="text" id="grad_stream" name="grad_stream"  value="<?php echo $row[28]; ?>" /></td>
    <td><input type="text" id="grad_year" name="grad_year" value="<?php echo $row[29]; ?>" /></td>
    <td><input type="text" id="grad_per" name="grad_per"  value="<?php echo $row[30]; ?>" /></td>
    </tr>
    <tr>
    <td width="110">Post Graduation</td>
    <td><input type="text" id="pgrad_school" name="pgrad_school" value="<?php echo $row[31]; ?>" /></td>
 	<td><input type="text" id="pgrad_stream"  name="pgrad_stream"  value="<?php echo $row[32]; ?>"/></td>   
    <td><input type="text" id="pgrad_year" name="pgrad_year" value="<?php echo $row[33]; ?>" /></td>
    <td><input type="text" id="pgrad_per" name="pgrad_per"  value="<?php echo $row[34]; ?>" /></td>
    </tr>
    
    </table>
    </fieldset>
    
    <fieldset> 
    <legend>Work Experience :</legend>
    <table border="1" cellpadding="4"  align="center">
    <tr>
    <td width="110">Company</td>
    <td width="110">Designation</td>
    <td width="110">Profile</td>
    <td width="110">From</td>
    <td width="110">To</td>
    
    </tr>
    <tr>
    <td><input type="text" id="company_1" name="company_1"  value="<?php echo $row[35]; ?>"/></td>
    <td><input type="text" id="designation_1" name="designation_1"  value="<?php echo $row[36]; ?>" /></td>
    <td><input type="text" id="profile_1" name="profile_1"  value="<?php echo $row[37]; ?>" /></td>
    <td><input type="date" id="from_1" name="from_1"  value="<?php echo $row[38]; ?>" /></td>
    <td><input type="date" id="to_1"  name="to_1"  value="<?php echo $row[39]; ?>"/></td>
    </tr>
    <tr>
    <td><input type="text" id="company_2" name="company_2"  value="<?php echo $row[40]; ?>" /></td>
    <td><input type="text" id="designation_2" name="designation_2"  value="<?php echo $row[41]; ?>" /></td>
    <td><input type="text" id="profile_2" name="profile_2"  value="<?php echo $row[42]; ?>" /></td>
    <td><input type="date" id="from_2" name="from_2"  value="<?php echo $row[43]; ?>" /></td>
    <td><input type="date" id="to_2" name="to_2"  value="<?php echo $row[44]; ?>" /></td>
    </tr>
    
    </table>
    </fieldset>
    
    <br />
    <fieldset>
    <fieldset>
    <legend>Enrollment Info : </legend>
    
    <table align="center">
    
    <tr>
    <td width="170">Days:</td>
    <td>
    <input type="text" name="days" id="days" value="<?php echo $row[46]; ?>" />
    <!--<select name="days">
    <option value="M-W-F">M-W-F</option>
    <option value="T-T-S">T-T-S</option>
    </select>  -->
    &nbsp;&nbsp;(Ex. M-W-F or T-T-S) </td>
    </tr>
    
    <tr>
    <td width="170">Batch:</td>
    <td>
    <input type="text" name="batch" value="<?php echo $row[47]; ?>" />    <!--<select name="batch">
    <option value="HCS-CAT-A">HCS-CAT-A</option>
    <option value="HCS-CAT-B">HCS-CAT-B</option>
    <option value="HCS-GRE-B">HCS-GRE-A</option>
    </select>-->
    </td>
    </tr>
    
    <tr>
    <td width="170">Timing:</td>
    <td>
    <input type="text" name="timing" value="<?php echo $row[48]; ?>" />&nbsp;&nbsp;(Ex. 6PM to 8:00PM)
    <!--<select name="timing">
    <option value="6 PM to 8:30 PM">6 PM to 8:30 PM</option>
    <option value="9 PM to 11:30 PM">9 AM to 11:30 PM</option>
    </select>-->
    </td>
    </tr>
    
    
    
    </table>
    
    </fieldset>
    </div>
    <br/>
   	<fieldset>
    <center>
    <input type="submit" value="Submit"/>
    <input type="reset" value="Reset"/>
    <a href="index.html"><input type="button" value="Back" /></a>
    </center>
    </fieldset>
    </div>

	</form>
</body>
</html>
