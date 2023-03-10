<?php
    session_start();
    if(!isset($_SESSION["usuario"]))
        header("Location: form_login.php", true, 301);
    else {
        ?>
        <html>
            <body>
                <h1>Olá <?php echo($_SESSION["usuario"]) ?></h1>
                <h2><a href="index.php">retornar</a></h2>
            </body>
        </html>
        <?php
    }
?>