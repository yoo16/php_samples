<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: input.php');
    exit;
}
if (isset($_POST)) {
    $posts = check($_POST);
}
function check($data)
{
    $columns = ['name', 'email', 'password'];
    foreach ($columns as $column) {
        if (isset($data[$column])) {
            $data[$column] = htmlspecialchars($data[$column]);
        }
    }
    return $data;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="h1">会員登録フォーム</h1>
        <form action="" method="post">
            <div class="form-group">
                <label class="col-sm-2 col-form-label">氏名</label>
                <?= $posts['name'] ?>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label">メールアドレス</label>
                <?= $posts['email'] ?>
            </div>

            <div>
                <button class="btn btn-primary">登録</button>
                <a href="input.php" class="btn btn-outline-primary">戻る</a>
            </div>
        </form>
    </div>
</body>

</html>