<?php
define('DB_SERVER',"localhost");
define('DB_USER',"root");
define('DB_PASS',"");
define('DB_NAME',"iims");

//create connection
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//test connection

if(!$con){
	die("Connection Failed" . mysqli_connect_error());
}
