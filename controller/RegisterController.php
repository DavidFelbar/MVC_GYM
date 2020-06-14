<?php
require_once '../klase/DB.php';
include '../model/Clanovi.php';
require_once '../model/Register.php';

class Registracija {

    private $db;
    public $registracija = array();

    public function __construct() {
         $this->db = DB::connect();
        $reg = new Register();
        /*
          $usernameRegister = $reg->GetUsernameReg();
          $passwordRegister = $reg->GetPasswordReg();
          $imeRegister = $reg->GetImeReg();
          $prezimeRegister = $reg->GetPrezimeReg();
         * */
    }

    public function registrirajClana() {
      
        $check = "SELECT * from clanovi";
        $ch = $this->db->query($check);

        echo 'Pokušaj registracije...';
        while ($row = $ch->fetch_assoc()) {

            $cu = new Clan();
            $cu->GetUsernameClana($row['usernameClana']);
            echo $cu->GetUsernameClana($row['usernameClana']);
            
            $this->registracija[] = $cu;
        }
        $usernameRegister =strval( $_SESSION['usernameRegister']);
        $passwordRegister = strval($_SESSION['passwordRegister']);
        $imeRegister =strval($_SESSION['imeRegister']);
        $prezimeRegister =strval( $_SESSION['prezimeRegister']);
        $idKor = 1;
        var_dump($this->registracija);
        echo $usernameRegister,$passwordRegister,$imeRegister,$prezimeRegister;

        //if (!in_array($usernameRegister, $this->registracija)) {
            $insert = "INSERT INTO clanovi(usernameClana,passwordClana,imeClana,prezimeClana,idKor) VALUES (aaa,bbb,ccc,ddd,1)";
            $this->db->query($insert);
            echo 'tu';
        //} else {
         //   echo 'Korisničko ime već postoji, pokušajte sa drugim!';
          //  echo '<a href=' . './view/registerClanovi.php' . '>' . 'POVRATAK NA REGISTRACIJU';
        //}
    }

}
