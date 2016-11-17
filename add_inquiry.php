<?php

	include("connection.php");

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
	<form name="inquiry" action="insert_inquiry.php" method="post">
    
    <div id="studinfo">
    
    <fieldset>
    <legend>Student Info : </legend>
    
    <table align="center">
    <tr>
    <td width="110">Date:</td>
    <td><input type="date"  id="date" name="date" required="required" onblur="IsEmpty(this)" /></td>
    </tr>
    
    <tr>
    <td width="110">Inquiry Course:</td>
    <td><select name="course">
    <option value="GRE">GRE</option>
    <option value="CAT" selected="selected">CAT</option>
    <option value="CRAT">CRAT</option>
    <option value="CMAT">CMAT</option>
    <option value="CLAT">CLAT</option>
    <option value="IBPS">IBPS</option>
    <option value="UPSC">UPSC</option>
    <option value="GPSC">GPSC</option>
    <option value="GRE">SAT</option>
    </select>
    &nbsp;&nbsp;
    Year:
    <select name="year">
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    </select>
    </td>
    </tr>
    
    <tr>
	<td width="110">Name:</td>
	<td><input type="text" name="name" size="62" required="required" style="text-transform:capitalize" onblur="IsEmpty(this)"/></td>
	</tr>
    
    <tr>
	<td width="110">Email Id:</td>
    <td><input type="text" name="email" size="62" required="required" onblur="validateEmail(this);"/></td>
	</tr>
    
    <tr>
	<td width="110">Gender:</td>
    <td>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender"  value="Female">Female
    </td>
    </tr>
    
    <tr>
	<td width="110">Permanent Address:</td>
    <td><textarea name="p_addr" rows="4" cols="47" style="text-transform:capitalize" required="required" onblur="IsEmpty(this)"></textarea></td>
    </tr>
    
    <tr>
    <td width="110">City:</td>
    <td><input type="text" name="p_city" size="22" style="text-transform:capitalize" required="required" onblur="IsEmpty(this)"/>
    &nbsp;
    Pincode:
    <input type="text" name="p_pin" size="20"/></td>
    </tr>
    
    <tr>
    <td width="110">Same Addr:</td>
    <td><input type="checkbox" name="same" onclick="Addr(this.form)" vspace="10"/>Same As Above</td>
    </tr>
 	
    <tr>
    <td width="110">Local Address:</td>
    <td><textarea name="l_addr" rows="4" cols="47" style="text-transform:capitalize"></textarea></td>
    </tr>
    
    <tr>
    <td width="110">City:</td>
    <td><input type="text" name="l_city" size="22" style="text-transform:capitalize"/>
    &nbsp;&nbsp;
    Pincode:
    <input type="text" name="l_pin" size="20" /></td>
    </tr>
    
    <tr>
    <td width="110">Mobile 1:</td>
    <td><input type="text" name="contact" id="contact" size="22" required="required" onblur="ValidateMobNumber(this)" />
    &nbsp;&nbsp;
    Resi No:
    <input type="text" name="r_contact" size="20" ></td>
    </tr>
    
    
    
    
    
    <tr>
    <td width="110">Category:</td>
    <td>
   
    <select name="category">
            <option value="General" selected="selected">General</option>
            <option value="obc" >OBC</option>
            <option value="sc" >SC</option>
            <option value="st" >ST</option>
            <option value="st" >PH</option>            
            </select>
    </td>
	</tr>
    
    <tr>
    <td width="110">Follow Up Date:</td>
    <td><input type="date" name="follow_date"></td>
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
    <input type="text" name="grad_school" id="grad_school" size="22">
            </td>
    <td><input type="text" name="grad_year" size="22" /></td>
    </tr>
    
    <tr>
    <td width="110">Post Graduation</td>
    <td><input type="text" name="pgrad_school" size="22" style="text-transform:uppercase"/></td>
    <td><input type="text" name="pgrad_year" size="22" /></td>
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
    	
     	<option  value="Positive">Positive</option>
        <option value="Negative">Negative</option>      
        <option value="Not Sure">Not Sure</option>
    </select>
 	</td>       
    </tr>
    
    <tr>
    <td width="110">Remarks:</td>
    <td><textarea name="remarks" rows="2" cols="47" style="text-transform:capitalize"></textarea></td>
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
