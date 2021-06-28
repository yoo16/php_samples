<?php
$from = $_FILES['upload_file']['tmp_name'];
$to = './uploads/' . $_FILES['upload_file']['name'];

if (is_uploaded_file($from)) {
    if (move_uploaded_file($from, $to)) {
        echo "{$to} をアップロードしました。";
    } else {
        echo "アップロードエラー";
    }
}
