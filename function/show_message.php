<?php
function showMessage($name, $message = '晴れ') {
    return "{$name} の天気は {$message} です";
}
$message = showMessage('東京');
echo $message;
