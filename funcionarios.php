<?php 
include 'conecta.php';

$consulta = "select * from funcionario where demissao is null";

$lista = $pdo->query($consulta);

$linha = $lista->fetch();
$num_linhas = $lista->rowCount();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários <?php echo '('.$num_linhas.')' ?></title>
</head>
<body>
    <section class="formulario">
        <form action="#" method="post">
            <div hidden>
                <label for="cod-func">
                    Código
                    <input type="text" name="cod-func">
                </label>
            </div>
        </form>
    </section>
    <table class:"table table-gray table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cargo</th>
            <th>Escala</th>
            <th>Turno</th>
            <th>Admissão</th>
            <th>Salário</th>
            <th>VR</th>
            <th>VA</th>
            <th>VT</th>
        </thead>
        <tbody>
            <?php do { ?>
                <tr>
                    <td><?php echo $linha['cod_func']?></td>
                    <td><?php echo $linha['nome']?></td>
                    <td><?php echo $linha['cpf']?></td>
                    <td><?php echo $linha['cargo']?></td>
                    <td><?php echo $linha['escala']?></td>
                    <td><?php echo $linha['turno']?></td>
                    <td><?php echo $linha['admissao']?></td>
                    <td><?php echo $linha['salario']?></td>
                    <td><?php echo $linha['vr']?></td>
                    <td><?php echo $linha['va']?></td>
                    <td><?php echo $linha['vt']?></td>
                </tr>
            <?php } while ($linha = $lista->fetch());?>
        </tbody>
    </table>
</body>
</html>
