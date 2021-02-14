<?php

$host = 'host.docker.internal';
$db_name = 'laravel_shop';
// $host = 'localhost';
// $db_name = 'shop';
$db_user = 'root';
$db_pass = '';
$dsn = "mysql:host={$host}; dbname={$db_name}; charset=utf8";

if (isset($_POST['email'])) {
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $user = login($pdo);
    } catch (Exception $e) {
        echo $e->getMessage();
        die();
    }
}

function login($pdo)
{
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = ':email'";
    $stmt = $pdo->prepare($sql);
    $posts = [ ':email' => $email, ];
    //$stmt = $pdo->query($sql);
    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $hash = $row['password'];
    $is_valid = password_verify($_POST['password'], $hash);
    if ($is_valid) return $row;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php if (isset($user)): ?>
    <p>
     <?= $user['name'] ?> logined!!
    </p>
    <?php endif ?>

    <form action="" method="post">
        <p>
            <label>Email：</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Password：</label>
            <input type="password" name="password">
        </p>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>