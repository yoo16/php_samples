<?php
$key = '
0APS5Yh8jL9vIyWelYiypXKtYgFD267MbScQCggbXDEQE+5X/sC4AI/ss7pabqJh
z99iUWa8kIaOakQtvRBkF2f0MwGolwJe56N/y472hgeXo60uoiKIO3nmksg0DrXl
pUoHbREwOo8oc2fcH32QICIw6TqEGs4MiHjkKJh0YyVp3xjyXNBoJ8gJJKWw6Pl6
sm/y4kMWZey9bfIbqmkCVCGUCxtjdxMA3IjJeCiD4DxxNErvZAXNUnpQtQJ72FaH
SozwRKcUDYHgUo8Txilbvqfx+fhdpSMrnvAxDE0DGujiQoru6mLKvkxzKgx7mbUr
Bezh8WfKWEKm4+o3TFgKHkWjwsjDZq4810713vQMaByJdtfF4bc8OrUTVbEbaVsD
';

//暗号化文字列
$string = 'よろしくお願いします。';

//暗号化メソッド
$method = 'AES-128-CBC';

//暗号化 openssl
$encode_string = openssl_encrypt($string, $method, $key);

//復号化 openssl
$decode_string = openssl_decrypt($encode_string, $method, $key);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>複合可能な文字</h2>
    <h3>文字列</h3>
    <p>
        <?= $string ?>
    </p>
    <h3>暗号化</h3>
    <p>
        <?= $encode_string ?>
    </p>
    <h3>復号化</h3>
    <p>
        <?= $decode_string ?>
    </p>
</body>

</html>