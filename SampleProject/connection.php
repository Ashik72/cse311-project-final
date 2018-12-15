<?php
$servername = "127.0.0.1";
$username = "cse311";
$password = "U3oZIxzqtt25x1iD";
$database = "cse311-20-oct-18";
require_once '../vendor/autoload.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_errno)
    die("Connection failed: " . $conn->connect_error);

?>