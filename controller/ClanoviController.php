<?php
require_once ('./model/Clanovi.php');

class Clanovi {

    private $db;
    private $Clan = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiZaposlenike() {
        $sql = "SELECT idClana,imeClana,prezimeClana,idProg,idClan FROM clanovi";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $cl = new Clan();
            $cl->GetIdClana($row['idClana']);
            $cl->GetClanIme($row['imeClana']);
            $cl>GetClanPrezime($row['prezimeClana']);
            $cl->GetIdProg($row['idProg']);
            $cl->GetIdClanarine($row['idClan']);
            $cl->GetClanDolasci($row['dolasci']);
            $cl->GetIdKor($row['idKor']);
            $this->clanarina[] = $cl;
        }

        return $this->zaposlenik;
    }

    public function brisiZaposlenike($idZap) {
        $sql = "DELETE FROM zaposlenici WHERE id=$idZap LIMIT 1";
        $this->db->query($sql);
    }

    public function unosZaposlenika($idZap,$imeZap,$prezimeZap,$idKor,$idProg) {
        $sql = "INSERT INTO zaposlenici(idZap,imeZap,prezimeZap,idKor,idProg) VALUES ('$idZap,$imeZap,$prezimeZap,$idKor,$idProg')";
        $this->db->query($sql);
    }

}
?>
