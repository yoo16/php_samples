<?php

function resizeImage($path, $extension)
{
    list($width, $height) = getimagesize($path);
    if ($extension == 'png') {
        $baseImage = imagecreatefrompng($path);
    } else if ($extension == 'jpg') {
        $baseImage = imagecreatefromjpeg($path);
    } else {
        return;
    }
    $new_width = 300;
    $rate = $new_width / $width;
    $new_height = $height * $rate;

    $image = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($image, $baseImage, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    if ($extension == 'png') {
        imagepng($image, $path);
    } else if ($extension == 'jpg') {
        imagejpeg($image, $path);
    }
}

$image_dir = 'images';
$extensions = ['png', 'jpg'];
if ($file = $_FILES['file']) {
    $file_name = basename($file["name"]);
    $original_path = $file["tmp_name"];
    $output_path = "{$image_dir}/{$file_name}";
    $info = pathinfo($output_path);
    $extension = $info['extension'];
    if (in_array($extension, $extensions)) {
        //アップロード
        move_uploaded_file($original_path, $output_path);

        //画像リサイズ
        resizeImage($output_path, $extension);
    }
}

$path = "{$image_dir}/*";
foreach (glob($path) as $file) {
    if (is_file($file)) $images[] = $file;
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
    <form action="" method="post" enctype="multipart/form-data" accept="images/*">
        <input type="file" name="file">
        <button>Upload</button>
    </form>
    <?php if ($images) : ?>
        <?php foreach ($images as $image) : ?>
            <p>
                <img src="<?= $image ?>" alt="">
            </p>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>