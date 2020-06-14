<?php

class Clan {

    private $idClana;
    private $usernameClana;
    private $passwordClana;
    private $imeClana;
    private $prezimeClana;
    private $idProg;
    private $idClanarine;
    private $dolasci;
    private $idKor;

    public function __construct($idClana = false) {
        if ($idClana) {
            $db = DB::connect();
            $sql = "SELECT * FROM clanovi WHERE id = $id LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idClana = $row['idClan'];
            $this->usernameClana=$row['usernameClana'];
            $this->passwordClana=$row['passwordClana'];
            $this->imeClana = $row['imeClana'];
            $this->prezimeClana = $row['prezimeClana'];
            $this->idProg = $row['idProg'];
            $this->idClanarine = $row['idClanarine'];
            $this->dolasci = $row['dolasci'];
            $this->idKor = $row['idKor'];
        }
    }

    public function GetIdClana() {
        return $this->idClana;
    }
    
    public function GetUsernameClana() {
        return $this->usernameClana;
    }
    
    public function GetPasswordClana() {
        return $this->passwordClana;
    }

    public function GetClanIme() {
        return $this->imeClana;
    }
    public function GetClanPrezime() {
        return $this->prezimeClana;
    }

    public function GetIdProg() {
        return $this->idProg;
    }
    public function GetIdClanarine() {
        return $this->idClanarine;
    }

    public function GetClanDolasci() {
        return $this->dolasci;
    }
    public function GetIdKor() {
        return $this->idKor;
    }

    public function SetIdClana($idClana) {
        $this->idClana = $idClana;
    }
    public function SetUsernameClana($usernameClana) {
       $this->usernameClana=$usernameClana;
    }
    
    public function SetPasswordClana($passwordClana) {
       $this->passwordClana=$passwordClana;
    }

    public function SetClanIme($imeClana) {
        $this->imeClana = $imeClana;
    }

    public function SetClanPrezime($prezimeClana) {
        $this->prezimeClana = $prezimeClana;
    }

    public function SetIdProg($idProg) {
        $this->idProg = $idProg;
    }
    public function SetIdClanarine($idClanarine) {
        $this->idClanarine=$idClanarine;
    }
    public function SetClanDolasci($dolasci) {
        $this->dolasci = $dolasci;
    }

    public function SetIdKor($idKor) {
        $this->idKor = $idKor;
    }
   
}
 include './view/indexClanovi.php';