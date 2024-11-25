<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

require_once 'dbcon.php';

//include "dbcon.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $age = $_POST['age'];
    $shoe_size = $_POST['shoe_size'];

    $sql = "INSERT INTO user (`name`, mail, age, shoe_size) VALUES ('$name', '$mail', $age, $shoe_size)";  // Tal skal der ikke benyttes '' til.

    if ($conn->query($sql) === TRUE) {
        echo "Data has been added!"; 
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
