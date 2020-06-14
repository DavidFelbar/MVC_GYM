<?php

class Registracija {
    
    private $db;
    private $Registracija=array();
    
    public function __construct() {
        $this->db = DB::connect();
    }
    
    public function registrirajClana($usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister,$idKor=1) {
        $sql = "INSERT INTO clanovi(idClana,usernameClana,passwordClana,imeClana,prezimeClana,idKor) VALUES ('$usernameRegister,$passwordRegister,$imeClana,$imeRegister,$prezimeRegister,$idKor)";
        $this->db->query($sql);
    }
}
