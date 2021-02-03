<?php


for ($i = 0; $i <= 4; $i++) {
    //処理
    for ($j = 0; $j <= 3; $j++) {
        //処理
    }
}

$array[0]['名前']

while ($a > 0) {
    $a = $a - 2;
}
echo $a;
$listColName = array('項目', '列A', '列B', '列C');
$listRow1 = array('列1', '1', '山田', '太郎');
$listRow2 = array('列2', '2', '佐藤', '花子');
$table = [];

// 1行目を設定
for ($i = 0; $i < count($listColName); $i++) {
    $table[0][$i] = $listColName[$i];
}

// 2行目を設定
for ($j = 0; $j < count($listRow1); $j++) {
    $table[1][$j] = $listRow1[$j];
}

// 3行目を設定
for ($k = 0; $k < count($listRow2); $k++) {
    $table[2][$k] = $listRow2[$k];
}

var_dump($table);

echo "<table>\n";
foreach ($table as $row) {
    echo "<tr>\n";
    foreach ($row as $col) {
        echo "<td>$col</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>";
