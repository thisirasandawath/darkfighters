<?php
    /* Database config */
    $db_host		= 'greenli2';
    $db_user		= 'greenli2_nsbm';
    $db_pass		= 'admin@123';
    $db_database	= 'greenli2_user'; 

	//Connect to mysql server
	$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database);
	if($link->connect_error)
	{
		die('Failed to connect to server: ' . mysqli_error());
	}
	else
	{
	    echo "success";
	}
?>