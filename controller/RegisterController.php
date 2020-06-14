<?php

class Registracija {
    
    private $db;
    private $Registracija=array();
    private $clanovi=array();
    public function __construct() {
        $this->db = DB::connect();
    }
    
    public  function registrirajClana($usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister,$idKor=1) {
        $check="SELECT usernameClana from clanovi";
        $ch = $this->db->query($check);
        while ($row = $ch->fetch_assoc()) {
            $cu = new Clan();
            $cu->GetUsernameClana($row['usernameClana']);
            $this->clanovi[] = $cu;
        }
        if(!in_array($usernameRegister, $clanovi)){
        $sql = "INSERT INTO clanovi(idClana,usernameClana,passwordClana,imeClana,prezimeClana,idKor) VALUES ('$usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister,$idKor)";
        $this->db->query($sql);
        }else{
            echo 'Korisničko ime već postoji, pokušajte sa drugim!';
            echo '<a href='.'./view/registerClanovi.php'.'>'.'POVRATAK NA REGISTRACIJU';
        }
    }
}
