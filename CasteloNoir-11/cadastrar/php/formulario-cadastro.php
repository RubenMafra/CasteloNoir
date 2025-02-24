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
        <a href="../../inicio/inicio.php"> <img src="../../design/icon.png" alt="Castelo Noir Logo"> </a>
        <span>CASTELO NOIR</span>
    </div>
</header>

<body> 
    
    <form action="formulario-cadastro.php" method="post">
        <fieldset>
            <legend> Cadastro </legend>

            <label class="alinha"> Nome completo: </label>
            <input type="name" name="nome" autofocus><br>

            <label class="alinha"> Data de nascimento: </label>
            <input type="date" name="data_aniver" autofocus><br>

            <label class="alinha"> E-mail: </label>
            <input type="email" name="email"> <br>

            <button name="cadastrar"> Cadastrar </button>
        </fieldset>
    </form> 
 

<?php

  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-utf8.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
  {

    require "../includes/cadastrar-cliente.inc.php";
  }
 
  require "../includes/desconectar.inc.php";
 ?>

</body> 
</html> 