<?php

class Zaposlenici {

    private $db;
    private $zaposlenik = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiZaposlenika($idProg) {
        $sql = "SELECT  zaposlenici.imeZap,zaposlenici.prezimeZap,zaposlenici.idZap from zaposlenici inner join programi on programi.idTren=zaposlenici.idZap WHERE program.idProg=$idProg";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {

            $z = new Zaposlenik();
            $z->SetZapId($row['idZap']);
            $z->SetZapIme($row['imeZap']);
            $z->SetZapPrezime($row['prezimeZap']);
           
            $this->zaposlenik[] = $z;
            
        }
        
        return $this->zaposlenik;
    }

    public function dohvatiZaposlenike() {
        $sql = "SELECT idZap,imeZap,prezimeZap,idKor FROM zaposlenici";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $z = new Zaposlenik();
            $z->GetZapId($row['idZap']);
            $z->GetZapIme($row['imeZap']);
            $z->GetZapPrezime($row['prezimeZap']);
            $z->GetIdKor($row['idKor']);
     
            $this->zaposlenik[] = $z;
        }

        return $this->zaposlenik;
    }

    public function brisiZaposlenike($idZap) {
        $sql = "DELETE FROM zaposlenici WHERE id=$idZap LIMIT 1";
        $this->db->query($sql);
    }

    public function unosZaposlenika($idZap, $imeZap, $prezimeZap, $idKor, $idProg) {
        $sql = "INSERT INTO zaposlenici(idZap,imeZap,prezimeZap,idKor,idProg) VALUES ('$idZap,$imeZap,$prezimeZap,$idKor,$idProg')";
        $this->db->query($sql);
    }

}
