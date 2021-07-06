<?php

define('CSV_PATH', 'data/users.csv');

$genders = ['male' => '男性', 'female' => '女性'];
$users = loadUsers();

function loadUsers()
{
    $users = [];
    //CSVファイルを読み込みモードで開く
    $file = fopen(CSV_PATH, 'r');
    flock($file, LOCK_EX);
    if ($columns = fgetcsv($file)) {
        while ($line = fgetcsv($file)) {
            foreach ($columns as $index => $column) {
                $user[$column] = $line[$index];
            }
            $users[] = $user;
        }
    }
    fclose($file);
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
                <th>ふりがな</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th>誕生日年</th>
                <th>性別</th>
            </tr>
            <? if ($users) : ?>
                <? foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['kana'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['tel'] ?></td>
                        <td><?= $user['year'] ?>年</td>
                        <td><?= $genders[$user['gender']] ?></td>
                    </tr>
                <? endforeach ?>
            <? endif ?>
        </table>
    </div>
</body>

</html>