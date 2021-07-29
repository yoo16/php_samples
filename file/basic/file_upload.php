<?php
define('UPLOAD_DIR', 'uploads/');

if (isset($_FILES['file'])) {
    uploadFile();
}

$files = loadFiles();

function uploadFile()
{
    mkdir(UPLOAD_DIR);

    $from = $_FILES['file']['tmp_name'];
    $to = UPLOAD_DIR . $_FILES['file']['name'];
    if (is_uploaded_file($from)) {
        move_uploaded_file($from, $to);
    }
}

function loadFiles()
{
    $files = [];
    if (UPLOAD_DIR) {
        $path = UPLOAD_DIR . '*';
        foreach (glob($path) as $file) {
            $files[] = $file;
        }
    }
    return $files;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <p>
            <input type="file" name="file">
        </p>
        <p>
            <input type="submit" value="アップロード">
        </p>
    </form>
    <ul>
        <?php if ($files) : ?>
            <?php foreach ($files as $file) : ?>
                <li><?= $file ?></li>
            <?php endforeach ?>
        <?php endif ?>
    </ul>
</body>

</html>