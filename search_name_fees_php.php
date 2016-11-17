<?php
	session_start();
	include("connection.php");
	$s_name=$_POST['s_name'];
	$id=$_POST['id'];
	
	if($s_name!='')
	{
	$q=mysql_query("select * from student_info where NAME like '%$s_name%' AND  (FULL_FEES='1' OR INSTALLMENT='1') ");
	}
	
	if($id!='')
	{
		$q=mysql_query("select * from student_info where ID='$id' AND  (FULL_FEES='1' OR INSTALLMENT='1') ");
	}
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
                	<a href="index.html#enroll"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_name_fees.html"><button name="Search-by-name" class="styled-button">Back</button></a>
                    </div>
				 <br/>
                 
				<div class="table table-style" align="center">
                     
                <?php
						echo "<table cellpadding='10' >
						<tr>
						<th>ID</th>
						<th>Course</th>
						<th>Year</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Batch</th>
						<th>Days</th>
						<th>Timing</th>								
						<th>Fees</th>
						</tr>";
					if($r>0)
					{
						echo "<h3>Total : ".$r." Enrolled</h3>";
						while($row=mysql_fetch_array($q))
						{
							echo "<tr>
							<td>$row[1]</td>
							<td>$row[2]</td>
							<td>$row[3]</td>
							<td>$row[4]</td>
							<td>$row[5]</td>
							<td>$row[13]</td>
							<td>$row[47]</td>
							<td>$row[46]</td>
							<td>$row[48]</td>";
							if($row[49]==1)
							{echo"<td><a href='fullfees.php?id=".$row[1]."'><button name='fees' class='styled-button-table'>Full</button></a></td>";}
							else if ($row[50]==1)
							{echo"<td><a href='installment.php?id=".$row[1]."'><button name='fees' class='styled-button-table'>Installment</button></a></td>";}
							echo"</tr>";
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
                    <a href="search_name_fees.html"><button name="Search-by-name" class="styled-button">Back</button></a>  
            	</div>
                  
              	
            
   </div>
   </div>
  </body>
  </html>