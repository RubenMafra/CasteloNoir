<?php

//criando tabela adm
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
            id INT AUTO_INCREMENT PRIMARY KEY, 
            nome VARCHAR(300) NOT NULL,
            data_aniver DATE NOT NULL,
            email VARCHAR(100) NOT NULL)";

            //NOTAR O COMPRIMETO VAARCHAR NO CAMPO DA SENHA, NUNCA DEVE SER INFERIOR A 128 CARACTERES, JÁ QUE A SENHA SERÁ ARMAZENADA NESSE CAMPO DE FORMA CRIPTOGRAFADA

$conexao->query($sql) or exit($conexao->error);

