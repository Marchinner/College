<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <h1>Pequeno teste de Login</h1>
    <h2><a href="protegida.php">protegida</a></h2>
    <hr/>
    <?php
        session_start();
        if (isset($_SESSION["usuario"])) {
    ?>
            <a href="logout.php">Logout</a>
    <?php
        }
    ?>
</body>
</html>