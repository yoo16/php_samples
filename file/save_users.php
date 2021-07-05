<?php

if (!empty($_POST)) {
    $csv_path = 'data/users.csv';
    //CSVファイルを追記モードで開く
    $file = fopen($csv_path, 'a');
    //ロック
    flock($file, LOCK_EX);
    //CSV書き込み
    fputcsv($file, $_POST);
    fclose($file);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <dl>
            <dt>氏名</dt>
            <dd><input type="text" name="name"></dd>
            <dt>Email</dt>
            <dd><input type="text" name="email"></dd>
            <dt>パスワード</dt>
            <dd><input type="password" name="password"></dd>
        </dl>
        <button>登録</button>
    </form>
</body>

</html>