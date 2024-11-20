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
    <?php if ($topics) : ?>
    <?php foreach ($topics as $topic) : ?>
        <div>
            <h2><?= $topic['title'] ?></h2>
            <p><?= $topic['content'] ?></p>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>