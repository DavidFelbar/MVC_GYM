<?php
    require_once './routes/Routes.php';
    function autoloader($class_name){
        require_once 'klase/'.$class_name.'.php';
    }
    spl_autoload_register('autoloader');