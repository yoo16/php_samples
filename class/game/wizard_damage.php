<?php
require_once 'models/Brave.php';
require_once 'models/Wizard.php';
require_once 'models/Monster.php';

$brave = new Brave();
$brave->name = 'ヒーロー';
$brave->hp = 30;
$brave->mp = 0;
$brave->attack_power = 15;
$brave->defense_power = 10;

$wizard = new Wizard();
$wizard->name = 'バーバラ';
$wizard->hp = 20;
$wizard->mp = 10;
$wizard->attack_power = 3;
$wizard->defense_power = 1;

$monster = new Monster();
$monster ->name = 'スライム';
$monster->hp = 5;
$monster->attack_power = 2;
$monster->defense_power = 1;

$attack_point = $monster->attack();
$wizard->damaged($attack_point);

$characters = [$brave, $wizard];
?>

<!DOCTYPE html>
<html lang="en">

<?php include('components/head.php') ?>

<body>
    <div class="container">
        <?php include('components/status.php') ?>

        <p class="text-center">
            <img src="<?= $monster->image ?>" alt="">
        </p>
        <?php include('components/message.php') ?>
    </div>
</body>

</html>