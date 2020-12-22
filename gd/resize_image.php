<?php
$original_path = "images/sample.jpg";
$output_path = "output/new.jpg";

//元画像名サイズ取得
list($width, $height) = getimagesize($original_path);

//元画像から新しい画像準備
$baseImage = imagecreatefromjpeg($original_path);

//新しい画像キャンバス作成
$new_width = $width * 0.5;
$new_height = $height * 0.5;
$image = imagecreatetruecolor($new_width, $new_height);

//画像リサイズ
imagecopyresampled($image, $baseImage, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//画像ファイル保存
imagejpeg($image, $output_path);

//画像出力
//imagejpeg($image);