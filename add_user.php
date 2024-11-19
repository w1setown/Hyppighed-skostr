<?php

include "dbcon.php";

if ($_SERVER['REQUEST METHOD'] === 'POST'){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $age = $_POST['age'];
    $shoe_size = $_POST['shoe_size'];

    $sql = "INSERT INTO user (name, age, mail, shoe_size) VALUES ('$name', '$mail', '$age', '$shoe_size')";

    if ($conn->query($sql) === TRUE) {
        echo "Data has been added!"
    } else {
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}