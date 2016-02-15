<?php
	// set your infomation.
	$host		=	$_ENV["MYSQL_SERVICE_HOST"];
	$user		=	$_ENV["MYSQL_USER"];
	$pass		=	$_ENV["MYSQL_PASSWORD"];
	$database	=	$_ENV["MYSQL_DATMYSQL_SERVICE_HOST"];
	
	echo "Env variables:";
	echo "\n";
	
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
