<?php
define('CSV_PATH', 'data/users.csv');

$users = loadUsers();

function loadUsers()
{
    $users = [];
    //CSVファイルを読み込みモードで開く
    $file = fopen(CSV_PATH, 'r');
    flock($file, LOCK_EX);
    if ($columns = fgetcsv($file)) {
        while ($array = fgetcsv($file)) {
            foreach ($columns as $index => $column) {
                $user[$column] = $array[$index];
            }
            $users[] = $user;
        }
    }
    fclose($file);
    return $users;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ一覧</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">ユーザ一覧</h2>
        <table class="table">
            <tr>
                <th>氏名</th>
                <th>メールアドレス</th>
            </tr>
            <?php if ($users) : ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </div>
</body>

</html>