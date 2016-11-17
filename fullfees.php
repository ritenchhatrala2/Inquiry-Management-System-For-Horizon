<?php
	session_start();
	error_reporting(0);
	include("connection.php");
	$id=$_GET['id'];
	$id1=$_SESSION['id'];
	
	
	$sql="select * from student_info where ID='$id' OR ID='$id1';";
	$r=mysql_query($sql);
	$row=mysql_fetch_array($r);
	
	$q="select * from fee where ID='$id' OR ID='$id1'";
	$r1=mysql_query($q);
	$new=mysql_fetch_array($r1);

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
	<form name="details" action="insert_fullfees.php" method="POST">
       
    <fieldset>
    <legend>Payment Info : </legend>
    
    <table align="center">
    
    <tr>
	<td width="105">ID:</td>
	<td width="500"><input type="text" id="id" name="id" value="<?php echo $row[1]; ?>" size="62" /></td>
	</tr>
    
    <tr>
	<td width="105">Total Amount:</td>
	<td><input type="text" value="<?php echo $new[3] ?>" id="t_amount" name="t_amount" size="62"></td>
	</tr>
    
    <tr>
	<td width="105">Scholar Ship:</td>
	<td><input type="text" value="<?php echo $new[4] ?>" id="scholarship" name="scholarship" size="62" /></td>
	</tr>
    
    <tr>
	<td width="105">Final Amount:</td>
	<td><input type="text" value="<?php echo $new[5] ?>" id="f_amount" name="f_amount" size="62"></td>
	</tr>
    
    <tr>
	<td width="105">Registration Fee:</td>
	<td><input type="text" value="<?php echo $new[9] ?>" id="reg" name="reg" size="20" />
    &nbsp;    
    Date: 
    <input type="date" name="reg_date" value="<?php echo $new[10] ?>" />
    &nbsp;&nbsp;
    Paid:<input type="checkbox" name="reg_status" value="paid" <?php if($new['11']=='paid')echo 'checked'?>/>
    </td>
	</tr>
    
    <tr>
	<td width="105">Remaining Fee:</td>
	<td><input type="text" id="rem" name="rem" size="20"  value="<?php echo $new[6] ?>"  />
    &nbsp;&nbsp;
    Date: 
    <input type="date" name="rem_date"  value="<?php echo $new[7] ?>"  />&nbsp;&nbsp;
    Paid:<input type="checkbox" name="rem_status" value="paid" <?php if($new['8']=='paid')echo 'checked'?> />
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
