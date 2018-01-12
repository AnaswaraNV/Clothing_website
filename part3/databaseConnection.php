<?php
//load hostname, username, password, database
$host = "db-mysql.zenit";
$db_user="uli705_173a14"; // MySQL username.
$db_password="ngHQ7357"; // MySQL password.
$database="uli705_173a14"; // Database name.



// connect to database server
$dbhandler=mysql_connect($host,$db_user,$db_password);

// Select database name
mysql_select_db($database);

?>