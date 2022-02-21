<?php

  switch ($tela) {
    case 'login':
            incluirPagina('login',null,'views/');
            break;
        case 'cadastrar':
            incluirPagina("addusuario",$dados);
        break;



  }



 ?>
