<!-- NESSE EXEMPLO FIZEMOS COM JAVA SCRIPT, SEM O HTML5. LEMBRANDO QUE PODEMOS MESCLAR HTML5 COM JAVASCRIPT -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos Alunos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- FIM BOOTSTRAP -->
</head>
<body class="container">
    <h1>Novo Aluno</h1>
    <script>
        function preenchido(object, campo) {
            if (object.value.trim() === "") {
                alert(`O campo ${campo} é obrigatório`);
                object.focus();
                return false;
            }
            return true;
        }
        function validar() {
            let objMatricula = document.getElementById("matricula");
            let objNome = document.getElementById("nome");
            let objEntrada = document.getElementById("entrada");
            let objConfirma = document.getElementById("confirma");

            // Técnica de curto-circuito...
            if (!preenchido(objMatricula, "matricula") || !preenchido(objNome, "nome") || !preenchido(objEntrada, "entrada"))
                return false;

            if (objMatricula.value.length != 8) {
                alert("O campo matrícula deve ter 8 caracteres");
                objMatricula.focus();
                return false;
            }

            let d = new Date();
            let entrada = eval(objEntrada.value);

            if ((entrada < 2000) || (entrada > d.getFullYear())) {
                alert(`Entrada de 2000 a ${d.getFullYear()}`);
                objEntrada.focus();
                return false;
            }

            if (!objConfirma.checked) {
                alert("Você precisa marcar a confirmação");
                return false;
            }
            return true;
        }
    </script>
    <form action="listagem_alunos.php" method="post" onsubmit="return validar()">
        <p>
            <label for="matricula">Matrícula: </label>
            <input type="text" name="matricula" id="matricula" class="form-control">
        </p>

        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" class="form-control">
        </p>

        <p>
            <label for="entrada">Entrada: </label>
            <input type="number" name="entrada" id="entrada" class="form-control">
        </p>

        <p>
            <input type="checkbox" name="confirma" id="confirma" class="form-check-input">
            <label class="form-check-label">Confirmo a veracidade das informações </label>
        </p>
        <p>
            <input type="submit" value="Adicionar" class="btn btn-primary">
        </p>
    </form>
</body>
</html>