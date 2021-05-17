<?php
$user_name = '';
if (isset($_POST)) {
    $user_name = $_POST['user_name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <p>ユーザ名を入力してください。</p>
            <input class="form-control" type="text" name="user_name">
            <button class="btn btn-primary">送信</button>
            <?= $user_name ?>
        </form>
    </div>
</body>

</html>