<?php
$items = ['ミネラルウォーター', 'コーヒー', '炭酸水', '紅茶', 'ほうじ茶'];
$message = '商品名を入力してください';
if (!empty($_GET) && !empty($_GET['keyword'])) {
    if (in_array($_GET['keyword'], $items)) {
        $message = "{$_GET['keyword']}がみつかりました";
    } else {
        $message = '商品が見つかりませんでした';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="h2">商品検索</h2>
        <?php if (!empty($message)) : ?>
            <div class="alert alert-info">
                <?= $message ?>
            </div>
        <?php endif ?>
        <form action="search.php" method="get">
            <input class="form-control" type="text" name="keyword">
            <div>
                <button class="btn btn-primary">検索</button>
            </div>
        </form>

    </div>
</body>

</html>