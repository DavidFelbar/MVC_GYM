<?php

class Zaposlenik {

    private $idZap;
    private $imeZap;
    private $prezimeZap;
    private $idKor;
    private $idProg;
    private $usernameZap;
    private $passwordZap;

    public function __construct($idZap = false) {
        if ($idZap) {
            $db = DB::connect();
            $sql = "SELECT * FROM zaposlenici WHERE idZap = $idZap LIMIT 1";
            $r = $db->query($sql);
            $row = $r->fetch_assoc();
            // POSTAVI VRIJEDNOSTI ATRIBUTA
            $this->idZap = $row['idZap'];
            $this->imeZap = $row['imeZap'];
            $this->prezimeZap = $row['prezimeZap'];
            $this->idKor = $row['idKor'];
             $this->usernameZap = $row['usernameZap'];
            $this->passwordZap = $row['passwordZap'];
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

    public function GetZapUsername() {
        return $this->usernameZap;
    }

    public function GetZapPassword() {
        return $this->passwordZap;
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
        public function SetZapUsername($usernameZap) {
        $this->usernameZap = $usernameZap;
    }

    public function SetZapPassword($passwordZap) {
        $this->passwordZap = $passwordZap;
    }

}
