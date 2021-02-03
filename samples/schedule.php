<?php
/*
演習課題「スケジューラー問題」
スケジュールに空きがあるかどうか調べ、重複が無ければ予定を埋める、スケジューラーを作成する問題です。

n マスの、ある月のカレンダーが与えられます。
カレンダーには 1 から 31 日までの日付が書かれています。
今回、曜日は特に考える必要はありません。

予定は m 個与えられます。各予定は a_i 日から始まり、1日以上の期間 b_i 日間が決められています。
（3日からはじまり、７日間の予定、と言うイメージです。）
それぞれの予定は優先度順に並んでいるので、順番にカレンダーのマスに埋めていきます。

予定は必ず与えられた期間分（ b_i 日間）確保しなくてはならず、優先度が高い予定と
重なってしまった場合はその予定を断る事にします。
また、カレンダーのマスを超えてしまうような予定も断る事にします。

全ての予定がカレンダーのマスに割り当て終わった時に、予定が埋まっているカレンダーの
マスの総数を出力するプログラムを作成して下さい。

■入力例
31 8　…31日の月、8つの予定
1 15　…第１優先の予定：1日からはじまり、15日間の予定
2 13　…第２優先の予定：2日からはじまり、13日間の予定
.
.
21 8　…第８優先の予定：21日からはじまり、8日間の予定
*/

//list($calendar_days_num, $schedule_num) = explode(" ", fgets(STDIN));
$calendar_days_num = 31;
$schedule_num = 8;
$calendar_days = array_pad([], $calendar_days_num, 0);

$count = 0;
$values = [[1, 31], [2, 13], [3, 4], [4, 2], [5, 5], [6, 5], [15, 5], [21, 10]];
for ($i = 0; $i < $schedule_num; $i++) {
    $schedule_day_first = $values[$i][0];
    $schedule_days_num = $values[$i][1];
    //list($schedule_day_first, $schedule_days_num) = explode(" ", fgets(STDIN));
    $schedule_days_num -= 1;
    $empty_flg = true;
    for ($j = $schedule_day_first; $j < $schedule_day_first + $schedule_days_num; $j++) {
        if ($j >= $calendar_days_num) {
            $empty_flg = false;
            break;
        }
    }
    if ($empty_flg == true) {
        for ($j = $schedule_day_first; $j < $schedule_day_first + $schedule_days_num; $j++) {
            $calendar_days[$j] = 1;
        }
    }
}
// print_r($calendar_days);
var_dump(count($calendar_days));
$count = count($calendar_days);
echo $count . "\n";
