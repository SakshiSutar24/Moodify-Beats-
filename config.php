<?php
$host = "localhost"; // Default 3306, but check phpMyAdmin madhe
$user = "root";
$password = "";
$database = "moodify";

// Connection create kara
$conn = new mysqli($host, $user, $password, $database);

// Connection check kara
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
