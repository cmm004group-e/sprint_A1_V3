<?php
session_start();

// Define database
define('dbhost', 'CSDM-WEBDEV');
define('dbuser', '1712499');
define('dbpass', '1712499');
define('dbname', 'db1712499_group-e');

// Connecting database
try {
    $connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>