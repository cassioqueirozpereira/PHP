<?php 
    require_once "read_select.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML - Listagem de Clientes</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- FIM BOOTSTRAP -->
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h3> de Clientes</h3>
                            </div><!--card-header-->
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">CPF</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Data de Nascimento</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            while ($row = $resultSet -> fetch(PDO::FETCH_ASSOC)):
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $row["id"]; ?></th>
                                            <td><?= $row["nome"]; ?></td>
                                            <td><?= preg_replace("/(\d{3}) (\d{3}) (\d{3}) (\d{2})/", "\$1.\$2.\$3-\$4", $row["cpf"]); ?></td>
                                            <td><?= $row["email"]; ?></td>
                                            <td><?= date("d/m/Y", strtotime($row["nascimento"])); ?></td>
                                        </tr>
                                        <?php 
                                            endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div><!--card-body-->
                        </div><!--card-->
                    </div><!--col-md-8-->
                </div><!--row-->
            </div><!--col-md-12-->
        </div><!--row-->
    </div><!--container-->

</body>
</html>