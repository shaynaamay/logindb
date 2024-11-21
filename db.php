<?php
$servername = "localhost";
$username = "root"; // Username MySQL kamu
$password = ""; // Password MySQL kamu
$dbname = "logindb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
