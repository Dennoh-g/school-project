<?php

$server_name="localhost";
$db_user_name="root";
$db_password="";
$db_name="school_management";
$connection=mysqli_connect($server_name,$db_user_name,$db_password);
$dbconfig=mysqli_select_db($connection,$db_name);

if($dbconfig)
{
	echo "Database is connected";
	
}
	else
	{
		echo "Database is not connected";
	}




?>