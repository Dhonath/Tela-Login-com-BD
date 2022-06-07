<?php
require('../includes/conexao.php');



$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM logado WHERE
email = '$email'and
senha = '$senha'";

$totalRegistro = mysqli_query($conn, $sql);

if($totalRegistro->num_rows > 0){
    $result = mysqli_query($conn,$sql);
    while($registro = mysqli_fetch_assoc($result)){
    $emaillogado = $registro['email'];
    $senha = $registro['senha'];
    }
session_start();
$_SESSION['logador'] = true;
$_SESSION['email'] = $emaillogado;
$_SESSION['senha'] = $senha;
$_SESSION['nome'] = $nome;


echo"
<script>

    location.href='../telaprincipal.php'
</script>


";}else{

    echo"
    
    <script>
        alert('ops, os dados inseridos estão incorreto')
    location.href='../'
    
    
    
    </script>
    
    ";
}
?>