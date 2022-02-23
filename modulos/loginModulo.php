<?php
  $dados="";
  switch ($tela) {
    case 'login':
            incluirPagina('login',null,'views/');
          break;
    case 'incurso':
            incluirPagina("incurso",$dados);
        break;
    case 'edit':
            incluirPagina("editar",$dados);
        break;
    case 'entrar':
            $sessao = new sessao();
            $usuarios = new usuarios();
            $login = new login();
            $txtEmail = filtroSql($_POST["txtEmail"]);
            $txtSenha = filtroSql($_POST["txtSenha"]);


            $login->setEmail($txtEmail);
            $login->setSenha($txtSenha);

            $result = $login->logar();

            if(count($result)>0){// login bem sucedido

                foreach ($result as $key => $dadosSession) {
                    $dadosLogin[$key] = $dadosSession;
                }

                $sessao->setValor('idu', $dadosLogin["idu"]);
                $sessao->setValor('nome', $dadosLogin["nome"]);
                $sessao->setValor('email', $dadosLogin["email"]);
                $sessao->setValor('senha', $dadosLogin["senha"]);
                $sessao->setValor('modal', $dadosLogin["modal"]);

                $usuarios->atualizar(array(
                    "acesso"=>date('d/m/Y')." ".date('H:i:s')
                ),'id='.$dadosLogin["idu"]);
                if($sessao->getValor('nome')!=null){

                  header("Location:?m=login&t=home");

                }
            }else{//login mal sucedido
                    header("Location:?m=login&t=login&fail=1");
            }
        break;
        case 'home':
                incluirPagina('home',null,'views/');
              break;

  }



 ?>
