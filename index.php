<?php
   require_once './klase/Route.php';
   require_once './routes/Routes.php';
    function moj_autoloader($class_name){
        if(file_exists(('klase/'.$class_name.'.php')))
        {
            require_once 'klase/'.$class_name.'.php';
        }
        
        else if(file_exists('controller/'.$class_name.'.php'))
        {
            require_once 'controller/'.$class_name.'.php';
        }
    }
    spl_autoload_register('moj_autoloader');