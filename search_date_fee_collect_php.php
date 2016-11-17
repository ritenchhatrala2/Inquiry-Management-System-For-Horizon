<?php
	
	include("connection.php");
	$s_date=$_POST['s_date'];
	//echo "$s_date=".$_POST['s_date'];
	$t_date=$_POST['t_date'];
	//echo "$t_date=".$_POST['t_date'];
	$q=mysql_query("select * from fee where 
	(REG_DATE between '$s_date' and '$t_date' AND REG_STATUS <> 'paid') OR
	(R_DATE between '$s_date' and '$t_date' AND R_STATUS <> 'paid') OR 
	(1ST_DATE between '$s_date' and '$t_date' AND 1ST_STATUS <> 'paid') OR
	(2ND_DATE between '$s_date' and '$t_date' AND 2ND_STATUS <> 'paid') OR
	(3RD_DATE between '$s_date' and '$t_date' AND 3RD_STATUS <> 'paid') 
	 ");
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
    <style>
	.bgtdy{
		background-color:#0C3;
		color:#FFF;
	}
	.bgtdn{
		background-color:#F00;
		color:#FFF;
	}
	
	</style>

</head>
<body>
			<div class="main">
			<div class="container_24" align="center">
                  
                  <!-- Title -->
                  
					<div class="logo" align="center">
							
                  	
                    </div>
                    
               
                <div class="backlink" align="center">
                	<a href="index.html#enroll"><button name="Menu" class="styled-button">Menu</button></a>
                    <a href="search_date_fee_collect.html"><button name="Search-by-name" class="styled-button">Back</button></a>
                    </div>
				 <br/>
                 
				<div class="table table-style" align="center">
                     
                <?php
				
				
								
					echo "FUll FEE";
						echo "<table cellpadding='10' >
						<tr>
						<th>ID</th>
						<th>Course</th>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Final Amount</th>
						<th>Registration Fee</th>
						<th>Remaining Fee</th>
						<th>Detail</th>
						</tr>";
					if($r>0)
					{

						while($row=mysql_fetch_array($q))
						{
							
							$query=mysql_query("select * from student_info where ID='$row[1]'");
							$row1=mysql_fetch_array($query);
							
							if($row1['FULL_FEES']==1)
							{
								
							echo "<tr>
							<td>$row1[1]</td>
							<td>$row1[2]</td>
							<td>$row1[4]</td>
							<td>$row1[13]</td>
							<td>$row[5]</td>";
							if($row[11]=='paid')
							{
							echo"<td><div class='bgtdy'>$row[9]</div></td>";
							}
							else
							{
							echo"<td><div class='bgtdn'>$row[9]</div></td>";
							}
							
							if($row[8]=='paid')
							{
							echo "<td><div class='bgtdy'>$row[6]</div></td>";
							}
							else{
								echo "<td><div class='bgtdn'>$row[6]</div></td>";
							}
							
							if($row1[49]==1)
							{echo"<td><a href='fullfees.php?id=".$row1[1]."'><button name='fees' class='styled-button-table' >Full</button></a></td>";}
							else if ($row1[50]==1)
							{echo"<td><a href='installment.php?id=".$row1[1]."'><button name='fees' class='styled-button-table'>Installment</button></a></td>";}
							echo"</tr>";
							}
						}
						
					}
					else
					{
						echo "<br><h3>No Record in Table</h3>";
					}
					echo "</table>";
		
		echo "<br><br>INSTALLMENT";
				
						echo "<table cellpadding='10' >
						<tr>
						<th>ID</th>
						<th>Course</th>
						<th>Name</th>
						<th>Mobile No</th>
						<th>Final Amount</th>
						<th>Registration Fee</th>
						<th>1ST Installment</th> 
						<th>2ND Installment</th> 
						<th>3RD Installment</th> 
						<th>Detail</th>
						</tr>";
					if($r>0)
					{
						
						while($row=mysql_fetch_array($q))
						{
							$query1=mysql_query("select * from student_info where ID='$row[1]'");
							$row2=mysql_fetch_array($query1);
							echo "<tr>
							<td>$row2[1]</td>
							<td>$row2[2]</td>
							<td>$row2[4]</td>
							<td>$row2[13]</td>
							<td>$row[5]</td>";
							
							//registration fee
							if($row[11]=='paid')
							{
							echo"<td><div class='bgtdy'>$row[9]</div></td>";
							}
							else
							{
							echo"<td><div class='bgtdn'>$row[9]</div></td>";
							}
							
							
							//1ST
							if($row[14]=='paid')
							{
							echo "<td><div class='bgtdy'>$row[12]</div></td>";
							}
							else
							{
							echo "<td><div class='bgtdn'>$row[12]</div></td>";
							}
							
							//2ND
							if($row[17]=='paid')
							{
							echo "<td><div class='bgtdy'>$row[15]</div></td>";
							}
							else
							{
							echo "<td><div class='bgtdn'>$row[15]</div></td>";
							}
							
							//3RD
							if($row[20]=='paid')
							{
							echo "<td><div class='bgtdy'>$row[18]</div></td>";
							}
							else
							{
							echo "<td><div class='bgtdn'>$row[18]</div></td>";
							}
							
							if($row2[49]==1)
							{echo"<td><a href='fullfees.php?id=".$row2[1]."'><button name='fees' class='styled-button-table' >Full</button></a></td>";}
							else if ($row2[50]==1)
							{echo"<td><a href='installment.php?id=".$row2[1]."'><button name='fees' class='styled-button-table'>Installment</button></a></td>";}
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
                    <a href="search_date_fee_collect.html"><button name="Search-by-name" class="styled-button">Back</button></a>  
            	</div>
                  
              	
            
   </div>
   </div>
  </body>
  </html>