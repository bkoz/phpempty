<?php
	// set your infomation.
	$host		=	getenv("MYSQL_SERVICE_HOST");
	$user		=	getenv("MYSQL_USER");
	$pass		=	getenv("MYSQL_PASSWORD");
	$database	=	getenv("MYSQL_DATABASE");
	
	echo "Env variables:\t \n";
	
	echo $host;
	echo $user;
	echo $pass;
	echo $database;

	// connect to the mysql database server.
	$connect = @mysql_connect ($host, $user, $pass);

	if ( $connect )
	{
		// create the database.
		if ( ! @mysql_query ( "CREATE DATABASE `$database`" ) )
		{
			die ( mysql_error() );
		}
		else {
			echo "success in database creation.";
		}
	}
	else {
		echo " Error in DB creation.";
	}
?>
