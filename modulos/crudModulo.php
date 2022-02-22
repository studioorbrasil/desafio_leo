<?php

    switch ($tela) {
        case 'inCurso':

            $curso = new curso();
            $tit =  $_POST['titulo'];
            $desc =  trim($_POST['descricao']);
            $img =  $_POST['img'];
            $link =  trim($_POST['link']);
            $curso->inserir(array(
                "titulo"=>$tit,
                "descricao"=>$desc,
                "img"=>$img,
                "linkurl"=>$link
            ));

            break;

        case 'checkmodal':
            $sessao = new sessao();
            $usuarios = new usuarios();
            $idu = $sessao->getValor('idu');
            $usuarios->atualizar(array(
                "modal"=>1
            ),'id='.$idu);
            break;
    }

 ?>
