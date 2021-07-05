<?php
$character = [
    'id' => 1,
    'name' => 'ヒーロー',
    'job' => 'brave',
    'level' => 1,
    'job' => '勇者',
    'hp' => 15,
    'mp' => 0,
    'exp' => 0,
];

$character['exp'] = 5;
$jobs = [
    'brave' => '勇者',
    'soldier' => '戦士',
    'monk' => '僧侶',
    'wizard' => '魔法使い',
];
// $character['job'] = 'monk';

$weapons[1] = 'こんぼう';
$weapons[2] = 'てつのやり';
$weapons[3] = '銅のつるぎ';

$character['weapon_id'] = 2;
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
    <h2>キャラクター</h2>
    <table>
        <tr>
            <th>名前</th>
            <td><?php echo $character['name'] ?></td>
        </tr>
        <tr>
            <th>Lv</th>
            <td><?= $character['level'] ?></td>
        </tr>
        <tr>
            <th>職業</th>
            <td><?= $jobs[$character['job']] ?></td>
        </tr>
        <tr>
            <th>HP</th>
            <td><?= $character['hp'] ?></td>
        </tr>
        <tr>
            <th>MP</th>
            <td><?= $character['mp'] ?></td>
        </tr>
        <tr>
            <th>経験値</th>
            <td><?= $character['exp'] ?></td>
        </tr>
        <tr>
            <th>武器</th>
            <td><?= $weapons[$character['weapon_id']] ?></td>
        </tr>
    </table>
</body>

</html>