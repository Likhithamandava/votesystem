<?php

$servername = "backend";
$username = "root";
$password = "123";
$dbname = "votesystem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

?>
