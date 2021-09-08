<?php
require_once 'monsters.php';

$monster->appear();
$messages[] = $monster->message;
?>

<!DOCTYPE html>
<html lang="en">

<?php include('components/head.php') ?>

<body>
    <div class="container">
        <p class="text-center">
            <img src="<?= $monster->image ?>" alt="">
        </p>
        <?php include('components/message.php') ?>
    </div>
</body>

</html>