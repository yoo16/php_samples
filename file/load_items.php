<?php
//お知らせ
$informations = [];
$file_path = 'data/information.txt';
if (file_exists($file_path)) {
    $file = fopen($file_path, 'r');
    while ($line = fgets($file, 4096)) {
        $informations[] = $line;
    }
    fclose($file);
}

//商品
$items = [];
$file_path = 'data/items.csv';
if (file_exists($file_path)) {
    $file = fopen($file_path, 'r');
    //1行目データカラムの読み込み
    $columns = fgetcsv($file, 4096);
    // var_dump($columns);
    //実データの読み込み
    while ($data = fgetcsv($file, 4096)) {
        //データカラムを使って連想配列を作成
        foreach ($columns as $index => $column) {
            $item[$column] = $data[$index];
        }
        $items[] = $item;
    }
    // var_dump($items);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="h3">お知らせ</h3>
        <dl>
            <?php foreach ($informations as $information) : ?>
                <dd><?= $information ?></dd>
            <?php endforeach ?>
        </dl>

        <h3 class="h3">商品一覧</h3>
        <dl>
            <?php foreach ($items as $item) : ?>
                <dt><?= $item['name'] ?></dt>
                <dd><?= $item['price'] ?>円</dd>
            <?php endforeach ?>
        </dl>
    </div>
</body>

</html>