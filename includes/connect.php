<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u640333703_tyresell');
define('DB_PASSWORD', 'p>2C!tD8+9U');
define('DB_DATABASE', 'u640333703_tyresell');

$pdo = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

//verify connection
	 if ($pdo->connect_error){
		 die("Connection Failed: <br />" .$pdo->connect_error);
	  }
 
?>