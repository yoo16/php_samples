<?php
$message = 'こんにちわ';
$name = '東京';
$cities = ['Tokyo', 'Osaka', 'Yokahama'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo '<meta charset="UTF-8">'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTML出力</title>
</head>

<body>
    <?php echo "<p>{$message} {$name}</p>" ?>
    <p><?= "{$message} {$name}" ?></p>

    <p id="js_message"></p>
    <?php
    $js_message = 'JavaScript';
    $js = <<<HTML
        <script>
        let js_message = '{$js_message}';
        document.getElementById('js_message').innerHTML = js_message;
        </script>
        HTML;
    echo $js;
    ?>

    <?php if ($name): ?>
    <p><?= $name ?>さん</p>
    <?php else: ?>
    <p>エラー</p>
    <?php endif ?>

    <ul>
        <? foreach ($cities as $city) : ?>
        <li><?= $city ?></li>
        <? endforeach ?>
    </ul>

</body>

</html>