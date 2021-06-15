<?php
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';
require_once 'controllers/RegistController.php';

$controller = new RegistController();
$controller->result();
?>