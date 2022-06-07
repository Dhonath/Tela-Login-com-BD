<?php   
require('includes/conexao.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="corpo" action="#">

        <h2 class="loginname">Login</h2>
        <form action="acoes/logar.php" method="POST">

            <h5 class="topname">FAÇA SEU LOGIN</h5>    
            <input type="text" name="email" class="email" id="email" placeholder="Email" required maxlength="50" minlength="20"></input>
            <input type="password" name="senha" class="senha" id="senha" placeholder="Senha" required maxlength="999" minlength="1">
            </div>
            <div>
            
            <button class="button" type="Submit" value="enviar">ENTRAR</button>
            
            </div>
            <div>
            <input type="checkbox" class="box"><h4 class="check">deseja que guardamos sua senha para caso esqueça?</h4>
            </div>
            <div>
            
            <a class="esqueceu" href="#">esqueceu a senha?</a>
            <a class="cadastrar" href="#">Cadastrar-se</a>
            </div>
        </form>
    </div>
    
</body>
</html>