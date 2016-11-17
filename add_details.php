<?php
	session_start();
	include("connection.php");
	
	$id=$_SESSION['id'];
	
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

	<fieldset style="height:100%">
    <br/>
	<form name="details" action="insert_details.php" method="post">
       
    <fieldset>
    <legend>Enrollment Info : </legend>
    
    <table align="center">
    
    <tr>
	<td width="170">ID:</td>
	<td><input type="text" id="id" name="id" value="<?php echo $row[1]; ?>" size="62" readonly/></td>
	</tr>
    
    <tr>
    <td width="170">Course:</td>
    <td><input type="text" id="course"  value="<?php echo $row[2]; ?>" name="course" size="22px" readonly/>
    &nbsp;&nbsp;&nbsp;&nbsp;
    Year: <input type="text" id="year"  value="<?php echo $row[3]; ?>" name="year" size="22px" readonly/>
    </td>
    </tr>
    
    <tr>
	<td width="170">Name:</td>
	<td><input type="text" id="name" name="name" value="<?php echo $row[4]; ?>" size="62" readonly="readonly"/></td>
	</tr>
    
    <tr>
    <td width="170">Days:</td>
    <td>
    <input type="text" name="days" id="days" />
    <!--<select name="days">
    <option value="M-W-F">M-W-F</option>
    <option value="T-T-S">T-T-S</option>
    </select>  -->
    &nbsp;&nbsp;(Ex. M-W-F or T-T-S) </td>
    </tr>
    
    <tr>
    <td width="170">Batch:</td>
    <td>
    <input type="text" name="batch" />    <!--<select name="batch">
    <option value="HCS-CAT-A">HCS-CAT-A</option>
    <option value="HCS-CAT-B">HCS-CAT-B</option>
    <option value="HCS-GRE-B">HCS-GRE-A</option>
    </select>-->
    </td>
    </tr>
    
    <tr>
    <td width="170">Timing:</td>
    <td>
    <input type="text" name="timing" />&nbsp;&nbsp;(Ex. 6PM to 8:00PM)
    <!--<select name="timing">
    <option value="6 PM to 8:30 PM">6 PM to 8:30 PM</option>
    <option value="9 PM to 11:30 PM">9 AM to 11:30 PM</option>
    </select>-->
    </td>
    </tr>
    
    <tr>
	<td width="170">Fees:</td>
    <td>
    <input type="radio"  name="fees" value="full">Full Fees
    <input type="radio"  name="fees"  value="installment">Installment
    </td>
    </tr>
    
    </table>
    
    </fieldset>
    </div>
    <br/>
   	<fieldset>
    <center>
    <input type="submit" value="Submit"/>
    </center>
    </fieldset>
    </div>

	</form>
    <br/>
    </fieldset>
</body>
</html>
