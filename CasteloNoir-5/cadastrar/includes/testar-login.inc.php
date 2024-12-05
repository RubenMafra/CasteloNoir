<?php
$login = $conexao->escape_string(trim($_POST["login"]));
$senha = $conexao->escape_string(trim($_POST["senha"]));

//buscamos, no branco de dados, a senha do usuário já criptografada, usando, como chave de busca, o login
$sql= "SELECT senha FROM $nomeDaTabela WHERE login = '$login'";

$resultado = $conexao->query($sql) or exit ($conexao->error);

//testar se a consulta anterior foi bem sucedida (o login fornecido está correto)
if($conexao->affected_rows == 0)
{
    exit("<p> Credenciais de autenticação <span>incorretas</span>, tente novamente.</p>");
}

//recebendo, do bando de dados, a senha criptografada
$vetor_registro      = $resultado->fetch_array();
$senha_criptografada = $vetor_registro[0];

//conferindo se a senha digitada pelo usuário é igual a senha desde mesmo usuário, criptografada no bando de dados
$validou_senha = password_verify($senha, $senha_criptografada);

//testando se as senhas são iguais
if($validou_senha)
{
    //se o PHP entrar aqui, senha e login estãoo corretos. Direcionamos o usuário para a página restrita e definimos a variável de sessão para true
    session_start();
    $_SESSION['conectado'] = true;
    header("location: protegida.php");
}

else
{
    echo "<p> Credenciais de autenticação <span>incorretas</span>.<br> Tente novamente ou use o link a seguir para retornar à <span>pagina home</span>.<br><br> <a href='home.php'> Retornar à página home </a></p>";
}