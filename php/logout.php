<?php
session_start(); // start the session

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to the login page
header("Location: /sami/template"); // to change with your project
exit;
?>
