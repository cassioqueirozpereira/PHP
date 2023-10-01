<!DOCTYPE html>
<?php 
    session_start();
    if (isset($_SESSION["valores"]))
        $valores = $_SESSION["valores"];
    else
        $valores = array();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor em PHP</title>
</head>
<body>
    <form method="post">
        Número: <input type="number" name="num" id="num">
        <input type="submit" value="add" name="oper">
        <input type="submit" value="del" name="oper">
        <input type="submit" value="sort" name="oper">
        <input type="submit" value="clear" name="oper">
    </form>

    <ul>
        <?php 
            if (isset($_POST["num"])) {
                switch ($_POST["oper"]) {
                    case "add":
                        $valores[] = $_POST["num"];
                        break;
                    case "del":
                        $indice = array_search($_POST["NUM"], $valores);
                        if ($indice!="")
                            array_splice($valores, $indice, 1);
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
            if (count($valores) > 0)
                for ($i = 0; $i < count($valores); $i++)
                    echo("<li>".$valores[$i]."</li>");
            $_SESSION["valores"] = $valores;
        ?>
    </ul>
</body>
</html>