<?php

class Clanovi {

    private $db;
    private $Clan = array();
    private $clan;
    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiClanove() {
        $sql = "SELECT idClana,usernameClana,passwordClana,imeClana,prezimeClana,idProg,idClan,dolasci,idKor FROM clanovi";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $cl = new Clan();
            $cl->SetIdClana($row['idClana']);
            $cl->SetUsernameClana($row['usernameClana']);
            $cl->SetPasswordClana($row['passwordClana']);
            $cl->SetClanIme($row['imeClana']);
            $cl->SetClanPrezime($row['prezimeClana']);
            $cl->SetIdProg($row['idProg']);
            $cl->SetIdClanarine($row['idClan']);
            $cl->SetClanDolasci($row['dolasci']);
            $cl->SetIdKor($row['idKor']);
            $this->Clan[] = $cl;
        }

        return $this->Clan;
    }

    public function brisiClanove($idClana) {
        $sql = "DELETE FROM clanovi WHERE id=$idZap LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanova($usernameClana,$passwordClana,$imeClana,$prezimeClana,$idClanarine,$dolasci) {
        $sql = "INSERT INTO clanovi(usernameClana,passwordClana,imeClana,prezimeClana,idClan,dolasci) VALUES ('$usernameClana','$passwordClana','$imeClana','$prezimeClana',$idClan,$dolasci)";
        $this->db->query($sql);
    }

}
?>
