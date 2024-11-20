<?php
require_once '../models/Topic.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $topic = new Topic();
    $topic->insert($_POST);
}
header('Location: index.php');
