<?php

$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a2193804_entry";
$mysql_user = "a2193804_entry";
$mysql_password = "ritenC@29";

	//$con=mysql_connect($mysql_host,$mysql_user,$mysql_password);
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		echo "<br> could not connect";
	}
	else
	{
		$db=mysql_select_db("horizon_career");
		if(!$db)
		{
			echo "<br> db not selected";
		}
	}
?>