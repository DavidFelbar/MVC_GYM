<?php

class Zaposlenici {

    private $db;
    private $zaposlenik = array();
   

    public function __construct() {
        $this->db = DB::connect();
    }

 
    public function dohvatiZaposlenike() {
        $sql = "SELECT idZap,usernameZap,passwordZap,imeZap,prezimeZap,idKor FROM zaposlenici";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $z = new Zaposlenik();
            $z->SetZapId($row['idZap']);
            $z->SetZapIme($row['imeZap']);
            $z->SetZapPrezime($row['prezimeZap']);
            $z->SetZapUsername($row['usernameZap']);
            $z->SetZapPassword($row['passwordZap']);
            $z->SetIdKor($row['idKor']);
     
            $this->zaposlenik[] = $z;
        }

        return $this->zaposlenik;
    }

    public function brisiZaposlenike($idZap) {
        $sql = "DELETE FROM zaposlenici WHERE idZap=$idZap LIMIT 1";
        $this->db->query($sql);
    }

    public function unosZaposlenika( $usernameZap,$passwordZap,$imeZap, $prezimeZap, $idKor) {
        $sql = "INSERT INTO zaposlenici(usernameZap,passwordZap,imeZap,prezimeZap,idKor) VALUES ('$usernameZap','$passwordZap','$imeZap','$prezimeZap',$idKor)";
        $this->db->query($sql);
    }

}
