<?php
$drink = "コーヒー";
$price = 120;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <dl>
        <dt>商品名</dt>
        <dd><?php echo $drink ?></dd>
        <dt>値段</dt>
        <dd><?php echo $price ?>円</dd>
    </dl>
</body>
</html>