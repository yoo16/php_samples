<?php

//配列の定義と確認
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];

//長さ
$length = count($drinks);

//update
$drinks[1] = 'ウーロン茶';

//配列の追加
$drinks[] = '炭酸水';

//データの検索
$word = 'ほうじ茶';
$search_index = array_search($word, $drinks);

// null
$drinks[1] = null;

//unset
unset($drinks[1]);

//array_merge
$cities1 = ['東京', '神奈川', '千葉'];
$cities2 = ['大阪', '京都', '兵庫'];
$cities = array_merge($cities1, $cities2);

//練習1
$week_of_days = ['日', '月', '火', '水', '木', '金', '土',];
$week_index = date('w');

$kana = ['あ', 'い', 'う', 'え', 'お'];
rsort($kana);

$index = array_rand($items);
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
    <h2>配列の中身</h2>
    <p>
        <?php var_dump($drinks); ?>
    </p>

    <h2>2番目のデータ</h2>
    <p><?= $drinks[1] ?></p>

    <h2>データの個数</h2>
    <p><?= $length ?>個</p>

    <h2><?= $word ?>の検索</h2>
    <p><?= $search_index ?></p>

    <h2>配列チェック</h2>
    <?php if (is_array($drinks)) : ?>
        <p>配列です</p>
    <?php endif ?>

    <h2>配列データチェック</h2>
    <?php
    $word = 'コーヒー';
    ?>
    <h2>配列データチェック</h2>
    <?php if (is_array($drinks)) : ?>
        <p><?= $word ?>が見つかりました。</p>
    <?php endif ?>

    <h2>都市</h2>
    <p><?php var_dump($cities) ?></p>

    <h2>rsort()</h2>
    <p><?php var_dump($kana) ?></p>

    <h2>今日の曜日</h2>
    <p><?= $week_of_days[$week_index] ?>曜日</p>

    <?php
    //最後を削除
    array_pop($drinks);

    //先頭を削除
    array_shift($drinks);

    //先頭に削除
    array_unshift($drinks, 'コーヒー');

    //2番目に追加
    array_splice($drinks, 1, 0, "オレンジジュース");

    //2番目を削除
    array_splice($drinks, 1, 1);
    ?>

</body>

</html>