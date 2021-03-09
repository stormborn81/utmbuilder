<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//Local computer setting
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'utmbuilder');

// Define environments
$site_URL = 'http://192.168.64.2/utmbuilder';

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>