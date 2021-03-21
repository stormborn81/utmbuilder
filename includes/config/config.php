<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */


// Define environments
global $site_URL;
if($_SERVER['HTTP_HOST']=='www.utmbuilder.space') {
    $site_URL = 'https://www.utmbuilder.space/';
    //Local computer setting
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'umrr96bwxna3m');
    define('DB_PASSWORD', 'ehyltdgboilp');
    define('DB_NAME', 'db2pk2xhodltat');
} else if($_SERVER['HTTP_HOST']=='utmbuilder.space') {
   $site_URL = 'https://utmbuilder.space/';
   //Local computer setting
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'umrr96bwxna3m');
   define('DB_PASSWORD', 'ehyltdgboilp');
   define('DB_NAME', 'db2pk2xhodltat');
} else if($_SERVER['HTTP_HOST']=='35.213.242.248') {
   $site_URL = 'https://utmbuilder.space/';
   //Local computer setting
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'umrr96bwxna3m');
   define('DB_PASSWORD', 'ehyltdgboilp');
   define('DB_NAME', 'db2pk2xhodltat');
 } else {
    $site_URL = 'http://192.168.64.2/utmbuilder/';

    //Local computer setting
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'utmbuilder');
}

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$mysqli->select_db(DB_NAME) or die( "Unable to select database");


// global set number of rows per table
global $rowsperpage;
$rowsperpage = 20;

// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
?>