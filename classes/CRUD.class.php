<?php

class CRUD {
    public $servidor = SERVIDOR;
    public $usuario = NOMEUSERBD;
    public $senha = USERPASS;
    public $banco = NOMEBD;
    public $connecta = NULL;
    private $tabela;
    public $linhas = -1;

    public function getTabela(){
        return $this->tabela;
    }

    public function setTabela($tabela){
        $this ->tabela = $tabela;
    }

    public function __construct(){
        $this->conexao();
    }
    public function conexao(){
        $this->connecta= NEW PDO('mysql:host=localhost;dbname=desafio', NOMEUSERBD, USERPASS,  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->connecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

}

?>