<?php 
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
echo session_destroy();
?>