<?php
require_once 'characters.php';
require_once 'monsters.php';

$monster = new Monster();
$monster->name = 'ボス';
$monster->hp = 50;
$monster->attack_power = 8;
$monster->defense_power = 5;

while (($brave->is_live || $wizard->is_live)
    && $monster->is_live
) {
    //brave attack
    if ($brave->is_live) {
        $attack_point = $brave->attack();
        $messages[] = $brave->message;

        $monster->damaged($attack_point);
        $messages[] = $monster->message;
    }

    //wizard attack
    if ($wizard->is_live) {
        $attack_point = $wizard->magic(2);
        $monster->damaged($attack_point);

        $messages[] = $wizard->message;
        $messages[] = $monster->message;
    }
    $messages[] = '';

    //monster attack
    if ($monster->is_live) {
        if ($brave->is_live) {
            $attack_point = $monster->attack();
            $brave->damaged($attack_point);

            $messages[] = $monster->message;
            $messages[] = $brave->message;
        }
        if ($wizard->is_live) {
            $attack_point = $monster->attack();
            $wizard->damaged($attack_point);

            $messages[] = $monster->message;
            $messages[] = $wizard->message;
        }
    }
    $messages[] = '';
}

$characters = [$brave, $wizard];
?>

<!DOCTYPE html>
<html lang="en">

<?php include('components/head.php') ?>

<body>
    <div class="container">
        <?php include('components/status.php') ?>
        <?php include('components/message.php') ?>
    </div>
</body>

</html>