<?php
	session_start();
	include("connection.php");
	
	$sr_no=$_GET['sr_no'];
	$_SESSION['sr_no']=$sr_no;
	
	$sql="select * from inquiry where SR_NO='$sr_no';";
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


	<form action="insert_student.php" name="student" method="post">
   
    <fieldset>
    <legend>Student Info : </legend>
    
    <table align="center">
       
    <tr>
	<td width="170">ID:</td>
	<td><input type="text" id="id" name="id" size="62" /></td>
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
    <td><input type="text" id="ssc_school" name="ssc_school" /></td>
    <td><input type="text" id="ssc_stream" name="ssc_stream" /></td>
    <td><input type="text" id="ssc_year" name="ssc_year"/></td>
    <td><input type="text" id="ssc_per" name="ssc_per" /></td>
    </tr>
    <tr>
    <td width="110">HSC</td>
    <td><input type="text" id="hsc_school" name="hsc_school" /></td>
    <td><input type="text" id="hsc_stream" name="hsc_stream" /></td>
    <td><input type="text" id="hsc_year" name="hsc_year" /></td>
    <td><input type="text" id="hsc_per" name="hsc_per" /></td>
    </tr>
    <tr>
    <td width="110">Graduation</td>
	<td><input type="text" id="grad_school" name="grad_school" value="<?php echo $row[19]; ?>" /></td>
    <td><input type="text" id="grad_stream" name="grad_stream" /></td>
    <td><input type="text" id="grad_year" name="grad_year" value="<?php echo $row[20]; ?>" /></td>
    <td><input type="text" id="grad_per" name="grad_per" /></td>
    </tr>
    <tr>
    <td width="110">Post Graduation</td>
    <td><input type="text" id="pgrad_school" name="pgrad_school" value="<?php echo $row[21]; ?>" /></td>
 	<td><input type="text" id="pgrad_stream"  name="pgrad_stream"/></td>   
    <td><input type="text" id="pgrad_year" name="pgrad_year" value="<?php echo $row[22]; ?>" /></td>
    <td><input type="text" id="pgrad_per" name="pgrad_per" /></td>
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
    <td><input type="text" id="company_1" name="company_1" /></td>
    <td><input type="text" id="designation_1" name="designation_1" /></td>
    <td><input type="text" id="profile_1" name="profile_1" /></td>
    <td><input type="date" id="from_1" name="from_1" /></td>
    <td><input type="date" id="to_1"  name="to_1"/></td>
    </tr>
    <tr>
    <td><input type="text" id="company_2" name="company_2" /></td>
    <td><input type="text" id="designation_2" name="designation_2" /></td>
    <td><input type="text" id="profile_2" name="profile_2" /></td>
    <td><input type="date" id="from_2" name="from_2" /></td>
    <td><input type="date" id="to_2" name="to_2" /></td>
    </tr>
    
    </table>
    </fieldset>
    
    <br />
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
