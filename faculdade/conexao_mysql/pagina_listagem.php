<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Listagem</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Alunos</h1>
    <p>
        <a href="formulario_inclusao.php" class="btn btn-primary">Novo Aluno</a>
    </p>
    <?php 
        require_once 'inclusao_no_banco.php';
        require_once 'consulta_no_banco.php';

        if (isset($_POST["matricula"])) {
            $mensagem = incluir($_POST["matricula"], $_POST["nome"], $_POST["entrada"]);
            echo ("<hr/>" . $mensagem . "<hr/>");
        }
        $alunos = obterAlunos();
    ?>
    <table class="table">
        <tr class="table-dark">
            <td>Matricula</td>
            <td>Nome</td>
            <td>Entrada</td>
        </tr>

        <?php 
            foreach($alunos as $obj) {
                echo "<tr><td>$obj->MATRICULA</td>";
                echo "<td>$obj->NOME</td>";
                echo "<td>$obj->ENTRADA</td></tr>";
            }
        ?>
    </table>
</body>
</html>