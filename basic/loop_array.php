<?php
$years = range(2020, 2017);
$years = range(date('Y'), 2017);
$drinks = ['コーヒー', '紅茶', 'ほうじ茶'];
$user = [
    'name' => '東京　一郎',
    'gender' => 'male',
    'age' => 21,
];


//glob
foreach (glob("./*") as $file) {
    $all_files[] = $file;
}

foreach (glob("./*.php") as $file) {
    $php_files[] = $file;
}

//items
$items = [
    [
        'id' => 1,
        'name' => 'コーヒー',
        'price' => 120,
        'is_sale' => true,
    ],
    [
        'id' => 2,
        'name' => '紅茶',
        'price' => 150,
        'is_sale' => false,
    ],
    [
        'id' => 3,
        'name' => 'ほうじ茶',
        'price' => 130,
        'is_sale' => false,
    ],
    [
        'id' => 4,
        'name' => '炭酸水',
        'price' => 80,
        'is_sale' => true,
    ],
    [
        'id' => 5,
        'name' => 'オレンジジュース',
        'price' => 150,
        'is_sale' => false,
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>年(for)</h2>
        <?php
        for ($i = 0; $i < count($years); $i++) {
            echo "{$years[$i]}年";
            echo "<br>";
        }
        ?>

        <h2>年(foreach)</h2>
        <?php
        foreach ($years as $year) {
            echo "{$year}年";
            echo "<br>";
        }
        ?>

        <h2>ドリンクメニュー</h2>
        <ul>
            <?php foreach ($drinks as $drink) : ?>
                <li><?= $drink ?></li>
            <?php endforeach ?>
        </ul>

        <h2>ユーザデータ</h2>
        <dl>
            <?php foreach ($user as $key => $value) : ?>
                <dt><?= $key ?></dt>
                <dd><?= $value ?></dd>
            <?php endforeach ?>
        </dl>

        <h2>プルダウン</h2>
        <select name="year">
            <?php foreach ($years as $year) : ?>
                <option value="<?= $year ?>"><?= $year ?>年</option>
            <?php endforeach ?>
        </select>

        <h2>ファイルリスト</h2>
        <ul>
            <?php foreach ($all_files as $file) : ?>
                <li><?= $file ?></li>
            <?php endforeach ?>
        </ul>

        <h2>ファイルリスト(PHP)</h2>
        <ul>
            <?php foreach ($php_files as $file) : ?>
                <li><?= $file ?></li>
            <?php endforeach ?>
        </ul>

        <h2>商品一覧</h2>
        <div class="table-responsive">
            <table class="table table-hover">

                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['name'] ?></td>
                        <td class="text-end"><?= $item['price'] ?></td>
                        <td>
                            <?php if ($item['is_sale']) : ?>
                                <span class="badge bg-danger">セール中</span>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>