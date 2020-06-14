<?php
require_once ('./model/Admin.php');

class Zaposlenici {

    private $db;
    private $zaposlenik = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiPrograme() {
        $sql = "SELECT idZap,imeZap,prezimeZap,idKor,idProg FROM zaposlenici";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $z = new Zaposlenik();
            $z->GetZapId($row['idZap']);
            $z->GetZapIme($row['imeZap']);
            $z->GetZapPrezime($row['prezimeZap']);
            $z->GetIdKor($row['idKor']);
            $z->GetIdProg($row['idProg']);
            $this->clanarina[] = $z;
        }

        return $this->zaposlenik;
    }

    public function brisi($id) {
        $sql = "DELETE FROM clanarina WHERE id=$id LIMIT 1";
        $this->db->query($sql);
    }

    public function unos($naziv,$opisProg,$tipProg,$ocjena) {
        $sql = "INSERT INTO programi(nazivProg,opisProg,tipProg,ocjena) VALUES ('$naziv,$opisProg,$tipProg,$ocjena')";
        $this->db->query($sql);
    }

}