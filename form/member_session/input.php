<?php
session_start();
$user = ['email' => '', 'password' => ''];
if (isset($_SESSION['user'])) $user = $_SESSION['user'];
if (isset($_SESSION['errors'])) $errors = $_SESSION['errors'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="confirm.php" method="post">
            <div class="mb-3">
                <label for="input_email" class="form-label">Email</label>
                <input type="email" name="email" value="<?= $user['email'] ?>"
                 class="form-control" id="input_email">
                 <p><?= @$errors['email'] ?></p>
            </div>
            <div class="mb-3">
                <label for="input_password" class="form-label">Password</label>
                <input type="password" name="password"
                 class="form-control" id="input_password">
                 <p><?= @$errors['password'] ?></p>
            </div>
            <button class="btn btn-primary">確認</button>
        </form>
    </div>
</body>

</html>