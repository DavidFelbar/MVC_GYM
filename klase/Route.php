<?php

class Route{

    public static $valid_routes = array();

    public static function set($route, $function) {
        self::$valid_routes[] = $route;
        print_r(self::$valid_routes);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

