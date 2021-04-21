<?php
define('NGWORD_FILE', 'ngword.txt');

$word = '';
$ng_words = [];
if (isset($_POST['word'])) {
    $word = $_POST['word'];
    $ng_words = searchNGWord($_POST['word']);
}

function searchNGWord($word)
{
    $results = [];
    $ng_words = loadNGWords();
    foreach ($ng_words as $ng_word) {
        $ng_word = trim($ng_word, "\n\r\t\v");
        if (is_numeric(mb_strpos($word, $ng_word))) {
            $results[] = $ng_word;
        }
    }
    return $results;
}

function loadNGWords()
{
    $handle = fopen(NGWORD_FILE, 'r');
    while (($data = fgets($handle, 1000)) !== FALSE) {
        $words[] = $data;
    }
    return $words;
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
    <? if ($ng_words): ?>
    <h2>結果</h2>
    <p>
        <?= $word ?>
    </p>
    <ul>
        <? foreach ($ng_words as $ng_word): ?>
        <li><?= $ng_word ?></li>
        <? endforeach ?>
    </ul>
    <? endif ?>

    <form action="" method="post">
        <input type="text" name="word" value="">
        <button>送信</button>
    </form>
</body>

</html>