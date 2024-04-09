<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#">
    <input type="submit" value="Generar llaves" name="b1">
</form>
</body>
</html>

<?php
if(isset($_REQUEST["b1"])){
    $parametros = array(
        "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
        "private_key_bits" => 2048,
        "default_md" => "sha256",  // Cambiado de 'defaul_md' a 'default_md'
    );
    $generar = openssl_pkey_new($parametros);
    openssl_pkey_export($generar, $keypriv, NULL, $parametros);
    $keypub = openssl_pkey_get_details($generar);

    file_put_contents('private.key', $keypriv);
    file_put_contents('public.key', $keypub['key']);
}
?>
