<?php

$host = "localhost";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";
$database = "YOUR_DATABASE";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
