<?php

require 'funcoes.php';

$modulo = isset($_GET['m']) && $_GET['m'] != "" ? $_GET['m'] : "login";
$tela = isset($_GET['t']) && $_GET['t'] != "" ? $_GET['t'] : "login";

loadModulo($modulo,$tela);
?>