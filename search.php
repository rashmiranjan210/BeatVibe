<?php
require_once("db-connect.php");
$userInput = $_GET["query"];
$query = "SELECT * FROM beatvibe WHERE music LIKE '%$userInput%'";
$result = $conn->query($query);
$suggestions = [];
while ($row = $result->fetch_assoc()) {
    $suggestions[] =[
        'id' => $row['id'],
        'music' => $row['music'],
        'photo' => $row['photo'],
    ];
}

echo json_encode($suggestions);
?>
