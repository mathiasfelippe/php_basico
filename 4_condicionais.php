<?php

    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        //Recebe a senha
        $senha = $_POST['senha'];

        //verifica se a senha é:123
        if ($senha == '123'){
            //Se usuario digitar a senha correta (123)
            // ele será desviado para página 4b_bem_vindo.php
            header ("Location: 4b_bem_vindo.php");
            exit ();
        } else {
            //se o usuario digitar a senha incorreta
            //ele verá a mensagem de erro
            $erro = 'Senha incorreta. Tente novamente!';
        }
    }