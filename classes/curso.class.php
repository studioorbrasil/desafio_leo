<?php

class curso extends CRUD{
 function __construct(){
        $this->setTabela('cursos');
        parent::__construct();
    }

}
 ?>
