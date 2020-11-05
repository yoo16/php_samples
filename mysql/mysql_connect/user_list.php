<?php
require_once 'connect.php';

$sql = 'SELECT * FROM users LIMIT 10;';
if ($result = $mysqli->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        echo "{$row["id"]} {$row["name"]} {$row["email"]}".PHP_EOL;
    }
    $result->close();
}

//update
$id = 1;
$price = 95;
$sql = "UPDATE items SET price = ? WHERE id=?";
if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("ii", $price, $id);
    $stmt->execute();
    $stmt->close();
}

$sql = "SELECT * FROM items WHERE id = {$id};";
if ($result = $mysqli->query($sql)) {
    $row = $result->fetch_assoc();
    echo "{$row["id"]} {$row["name"]} {$row["price"]}".PHP_EOL;
    $result->close();
}