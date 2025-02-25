<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> CASTELO NOIR </title> 
  
  <link href="'https://fonts.googleapis.com/css2?family=Lato&display=swap'" rel="stylesheet">
  <link rel="stylesheet" href="../css/inicio.css">
  <link rel="stylesheet" href="../css/slider.css">
  <link rel="stylesheet" href="../css/maior-idade.css">
  <link rel="stylesheet" href="../css/descricao.css">
  <link rel="shortcut icon" type="imagex/png" href="../design/icon-preto2.ico">
</head>
<body>

<?php include('../modal/maior-idade.php'); ?>
<div id="main-content" style="display:none;">

<header>
    <div class="logo">
       <a href="#"> <img src="../design/icon.png" alt="Castelo Noir Logo"> </a>
        <span>CASTELO NOIR</span>
    </div>
    <nav>
        <ul>
            <li>
                <a>SELEÇÕES</a>
                <ul class="dropdown">
                    <li><a href="#uruguai">Uruguai</a></li>
                    <li><a href="#portugal">Portugal</a></li>
                    <li><a href="#nacional">Nacional</a></li>
                </ul>
            </li>
                <li><a href="../cadastrar/php/formulario-cadastro.php" class="register" target=”_blank”>SALE</a></li> 
         <!--   <li><a href="#">VISITA</a></li> -->
            <li><a href="#descricao">QUEM SOMOS</a></li>
        </ul>
    </nav>
    <div class="auth-buttons">
    <!--    <a href="../cadastrar/php/formulario-login.php" class="login" target=”_blank” rel="noreferrer noopener">LOGIN</a>  -->
        <a href="../cadastrar/php/formulario-cadastro.php" class="register" target=”_blank” rel="noreferrer noopener">CADASTRE-SE</a> 
    </div>
</header>

<main>
        <div class="body" >
            <h2>ADEGAS CASTELO NOIR</h2>
            <h1>INSPIRANDO <br> MOMENTOS DE <br><strong>ÊXTASE</strong> </h1>
            <p>est. 1965</p>
        </div>
</main>

<section id="uruguai">
    <?php include('../produtos/ur.html'); ?>
</section>

<section id="portugal">
    <?php include('../produtos/pt.html'); ?>
</section>

<section id="nacional">
    <?php include('../produtos/br.html'); ?>
</section>

<section id="descricao">
    <?php include('../inicio/descricao.html'); ?>
</section>
</div>

<script src="../js/slider.js"></script>
<script src="../js/maior-idade.js"></script>
<script src="../js/scroll.js"></script>
    

</body>
</html> 