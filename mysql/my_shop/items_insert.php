<?php
require_once 'connect.php';

$sql = "INSERT INTO items (code, name, price, amount, created_at) 
        VALUES('W00001', 'ミネラルウォーター', '80', '1000', now())";
$is_success = $pdo->query($sql);