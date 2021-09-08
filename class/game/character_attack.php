<?php
require_once 'characters.php';
require_once 'monsters.php';

$monster->appear();
$messages[] = $monster->message;

$attack_point = $brave->attack();
$messages[] = $brave->message;

$monster->damaged($attack_point);
$messages[] = $monster->message;
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