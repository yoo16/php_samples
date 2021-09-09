<?php
require_once 'functions.php';

$price = 300;
$amount = 5;
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body>
    <div class="container">
        <h2 class="h2">単価</h2>
        <p><?= $price ?>円</p>
        <h2 class="h2">個数</h2>
        <p><?= $amount ?>個</p>
        <h2 class="h2">合計金額</h2>
        <p><?= totalPrice($price, $amount) ?>円</p>
    </div>
</body>

</html>