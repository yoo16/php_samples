<?php

require_once 'connect.php';

$sql = "SELECT * FROM user_items 
        LEFT JOIN items 
        ON items.id = user_items.item_id";

$sql = "SELECT * FROM user_items 
        RIGHT JOIN items 
        ON items.id = user_items.item_id";

$sql = "SELECT * FROM user_items 
        INNER JOIN items 
        ON items.id = user_items.item_id";

$sql = "SELECT * FROM user_items 
        LEFT OUTER JOIN items 
        ON items.id = user_items.item_id";

$sql = "SELECT * FROM user_items 
        RIGHT OUTER JOIN items 
        ON items.id = user_items.item_id";

$sql = "SELECT *
        FROM user_items
        JOIN users
        ON user_items.user_id = users.id;
       ";
$rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
    var_dump($row);
}