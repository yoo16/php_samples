<?php
if (!empty($_SESSION['auth_user'])) {
    unset($_SESSION['auth_user']);
}

header('Location: login.php');
