<?php
$nome  = $conexao->escape_string(trim($_POST["nome"]));
$data = $conexao->escape_string(trim($_POST["data_aniver"]));
$email = $conexao->escape_string(trim($_POST["email"]));

$sql = "INSERT $nomeDaTabela VALUES(
               null,
              '$nome',
              '$data',
              '$email')";

$conexao->query($sql) or exit($conexao->error);

//neste ponto da aplicação, vamos criar uma variável de sessão para controlar o acesso do usuário à páginas protegida
/* session_start();
   $_SESSION['conectado'] = true; */

//agora que o cadastro foi efetuado com sucesso, eviamos o usuário, automaticamente, para a primeira página de acesso restrito
header("location: ../../inicio/inicio.php");