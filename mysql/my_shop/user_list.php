<?php
require_once 'connect.php';

$sql = "SELECT * FROM users;";
$sql = "SELECT * FROM users WHERE id = 5;";
$sql = "SELECT * FROM users LIMIT 10;";

$users = $pdo->query($sql);
$pdo = null;

$template = 'user_list_tpl.php';

include 'layout.php';