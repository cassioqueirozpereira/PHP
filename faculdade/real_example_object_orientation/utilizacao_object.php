<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizando objetos</title>
</head>
<body>
    <h1>Utilizando objetos</h1>
    <ul>
        <?php 
            require_once "aluno_alunoDAO.php";

            $dao = new alunoDAO();
            $aluno = new Aluno("invadi", "hello", 2022);
            $dao -> inserir($aluno);
            foreach ($dao -> obterTodos() as $aluno)
                echo ("<li>$aluno->MATRICULA :: $aluno->NOME :: $aluno->ENTRADA</li>");
        ?>
    </ul>
</body>
</html>