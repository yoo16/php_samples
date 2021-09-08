<?php
//CSVパスを定数にする
define('CSV_PATH', 'data/users.csv');

//POSTデータがあれば書き込み
if (!empty($_POST)) {
    insert($_POST);
}

//書き込みの関数
function insert($posts)
{
    //CSV初期処理
    initCSV();
    //データ書き込み処理
    $file = fopen(CSV_PATH, 'a');
    flock($file, LOCK_EX);
    fputcsv($file, $posts);
}

function initCSV()
{
    //追記&読み込みモードで開く
    $file = fopen(CSV_PATH, 'a+');
    flock($file, LOCK_EX);
    //1行目が読み込めなかったら
    if (!fgets($file)) {
        $columns = [
            'name',
            'email',
            'password',
        ];
        //CSV書き込み
        fputcsv($file, $columns);
    }
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
        <!-- dl>dt+dd -->
        <dl>
            <dt>氏名</dt>
            <dd>
                <input type="text" name="name">
            </dd>
            <dt>Email</dt>
            <dd>
                <input type="text" name="email">
            </dd>
            <dt>パスワード</dt>
            <dd>
                <input type="password" name="password">
            </dd>
        </dl>
        <button>送信</button>
    </form>
</body>

</html>