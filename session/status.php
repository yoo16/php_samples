<?php
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP セッション</title>
</head>

<body>
    <h2>セッションID</h2>
    <?php echo session_id() ?>

    <h2>セッション名</h2>
    <?php echo session_name() ?>

    <h2>Cookie</h2>
    <?php echo $_COOKIE[session_name()] ?>
</body>

</html>