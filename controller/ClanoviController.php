<?php
require_once ('./model/Clanovi.php');

class Clanovi {

    private $db;
    private $Clan = array();

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiClanove() {
        $sql = "SELECT idClana,usernameClana,passwordClana,imeClana,prezimeClana,idProg,idClan FROM clanovi";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $cl = new Clan();
            $cl->GetIdClana($row['idClana']);
            $cl->GetUsernameClana($row['usernameClana']);
            $cl->GetPasswordClana($row['passwordClana']);
            $cl->GetClanIme($row['imeClana']);
            $cl>GetClanPrezime($row['prezimeClana']);
            $cl->GetIdProg($row['idProg']);
            $cl->GetIdClanarine($row['idClan']);
            $cl->GetClanDolasci($row['dolasci']);
            $cl->GetIdKor($row['idKor']);
            $this->clanarina[] = $cl;
        }

        return $this->Clan;
    }

    public function brisiClanove($idZap) {
        $sql = "DELETE FROM clanovi WHERE id=$idZap LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanova($idZap,$usernameClana,$passwordClana,$imeZap,$prezimeZap,$idProg,$idClanarine,$dolasci,$idKor) {
        $sql = "INSERT INTO zaposlenici(idClana,usernameClana,passwordClana,imeClana,prezimeClana,idProg,idClan,dolasci,idKor) VALUES ('$idClana,$usernameClana,$passwordClana,$imeClana,$prezimeClana,$idProg,$idClan',$dolasci,$idKor)";
        $this->db->query($sql);
    }

}
?>
