<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['errors']);

header('Location: input.php');