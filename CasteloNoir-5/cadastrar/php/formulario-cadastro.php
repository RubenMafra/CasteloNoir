<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> CASTELO NOIR CADASTRO </title>
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
    
    <form action="formulario-cadastro.php" method="post">
        <fieldset>
            <legend> Cadastro </legend>

            <label class="alinha"> Nome completo: </label>
            <input type="name" name="nome" autofocus><br>

            <label class="alinha"> E-mail: </label>
            <input type="email" name="email"> <br>

            <label class="alinha"> Senha: </label>
            <input type="password" name="senha"> <br><br>

            <button name="cadastrar"> Cadastrar </button>
        </fieldset>
    </form> 
 

<?php

  require "../includes/zdados-conexao.inc.php";
  require "../includes/zconectar.inc.php";
  require "../includes/zcriar-banco.inc.php";
  require "../includes/zabrir-banco.inc.php";
  require "../includes/zdefinir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
  {

    require "../includes/cadastrar-adm.inc.php";
  }
 
  require "../includes/zdesconectar.inc.php";
 ?>

</body> 
</html> 