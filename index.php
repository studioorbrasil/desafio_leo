<?php

require 'funcoes.php';
date_default_timezone_set('America/Sao_Paulo');
$modulo = isset($_GET['m']) && $_GET['m'] != "" ? $_GET['m'] : "login";
$tela = isset($_GET['t']) && $_GET['t'] != "" ? $_GET['t'] : "login";

loadModulo($modulo,$tela);
?>
