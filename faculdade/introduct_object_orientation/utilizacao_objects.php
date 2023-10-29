<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilização dos Objetos</title>
</head>
<body>
    <h1>Utilização dos Objetos</h1>
    <?php 
        require_once "classe_pessoa.php";
        require_once "heranca_profissional.php";
        require_once "implementacao.php";

        $p1 = new Pessoa("Ana", 25);
        $p1->exibirDados();
        $p2 = new Profissional("Carlos", 42, "Motorista");
        $p2->exibirDados();

        $a = new Cachorro();
        $a->emitirSom();
    ?>
</body>
</html>