<?php
$file_path = 'data/information.txt';
$informations = loadInformations($file_path);

function loadInformations($file_path)
{
    if (!file_exists($file_path)) return;

    $informations = [];
    $file = fopen($file_path, 'r');
    while ($data = fgets($file)) {
        $informations[] = $data;
    }
    return $informations;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 
    rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="h3">お知らせ</h3>
        <dl>
            <?php if ($items) : ?>
                <?php foreach ($informations as $information) : ?>
                    <dd><?= $information ?></dd>
                <?php endforeach ?>
            <?php endif ?>
        </dl>
    </div>
</body>

</html>