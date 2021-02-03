<?php
//じゃんけんの配列
$hands = [1 => 'グー', 2 => 'チョキ', 3 => 'パー',];

//勝敗の配列
$results = [1 => 'Win', 2 => 'Lose', 3 => 'Draw',];

//勝敗結果（1, 2, 3) の初期化
$result = 0;

//じゃんけんの手のデータ（POST）があれば実行
if (!empty($_POST['player_hand'])) {
    //配列をランダムに取得
    $pc_hand = array_rand($hands);

    //じゃんけんの手を取得して int にキャスト
    $player_hand = (int) $_POST['player_hand'];

    //じゃんけんの実行
    $result = janken($player_hand, $pc_hand);
}

/**
 * じゃんけん勝敗判別
 *
 * @param int $player_hand
 * @param int $pc_hand
 * @return void
 */
function janken($player_hand, $pc_hand)
{
    if ($player_hand == $pc_hand) {
        return 3;
        //Player グーの場合
    } else if ($player_hand == 1) {
        return ($pc_hand == 2) ? 1 : 2;
        //Player チョキの場合
    } else if ($player_hand == 2) {
        return ($pc_hand == 3) ? 1 : 2;
        //Player パーの場合
    } else if ($player_hand == 3) {
        return ($pc_hand == 1) ? 1 : 2;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="h1 p-4 bg-info text-white">じゃんけんプログラム</h1>
        <? if ($result): ?>
        <!-- じゃんけん結果画面 -->
        <h2 class="h2 text-danger"><?= $results[$result] ?></h2>

        <div class="row">
            <div class="col-4">
                <h4 class="h4">あなた</h4>
                <p class="p-3 bg-light text-dark">
                    <?= $hands[$player_hand] ?>
                </p>
            </div>
            <div class="col-4">
                <h4 class="h4">コンピュータ</h4>
                <p class="p-3 bg-light text-dark">
                    <?= $hands[$pc_hand] ?>
                </p>
            </div>
        </div>

        <p><a href="" class="btn btn-outline-primary">もう一度対戦する</a></p>
        <? else: ?>
        <!-- じゃんけん対戦画面 -->
        <p class="alert alert-info">じゃんけん！</p>
        <form action="" method="post">
            <?php foreach ($hands as $key => $hand) : ?>
                <label for="hand_<?= $key ?>">
                    <input id="hand_<?= $key ?>" name="player_hand" type="radio" value="<?= $key ?>" <?php if ($key == 1) : ?>checked<?php endif ?>> <?= $hand ?>
                </label>
            <?php endforeach ?>
            <p>
                <button class="btn btn-info">ほい！</button>
            </p>
        </form>
        <? endif ?>
    </div>
</body>

</html>