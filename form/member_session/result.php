<?php
session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    unset($_SESSION['errors']);
}

header('Location: input.php');
