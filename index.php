<?php
	// set your infomation.
	$host		=	getenv("MYSQL_SERVICE_HOST");
	$user		=	getenv("MYSQL_USER");
	$pass		=	getenv("MYSQL_PASSWORD");
	$database	=	getenv("MYSQL_DATABASE");
	
	echo 'Env variables: ';
	
	echo " MYSQL_SERVICE_HOST: ", $host;
	
	echo " MYSQL_USER: ", $user;
	
	echo " MYSQL_PASSWORD: ", $pass;
	
	echo " MYSQL_DATABASE: ", $database;
	
	$sql = 'CREATE TABLE `articles` (
		`ID` int( 11 ) NOT NULL AUTO_INCREMENT,
		`article_title` VARCHAR( 255 ) NOT NULL,
		`article_content` TEXT NOT NULL,
		PRIMARY KEY ( `ID` )
	       )';

	// connect to the mysql database server.
	$connect = @mysql_connect ($host, $user, $pass);

      if ( $connect ) {
			@mysql_select_db ( $database );
			if ( @mysql_query ( $sql ) )
			{
				echo 'Your new table was created successfully!';
			}
			else {
				die ( mysql_error() );
			}
		       }
