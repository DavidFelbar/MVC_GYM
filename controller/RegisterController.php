<?php

include '../model/Clanovi.php';
require_once '../model/Register.php';

class Registracija {

    private $db;
    private $registracijaa = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function registrirajClana() {
        $check = "SELECT * from clanovi";
        $ch = $this->db->query($check);
        $reg = new Register();
        echo 'Pokušaj registracije...';
        while ($row = $ch->fetch_assoc()) {

            $cu = new Clan();
            $cu->GetUsernameClana($row['usernameClana']);
            $this->registracija[] = $cu;
        }
        $usernameRegister = $reg->GetUsernameReg();
        $passwordRegister = $reg->GetPasswordReg();
        $imeRegister = $reg->GetImeReg();
        $prezimeRegister = $reg->GetPrezimeReg();
        $idKor = 1;
        var_dump($this->registracija);
        echo $usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister;

        if (!in_array($usernameRegister, $this->registracija)) {
            $insert = "INSERT INTO clanovi(usernameClana,passwordClana,imeClana,prezimeClana,idKor) VALUES ('$usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister,$idKor)";
            $this->db->query($insert);
            echo 'tu';
        } else {
            echo 'Korisničko ime već postoji, pokušajte sa drugim!';
            echo '<a href=' . './view/registerClanovi.php' . '>' . 'POVRATAK NA REGISTRACIJU';
        }
    }

}
