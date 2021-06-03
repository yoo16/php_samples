<?php

/**
 * 1 から 10 までの数字を順に表示
 */
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
echo PHP_EOL;

for ($i = 0; $i <= 10; $i += 2) {
    echo $i;
}
echo PHP_EOL;

//10 x 10 の座標
echo '10 x 10 の座標' . PHP_EOL;
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= 10; $y++) {
        echo "({$x}, {$y}) ";
    }
    echo PHP_EOL;
}

//1 から 6 の数字
$number = rand(1, 6);
echo $number . PHP_EOL;

//四捨五入
$number = 15.5;
$number = round($number);
echo $number . PHP_EOL;

$number = 15.5;
$number = round($number, 1);
echo $number . PHP_EOL;

$number = 15.52;
$number = round($number, 1);
echo $number . PHP_EOL;

//サイコロを 1000回振って 5が出る確率
$number = 5;
$max = 1000;
$count = 0;
for ($i = 1; $i <= $max; $i++) {
    $random_number = rand(1, 6);
    if ($number == $random_number) {
        $count++;
    }
}
$probability = ($count / $max) * 100;
$probability = round($probability, 1);
echo "{$number} が出る確率は {$probability}% です。" . PHP_EOL;

//while
//0 から 9 まで繰り返す
echo 'while(): 前判定' . PHP_EOL;
$i = 0;
while ($i <= 10) {
    echo $i;
    $i++;
}
echo PHP_EOL;

// do while
echo 'do while(): 後判定' . PHP_EOL;
$i = 0;
do {
    echo $i;
    $i++;
} while ($i <= 10);
echo PHP_EOL;

//問題1
// 9 x 9 の式と答え
for ($row = 1; $row <= 9; $row++) {
    for ($col = 1; $col <= 9; $col++) {
        $answer = $row * $col;
        //echo "{$row} x {$col} = {$answer}" . PHP_EOL;
        echo $answer, " ";
    }
    echo PHP_EOL;
}

//1 から1000 の正の整数のうち 17の倍数をすべて表示し、個数も調べてみましょう。
$i = 1;
$number = 17;
$max = 100;
$count = 0;
while ($i <= $max) {
    if (($i % $number) == 0) {
        echo $i, " ";
        $count++;
    }
    $i++;
}
echo PHP_EOL;
echo "{$number}の倍数は{$count}個です。" . PHP_EOL;

//問題2
//白黒交互
for ($row = 1; $row <= 5; $row++) {
    echo "|";
    for ($col = 1; $col <= 5; $col++) {
        $number = rand(0, 1);
        // $mark = ($number == 1) ? "○" : "●";
        if ($number == 1) {
            $mark = "○";
        } else {
            $mark = "●";
        }
        $mark .= "|";
        echo $mark;
    }
    echo PHP_EOL;
}

//100万円 を年利 1% で貯金すると 200万円を超えるには何年かかるでしょう？
$interest_rate = 0.01;
$money = 1000000;
$target = 2000000;
$year = 0;
while ($money < $target) {
    $money *= (1 + $interest_rate);
    $year++;
}
echo "{$year}年後に{$money}円になります" . PHP_EOL;

//平面座標移動
$x = 5;
$y = 5;
$turn = 'left';
$max_round_count = 3;
$round_count = 0;
$index = 0;

while ($round_count <= $max_round_count) {
    //方向決定
    if ($x == 5 && $y == 5) {
        $turn = 'left';
    } else if ($x == -5 && $y == 5) {
        $turn = 'down';
    } else if ($x == -5 && $y == -5) {
        $turn = 'right';
    } else if ($x == 5 && $y == -5) {
        $turn = 'up';
    }
    echo "({$x},{$y})" . PHP_EOL;
    // echo $turn . PHP_EOL;
    //周回処理・終了処理
    if ($x == 5 && $y == 5) {
        $round_count++;
        if ($round_count > 3) break;
    }

    //移動処理
    if ($turn == 'left') {
        $x--;
    } else if ($turn == 'down') {
        $y--;
    } else if ($turn == 'right') {
        $x++;
    } else if ($turn == 'up') {
        $y++;
    }
    //バグ対応 break
    $index++;
    if ($index > 10000) break;
}
