<?php 
 session_start();
 include_once 'includes/header.inc.php';
 include_once 'includes/menu.inc.php';
?>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Pesquisa de Colaboradores</h5><hr>
        <p class="light">
        Você pesquisou por 
            <?php 
                include_once 'BD/conexao.php';
                $busca = $_GET['pesquisa'];
                echo '<b>'.$busca.'</b>';
            ?>
        </p>
            <table class="striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Cliente</th>
                        <th>E-mail</th>
                        <th>Cpf</th>
                        <th>Pis</th>
                        <th>Cargo</th>
                        <th>Data cadastro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once 'BD/conexao.php';
                        $busca = $_GET['pesquisa'];

                        $querySelect = $link->query("
                            SELECT * FROM clientes WHERE nome LIKE '%$busca%' ".
                            "OR fornecedor LIKE  '%$busca%'
                        ");
                        while($registros = $querySelect->fetch_assoc()):
                        $id           = $registros['id'];
                        $nome         = $registros['nome'];
                        $email        = $registros['email'];
                        $cpf     = $registros['cpf'];
                        $pis   = $registros['pis'];
                        $cargo   = $registros['cargo'];
                        $created      = $registros['created_at'];

                        echo "
                        <tr>
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$email</td>
                        <td>$cpf</td>
                        <td>$pis</td>
                        <td>$cargo</td>
                        <td>$created</td>
                        </tr>
                        ";
                    endwhile;

                    ?>
                </tbody>
            </table>
    </div>
</div>

<?php include_once 'includes/footer.inc.php' ?>
