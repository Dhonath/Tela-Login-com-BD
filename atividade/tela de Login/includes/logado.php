<?php
	require('conexao.php');
if(!isset($_SESSION['logado'])){
	echo"
	
		<script>
		
			alert('Ops! faça o login para continuar');
			location.href='../index.html'
		
		
		</script>
	
	";
}


?>