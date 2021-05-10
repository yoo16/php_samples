<?php
$email = '';
if (!empty($_GET)) {
    $email = $_GET['email'];
}
if (!empty($_POST)) {
    $email = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="h2">GET</h2>
        <form action="message.php" method="get">
            <label>メールアドレス</label>
            <input class="form-control" type="email" name="email">
            <div>
                <button class="btn btn-primary">送信</button>
            </div>
        </form>

        <h2 class="h2">POST</h2>
        <form action="message.php" method="post">
            <label>メールアドレス</label>
            <input class="form-control" type="email" name="email">
            <div>
                <button class="btn btn-primary">送信</button>
            </div>
        </form>
        <h2>結果</h2>
        <?= $email ?>
    </div>
</body>

</html>