<?php
    session_start();
    require_once __DIR__.'/../widgets/sections/NavHome.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="body-home">
    <header>
        <nav class="nav-home">
            <?= NavHome(); ?>
        </nav>
    </header>
    <main>

    </main>
    <footer>

    </footer>
    <h1>Bienvenido <?php echo $_SESSION['result']; ?></h1>
</body>
</html>