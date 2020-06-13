<?php

class DB{
    
    const host = 'localhost';
    const user = 'root';
    const pass = '';
    const db = 'gym';

    public static function connect() {
        $c = new mysqli(self::host, self::user, self::pass, self::db);
        return $c;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

