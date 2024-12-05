<?php
$nome  = $conexao->escape_string(trim($_POST["nome"]));
$email = $conexao->escape_string(trim($_POST["email"]));
$login = $conexao->escape_string(trim($_POST["login"]));
$senha = $conexao->escape_string(trim($_POST["senha"]));

//criptografia de dados com PHP
$senha = password_hash($senha, PASSWORD_ARGON2I);

/* echo "<p> Senha criptografada = $senha </p>"; */

$sql = "INSERT $nomeDaTabela VALUES(
               null,
              '$nome',
              '$email',
              '$login',
              '$senha')";

$conexao->query($sql) or exit($conexao->error);

//neste ponto da aplicação, vamos criar uma variável de sessão para controlar o acesso do usuário à páginas protegida
session_start();
$_SESSION['conectado'] = true;

//agora que o cadastro foi efetuado com sucesso, eviamos o usuário, automaticamente, para a primeira página de acesso restrito
header("location: protegida.php");