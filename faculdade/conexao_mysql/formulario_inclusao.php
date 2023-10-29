<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inclusão</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Novo Aluno</h1>
    <form action="pagina_listagem.php" method="POST">
        <p>
            <label for="matricula">Matricula: </label>
            <input type="text" name="matricula" class="form-control" required>
        </p>

        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" class="form-control" required>
        </p>

        <p>
            <label for="entrada">Entrada: </label>
            <input type="number" name="entrada" class="form-control" required>
        </p>

        <p>
            <input type="submit" value="Adicionar" class="btn btn-primary">
        </p>
    </form>
</body>
</html>