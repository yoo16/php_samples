<?php

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hash</title>
</head>

<body>
    <div>
        <h2>Hash Paasword</h2>
        <form action="" method="post">
            <input type="text" name="password">
            <button>Send</button>
        </form>
    </div>
    <div>
        <h3>Password</h3>
        <?= @$password ?>
        <h3>Hash</h3>
        <?= @$hash ?>
    </div>
</body>

</html>