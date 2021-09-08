<?php
require_once '../app.php';
require_once 'app/controllers/UserController.php';

$controller = new UserController();
$controller->index();