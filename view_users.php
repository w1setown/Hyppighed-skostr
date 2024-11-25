<?php

//include 'dbcon.php';
require_once 'dbcon.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Navn</th><th>E-mail</th><th>Alder</th><th>Skostørrelse</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['name']}</td><td>{$row['mail']}</td><td>{$row['age']}</td><td>{$row['shoe_size']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "Ingen data fundet.";
}

$conn->close();