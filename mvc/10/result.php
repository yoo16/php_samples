<?php
require_once 'models/Member.php';
require_once 'helpers/Form.php';
require_once 'helpers/Session.php';

$member = Session::load('member');
if (empty($member)) {
    header('Location: input.php');
} else {
    unset($_SESSION['member']);
    include 'views/regist/result.php';
}