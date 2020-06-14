<?php

class Admin {

    private $idZap;
    private $imeZap;
    private $prezimeZap;
    private $idKor;
    private $idProg;

    public function __construct($idZap = false) {
        if ($idZap) {
            $db = DB::connect();
            $sql = "SELECT * FROM zaposlenici WHERE id = $idZap LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idZap = $row['idZap'];
            $this->imeZap = $row['imeZap'];
            $this->prezimeZap = $row['prezimeZap'];
            $this->idKor = $row['idKor'];
            $this->idProg = $row['idProg'];
        }
    }

    public function GetZapId() {
        return $this->idZap;
    }

    public function GetZapIme() {
        return $this->imeZap;
    }

    public function GetZapPrezime() {
        return $this->prezimeZap;
    }

    public function GetIdKor() {
        return $this->idKor;
    }

    public function GetIdProg() {
        return $this->idProg;
    }

    public function SetZapId($idZap) {
        $this->idZap = $idZap;
    }

    public function SetZapIme($imeZap) {
        $this->imeZap = $imeZap;
    }

    public function SetZapPrezime($prezimeZap) {
        $this->prezimeZap = $prezimeZap;
    }

    public function SetIdKor($idKor) {
        $this->idKor = $idKor;
    }

    public function SetIdProg($idProg) {
        $this->idProg = $idProg;
    }

}
