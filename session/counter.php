<?php
session_start();
session_regenerate_id(true);

if (!empty($_GET['is_clear'])) unset($_SESSION['count']);
if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 0;
}
$count = $_SESSION['count'];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP セッション</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1><span class="badge bg-danger"><?= $count ?></span></h1>
        <a href="counter.php" class="btn btn-primary">カウント</a>
        <a href="counter.php?is_clear=1" class="btn btn-outline-primary">クリア</a>
    </div>
</body>

</html>