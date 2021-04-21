<?php
if (!empty($_POST)) {
    $posts = $_POST;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1 class="h1">会員登録フォーム</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name">
            <input type="text" name="kana">
            <input type="text" name="tel">
            <input type="text" name="mail">
            <select name="year" id="">
                <?php foreach (range(1900, date('Y')) as $year) : ?>
                    <option value="<?= $year ?>" name="year"><?= $year ?>年</option>
                <?php endforeach ?>
            </select>
            <label for="male">
                <input type="radio" name="gender" value="male">
                男
            </label>
            <label for="female">
                <input type="radio" name="gender" value="male">
                女
            </label>
            <button>送信</button>
        </form>
    </div>
</body>

</html>