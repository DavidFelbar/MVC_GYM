<?php
   require_once './klase/Route.php';
   require_once './routes/Routes.php';
    function moj_autoloader($class_name){
        require_once 'klase/'.$class_name.'.php';
    }
    spl_autoload_register('moj_autoloader');