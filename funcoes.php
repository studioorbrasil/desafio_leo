<?php

header('Content-type: text/html; charset=utf-8');
#*****************************************
#Programa: funções da aplicação
#Autor: Marcos Pinheiro
#Para: desafio_leo
#*****************************************
require 'config.php';
require_once "classes/autoload.php";

function loadCSS($arquivo,$media="screen"){//carrega os css
    $css = CSSPATH.$arquivo.'.css';
    if (file_exists(CSSPATH.$arquivo.'.css')) {
        echo '<link rel="stylesheet" type="text/css" href="'.$css.'" media="'.$media.'"/>';
    }else{
        die("Arquivo css não encontrado em <b>".@$css."</b>");
    }
}

function loadJS($arquivo){
    $js = JSPATH.$arquivo.'.js';
    if (file_exists(JSPATH.$arquivo.'.js')) {//carrega o javascript
        echo '<script src="'.$js.'"></script>';
    }else{
        die("Arquivo js não encontrado em <b>".@$js."</b>");
    }
}

function incluirPagina($pagina, $vars = NULL, $pasta='views/'){
    $pagina = $pasta.$pagina.'.php';
    //echo $pagina;
    if(file_exists($pagina)){
        if(is_array($vars) && count($vars) > 0):
            extract($vars);
        endif;
        return require_once $pagina;
        exit();
    }else{
        echo "Página não encontrada em <b>".$pagina."</b>";
    }
}

function loadModulo($modulo,$tela){//carrega os modulos
    if(@file_exists(MODULOSPATH.$modulo.'Modulo.php')){
        require_once MODULOSPATH.$modulo."Modulo.php";
    }else{
        die('Modulo <b>'.$modulo.'Modulo.php</b> inexistente');
    }
}
//filtro sql injection básico
function filtroSql($s) {
$s = addslashes($s);
$s = htmlspecialchars($s);
$s = str_replace("SELECT","",$s);
$s = str_replace("FROM","",$s);
$s = str_replace("WHERE","",$s);
$s = str_replace("INSERT","",$s);
$s = str_replace("UPDATE","",$s);
$s = str_replace("DELETE","",$s);
$s = str_replace("DROP","",$s);
$s = str_replace("DATABASE","",$s);
$s = str_replace("USE","",$s);
$s = str_replace("OR 1=1","",$s);
$s = str_replace("--","",$s);
$s = str_replace("'","",$s);
return $s;
}

?>
