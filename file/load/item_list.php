<?php
$file_path = 'data/items.csv';
$items = loadCSV($file_path);

function loadCSV($file_path)
{
    if (!file_exists($file_path)) return;

    $items = [];
    $file = fopen($file_path, 'r');
    $columns = fgetcsv($file);
    while ($data = fgetcsv($file)) {
        foreach ($columns as $index => $column) {
            $item[$column] = $data[$index];
        }
        $items[] = $item;
    }
    fclose($file);
    return $items;
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
        <h3 class="h3">商品一覧</h3>
        <dl>
            <?php if ($items) : ?>
            <?php foreach ($items as $item) : ?>
                <dt><?= $item['name'] ?></dt>
                <dd><?= $item['price'] ?>円</dd>
            <?php endforeach ?>
            <?php endif ?>
        </dl>
    </div>
</body>

</html>