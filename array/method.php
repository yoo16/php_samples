<?php
// 1〜$max までを足して結果を返す関数
function sum($max)
{
    $result = 0;

    // $i は1から始まり、$max より大きくなるまでループする
    for ($i = 1; $i <= $max; $i++) {
        $result += $i;
    }

    return $result;
}

// 関数を実行
echo sum(100);
echo PHP_EOL;


echo '--- strip_tags() ---';
echo PHP_EOL;
$html = 'テスト<br><p>テスト</p><strong>テスト</strong>';
$html = strip_tags($html);
echo $html;
echo PHP_EOL;


echo '--- array_push() ---';
echo PHP_EOL;
$fruites = ['apple', 'orange'];

array_push($fruites, 'peach', 'grape');
print_r($fruites);
echo PHP_EOL;

echo '--- array_merge() ---';
echo PHP_EOL;

$fruites1 = ['apple', 'orange'];
$fruites2 = ['peach', 'grape'];

$fruites = array_merge($fruites1, $fruites2);
print_r($fruites);
echo PHP_EOL;

echo '--- time() ---';
echo PHP_EOL;
echo time();
echo PHP_EOL;

echo '--- mktime() ---';
echo PHP_EOL;
echo mktime(10, 25, 0);
echo PHP_EOL;

echo '--- date() ---';
echo PHP_EOL;
echo date('Y-m-d H:i:s');
echo PHP_EOL;

echo date('Y-m-d H:i:s', strtotime('-1 days'));
echo PHP_EOL;

echo '--- DateTimeクラス ---';
echo PHP_EOL;
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');