<?php

header('Content-type: text/html; charset=utf-8');
#*****************************************
#Programa: funções da aplicação 
#Autor: Marcos Pinheiro
#Para: desafio_leo
#*****************************************
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


?>