<?php
$prefecture = '';
$city = '';
$town = '';
$zip_code = '';

if (isset($_GET['zip_code'])) {
    $zip_code = $_GET['zip_code'];
    $url = "http://zipcloud.ibsnet.co.jp/api/search?zipcode={$zip_code}";
    // 郵便番号検索（JSON取得）
    $json = file_get_contents($url);

    //文字化け防止
    $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN,SJIS');
    $data = json_decode($json, true);

    //結果データ取得
    if (is_array($data['results'])) {
        $prefecture = $data['results'][0]['address1'];
        $city = $data['results'][0]['address2'];
        $town = $data['results'][0]['address3'];
        $zip_code = $data['results'][0]['zipcode'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="search_address.php" method="get">
            <h3 class="h3">郵便番号</h3>
            <div class="form-inline">
                <input class="form-control col-2" type="text" name="zip_code" value="<?= $zip_code ?>">
                <button class="btn btn-primary">検索</button>
            </div>
            <h3 class="h3">都道府県</h3>
            <p><?= $prefecture ?></p>
            <h3>市区町村</h3>
            <p><?= $city ?></p>
            <h3>町名</h3>
            <p><?= $town ?></p>
        </form>
    </div>
</body>

</html>