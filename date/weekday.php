<?php
if (isset($_GET['date'])) {
    $datetime = new DateTime($_GET['date']);
    $weeks = array("日", "月", "火", "水", "木", "金", "土");
    $week = (int) $datetime->format('w');
    $week_string = $weeks[$week];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="date" name="date">
        <button>曜日を調べる</button>
    </form>
    <?php if ($week_string): ?>
    <h2>結果</h2>
    <div>
        <p>
            <?= $week_string ?>曜日
        </p>
    </div>
    <?php endif ?>
</body>

</html>