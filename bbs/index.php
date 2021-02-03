<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ひと言掲示板</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>ひと言掲示板</h1>
        <!-- ここにメッセージの入力フォームを設置 -->
        <form action="" method="post">
            <div class="mt-3">
                <label for="user_name">表示名</label>
                <input id="user_name" class="form-control" type="text" name="user_name" value="">
            </div>
            <div class="mt-3">
                <label for="message">メッセージ</label>
                <textarea id="message" class="form-control" name="message"></textarea>
            </div>
            <div class="m-3 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary" value="書き込む">
            </div>
        </form>
        <section>
            <!-- ここに投稿されたメッセージを表示 -->
        </section>
    </div>
</body>

</html>