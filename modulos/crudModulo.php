<?php

    switch ($tela) {
        case 'inCurso':

            $curso = new curso();
            $tit = trim($_POST['titulo']);
            $desc =  trim($_POST['descricao']);
            $img =  $_POST['img'];
            $link =  trim($_POST['link']);
            $curso->inserir(array(
                "titulo"=>$tit,
                "descricao"=>$desc,
                "img"=>$img,
                "linkurl"=>$link
            ));

            header("Location:?m=login&t=home");

            break;

        case 'checkmodal':
            $sessao = new sessao();
            $usuarios = new usuarios();
            $idu = $sessao->getValor('idu');
            $usuarios->atualizar(array(
                "modal"=>1
            ),'id='.$idu);
            break;

            case 'del':
                if(isset($_GET['id']) && $_GET['id'] != NULL){
                    $cursos = new curso();
                    $id= $_GET['id'];
                    $cursos->deletar("id=".$id);
                    if($cursos->linhas > 0){
                        header("Location:?m=login&t=home");
                    }
                  }

                break;
                case 'edit':
                            $cursos = new curso();

                            $id = $_POST["id"];
                            $tit = trim($_POST['titulo']);
                            $desc =  trim($_POST['descricao']);
                            $img =  $_POST['img'];
                            $link =  trim($_POST['link']);

        

                            $cursos->atualizar(array(
                                "titulo"=>"$tit",
                                "descricao"=>"$desc",
                                "img"=>"$img",
                                "linkurl"=>"$link"
                            ),'id='.$id);

                        if($cursos->linhas > 0){
                            header("Location:?m=login&t=home");
                        }

                    break;
    }

 ?>
