<?php 
require('includes/conexao.php');
	SESSION_START();
	

	echo"Olá, seja Bem-Vindo:",$_SESSION['nome'];
	echo"<br><a href='acoes/logout.php'>Sair do Sistema</a>";

	
	
?>