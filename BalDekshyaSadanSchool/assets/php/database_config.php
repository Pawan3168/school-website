<?php
// Database credentials
$servername = "mysql";  // Change this to the MySQL service name defined in docker-compose
$username = "app_user"; // MySQL username from docker-compose
$password = "app_password"; // MySQL password from docker-compose
$dbname = "bds_db";     // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Sorry failed to connect to database. Connection failed: " . $conn->connect_error);
} 
?>

