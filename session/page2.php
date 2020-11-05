<?php
session_start();
$message = '情報がありません';
if ($_SESSION['is_auth']) {
    $message = "{$_SESSION['user_name']} さんは {$_SESSION['count']} 回アクセスしました";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?>
</body>
</html>