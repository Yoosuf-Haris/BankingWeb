<?php
$servername = "localhost";
$username = "root"; // Typically, XAMPP’s default username is 'root'
$password = ""; // XAMPP's default password for 'root' is empty
$dbname = "marthr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
