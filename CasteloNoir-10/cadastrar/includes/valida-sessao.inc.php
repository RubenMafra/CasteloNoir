<?php
session_start();
if(!isset($_SESSION['conectado']) OR $_SESSION['conectado'] !=true)
{
    exit("<p> Caro usuário, este acesso é inválido.<br> Efetue o cadastro ou o login em nossa aplicação pelo link abaixo:<br><a href='home.php'> Página home </a></p>");
}