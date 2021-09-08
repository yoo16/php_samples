<?php
require_once '../app.php';
require_once 'app/controllers/LoginController.php';

$controller = new LoginController();
$controller->logout();