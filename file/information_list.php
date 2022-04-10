<?php
$file_path = 'data/information.txt';

if (isset($_POST['information'])) {
    insert($file_path, $_POST['information']);
}

$informations = loadInformations($file_path);

function insert($file_path, $data)
{
    if (!file_exists($file_path)) return;
    if (!$data) return;
    
    $data .= PHP_EOL;

    $file = fopen($file_path, 'a+');
    flock($file, LOCK_EX);
    fputs($file, $data);
    flock($file, LOCK_UN);
    fclose($file);
}

function loadInformations($file_path)
{
    if (!file_exists($file_path)) return;

    $informations = [];
    $file = fopen($file_path, 'r');
    while ($data = fgets($file)) {
        $informations[] = $data;
    }
    fclose($file);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="h3">お知らせ入力</h3>
        <div class="container mb-3">
            <form action="" method="post">
                <div class="row">
                    <input type="text" name="information" class="form-control col-8">
                    <button class="btn btn-primary">追加</button>
                </div>
            </form>
        </div>
        <h3 class="h3">お知らせ</h3>
        <dl>
            <?php if ($informations) : ?>
                <?php foreach ($informations as $information) : ?>
                    <dd><?= $information ?></dd>
                <?php endforeach ?>
            <?php endif ?>
        </dl>
    </div>
</body>

</html>