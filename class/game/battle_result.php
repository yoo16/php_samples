<?php
require_once 'Brave.php';
require_once 'Wizard.php';
require_once 'Monster.php';

$brave = new Brave();
$brave->name = 'ヒーロー';
$brave->hp = 30;
$brave->attack_power = 8;
$brave->defense_power = 4;

$wizard = new Wizard();
$wizard->name = 'バーバラ';
$wizard->hp = 20;
$wizard->mp = 10;
$wizard->attack_power = 3;
$wizard->defense_power = 1;

$monster = new Monster();
$monster->name = 'ボス';
$monster->hp = 50;
$monster->attack_power = 8;
$monster->defense_power = 5;

while (($brave->is_live || $wizard->is_live) && $monster->is_live) {

    //brave attack
    if ($brave->is_live) {
        $monster->damaged($brave->attack());
        $messages[] = $brave->message;
        $messages[] = $monster->message;
    }

    //wizard attack
    if ($wizard->is_live) {
        $monster->damaged($wizard->magic(2));
        $messages[] = $wizard->message;
        $messages[] = $monster->message;
    }

    //monster attack
    if ($monster->is_live) {
        if ($brave->is_live) {
            $brave->damaged($monster->attack());
            $messages[] = $brave->message;
        }
        if ($wizard->is_live) {
            $wizard->damaged($monster->attack());
            $messages[] = $wizard->message;
        }
    }
}
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
    <h2>ヒストリー</h2>
    <?php foreach ($messages as $message) : ?>
        <p><?= $message ?></p>
    <?php endforeach ?>

    <h2>結果</h2>
    <h3><?= $brave->name ?></h3>
    <p>HP:<?= $brave->hp ?></p>

    <h3><?= $wizard->name ?></h3>
    <p>HP:<?= $wizard->hp ?></p>

    <h3><?= $monster->name ?></h3>
    <p>HP:<?= $monster->hp ?></p>

</body>

</html>