<?php
require_once 'models/Topic.php';

$topics = new Topic();
$topics = $topics->get();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Blog JSON</title>
</head>

<body>
    <h1>Blog</h1>
    <a href="input.php">新規投稿</a>
    <?php foreach ($topics as $topic) : ?>
        <h2><?= $topic['title'] ?></h2>
        <p><?= $topic['content'] ?></p>
    <?php endforeach; ?>
</body>

</html>