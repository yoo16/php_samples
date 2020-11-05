<?php
session_start();
session_regenerate_id(true);

if ($_POST['is_clear']) {
    session_destroy();
    $_SESSION = [];
} else {
    $_SESSION['user_name'] = 'YSE';
    $_SESSION['is_auth'] = true;

    if (isset($_SESSION['count'])) {
        $_SESSION['count']++;
    } else {
        $_SESSION['count'] = 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP セッション</title>
</head>
<body>
    <h2>is_auth</h2>    
    <?php echo $_SESSION['is_auth'] ?>

    <h2>count</h2>    
    <?php echo $_SESSION['count'].'目のアクセス' ?>

    <h2>セッションID</h2>    
    <?php echo session_id() ?>

    <h2>セッション名</h2>    
    <?php echo session_name() ?>

    <h2>Cookie</h2>    
    <?php echo $_COOKIE[session_name()] ?>

    <h2>操作</h2>
    <form action="" method="post">
      <a href="">更新</a>
      <button>削除</button>
      <input type="hidden" name="is_clear" value="1">
    </form>
</body>
</html>