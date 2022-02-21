<?php

class login extends CRUD{
  public $email;
  public $senha;
    function __construct(){
        parent::__construct();
        $this->setTabela('usuarios');
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return base64_encode($this->senha);
    }
    public function setEmail($email){
        return $this->email = $email;
    }
    public function setSenha($senha){
        return $this->senha = $senha;
    }
    public function logar(){

            $get_login = $this->ler(NULL,"WHERE email = '{$this->getEmail()}' AND senha = '{$this->getSenha()}' AND bloq = 1");

              $result=[];
            	foreach ($get_login as $usuario) {
                    $result["idu"] = $usuario->id;
                    $result["nome"] = $usuario->nome;
                    $result["email"] =  $usuario->email;
                    $result["senha"] =  $usuario->senha;
                    $result["lin"] = $get_login->linhas;
                }
                return $result;
            	}


}
 ?>
