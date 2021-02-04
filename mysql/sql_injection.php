<?php
//$host = 'localhost';
$host = 'host.docker.internal';
$db_name = 'laravel_shop';
$db_user = 'root';
$db_pass = '';
$dsn = "mysql:host={$host}; dbname={$db_name}; charset=utf8";

try {
    if (isset($_GET['id'])) {
        $records = [];
        $id = $_GET['id'];

        $pdo = new PDO($dsn, $db_user, $db_pass);
        $sql = "SELECT * FROM users WHERE id = '{$id}';";
        $prepare = $pdo->prepare($sql);
        $prepare->execute();
        $row = $prepare->fetchAll(PDO::FETCH_ASSOC);
        var_dump($row);
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
