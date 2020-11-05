<?php
require_once 'connect.php';

if ($posts = $_POST['item']) {
    $posts['is_active'] = ($posts['is_active']) ? 1 : 0;
    $posts['created_at'] = date('Y-m-d H:i');
    $posts['updated_at'] = date('Y-m-d H:i');
    $sql = insertSQL('items', $posts);

    $dsn = "mysql:dbname={$db_name};host={$db_host}";
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->query($sql);
}
$pdo = null;

function insertSQL($table_name, $posts)
{
    foreach ($posts as $key => $value) {
        $columns[] = $key;
        $values[] = "'{$value}'";
    }
    $column = implode(', ', $columns);
    $value = implode(', ', $values);
    $sql = "INSERT INTO {$table_name} ({$column}) VALUES ({$value});";
    return $sql;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="list.php">一覧</a>

    <h2>SQL</h2>
    <table>
        <tr>
            <th>SQL</th>
            <td><?= $sql ?></td>
        </tr>
    </table>

    <h2>登録画面</h2>
    <form action="regist.php" method="post">
        <table>
            <tr>
                <th>商品名</th>
                <td><input type="text" name="item[name]"></td>
            </tr>
            <tr>
                <th>値段</th>
                <td><input type="text" name="item[price]"></td>
            </tr>
            <tr>
                <th>有効</th>
                <td><input type="checkbox" name="item[is_active]" value="1"></td>
            </tr>
        </table>
        <button>送信</button>
    </form>
</body>

</html>