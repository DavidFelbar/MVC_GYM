<?php

class Clanovi {

    private $db;
    private $Clan = array();
    private $clanovi;

    public function __construct() {
        $this->db = DB::connect();
    }

    public function dohvatiClanove() {
        $sql = "SELECT idClana,usernameClana,passwordClana,imeClana,prezimeClana,idProg,idClan,dolasci,idKor FROM clanovi";
        $r = $this->db->query($sql);
        while ($row = $r->fetch_assoc()) {
            $cl = new Clan();
            $cl->GetIdClana($row['idClana']);
            $cl->GetUsernameClana($row['usernameClana']);
            $cl->GetPasswordClana($row['passwordClana']);
            $cl->GetClanIme($row['imeClana']);
            $cl->GetClanPrezime($row['prezimeClana']);
            $cl->GetIdProg($row['idProg']);
            $cl->GetIdClanarine($row['idClan']);
            $cl->GetClanDolasci($row['dolasci']);
            $cl->GetIdKor($row['idKor']);
            $this->Clan[] = $cl;
        }

        return $this->Clan;
    }
    public function izmjeniClanove($clanovi){
                $id=$clanovi->GetIdClana();
                $pid=$clanovi->GetIdProg();
		$sql = "UPDATE clanovi SET idProg='$pid' where idClana=$id";
		$this->db->query($sql);
    }
    public function brisiClanove($idClana) {
        $sql = "DELETE FROM clanovi WHERE id=$idClana LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanova($usernameClana,$passwordClana,$imeZap,$prezimeZap,$idProg,$idClanarine,$dolasci,$idKor) {
        $sql = "INSERT INTO clanovi(usernameClana,passwordClana,imeClana,prezimeClana,idProg,idClan,dolasci,idKor) VALUES ($usernameClana,$passwordClana,$imeClana,$prezimeClana,$idProg,$idClan',$dolasci,$idKor)";
        $this->db->query($sql);
    }

}
?>
