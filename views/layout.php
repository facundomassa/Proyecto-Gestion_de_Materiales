<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../build/css/app.css">
    <title>Sistema Stock</title>
</head>
<body>
    <header class="header">
        <img class="header-logo" src="/build/img/LogoBBT.jpg" alt="logoBBT" class="logo">
        <a href="/">
            <h1 class="titulo">Sistema de Stock</h1>
        </a>
        <img src="/build/img/MenuSVG.png" alt="" class="icono-menu">
    </header>
    <div class="general">
        <?php echo $contenido; ?>
        <nav class="navegacion">
            <a href="/">Stock</a>
            <a href="/ingresos/total">Ingreso</a>
            <a href="retiro">Retiro</a>
            <a href="remitos">Remitos</a>
        </nav>
    </div>
    
    <script src="/build/js/bundle.min.js"></script>
</body>
</html>