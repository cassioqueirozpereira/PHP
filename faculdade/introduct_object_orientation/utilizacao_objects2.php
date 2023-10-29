<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outro exemplo de utilização a objetos</title>
</head>
<body>
    <h1>Outro exemplo de utilização a objetos</h1>
    <?php 
        require_once "classe_pessoa.php";
        require_once "heranca_profissional.php";

        $pessoas = [
            new Pessoa("Ana", 25),
            new Profissional("Carlos", 42, "Motorista"),
            new Pessoa("Eduardo", 33)
        ];

        foreach ($pessoas as $p)
            $p->exibirDados();
    ?>
</body>
</html>