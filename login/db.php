<?php
$servername = "localhost"; // or your server name
$username = "root"; // default username for MySQL
$password = ""; // default password for MySQL, often empty for root
$dbname = "login_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>