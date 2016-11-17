<?php
	error_reporting(0);
	include("connection.php");
	$q=mysql_query("select * from inquiry");
	$r=mysql_num_rows($q);
	
?>



<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<title>Horizon Career Solutions</title>

	<!-- favicon-->
	<link rel="shortcut icon" href="./favicon.png" />		
		
	<!-- templatemo style-->
	<link rel="stylesheet" href="templatemo_style_table.css"/>
    
    
</head>
<body>

<div class="container_24" align="center">
 
		<div class="logo">
               
        </div>
                    
 	 	<div class="backlink">
        	<a href="index.html"><button name="Menu" class="styled-button">Menu</button></a>
            <a href="index.html#inquiry"><button name="Search-by-name" class="styled-button">Back</button></a>
       	</div>
			
        <br/>
                 
		<div class="table table-style">
                     
        <?php
			
			echo "<table cellpadding='2'>
				<tr>
				<th>Sr no</th>
				<th>Course</th>
				<th>Year</th>
				<th>Name</th>
				<th>Mobile 1</th>
				<th>Email</th>	
				<th>Inquiry Date</th>
				<th>Response</th>
				<th>Follow Date</th>
				<th>Status</th>
				<th>Update</th>
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
						<td>$row[13]</td>
						<td>$row[5]</td>
						<td>$row[1]</td>
						<td>$row[23]</td>
						<td>$row[28]</td>";
						if($row['ALIVE']==1)
						echo "<td>Alive</td>";
						else
						echo "<td>Dead</td>";
						echo "<td><a href='update_induiry_form.php?sr_no=".$row[0]."'><button name='ubdate' class='styled-button-table'>Update</button></a></td>
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
        
        <div class="backlink">
        	<a href="index.html"><button name="Menu" class="styled-button">Menu</button></a>
        	<a href="index.html#inquiry"><button name="Search-by-name" class="styled-button">Back</button></a></div>
          
       	</div>

</div>            
</body>
</html>