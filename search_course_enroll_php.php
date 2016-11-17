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
							<br/>
                           	<br/>
                            <h1>Horizon Career Solutions</h1>
                           	<br/>
                           	<br/>    
                  	
                    </div>
                    
                <!--<div class="menu omega">
                
                  	<div class="grid_6 alpha omega"><a class="anchor_animate search" href="index.html#search" >Search</a></div> 
                  	<div class="grid_6 alpha omega"><a class="anchor_animate inquiry" href="index.html#inquiry">Add</a></div>
                  	<div class="grid_6 alpha omega"><a class="anchor_animate followup" href="index.html#followup">Follow up</a></div>
                  	<div class="grid_6 alpha omega"><a class="anchor_animate enroll" href="index.html#enroll">Enroll</a></div>
              	
               	</div>-->
                <div class="backlink" align="center">
                	<a href="index.html#enroll"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_course_enroll.html"><button name="Search-by-name" class="styled-button">Back</button></a>
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
						<th>Enroll</th>
						</tr>";
					if($r>0)
					{
						echo "<h3>Total : ".$r." Inquiry</h3>";
						while($row=mysql_fetch_array($q))
						{
							
							echo "<tr><td>$row[0]</td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>$row[4]</td>
							<td>$row[5]</td>
							<td>$row[13]</td>
							<td><a href='add_student.php?sr_no=".$row[0]."'><button name='Enroll' class='styled-button-table'>Enroll</button></a></td>
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
                    <a href="index.html#enroll"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_course_enroll.html"><button name="Search-by-name" class="styled-button">Back</button></a></div>
	                  
            	</div>
                  
              	
            
   </div>
   </div>
  </body>
  </html>