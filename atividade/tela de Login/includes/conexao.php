<?php 

$conn = mysqli_connect('localhost', 'root', '');

if($conn){
    mysqli_select_db( $conn,'logar');
}else{
    die('ERRO AO CONECTAR AO BD');
}

?>