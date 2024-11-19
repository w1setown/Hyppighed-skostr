<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "skostr";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
