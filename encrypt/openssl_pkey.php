<?php
function generateKey($value)
{
    $private_key = openssl_pkey_new([
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    ]);
    $csr = openssl_csr_new($value, $private_key, array('digest_alg' => 'sha256'));
    $public_key = openssl_csr_get_public_key($csr);
    $result = openssl_pkey_get_details($public_key);
    return $result;
}

$value = ["commonName" => "example.com"];
$result = generateKey($value);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>bits</h3>
    <p>
        <?= $result['bits'] ?>
    </p>
    <h3>key</h3>
    <p>
        <?= $result['key'] ?>
    </p>
    <h3>public key</h3>
    <p>
        <?= $result['key'] ?>
    </p>
    <h3>rsa</h3>
    <p>
        <?= $result['rsa']['n'] ?>
    </p>
</body>

</html>