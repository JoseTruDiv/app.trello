<?php
    session_start();
    require_once __DIR__.'/../widgets/sections/Home/NavHome.php';
    require_once __DIR__.'/../widgets/sections/Home/SideNavHome.php';
?>

<?php
    if (!isset($_SESSION['result'])) {
        header('Location:/');
    }
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
    <main class="d-flex pt-1">
        <div style="width: 20%;padding: 2rem 3rem;">
            <?= SideNavHome(); ?>
        </div>
        <div style="width: 80%;">

        </div>
    </main>
    <footer>

    </footer>
</body>
</html>