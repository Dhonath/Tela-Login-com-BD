<?php
require('includes/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios Cadastrados</title>
</head>
<body>
    <table border="1">
        <tr>ID</tr>
        <tr>Nome</tr>
        <tr>Email</tr>
        <tr>Senha</tr>
        <?php
            $sql = "SELECT * FROM logar";
            $result = mysqli_query($conn, $sql);
            While($registro = mysqli_fetch_assoc($result)){
                $id = $registro['id'];
                $nome = $registro['nome'];
                $email = $registro['email'];
                $senha = $registro['senha'];
                echo "
                    <tr>
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$email</td>
                        <td>$senha</td> 
                        <td></td>
                    </tr>
                ";
            }
        ?>


</table>
</body>
</html>