<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos Alunos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Alunos</h1>
    <p>
        <a href="formulario_inclusao.php" class="btn btn-primary">Novo Aluno</a>
    </p>
    <?php 
        require_once 'aluno_alunoDAO.php';

        $dao = new alunoDAO();

        if (isset($_POST["matricula"])) {
            $aluno = new Aluno($_POST["matricula"], $_POST["nome"], $_POST["entrada"]);
            try {
                $dao -> inserir($aluno);
                echo ("<hr>Aluno incluido<hr/>");
            }
            catch (PDOException $e) {
                echo("<hr>Erro: " . $e -> getMessage() . "</hr>");
            }
        }
    ?>
    <table class="table">
        <tr class="table-dark">
            <td>Matricula</td>
            <td>Nome</td>
            <td>Entrada</td>
        </tr>

        <?php 
            foreach($dao -> obterTodos() as $obj) {
                echo "<tr><td>$obj->MATRICULA</td>";
                echo "<td>$obj->NOME</td>";
                echo "<td>$obj->ENTRADA</td></tr>";
            }
        ?>
    </table>
</body>
</html>