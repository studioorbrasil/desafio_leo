<?php

  switch ($tela) {
    case 'login':
            incluirPagina('login',null,'views/');
          break;
    case 'cadastrar':
            incluirPagina("addusuario",$dados);
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
            if(count($result)>0){//maior que zero quando login bem sucedido

                foreach ($result as $key => $dadosSession) {
                    $dadosLogin[$key] = $dadosSession;
                }

                $sessao->setValor('idu', $dadosLogin["idu"]);
                $sessao->setValor('nome', $dadosLogin["nome"]);
                $sessao->setValor('email', $dadosLogin["email"]);
                $sessao->setValor('senha', $dadosLogin["senha"]);
      
                $usuarios->atualizar(array(
                    "acesso"=>date('d/m/Y')." ".date('H:i:s')
                ),'id='.$dadosLogin["idu"]);
                if($sessao->getValor('nome')!=null){

                  header("Location:?m=login&t=home");

                }
            }else{//login mal sucedido
                    header("Location:?m=login&t=login&fail=1&bloq=0");
            }
        break;
        case 'home':
                incluirPagina('home',null,'views/');
              break;

  }



 ?>
