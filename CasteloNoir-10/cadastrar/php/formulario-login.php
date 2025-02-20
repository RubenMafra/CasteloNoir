<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> CASTELO NOIR LOGIN </title>
  <link rel="stylesheet" href="../css/formata-login.css">
  <link rel="shortcut icon" type="imagex/png" href="../../design/icon-preto2.ico">
</head> 

<header>
<div class="logo">
        <img src="../../design/icon.png" alt="Castelo Noir Logo">
        <span>CASTELO NOIR</span>
    </div>
</header>

<body> 
    
    <form action="formulario-login.php" method="post">
        <fieldset>
            <legend> Login </legend>

            <label class="alinha"> Login: </label>
            <input type="text" name="login" autofocus> <br>

            <label class="alinha"> Senha: </label>
            <input type="password" name="senha"> <br><br>

            <button name="logar"> Fazer login </button>
        </fieldset>
    </form> 

<?php
//includes primárias========================================
  require "../includes/zdados-conexao.inc.php";
  require "../includes/zconectar.inc.php";
  require "../includes/zcriar-banco.inc.php";
  require "../includes/zabrir-banco.inc.php";
  require "../includes/zdefinir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

//cadastro de médico=======================================
  if(isset($_POST['logar']))
  {
    require "../includes/testar-login.inc.php";
  }
 

  require "../includes/zdesconectar.inc.php";
 ?>

</body> 
</html> 