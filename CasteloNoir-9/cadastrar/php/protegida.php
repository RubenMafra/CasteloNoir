<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> CASTELO NOIR </title>
  <link rel="stylesheet" href="../css/formata-login.css">
  <link rel="shortcut icon" type="imagex/png" href="../../design/icon-preto2.ico">
</head> 

<body> 
  <?php
  //lembre-se de chamar essa include em toda página protegida da sua aplicação. Se você não fizer isso, o usuário poe acessar diretamente este conteúdo restrito, sem passar pelos formulários de cadastro ou login. Ele consegue este acesso digitando o caminho completo da página restrita na URL do navegador
    require "../includes/valida-sessao.inc.php";
  ?>

    <h1> Cadastro realizado com sucesso!</h1>

    <p> Caro usuário, bem-vindo à nossa página de conteúdo restrito. Aqui você tem acesso ao conteúdo privativo de nossa aplicação, disponível somente ao administrador do sistema.</p><br><br> 

    <form action="../../Projeto-adega/inicio.php" method="post">
      <fieldset>
        <legend> Desconectar </legend>

        <button> Voltar para o site </button>
      </fieldset>
    </form>  
</body> 
</html> 
