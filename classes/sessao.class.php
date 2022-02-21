<?php

class sessao {
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }
    }
    public function setValor($indice, $valor){
        $_SESSION[$indice] = $valor;
    }

    public function getValor($indice){
        return $_SESSION[$indice];
    }
    public function destruir(){
        $_SESSION = array();
        session_destroy();
    }

}


 ?>
