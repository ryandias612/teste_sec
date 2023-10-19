<?php

include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php'); 
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \Google\Authenticator\GoogleAuthenticator();
// criar chave secret.

$secret = 'K9P3N7R5T1W8X2Y6Z4';

//validar o token submetido
if(isset($_POST['token'])){
    $token = $_POST['token'];
    if($f->checkCode($secret, $token)){
        echo 'Autenticação liberada';
    }
    else{
        echo 'Token inválido ou expirado';
    }
    die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Google Auth</title>
</head>
<body>
    <h1>Informe o token</h1>
    <form method="post">
        <input type="text" name="token" />
        <button type="submit">Autenticar</button>
</form>
</body>
</html>
