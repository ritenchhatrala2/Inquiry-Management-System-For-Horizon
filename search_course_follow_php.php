<?php
	session_start();
	include("connection.php");
	$course=$_POST['course'];
	$q=mysql_query("select * from inquiry where COURSE='$course' AND ALIVE='1'");
	$r=mysql_num_rows($q);
	
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>Horizon Career Solutions</title>

	<!-- favicon-->
	<link rel="shortcut icon" href="./favicon.png" />		
		
	<!-- 960 grid-->
	<link rel="stylesheet" href="css/960_24_col_table.css"/>
		
	<!-- templatemo style-->
	<link rel="stylesheet" href="templatemo_style_table.css"/>
    		
	<!-- jquery plugin -->
	<script src='./js/jquery.min.js'></script>
	<script src='./js/jquery-ui.min.js'></script>
		
	<!-- google map -->
	<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->
		
	<!-- templatemo config -->
	<script src="./js/templatemo_config.js"></script>
    
           
    <script>
	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}

	$(document).ready(function() {
		$('input[type="text"]').keyup(function(e){
			if(e.keyCode == 27) {
				$(this).val('');
			}
		});
	});
	</script>

</head>
<body>
			<div class="main">
			<div class="container_24" align="center">
                  
                  <!-- Title -->
                  
					<div class="logo" align="center">
                  	
                    </div>
                    
                <div class="backlink" align="center">
                	<a href="index.html#followup"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_course_follow.html"><button name="Search-by-name" class="styled-button">Back</button></a>
                    </div>
				 <br/>
                 
				<div class="table table-style" align="center">
                     
                <?php
						echo "<table cellpadding='10' >
						<tr>
						<th>Sr no</th>
						<th>Course</th>
						<th>Year</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>						
						<th>Response</th>
						<th>Follow Date</th>
						<th>Update Follow</th>
						<th>Remarks</th>
						<th>Update</th>
						</tr>";
						
					if($r>0)
					{
						echo "<h3>Total : ".$r." Inquiry</h3>";
						while($row=mysql_fetch_array($q))
						{
							
							echo "<tr><td><form action='update_follow_up.php' method='POST'><input type='text' name='sr_no' value='$row[0]' size='2' readonly></td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>$row[4]</td>
							<td>$row[5]</td>
							<td>$row[13]</td>
							<td>$row[23]</td>
							<td>$row[28]</td>
							<td><input type='date' name='follow_up' id='follow_up'></td>
							<td><input type='text' name='remarks' id='remarks'></td>
							<td><input type='submit' name='update' value='Update' class='styled-button-table'/></form></td>
							</tr>";
							
						}
							
					}
					else
					{
						echo "<br><h3>No Record in Table</h3>";
					}
					echo "</table>";
				?>
                <br/>
                    <div class="backlink" align="center">
                    <a href="index.html#followup"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_course_follow.html"><button name="Search-by-name" class="styled-button">Back</button></a></div>
	                  
            	</div>
                  
              	
            
   </div>
   </div>
  </body>
  </html>