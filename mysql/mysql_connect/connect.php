<?php
//$host = 'host.docker.internal';
$host = 'mysql';
$user_name = 'root';
$db_name = 'my_shop';
$password = '';
$mysqli = new mysqli($host, $user_name, $password, $db_name);

if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    echo 'ok' . PHP_EOL;
    $mysqli->set_charset('utf8');
}
