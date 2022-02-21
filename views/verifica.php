<?php
require_once "funcoes.php";
if($sessao->getValor('nome')==""){
    header("Location:?m=login&t=login");
}

 ?>
