<?php
if (isset($_POST)) {
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="input" name="email" class="form-control" id="input_email" placeholder="name@example.com">
    <input type="password" name="password" class="form-control" id="input_password">
    <button class="btn btn-primary">送信</button>
</body>

</html>