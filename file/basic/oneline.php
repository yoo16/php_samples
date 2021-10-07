<?php
$informations = [];
$file_path = 'data/information.txt';
if (file_exists($file_path)) {
    //ファイルを開く
    $file = fopen($file_path, 'r');
    //1行読み込む
    $data = fgets($file, 4096);
    //ファイルを閉じる
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
    <div class="container">
        <h3 class="h3">お知らせ</h3>
        <?= $data ?>
    </div>
</body>

</html>