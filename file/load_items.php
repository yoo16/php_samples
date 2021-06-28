<?php
$file_path = 'data/items.txt';
if (file_exists($file_path)) {
    $item_contents = file_get_contents($file_path);
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
        <form action="search_address.php" method="get">
            <h3 class="h3">テキストファイル</h3>
            <p>
                <?= $item_contents ?>
            </p>
            <p>
                <?= nl2br($item_contents) ?>
            </p>
        </form>
    </div>
</body>

</html>