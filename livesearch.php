<?php
	$q = $_GET['q'];
	
	$con=mysqli_connect("localhost","root","");
		
		if(!$con)
		{
			echo "<br> could not connect";
		}
		else
		{
			$db=mysqli_select_db($con,"horizon_career");
			if(!$db)
			{
				echo "<br> db not selected";
			}
		}
		
	$sql="select * from inquiry where NAME like '%".$q."%' ";
	
	$result = mysqli_query($con,$sql);

	while($row = mysqli_fetch_array($result))
	  {
	  	echo "$row[4]";
		echo "<br/>";
	  }
	mysqli_close($con);
?>