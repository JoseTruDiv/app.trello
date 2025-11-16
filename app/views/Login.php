<?php 

require_once __DIR__.'/../widgets/forms/FormLogin.php';
require_once __DIR__.'/../widgets/alerts/UsuarioRegAlert.php'; 
require_once __DIR__.'/../widgets/alerts/UsuarioNoLogin.php'; 

?>

<?php
    session_start();
    if (isset($_SESSION['reg'])) {
        if ($_SESSION['reg']) {
            UsuarioRegAlert();
            $_SESSION['reg']=false;
        }
    }
    if (isset($_SESSION['result'])) {
        if ($_SESSION['result']==0) {
            UsuarioNoLogin();
            $_SESSION['result']=null;
        }
    }
    if (isset($_SESSION['recordarme'])) {
        if ($_SESSION['recordarme']) {
            header('Location:/home');
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body-login">
    <header></header>
    <main>
        <?= FormLogin(); ?>
    </main>
    <footer></footer>
</body>
</html>