<?php

spl_autoload_register(function($classe){
    $baseClass = dirname(__FILE__);
    $classe = str_replace('..','',$classe);
    require_once $baseClass."/".$classe.'.class.php';
});


?>