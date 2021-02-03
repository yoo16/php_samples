<?php
$users = [
    ['id' => 1, 'name' => '吉田', 'email' => 'yoshida@example.com'],
    ['id' => 2, 'name' => '鈴木', 'email' => 'suzuki@example.com'],
    ['id' => 3, 'name' => '田中', 'email' => 'tanaka@example.com'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>