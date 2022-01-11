<?php
     if (isset($_POST['submit'])) {
         # code...

         include_once('config.php');

         $nome = $_POST['nome'];
         $email = $_POST['email'];
         $senha = $_POST['senha'];
         $telefone = $_POST['telefone'];
         $sexo = $_POST['genero'];
         $data_nasc = $_POST['data_nascimento'];
         $cargo = $_POST['cargo'];
         $cpf = $_POST['cpf'];
         $pis = $_POST['pis'];
		 $equipe = $_POST['equipe'];
         
         $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
         VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cargo','$cpf','$pis', '$equipe')");
 
         header('Location: login.php');
     }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <!-- estilização -->
    <link rel="stylesheet" href="css/formulario.css">
</head>

<body>
    <a href="home.php">Home</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Colaboradores</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="Cargo" id="Cargo" class="inputUser" required>
                    <label for="Cargo" class="labelInput">Cargo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="pis" id="pis" class="inputUser" required>
                    <label for="pis" class="labelInput">PIS</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>