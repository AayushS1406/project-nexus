<?php
// Database credentials
$db_server = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'QuickBite';

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>