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
    public function dolazakClana($dolazak,$idClana){
                $cc=new Clan();
		$id = $cc->GetIdClana();
		$ime = $cc->GetClanIme();
                $prezime = $cc->GetClanIme();
                $idProg = $cc->GetIdProg();
                $dolasci=$dolazak-1;
		$sql = "UPDATE clanovi SET dolasci=$dolasci WHERE idClana=$idClana";
		$this->db->query($sql);
    }
    public function resetClana($idClanarine,$idClana){
        $cc=new Clan();
        $id = $cc->GetIdClana();
        $ime = $cc->GetClanIme();
        $prezime = $cc->GetClanIme();
        $upit1="SELECT idClan,maxDolasci from clanarina where idClan=$idClanarine";
        $rez1=$this->db->query($upit1);
        $r1=$rez1->fetch_assoc();
        $noviDolasci=$r1['maxDolasci'];
        $upit2="UPDATE clanovi SET dolasci=$noviDolasci WHERE idClana=$idClana";
        $this->db->query($upit2);
    }
    public function izmjeniClanove($clan){
		$id = $clan->GetIdClana();
		$ime = $clan->GetClanIme();
                $prezime = $clan->GetClanIme();
                //$dolasci=$clan->GetDolasci();
                $idProg = $clan->GetIdProg();
		$sql = "UPDATE clanovi SET idProg=$idProg WHERE idClana=$id";
		$this->db->query($sql);
	}
    public function brisiClana($idClana) {
        $sql = "DELETE FROM clanovi WHERE idClana=$idClana LIMIT 1";
        $this->db->query($sql);
    }

    public function unosClanova($usernameClana,$passwordClana,$imeClana,$prezimeClana,$idClanarine,$dolasci) {
        $sql = "INSERT INTO clanovi(usernameClana,passwordClana,imeClana,prezimeClana,idClan,dolasci) VALUES ('$usernameClana','$passwordClana','$imeClana','$prezimeClana',$idClanarine,$dolasci)";
        $this->db->query($sql);
    }

}
?>
