<?php
require_once './libs/App.php';

$item = new Item();
$items = $item->fetchRows();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="none,noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Shop</title>
</head>

<body>
    <h2 class="h2">カート一覧</h2>
    <div class="containerm mt-3">
        <div class="row">
        ここにカート一覧を表示
        </div>
    </div>
</body>

</html>