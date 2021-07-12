<?php
$character = [
    'id' => 1,
    'name' => 'ヒーロー',
    'job' => 'brave',
    'level' => 1,
    'job' => '勇者',
    'hp' => 15,
    'hp' => 0,
    'exp' => 0,
];

echo $character['id'];
echo PHP_EOL;

echo $character['name'];
echo PHP_EOL;

echo $character['level'];
echo PHP_EOL;

echo $character['exp'];
echo PHP_EOL;

//exp 更新
$character['exp'] = 5;
echo $character['exp'];
echo PHP_EOL;


//key-value　追加
$character['job'] = 'brave';
echo $character['job'];
echo PHP_EOL;

//key-value　追加
$character['weapon'] = '銅のつるぎ';
echo $character['weapon'];
echo PHP_EOL;


$character['armor'] = '皮のよろい';
$character['items'] = ['やくそう', 'どくけしそう', '銅のかぎ'];

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
    <table>
        <tr>
            <th>名前</th>
            <th>職業</th>
            <th>Lv</th>
            <th>HP</th>
            <th>MP</th>
            <th>経験値</th>
        </tr>
        <tr>
            <td><?= $character['name'] ?></td>
            <td><?= $character['job'] ?></td>
            <td><?= $character['level'] ?></td>
            <td><?= $character['hp'] ?></td>
            <td><?= $character['mp'] ?></td>
            <td><?= $character['exp'] ?></td>
        </tr>
    </table>
</body>
</html>