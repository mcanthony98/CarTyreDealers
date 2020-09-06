<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '36987412');
define('DB_DATABASE', 'tyres');

$pdo = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//verify connection
	 if ($pdo->connect_error){
		 die("Connection Failed: <br />" .$pdo->connect_error);
	  }
 
?>