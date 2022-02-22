<?php

    switch ($tela) {
        case 'inserir':
            $usuarios = new usuarios();

            break;
        case 'inCurso':
            $cursos = new curso();

            break;

        case 'checkmodal':
        // if(isset($_GET['usu']) && $_GET['usu'] != NULL){
            $sessao = new sessao();
            $usuarios = new usuarios();
            $idu = $sessao->getValor('idu');
            //echo $txtSenha."-".$sessao->getValor('idu');
            $usuarios->atualizar(array(
                "modal"=>1
            ),'id='.$idu);
        // }
        break;
    }

 ?>
