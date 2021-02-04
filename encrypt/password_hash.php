<?php

//$host = 'localhost';
$host = 'host.docker.internal';
$db_name = 'laravel_shop';
$db_user = 'root';
$db_pass = '';
$dsn = "mysql:host={$host}; dbname={$db_name}; charset=utf8";

if (isset($_POST['email'])) {
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        insert($pdo);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
}

function insert($pdo)
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

    //自動的に SQL をエスケープ
    $stmt = $pdo->prepare($sql);
    $posts = [
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
    ];

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    if (!$stmt->execute($posts)) {
        var_dump($pdo->errorInfo());
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>会員登録</title>
</head>

<body>
    <h1>会員登録</h1>
    <p>
        <?= @$result ?>
    </p>
    <form action="" method="post">
        <p>
            <label>Name：</label>
            <input type="text" name="name">
        </p>
        <p>
            <label>Email：</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Password：</label>
            <input type="password" name="password">
        </p>
        <input type="submit" name="submit" value="Regist">
    </form>
</body>

</html>