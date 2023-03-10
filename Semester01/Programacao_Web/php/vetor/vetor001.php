<?php
    session_start();
    if(isset($_SESSION["valores"])) {
        $valores = $_SESSION["valores"];
    } else {
        $valores = array();
    }
?>
<html>
    <form method="post">
        Numero: <input type="number" name="numero">
        <input type="submit" value="add" name="operacao">
        <input type="submit" value="del" name="operacao">
        <input type="submit" value="sort" name="operacao">
        <input type="submit" value="clear" name="operacao">
    </form>
    <ul>
        <?php
        if(isset($_POST["numero"])) {
            switch($_POST["operacao"]) {
                case "add":
                    $valores[] = $_POST["numero"];
                    break;
                case "del":
                    $indice = array_search($_POST["numero"],$valores);
                    if($indice != "") {
                        array_splice($valores,$indice,1);
                    }
                    break;
                case "sort":
                    sort($valores);
                    break;
                case "clear":
                    $valores = array();
                    unset($_SESSION["valores"]);
                    session_destroy();
                    break;
            }
        }
        if(count($valores) > 0) {
            for($i = 0; $i < count($valores); $i++) {
                echo("<li>".$valores[$i]."</li>");
            }
        }
        $_SESSION["valores"] = $valores;
        ?>
    </ul>
</html>