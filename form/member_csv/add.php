<?php
session_start();
define('CSV_PATH', 'data/users.csv');
$columns = ['name', 'email', 'password'];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit;
}
if (empty($_SESSION['user'])) {
    header('Location: input.php');
}

initCSV($columns);
insert($_SESSION['user'], $columns);

unset($_SESSION['user']);
unset($_SESSION['errors']);

function initCSV($data)
{
    $file = fopen(CSV_PATH, 'a+');
    flock($file, LOCK_EX);
    if (!fgets($file)) {
        fputcsv($file, $data);
    }
    flock($file, LOCK_UN);
    fclose($file);
}

function insert($data, $columns)
{
    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

    $file = fopen(CSV_PATH, 'a');
    flock($file, LOCK_EX);
    fputcsv($file, $data);
    flock($file, LOCK_UN);
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="h2">会員登録完了</h2>
        <p>会員登録が完了しました。</p>
        <div>
            <a href="input.php" class="btn btn-outline-primary">戻る</a>
        </div>
    </div>
</body>

</html>