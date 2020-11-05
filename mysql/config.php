<?php
$db_name = 'my_shop';
$db_host = 'mysql';
$db_user = 'root';
$db_password = 'root';

$dsn = "mysql:dbname={$db_name};host={$db_host}";
$pdo = new PDO($dsn, $db_user, $db_password);

$sql = "SELECT * FROM items;";
$items = $pdo->query($sql);
// if ($items) {
//     foreach ($items as $item) {
//         echo $item['id'];
//         echo $item['name'];
//         echo $item['is_active'];
//         echo $item['created_at'];
//         echo $item['updated_at'];
//         echo PHP_EOL;
//     }
// }
$pdo = null;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="regist.php">登録</a>

    <h2>SQL</h2>
    <table>
        <tr>
            <th>SQL</th>
            <td><?= $sql ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <th>id</th>
            <th>商品名</th>
            <th>値段</th>
            <th>有効</th>
        </tr>
        <?php foreach($items as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['name'] ?></td>
            <td><?= $item['price'] ?></td>
            <td><?= $item['is_active'] ?></td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id">
                    <button>削除</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>

</html>