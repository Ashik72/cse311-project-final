<?php
/**
 * Created by PhpStorm.
 * User: ashik72
 * Date: 3/11/18
 * Time: 7:16 AM
 */


require_once 'vendor/autoload.php';

$servername = "127.0.0.1";
$username = "cse311";
$password = "U3oZIxzqtt25x1iD";
$db = "cse311-20-oct-18";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = 'CREATE TABLE testT(ID int, name varchar(20), salary numeric(5, 2) )';

$query = $conn->query($sql);

d($query);

$conn->close();