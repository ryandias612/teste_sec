<?php

include_once('vendor/sonata-project/google-authenticator/src/FixedBitNotation.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticatorInterface.php');
include_once('vendor/sonata-project/google-authenticator/src/GoogleAuthenticator.php'); 
include_once('vendor/sonata-project/google-authenticator/src/GoogleQrUrl.php');

$g = new \Google\Authenticator\GoogleAuthenticator();
// criar chave secret.

$secret = 'K9P3N7R5T1W8X2Y6Z4';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Google Auth</title>
</head>
<body>
    <h1>Autenticação</h1>
    <img src="<?php echo $g->getUrl('RyanDias', 'ryandias.com', $secret) ?>"/>
</body>
</html>
