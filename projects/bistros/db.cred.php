<?php

$servername = "localhost";
$username = "bryan";
$password = "SGzJE334idblcXyj";
$dbname = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>