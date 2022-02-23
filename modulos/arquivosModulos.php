<?php
  switch ($tela) {
    case 'processaImg':
        incluirPagina('processaImg',null,'views/');
        break;
  }
  default:
      echo "Arquivo não encontrado";
      break;
?>
