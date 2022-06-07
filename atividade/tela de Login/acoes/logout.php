<?php
require('../includes/conexao.php');
SESSION_START();

SESSION_UNSET();

SESSION_DESTROY();


echo"
		<script>
		
		location.href='../index.php';
		
		</script>


"

?>