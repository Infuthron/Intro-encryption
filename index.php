<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Oi oi</h1>
<?php

//Opgave 1

$hello = "hello";

function encode_ascii() {
    global $hello;

    $hello_arr = str_split($hello);
    $ascii_array = array();

    for($i = 0 ; $i < sizeof($hello_arr) ; $i++) {
        $ascii_array[$i] = ord($hello_arr[$i]);
        $ascii_array[$i]++;
        $ascii_array[$i] = chr($ascii_array[$i]);

    }

    echo implode("", $ascii_array);

}

echo 'Opgave 1 <br><br>';

encode_ascii();

echo '<br><br> ------------------------------------------------------------- <br>';
echo 'Opgave 2<br>';
echo 'Cryptografishe coderingen ondersteunt door OpenSSL: AES, Blowfish, Camellia, SEED, CAST-128, DES, IDEA, RC2, RC4, RC5, Triple DES, GOST 28147-89';

echo '<br><br> ------------------------------------------------------------- <br>';
echo 'Opgave 3<br>';
echo 'ENCRYPTION: openssl_encrypt, openssl_pkcs7_encrypt, openssl_private_encrypt, openssl_public_encrypt<br>';
echo 'DECRYPTION: openssl_decrypt, openssl_pkcs7_decrypt, openssl_private_decrypt, openssl_public_decrypt<br>';

echo '<br><br> ------------------------------------------------------------- <br>';
echo 'Opgave 4<br>';
echo 'Er was geen filmpje :(<br>';

echo '<br><br> ------------------------------------------------------------- <br>';

?>

</body>
</html>