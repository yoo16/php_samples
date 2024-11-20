<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Blog JSON</title>
    <link rel="stylesheet" href="../css/ckeditor.css">
</head>

<body>
    <h1>Blog</h1>
    <form action="add.php" method="post">
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" placeholder="タイトル">
        </div>
        <div>
            <label for="content">本文</label>
            <textarea id="editor" name="content"></textarea>
        </div>
        <button type="submit">送信</button>
    </form>

    <!-- CKEditorのCDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script src="../js/app.js" defer></script>
</body>

</html>