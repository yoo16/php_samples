<?php
define('CSV_PATH', 'data/users.csv');
$columns = ['name', 'email', 'password'];

if (!empty($_POST)) {
    initCSV($columns);
    insert($_POST);
}

function initCSV($data)
{
    $file = fopen(CSV_PATH, 'a+');
    flock($file, LOCK_EX);
    if (!fgets($file)) {
        fputcsv($file, $data);
    }
    fclose($file);
}

function insert($posts)
{
    $file = fopen(CSV_PATH, 'a');
    flock($file, LOCK_EX);
    fputcsv($file, $posts);
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
</head>

<body>
    <form action="" method="post">
        <dl>
            <dt>氏名</dt>
            <dd><input type="text" name="name"></dd>
            <dt>Email</dt>
            <dd><input type="text" name="email"></dd>
            <dt>パスワード</dt>
            <dd><input type="password" name="password"></dd>
        </dl>
        <button>登録</button>
    </form>
</body>

</html>