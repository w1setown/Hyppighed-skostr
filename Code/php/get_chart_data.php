<?php

// include "dbcon.php"; | Har skiftet dette da require_once er en mere pålidelig metode

require_once 'dbcon.php';

$query = "SELECT shoe_size AS skostorrelse, COUNT(*) AS antal FROM user GROUP BY shoe_size";
$result = $conn->query($query);

// Forbered data til grafen
$data = [];
$data[] = ['Skostørrelse', 'Antal personer']; // Kolonneoverskrifter
while ($row = $result->fetch_assoc()) {
    $data[] = [(string)$row['skostorrelse'], (int)$row['antal']];
}

$conn->close();

// Returner data som JSON
header('Content-Type: application/json');
echo json_encode($data);
