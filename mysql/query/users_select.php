<?php
require_once 'connect.php';

$sql = 'SELECT * FROM users LIMIT 10;';
// $rows = $pdo->query($sql)->fetchAll();

$query = $pdo->query($sql);
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;   
}
if ($rows) {
    foreach ($rows as $row) {
        echo "{$row['id']} {$row['name']}".PHP_EOL;
    }
}

$sql = 'SELECT * FROM users WHERE id = 1;';
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
echo $row['email'];
echo PHP_EOL;

$sql = 'SELECT count(*) AS count FROM users;';
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
echo "count: {$row['count']}";
echo PHP_EOL;

$sql = 'SELECT max(id) AS max, min(id) AS min FROM users;';
$row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
echo "max: {$row['max']}, min: {$row['min']}";
echo PHP_EOL;
