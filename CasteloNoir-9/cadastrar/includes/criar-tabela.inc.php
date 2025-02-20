<?php

//criando tabela adm
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nome VARCHAR(300),
            email VARCHAR(100),
            login VARCHAR(100) UNIQUE,
            senha VARCHAR(130)) ENGINE=innoDB";

            //NOTAR O COMPRIMETO VAARCHAR NO CAMPO DA SENHA, NUNCA DEVE SER INFERIOR A 128 CARACTERES, JÁ QUE A SENHA SERÁ ARMAZENADA NESSE CAMPO DE FORMA CRIPTOGRAFADA

$conexao->query($sql) or exit($conexao->error);

