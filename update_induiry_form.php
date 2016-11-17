<?php
error_reporting(0);
	include("connection.php");
	$srno=$_GET['sr_no'];
	$q=mysql_query("select * from inquiry where SR_NO=$srno");
	$r=mysql_num_rows($q);
	$row=mysql_fetch_array($q);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Horizon Career Solutions</title>
<script>

function Addr(f) {
  if(f.same.checked == true) {
    f.l_addr.value = f.p_addr.value;
    f.l_city.value = f.p_city.value;
	f.l_pin.value = f.p_pin.value;
  }
  if(f.same.checked == false) {
    f.l_addr.value = '';
    f.l_city.value = '';
	f.l_pin.value = '';
  }
}

function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
			emailField.focus();
            return false;
        }

        return true;

}

function ValidateMobNumber(fld) {
  	/*var fld = document.getElementById(txtMobId);*/
	
 	if (!(fld.value.length == 10)) {
  	alert("The Mobile no. 1 is of wrong length. \nPlease enter 10 digit mobile no.");
  	fld.value = "";
  	fld.focus();
  	return false;
 	}
	
	return true;
}

function IsEmpty(check){ 

	if(check.value == "")
	{
		alert("Please Enter Value.");
		check.focus();
	}

    return;
}

</script>
</head>
<style>

#studinfo{
	
	width:620px;
	float:left;
	margin-left:100px;
	
}

#eduinfo{
	
	width:620px;
	float:left;
	margin-left:100px;
	
}

input:required{
	border-color:#000;
}
</style>

</head>

<body bgcolor="#CCCCCC">

	<fieldset style="height:100%">
    <br/>
	<form name="inquiry" action="update_inquiry_form_php.php" method="post">
    <input type="hidden" value="<?php echo $srno ?>" name="sr_no" />
    <div id="studinfo">
    
    <fieldset>
    <legend>Student Info : </legend>
    
    <table align="center">
    <tr>
    <td width="110">Date:</td>
    <td><input type="date" value="<?php echo $row['DATE']?>"  id="date" name="date" required="required" onblur="IsEmpty(this)" /></td>
    </tr>
    
    <tr>
    <td width="110">Inquiry Course:</td>
    <td><select name="course" >
    <option value="GRE" <?php if($row['COURSE']=='GRE')  echo "selected='selected'" ?>>GRE</option>
    <option value="CAT" <?php if($row['COURSE']=='CAT')  echo "selected='selected'" ?>>CAT</option>
    <option value="CAT" <?php if($row['COURSE']=='CRAT')  echo "selected='selected'" ?>>CRAT</option>
    <option value="CAT" <?php if($row['COURSE']=='CMAT')  echo "selected='selected'" ?>>CMAT</option>
    <option value="CAT" <?php if($row['COURSE']=='CLAT')  echo "selected='selected'" ?>>CLAT</option>
    <option value="CAT" <?php if($row['COURSE']=='IBPS')  echo "selected='selected'" ?>>IBPS</option>
    <option value="CAT" <?php if($row['COURSE']=='UPSC')  echo "selected='selected'" ?>>UPSC</option>
    <option value="CAT" <?php if($row['COURSE']=='GPSC')  echo "selected='selected'" ?>>GPSC</option>
    <option value="CAT" <?php if($row['COURSE']=='SAT')  echo "selected='selected'" ?>>SAT</option>
    </select>
    &nbsp;&nbsp;
    Year:
    <select name="year">
    <option value="2014" <?php if($row['YEAR']=='2014')  echo "selected='selected'" ?>>2014</option>
    <option value="2015 <?php if($row['YEAR']=='2015')  echo "selected='selected'" ?>">2015</option>
    <option value="2016"  <?php if($row['YEAR']=='2016')  echo "selected='selected'" ?>>2016</option>
    </select>
    </td>
    </tr>
    
    <tr>
	<td width="110">Name:</td>
	<td><input type="text" value="<?PHP echo $row['NAME'] ?>" name="name" size="62" required="required" style="text-transform:capitalize" onblur="IsEmpty(this)"/></td>
	</tr>
    
    <tr>
	<td width="110">Email Id:</td>
    <td><input type="text" value="<?PHP echo $row['EMAIL'] ?>" name="email" size="62" required="required" onblur="validateEmail(this);"/></td>
	</tr>
    
    <tr>
	<td width="110">Gender:</td>
    <td>
    <input type="radio" name="gender" value="Male" <?php if($row['GENDER']=='Male') echo 'checked'?>>Male
    <input type="radio" name="gender" value="Female" <?php if($row['GENDER']=='Female') echo 'checked'?>>Female
    </td>
    </tr>
    
    <tr>
	<td width="110">Permanent Address:</td>
    <td><textarea name="p_addr" rows="4" cols="47" style="text-transform:capitalize" required="required" onblur="IsEmpty(this)"><?php echo $row['P_ADDR']?></textarea></td>
    </tr>
    
    <tr>
    <td width="110">City:</td>
    <td><input type="text" value="<?php echo $row['P_CITY']?>" name="p_city" size="22" style="text-transform:capitalize" required="required" onblur="IsEmpty(this)"/>
    &nbsp;
    Pincode:
    <input type="text" name="p_pin" value="<?php echo $row['P_PIN']?>" size="20"/></td>
    </tr>
    
    <tr>
    <td width="110">Same Addr:</td>
    <td><input type="checkbox" name="same" onclick="Addr(this.form)" vspace="10" <?php if($row['L_ADDR']=='Same as above' || $row['L_ADDR']==$row['P_ADDR'] ) echo 'checked'?>/>Same As Above</td>
    </tr>
 	
    <tr>
    <td width="110">Local Address:</td>
    <td><textarea name="l_addr" rows="4" cols="47" style="text-transform:capitalize"><?php echo $row['L_ADDR']?></textarea></td>
    </tr>
    
    <tr>
    <td width="110">City:</td>
    <td><input type="text" value="<?php echo $row['L_CITY']?>" name="l_city" size="22" style="text-transform:capitalize"/>
    &nbsp;&nbsp;
    Pincode:
    <input type="text" value="<?php echo $row['L_PIN']?>" name="l_pin" size="20" /></td>
    </tr>
    
    <tr>
    <td width="110">Mobile 1:</td>
    <td><input type="text" value="<?php echo $row['CONTACT'] ?>" name="contact" id="contact" size="22" required="required" onblur="ValidateMobNumber(this)" />
    &nbsp;&nbsp;
    Resi No:
    <input type="text" value="<?php echo $row['R_CONTACT'] ?>" name="r_contact" size="20" ></td>
    </tr>
    
    
    
    
    
    <tr>
    <td width="110">Category:</td>
    <td>
   
    <select name="category">
            <option value="General" <?php if($row['CATEGORY']=='General')  echo "selected='selected'" ?>>General</option>
            <option value="obc" <?php if($row['CATEGORY']=='obc')  echo "selected='selected'" ?>>OBC</option>
            <option value="sc" <?php if($row['CATEGORY']=='sc')  echo "selected='selected'" ?> >SC</option>
            <option value="st" <?php if($row['CATEGORY']=='st')  echo "selected='selected'" ?> >ST</option>
            <option value="ph" <?php if($row['CATEGORY']=='ph')  echo "selected='selected'" ?> >PH</option>            
            </select>
    </td>
	</tr>
    
    <tr>
    <td width="110">Follow Up Date:</td>
    <td><input type="date" name="follow_date" value="<?PHP echo $row['FOLLOW_UP'] ?>"></td>
    </tr>
    
    </table>
    </fieldset>
    </div>
    <br />
    <div id="eduinfo">
    <fieldset> 
	<legend>Educational Qualification :</legend>
    
    <table border="1" cellpadding="4" width="550" align="center">
    <tr>
    <td>Academics</td>
    <td>School/College</td>
    <td>Year of completion</td>
    </tr>
    
    <tr>
    <td width="110">Graduation</td>
    <td> 
    <input name="grad_school" id="grad_school" value="<?php echo $row['GRAD_SCHOOL'] ?>" size="22">
            </td>
    <td><input type="text"  value="<?php echo $row['GRAD_YEAR'] ?>" name="grad_year" size="22" /></td>
    </tr>
    
    <tr>
    <td width="110">Post Graduation</td>
    <td><input type="text" value="<?php echo $row['PGRAD_SCHOOL'] ?>" name="pgrad_school" size="22" style="text-transform:uppercase"/></td>
    <td><input type="text" value="<?php echo $row['PGRAD_YEAR'] ?>" name="pgrad_year" size="22" /></td>
    </tr>
    
    </table>
 	</fieldset>
	<br/>
    <fieldset>
    <legend>Response Details :</legend>
    <table align="center">
    
    <tr>
    <td width="110">Response:</td>
	<td>
    <select name="response" id="response">
    	
     	<option  value="Positive" <?php if($row['RESPONSE']=='Positive')  echo "selected='selected'" ?>>Positive</option>
        <option value="Negative" <?php if($row['RESPONSE']=='Negative')  echo "selected='selected'" ?>>Negative</option>      
        <option value="Not Sure" <?php if($row['RESPONSE']=='Not Sure')  echo "selected='selected'" ?>>Not Sure</option>
    </select>
 	</td>       
    </tr>
    
    <tr>
    <td width="110">Remarks:</td>
    <td><textarea name="remarks" rows="2" cols="47" style="text-transform:capitalize"><?php echo $row['REMARKS']?></textarea></td>
    </tr>
    
    </table>
    </fieldset>
    
    <br />
    <fieldset>
    <center>
    <input type="submit" value="Submit" onclick="return ValidateMobNumber('contact')"/>
    <input type="reset" value="Reset"/>
    <a href="index.html#inquiry"><input type="button" value="Back" /></a>
    </center>
    </fieldset>
    </div>

	</form>
    </fieldset>
</body>
</html>
