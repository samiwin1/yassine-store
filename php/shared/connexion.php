<?php

// Include the configuration file
require_once('config.php');

// Create a PDO object to establish the connection
$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
// Perform database operations using the $pdo object

?>
