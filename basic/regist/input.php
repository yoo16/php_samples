<?php
session_start();
$user = ['email' => '', 'password' => ''];
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
}
$errors = [];
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="confirm.php" method="post">
            <div>
                <label for="">Email</label>
                <input type="text" name="email" value="<?= $user['email'] ?>" class="form-control">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div>
                <button class="btn btn-primary">送信</button>
            </div>
        </form>
        <div>
            <?php if (isset($errors)) : ?>
                <?php foreach ($errors as $error) : ?>
                    <p><?= $error ?></p>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</body>

</html>