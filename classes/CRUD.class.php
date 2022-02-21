<?php
#********************************************************
#Programa: Classe CRUD para operações no o banco de dados
#Autor: Marcos Pinheiro
#Para: desafio_Leo
#********************************************************
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

    public function inserir($dados = array()){
        $colunas = implode(",",array_keys($dados));
        $valores = "'".implode("', '", $dados)."'";
        $sqlInserir = "INSERT INTO `{$this->getTabela()}` ({$colunas}) VALUES ({$valores})";
        $inserir = $this->connecta->query($sqlInserir);
        $this->linhas = $inserir->rowCount();
        if ($inserir) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function atualizar($dados= array(),$where){

        foreach ($dados as $colunas => $valores) {
            $campos[] = "$colunas = '$valores'";
        }
        $campos = implode(', ', $campos);
        $sqlAtualizar = "UPDATE `{$this->getTabela()}` SET $campos  WHERE {$where}";
        // echo $sqlAtualizar;
        // exit();
        $atualizar = $this->connecta->query($sqlAtualizar);
        $this->linhas = $atualizar->rowCount();
        if($atualizar){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function deletar($where){
        $sqlDeletar = "DELETE FROM `{$this->getTabela()}` WHERE {$where}";
        $deletar = $this->connecta->query($sqlDeletar);
        $this->linhas = $deletar->rowCount();
    }

    public function listar($campos = null, $where=null){

        $campos = $campos != "" ? $campos : "*";
        $sqlSelecionar = "SELECT $campos FROM `{$this->getTabela()}` {$where}";
        // echo $sqlSelecionar;
        // exit();
        $selecionar = $this->connecta->query($sqlSelecionar);
        $selecionar->setFetchMode(PDO::FETCH_ASSOC);
        $this->linhas = $selecionar->rowCount();

        return $selecionar->fetchAll();

    }

}

?>
